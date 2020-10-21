<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 19:54:44
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/rus_cities/hooks/checkout/shipping_estimation_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096929925f8f165477cf55-38471717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f646456e54e44df40b73199fad899841b9e4a42' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/rus_cities/hooks/checkout/shipping_estimation_fields.override.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1096929925f8f165477cf55-38471717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'customer_loc' => 0,
    'cart' => 0,
    'settings' => 0,
    '_country' => 0,
    'prefix' => 0,
    'id_suffix' => 0,
    'class_suffix' => 0,
    'countries' => 0,
    'code' => 0,
    'country' => 0,
    'states' => 0,
    'state' => 0,
    '_state' => 0,
    'cities' => 0,
    'city_found' => 0,
    'city' => 0,
    '_city' => 0,
    'client_city' => 0,
    'additional_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f1654825869_96351625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f1654825869_96351625')) {function content_5f8f1654825869_96351625($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('country','select_country','state','select_state','city','select_city','other_town','other_town','city','zip_postal_code','country','select_country','state','select_state','city','select_city','other_town','other_town','city','zip_postal_code'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['customer_loc'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['customer_loc']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['user_data'] : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer_loc']->value['s_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer_loc']->value['s_country'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['_city'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer_loc']->value['s_city'], null, 0);?>

<?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country'])) {?>
    <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])&&$_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']) {?>
    <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'], null, 0);?>
<?php }?>

<div class="ty-control-group">
    <label class="ty-control-group__label cm-required" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" name="customer_location[country]">
        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div>

<div class="ty-control-group">
    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
    <select class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" name="customer_location[state]">
        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code']==$_smarty_tpl->tpl_vars['_state']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
    <input type="text" class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" name="customer_location[state]" size="20" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>disabled="disabled"<?php }?> />
</div>

<div id="change_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
        <div class="ty-control-group">
            <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("city");?>
</label>
            <select class="cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]">
                <option label="" value="">-- <?php echo $_smarty_tpl->__("select_city");?>
 --</option>
                <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['city_found'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['city_found']->value)===null||$tmp==='' ? false : $tmp)||$_smarty_tpl->tpl_vars['city']->value['city']==$_smarty_tpl->tpl_vars['_city']->value, null, 0);?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['city']->value['city']==$_smarty_tpl->tpl_vars['_city']->value) {?>selected="selected"<?php }?>
                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                <option value="client_city"
                    <?php if (!$_smarty_tpl->tpl_vars['city_found']->value) {?>selected="selected"<?php }?>
                    >-- <?php echo $_smarty_tpl->__("other_town");?>
 --
                </option>
            </select>
        </div>

        <div id="client_city" class="ty-control-group <?php if ($_smarty_tpl->tpl_vars['city_found']->value) {?>hidden<?php }?>">
            <label class="ty-control-group__label"
                   for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo $_smarty_tpl->__("other_town");?>
</label>
            <input type="text"
                   class="ty-input-text-medium"
                   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="customer_location[city]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_city']->value, ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['city_found']->value) {?>disabled="disabled"<?php }?>
            />
        </div>
    <?php } else { ?>
        <div class="ty-control-group">
            <label  class="ty-control-group__label"><?php echo $_smarty_tpl->__("city");?>
</label>
            <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]" <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city']) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
"<?php } elseif ($_smarty_tpl->tpl_vars['client_city']->value) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_city']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> autocomplete="on" />
        </div>
    <?php }?>
<!--change_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<div class="ty-control-group">
    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php echo '<script'; ?>
 type="text/javascript"  class="cm-ajax-force">
    //<![CDATA[

    (function(_, $) {

        function fn_get_cities() {
            var country = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").length
                ? $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val()
                : '';
            var state = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").length
                ? $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val()
                : '';
            var city = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val();
            var city_text = $("#elm_city_text").val();

            var url = fn_url('city.shipping_estimation_city');

            var data = {
                check_country: country,
                check_state: state,
                check_city: city,
                city_text: city_text,
                additional_id: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
'
            };

            $.ceAjax('request', url, {
                result_ids: 'change_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
',
                method: 'get',
                data: data,
                callback: function(response) {
                    $('#elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
').attr('disabled', 'disabled').val('');
                    $('#client_city').addClass('hidden');
                    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
').val('');
                }
            });
        }

        $.ceEvent('on', 'ce.commoninit', function (context) {

            var $city_input =  $('#elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context),
                $city_input_wrapper = $('#client_city', context);

            $('#but_get_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).click(function() {
                var dialog = $(this).closest('.ui-dialog');

                if(dialog.length > 0){
                    $('.notification-container').zIndex(dialog.zIndex() + 1);
                }
            });

            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).change(function() {
                fn_get_cities();
            });

            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).change(function() {
                fn_get_cities();
            });

            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).change(function() {
                var inp = $(this).val();

                if (inp === 'client_city') {
                    $city_input.removeAttr('disabled').val('');
                    $city_input_wrapper.removeClass('hidden');
                } else {
                    $city_input.attr('disabled', 'disabled').val('');
                    $city_input_wrapper.addClass('hidden');
                }

                $.ceDialog('get_last').ceDialog('reload');
            });
        });

    }(Tygh, Tygh.$));
    //]]>
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_cities/hooks/checkout/shipping_estimation_fields.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_cities/hooks/checkout/shipping_estimation_fields.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['customer_loc'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['customer_loc']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['user_data'] : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer_loc']->value['s_state'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer_loc']->value['s_country'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['_city'] = new Smarty_variable($_smarty_tpl->tpl_vars['customer_loc']->value['s_city'], null, 0);?>

<?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_country'])) {?>
    <?php $_smarty_tpl->tpl_vars['_country'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], null, 0);?>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_state'])&&$_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country']) {?>
    <?php $_smarty_tpl->tpl_vars['_state'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'], null, 0);?>
<?php }?>

<div class="ty-control-group">
    <label class="ty-control-group__label cm-required" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("country");?>
</label>
    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-country cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" name="customer_location[country]">
        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
        <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['country']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value==$_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
</div>

<div class="ty-control-group">
    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("state");?>
</label>
    <select class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?> ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" name="customer_location[state]">
        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['code']==$_smarty_tpl->tpl_vars['_state']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
    <input type="text" class="cm-state cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>hidden<?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>_d<?php }?>" name="customer_location[state]" size="20" maxlength="64" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value]) {?>disabled="disabled"<?php }?> />
</div>

<div id="change_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['cities']->value) {?>
        <div class="ty-control-group">
            <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("city");?>
</label>
            <select class="cm-location-estimation<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]">
                <option label="" value="">-- <?php echo $_smarty_tpl->__("select_city");?>
 --</option>
                <?php  $_smarty_tpl->tpl_vars['city'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city']->key => $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['city_found'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['city_found']->value)===null||$tmp==='' ? false : $tmp)||$_smarty_tpl->tpl_vars['city']->value['city']==$_smarty_tpl->tpl_vars['_city']->value, null, 0);?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['city']->value['city']==$_smarty_tpl->tpl_vars['_city']->value) {?>selected="selected"<?php }?>
                    ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value['city'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                <option value="client_city"
                    <?php if (!$_smarty_tpl->tpl_vars['city_found']->value) {?>selected="selected"<?php }?>
                    >-- <?php echo $_smarty_tpl->__("other_town");?>
 --
                </option>
            </select>
        </div>

        <div id="client_city" class="ty-control-group <?php if ($_smarty_tpl->tpl_vars['city_found']->value) {?>hidden<?php }?>">
            <label class="ty-control-group__label"
                   for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo $_smarty_tpl->__("other_town");?>
</label>
            <input type="text"
                   class="ty-input-text-medium"
                   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="customer_location[city]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_city']->value, ENT_QUOTES, 'UTF-8');?>
"
                   <?php if ($_smarty_tpl->tpl_vars['city_found']->value) {?>disabled="disabled"<?php }?>
            />
        </div>
    <?php } else { ?>
        <div class="ty-control-group">
            <label  class="ty-control-group__label"><?php echo $_smarty_tpl->__("city");?>
</label>
            <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[city]" <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city']) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_city'], ENT_QUOTES, 'UTF-8');?>
"<?php } elseif ($_smarty_tpl->tpl_vars['client_city']->value) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['client_city']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> autocomplete="on" />
        </div>
    <?php }?>
<!--change_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<div class="ty-control-group">
    <label class="ty-control-group__label" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("zip_postal_code");?>
</label>
    <input type="text" class="ty-input-text-medium" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_zipcode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="customer_location[zipcode]" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
" />
</div>

<?php echo '<script'; ?>
 type="text/javascript"  class="cm-ajax-force">
    //<![CDATA[

    (function(_, $) {

        function fn_get_cities() {
            var country = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").length
                ? $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val()
                : '';
            var state = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").length
                ? $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val()
                : '';
            var city = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").val();
            var city_text = $("#elm_city_text").val();

            var url = fn_url('city.shipping_estimation_city');

            var data = {
                check_country: country,
                check_state: state,
                check_city: city,
                city_text: city_text,
                additional_id: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_id']->value, ENT_QUOTES, 'UTF-8');?>
'
            };

            $.ceAjax('request', url, {
                result_ids: 'change_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
',
                method: 'get',
                data: data,
                callback: function(response) {
                    $('#elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
').attr('disabled', 'disabled').val('');
                    $('#client_city').addClass('hidden');
                    $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
').val('');
                }
            });
        }

        $.ceEvent('on', 'ce.commoninit', function (context) {

            var $city_input =  $('#elm_city_text<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context),
                $city_input_wrapper = $('#client_city', context);

            $('#but_get_rates<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).click(function() {
                var dialog = $(this).closest('.ui-dialog');

                if(dialog.length > 0){
                    $('.notification-container').zIndex(dialog.zIndex() + 1);
                }
            });

            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_country<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).change(function() {
                fn_get_cities();
            });

            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_state<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).change(function() {
                fn_get_cities();
            });

            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
elm_city<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
', context).change(function() {
                var inp = $(this).val();

                if (inp === 'client_city') {
                    $city_input.removeAttr('disabled').val('');
                    $city_input_wrapper.removeClass('hidden');
                } else {
                    $city_input.attr('disabled', 'disabled').val('');
                    $city_input_wrapper.addClass('hidden');
                }

                $.ceDialog('get_last').ceDialog('reload');
            });
        });

    }(Tygh, Tygh.$));
    //]]>
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
