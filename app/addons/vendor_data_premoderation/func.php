<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Addons\VendorDataPremoderation\State;
use Tygh\Addons\VendorDataPremoderation\ServiceProvider;
use Tygh\Enum\Addons\VendorDataPremoderation\PremoderationStatuses;
use Tygh\Enum\Addons\VendorDataPremoderation\ProductStatuses;
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\YesNo;
use Tygh\Registry;
use Tygh\Enum\VendorStatuses;

defined('BOOTSTRAP') or die('Access denied');

require_once __DIR__ . '/hooks.functions.php';

/**
 * Changes the approval status of products.
 *
 * @param int|int[] $product_ids Product identifiers
 * @param string    $status      Approval status
 * @param string    $reason      Moderation reason
 *
 * @return bool
 *
 * @deprecated since 4.11.1. Use specific approval methods instead.
 *
 * @see        fn_vendor_data_premoderation_approve_products
 * @see        fn_vendor_data_premoderation_disapprove_products
 * @see        fn_vendor_data_premoderation_request_approval_for_products
 */
function fn_change_approval_status($product_ids, $status, $reason = '')
{
    $product_ids = (array) $product_ids;

    /**
     * Changes the values in the array of product identifiers before the approval status of those products is changed.
     *
     * @param int[]  $product_ids Product identifiers
     * @param string $status      Approval status
     *
     * @deprecated since 4.11.1. Use the following hooks instead:
     *             vendor_data_premoderation_approve_products_pre,
     *             vendor_data_premoderation_disapprove_products,
     *             vendor_data_premoderation_request_approval_for_products
     */
    fn_set_hook('change_approval_status_pre', $product_ids, $status);

    switch ($status) {
        case PremoderationStatuses::APPROVED:
            return fn_vendor_data_premoderation_approve_products($product_ids, true);
        case PremoderationStatuses::DISAPPROVED:
            return fn_vendor_data_premoderation_disapprove_products($product_ids, true, $reason);
        default:
            return fn_vendor_data_premoderation_request_approval_for_products($product_ids, true);
    }
}

/**
 * Approves products.
 *
 * @param int[] $product_ids    Approved product IDs
 * @param bool  $update_product Whether to update the product data.
 *                              When set to false, only the premoderation data will be updated
 *
 * @return bool
 */
function fn_vendor_data_premoderation_approve_products(array $product_ids, $update_product = true)
{
    $status = PremoderationStatuses::APPROVED;

    /**
     * Changes the values in the array of product identifiers before the approval status of those products is changed.
     *
     * @param int[]  $product_ids Product identifiers
     * @param string $status      Approval status
     *
     * @deprecated since 4.11.1. Use the following hooks instead:
     *             vendor_data_premoderation_approve_products_pre,
     *             vendor_data_premoderation_disapprove_products,
     *             vendor_data_premoderation_request_approval_for_products
     */
    fn_set_hook('change_approval_status_pre', $product_ids, $status);

    /**
     * Executes before approving products, allows you to change the list of approved product IDs.
     *
     * @param int[] $product_ids    Approved product IDs
     * @param bool  $update_product Whether to update the product data.
     *                              When set to false, only the premoderation data will be updated
     */
    fn_set_hook('vendor_data_premoderation_approve_products_pre', $product_ids, $update_product);

    $current_product_statuses = fn_vendor_data_premoderation_get_current_product_statuses($product_ids);
    $updated_product_ids = [];

    foreach ($current_product_statuses as $product_id => $status) {
        if ($status !== ProductStatuses::REQUIRES_APPROVAL
            && $status !== ProductStatuses::DISAPPROVED
        ) {
            continue;
        }

        $updated_product_ids[] = $product_id;

        $current_premoderation = fn_vendor_data_premoderation_get_premoderation($product_id);
        $current_premoderation = reset($current_premoderation);

        $original_status = $current_premoderation
            ? $current_premoderation['original_status']
            : ProductStatuses::ACTIVE;

        fn_vendor_data_premoderation_update_premoderation($product_id, $original_status, '');

        if ($update_product) {
            $params = [
                'id'                                => $product_id,
                'id_name'                           => 'product_id',
                'status'                            => $original_status,
                'table'                             => 'products',
                'is_status_updated_during_approval' => true,
            ];
            fn_tools_update_status($params);
        }
    }

    if ($updated_product_ids) {
        /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
        $event_dispatcher = Tygh::$app['event.dispatcher'];

        $products_companies = fn_get_company_ids_by_product_ids($updated_product_ids);
        foreach ($products_companies as $company_id => $company_product_ids) {
            $event_dispatcher->dispatch('vendor_data_premoderation.product_status.approved', [
                'company_id' => $company_id,
                'product_ids' => $company_product_ids,
            ]);
        }
    }

    return true;
}

/**
 * Disapproves products.
 *
 * @param int[]  $product_ids    Disapproved product IDs
 * @param bool   $update_product Whether to update the product data.
 *                               When set to false, only the premoderation data will be updated
 * @param string $reason         Disapproval reason
 *
 * @return bool
 */
function fn_vendor_data_premoderation_disapprove_products(array $product_ids, $update_product = true, $reason = '')
{
    $status = PremoderationStatuses::DISAPPROVED;

    /**
     * Changes the values in the array of product identifiers before the approval status of those products is changed.
     *
     * @param int[]  $product_ids Product identifiers
     * @param string $status      Approval status
     *
     * @deprecated since 4.11.1. Use the following hooks instead:
     *             vendor_data_premoderation_approve_products_pre,
     *             vendor_data_premoderation_disapprove_products,
     *             vendor_data_premoderation_request_approval_for_products
     */
    fn_set_hook('change_approval_status_pre', $product_ids, $status);

    /**
     * Executes before disapproving products, allows you to change the list of disapproved product IDs.
     *
     * @param int[]  $product_ids    Disapproved product IDs
     * @param bool   $update_product Whether to update the product data.
     *                               When set to false, only the premoderation data will be updated
     * @param string $reason         Disapproval reason
     */
    fn_set_hook('vendor_data_premoderation_disapprove_products_pre', $product_ids, $update_product, $reason);

    $current_product_statuses = fn_vendor_data_premoderation_get_current_product_statuses($product_ids);
    $updated_product_ids = [];

    foreach ($current_product_statuses as $product_id => $status) {
        $original_status = $status;

        $update_premoderation = true;

        if ($status === ProductStatuses::DISAPPROVED
            || $status === ProductStatuses::REQUIRES_APPROVAL
        ) {
            $current_premoderation = fn_vendor_data_premoderation_get_premoderation([$product_id]);
            $current_premoderation = reset($current_premoderation);

            $original_status = $current_premoderation
                ? $current_premoderation['original_status']
                : ProductStatuses::ACTIVE;

            $original_reason = $current_premoderation
                ? $current_premoderation['reason']
                : '';

            $is_reason_changed = $reason !== $original_reason;
            $is_product_disapproved = $status === ProductStatuses::REQUIRES_APPROVAL;

            $update_premoderation = !$current_premoderation || $is_reason_changed || $is_product_disapproved;
        }

        if ($update_premoderation) {
            $updated_product_ids[] = $product_id;
            fn_vendor_data_premoderation_update_premoderation($product_id, $original_status, $reason);
        }

        if ($update_product) {
            db_query('UPDATE ?:products SET status = ?s WHERE product_id = ?i', ProductStatuses::DISAPPROVED, $product_id);
        }
    }

    if ($updated_product_ids) {
        /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */
        $event_dispatcher = Tygh::$app['event.dispatcher'];

        $products_companies = fn_get_company_ids_by_product_ids($updated_product_ids);
        foreach ($products_companies as $company_id => $company_product_ids) {
            $event_dispatcher->dispatch('vendor_data_premoderation.product_status.disapproved', [
                'company_id'  => $company_id,
                'product_ids' => $company_product_ids,
                'reason'      => $reason
            ]);
        }
    }

    return true;
}

/**
 * Requests approval for products.
 *
 * @param int[] $product_ids     Pending product IDs
 * @param bool  $update_product  Whether to update the product data.
 *                               When set to false, only the premoderation data will be updated
 *
 * @return bool
 */
function fn_vendor_data_premoderation_request_approval_for_products(array $product_ids, $update_product = true)
{
    $status = PremoderationStatuses::PENDING;

    /**
     * Changes the values in the array of product identifiers before the approval status of those products is changed.
     *
     * @param int[]  $product_ids Product identifiers
     * @param string $status      Approval status
     *
     * @deprecated since 4.11.1. Use the following hooks instead:
     *             vendor_data_premoderation_approve_products_pre,
     *             vendor_data_premoderation_disapprove_products,
     *             vendor_data_premoderation_request_approval_for_products
     */
    fn_set_hook('change_approval_status_pre', $product_ids, $status);

    /**
     * Executes before requesting products approval, allows you to change the list of moderated product IDs.
     *
     * @param int[] $product_ids     Pending product IDs
     * @param bool  $update_product  Whether to update the product data.
     *                               When set to false, only the premoderation data will be updated
     */
    fn_set_hook('vendor_data_premoderation_request_approval_for_products_pre', $product_ids, $update_product);

    $current_product_statuses = fn_vendor_data_premoderation_get_current_product_statuses($product_ids);

    foreach ($current_product_statuses as $product_id => $status) {
        $original_status = $status;
        $reason = '';

        if ($status === ProductStatuses::REQUIRES_APPROVAL ||
            $status === ProductStatuses::DISAPPROVED
        ) {
            $current_premoderation = fn_vendor_data_premoderation_get_premoderation([$product_id]);
            $current_premoderation = reset($current_premoderation);

            $original_status = $current_premoderation
                ? $current_premoderation['original_status']
                : ProductStatuses::ACTIVE;

            $reason = $current_premoderation
                ? $current_premoderation['reason']
                : '';
        }

        fn_vendor_data_premoderation_update_premoderation($product_id, $original_status, $reason);

        if ($update_product) {
            db_query('UPDATE ?:products SET status = ?s WHERE product_id = ?i', ProductStatuses::REQUIRES_APPROVAL, $product_id);
        }
    }

    return true;
}

/**
 * Gets current product statuses.
 *
 * @param int[] $product_ids
 *
 * @return string[]
 */
function fn_vendor_data_premoderation_get_current_product_statuses(array $product_ids)
{
    $current_product_statuses = db_get_hash_single_array(
        'SELECT product_id, status FROM ?:products WHERE ?w',
        ['product_id', 'status'],
        [
            'product_id' => $product_ids,
        ]
    );

    return $current_product_statuses;
}

/**
 * Checks whether product data was changed and its validatation is required.
 *
 * @param State $initial_state
 * @param State $resulting_state
 *
 * @return bool
 */
function fn_vendor_data_premoderation_is_product_changed(State $initial_state, State $resulting_state)
{
    $detector = ServiceProvider::getProductComparator();
    $diff = $detector->compare($initial_state, $resulting_state);

    return $diff->hasChanges();
}

/**
 * Gets products premoderation details.
 *
 * @param int|int[] $product_ids
 *
 * @return array
 */
function fn_vendor_data_premoderation_get_premoderation($product_ids)
{
    $product_ids = (array) $product_ids;

    return db_get_hash_array(
        'SELECT * FROM ?:premoderation_products WHERE ?w',
        'product_id',
        [
            'product_id' => $product_ids,
        ]
    );
}

/**
 * Updates product premoderation details.
 *
 * @param int    $product_id
 * @param string $original_status
 * @param string $reason
 */
function fn_vendor_data_premoderation_update_premoderation($product_id, $original_status, $reason = '')
{
    db_replace_into(
        'premoderation_products',
        [
            'product_id'        => $product_id,
            'original_status'   => $original_status,
            'reason'            => $reason,
            'updated_timestamp' => TIME,
        ]
    );
}

/**
 * Deletes product premoderation details.
 *
 * @param int|int[] $product_ids
 */
function fn_vendor_data_premoderation_delete_premoderation($product_ids)
{
    $product_ids = (array) $product_ids;

    db_query('DELETE FROM ?:premoderation_products WHERE ?w',
        [
            'product_id' => $product_ids,
        ]
    );
}

/**
 * Checks whether a product changed by a company requires prior approval.
 *
 * @param array $company_data Company data
 * @param bool  $is_created   Whether a product is created
 *
 * @return bool
 */
function fn_vendor_data_premoderation_product_requires_approval(array $company_data, $is_created = false)
{
    static $create_premoderation_mode = null;
    if ($create_premoderation_mode === null) {
        $create_premoderation_mode = Registry::get('addons.vendor_data_premoderation.products_prior_approval');
    }

    static $update_premoderation_mode = null;
    if ($update_premoderation_mode === null) {
        $update_premoderation_mode = Registry::get('addons.vendor_data_premoderation.products_updates_approval');
    }

    $is_updated = !$is_created;

    $is_custom_create_premoderation_required = $is_created
        && $create_premoderation_mode === 'custom'
        && YesNo::toBool($company_data['pre_moderation']);
    $is_custom_update_premoderation_required = $is_updated
        && $update_premoderation_mode === 'custom'
        && YesNo::toBool($company_data['pre_moderation_edit']);

    if ($is_created && ($create_premoderation_mode === 'all' || $is_custom_create_premoderation_required)) {
        return true;
    }

    if ($is_updated && ($update_premoderation_mode === 'all' || $is_custom_update_premoderation_required)) {
        return true;
    }

    return false;
}

/**
 * Gets product state.
 *
 * @param int $product_id
 *
 * @return \Tygh\Addons\VendorDataPremoderation\State
 */
function fn_vendor_data_premoderation_get_product_state($product_id)
{
    return ServiceProvider::getProductStateFactory()->getState($product_id);
}

/**
 * Shows warning notification if add-on disabled.
 *
 * @internal
 */
function fn_vendor_data_premoderation_display_notification_for_deleted_statuses()
{
    if (Registry::get('addons.vendor_data_premoderation.status') === ObjectStatuses::DISABLED) {
        return;
    }

    fn_set_notification('W', __('warning'), __('vendor_data_premoderation.notification_for_deleted_statuses'));
}

/**
 * Provides help text for the add-on configuration page.
 *
 * @return string
 *
 * @internal
 */
function fn_vendor_data_premoderation_get_approval_info_text()
{
    return '<div class="well well-small help-block">' . __('vendor_data_premoderation.approval_info_text') . '</div>';
}

/**
 * Compares original company data and new company data.
 *
 * @param array<string, string> $company_data      New company data
 * @param array<string, string> $orig_company_data Original company data
 *
 * @return array<string, string>
 */
function fn_vendor_data_premoderation_diff_company_data(array $company_data, array $orig_company_data)
{
    $check_fields = [
        'company_description',
        'terms'
    ];

    foreach ($check_fields as $field) {
        if (isset($company_data[$field]) && isset($orig_company_data[$field])) {
            $company_data[$field] = preg_replace('/\r\n|\r|\n/', '', $company_data[$field]);
            $orig_company_data[$field] = preg_replace('/\r\n|\r|\n/', '', $orig_company_data[$field]);
        }
    }

    $company_data_diff = array_diff_assoc($company_data, $orig_company_data);

    /**
     * Executes when determining whether company data was changed or not after diff between original and new company data is calculated,
     * allows you to modify the diff content.
     *
     * @param array<string, string> $company_data       New company data
     * @param array<string, string> $orig_company_data  Original company data
     * @param array<string, string> $company_data_diff  Diff between original and new company data
     */
    fn_set_hook('vendor_data_premoderation_diff_company_data_post', $company_data, $orig_company_data, $company_data_diff);

    return $company_data_diff;
}

/**
 * Checks if product status can be changed
 *
 * @param string $status          New product status
 * @param string $original_status Original product status
 *
 * @return bool
 */
function fn_vendor_data_premoderation_is_product_status_can_be_changed($status, $original_status)
{
    if (
        (
            in_array($original_status, [ProductStatuses::REQUIRES_APPROVAL, ProductStatuses::DISAPPROVED])
            || $status === ProductStatuses::DISAPPROVED
        )
        && $original_status !== $status
    ) {
        return false;
    }

    return true;
}

/**
 * Checks if vendor status can be changed
 *
 * @param string $status          New vendor status
 * @param string $original_status Original vendor status
 *
 * @return bool
 */
function fn_vendor_data_premoderation_is_vendor_status_can_be_changed($status, $original_status)
{
    if ($original_status === VendorStatuses::PENDING && $original_status !== $status) {
        return false;
    }

    return true;
}
