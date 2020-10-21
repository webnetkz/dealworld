(function (_, $) {
    var isCheckoutScriptLoaded,
        validationLoop,
        isPlaceOrderAllowed,
        orderId;

    var methods = {
        /**
         * Changes default 'Submit my order' button ID.
         * Submit button ID must be altered to prevent 'button_already_has_paypal_click_listener' warning.
         *
         * @param {string} buttonId Button ID
         * @returns {string} New button ID
         */
        setSubmitButtonId: function (buttonId) {
            var newButtonId = buttonId + '_' + Date.now();
            var $button = $('#' + buttonId);
            $button.attr('id', newButtonId);

            return newButtonId;
        },

        /**
         * Provides request to place an order.
         *
         * @param {jQuery} $paymentForm
         * @returns {{redirect_on_charge: string, is_ajax: number}}
         */
        getOrderPlacementRequest: function ($paymentForm) {
            var formData = {
                is_ajax: 1
            };
            var fields = $paymentForm.serializeArray();
            for (var i in fields) {
                formData[fields[i].name] = fields[i].value;
            }
            formData.result_ids = null;

            return formData;
        },

        /**
         * Renders payment buttons.
         *
         * @param {Object} params Payment form config
         */
        setupPaymentForm: function (params) {
            params = params || {};
            params.payment_form = params.payment_form || null;
            params.submit_button_id = params.submit_button_id || '';
            params.style = params.style || {};
            params.style.layout = params.style.layout || 'vertical';
            params.style.color = params.style.color || 'gold';
            params.style.height = params.style.height || 40;
            params.style.shape = params.style.shape || 'rect';
            params.style.label = params.style.label || 'pay';
            params.style.tagline = params.style.tagline || false;

            methods.stopValidation();
            methods.createPaymentButtonsContainer(params.submit_button_id);

            paypal.Buttons({
                style: params.style,
                onInit: function (data, actions) {
                    methods.forbidOrderPlacement(actions);
                    methods.startValidation(params.payment_form, actions);
                },
                onClick: function (data, actions) {
                    params.payment_form.ceFormValidator('checkFields', false);
                },
                createOrder: function (data, actions) {
                    var deferredOrder = $.Deferred();

                    orderId = null;

                    $.ceAjax('request', fn_url('checkout.place_order'), {
                        data: methods.getOrderPlacementRequest(params.payment_form),
                        method: 'post',
                        hidden: true,
                        caching: false,
                        callback: function (res) {
                            if (res.error) {
                                deferredOrder.reject(res);
                                return;
                            }
                            if (res.order_id_in_paypal) {
                                orderId = res.order_id;
                                deferredOrder.resolve(res);
                                return;
                            }
                            deferredOrder.reject({error: ''});
                        }
                    });

                    return deferredOrder.promise().then(function (success) {
                        return success.order_id_in_paypal;
                    }, function (fail) {
                        new Error(fail.error);
                    });
                },
                onApprove: function (data, actions) {
                    $.toggleStatusBox('show');
                    var redirectUrl = fn_url(
                        'payment_notification.return' +
                        '?order_id=' + orderId +
                        '&order_id_in_paypal=' + data.orderID +
                        '&payment=paypal_commerce_platform'
                    );
                    actions.redirect(redirectUrl);
                },
            }).render('#' + params.submit_button_id + '_container');
        },

        /**
         * Gets PayPal Smart Buttons script load options.
         *
         * @param $payment
         * @returns {{disableCards: string, clientId: string, debug: boolean, disableFunding: string, currency: string}}
         */
        getSmartButtonsLoadOptions: function ($payment) {
            return {
                clientId: $payment.data('caPaypalCommercePlatformClientId'),
                currency: $payment.data('caPaypalCommercePlatformCurrency'),
                disableFunding: $payment.data('caPaypalCommercePlatformDisableFunding'),
                disableCard: $payment.data('caPaypalCommercePlatformDisableCard'),
                debug: $payment.data('caPaypalCommercePlatformDebug'),
                merchantIds: $payment.data('caPaypalCommercePlatformMerchantIds')
            };
        },

        /**
         * Gets URL to load the customized PayPal Smart Buttons script.
         * @param {object} options
         * @returns {string}
         */
        getSmartButtonsLoadUrl: function (options) {
            var url = 'https://www.paypal.com/sdk/js' +
                '?client-id=' + options.clientId +
                '&currency=' + options.currency +
                '&debug=' + (options.debug ? 'true' : 'false') +
                '&intent=capture' +
                '&commit=true' +
                '&integration-date=2020-05-01' +
                '&merchant-id=' + (
                    options.merchantIds.indexOf(',') === -1
                        ? options.merchantIds
                        : '*'
                );

            if (options.disableFunding) {
                url += '&disable-funding=' + options.disableFunding;
            }

            if (options.disableCard) {
                url += '&disable-card=' + options.disableCard;
            }

            return url;
        },

        /**
         * Initializes payment form.
         *
         * @param {jQuery} $payment Payment method
         */
        init: function ($payment) {
            var $payment_form = $payment.closest('form');

            var submitButtonId = methods.setSubmitButtonId($payment.data('caPaypalCommercePlatformButton')),
                $submitButton = $('#' + submitButtonId);
            $submitButton.addClass('hidden');

            var checkoutScriptLoadCallback = function () {
                isCheckoutScriptLoaded = true;
                methods.setupWindowClosedErrorHandler(window);
                methods.setupPaymentForm({
                    payment_form: $payment_form,
                    submit_button_id: submitButtonId,
                    style: {
                        layout: $payment.data('caPaypalCommercePlatformStyleLayout'),
                        color: $payment.data('caPaypalCommercePlatformStyleColor'),
                        height: $payment.data('caPaypalCommercePlatformStyleHeight'),
                        shape: $payment.data('caPaypalCommercePlatformStyleShape'),
                        label: $payment.data('caPaypalCommercePlatformStyleLabel'),
                        tagline: $payment.data('caPaypalCommercePlatformStyleTagline')
                    },
                });
            };


            if (isCheckoutScriptLoaded) {
                checkoutScriptLoadCallback();
            } else {
                var options = methods.getSmartButtonsLoadOptions($payment),
                    url = methods.getSmartButtonsLoadUrl(options);

                methods.loadScript(url, options.merchantIds, checkoutScriptLoadCallback);
            }
        },

        /**
         * Forbids order placement (e.g., due to the validation)
         *
         * @param {object} actions
         */
        forbidOrderPlacement(actions) {
            isPlaceOrderAllowed = false;
            actions.disable();
        },

        /**
         * Allows order placement.
         *
         * @param {object} actions
         */
        allowOrderPlacement(actions) {
            isPlaceOrderAllowed = true;
            actions.enable();
        },

        /**
         * Runs validation loop on the order placement fom.
         *
         * @param {jQuery} $paymentForm
         * @param {object} actions
         */
        startValidation($paymentForm, actions) {
            validationLoop = setInterval(function () {
                var formIsValid = $paymentForm.ceFormValidator('checkFields');
                if (formIsValid && !isPlaceOrderAllowed) {
                    methods.allowOrderPlacement(actions);
                } else if (!formIsValid && isPlaceOrderAllowed) {
                    methods.forbidOrderPlacement(actions);
                }
            }, 300);
        },

        /**
         * Stops validation on the order placement form.
         */
        stopValidation() {
            if (validationLoop) {
                clearInterval(validationLoop);
            }
        },

        /**
         * Creates container for PayPal Smart Buttons.
         *
         * @param {string} submitButtonId
         */
        createPaymentButtonsContainer(submitButtonId) {
            $('<div class="ty-paypal-commerce-platform-buttons-container" id="' + submitButtonId + '_container"></div>')
                .insertAfter($('#' + submitButtonId));
        },

        /**
         * Sets up global error handler to work around the following issue:
         * https://github.com/paypal/paypal-checkout-components/issues/1107.
         *
         * @param {window} window
         */
        setupWindowClosedErrorHandler(window) {
            // Window closed
            window.onerror = function (message, source, lineno, colno, error) {
                console.log(message, source, lineno, colno, error);
            }
        },

        /**
         * Loads Smart Payment Buttons script.
         *
         * @param {string} url                          Script URL
         * @param {string} merchantIds                  Comma-separated list of merchant IDs in the current order
         * @param {callback} checkoutScriptLoadCallback Action to execute after script is loaded
         */
        loadScript(url, merchantIds, checkoutScriptLoadCallback) {
            var checkoutScript = _.doc.createElement('script');
            checkoutScript.setAttribute('src',url);
            checkoutScript.setAttribute('data-merchant-id', merchantIds);
            checkoutScript.onload = checkoutScriptLoadCallback;
            _.doc.head.appendChild(checkoutScript);
        }
    };

    $.extend({
        cePaypalCommercePlatformCheckout: function (method) {
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else {
                $.error('ty.paypalCommercePlatformCheckout: method ' + method + ' does not exist');
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        if (_.embedded) {
            return;
        }
        var $payment = $('[data-ca-paypal-commerce-platform-checkout]', context);
        if ($payment.length) {
            $.cePaypalCommercePlatformCheckout('init', $payment);
        }
    });
})(Tygh, Tygh.$);
