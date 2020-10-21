<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:06:12
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12128433045f8efce46fae24-21634821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f52e7a09c75f01c8dead1a816377458f797bf4' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl',
      1 => 1603196089,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12128433045f8efce46fae24-21634821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_name' => 0,
    'company_id' => 0,
    'settings' => 0,
    'capture_options_vs_qty' => 0,
    'product' => 0,
    'object_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8efce47404b4_87002691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8efce47404b4_87002691')) {function content_5f8efce47404b4_87002691($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor','verified_by_paypal','vendor','verified_by_paypal'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?> paypal-adaptive-vendor-name <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=="verified") {?>paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:product_company_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair'])) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['width'],'image_height'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair']), 0);?>

            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=="verified") {?>
                <span class="ty-control-group__item"><?php echo $_smarty_tpl->__("verified_by_paypal");?>
</span>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:product_company_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/overrides/views/companies/components/product_company_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['company_name']->value||$_smarty_tpl->tpl_vars['company_id']->value)&&$_smarty_tpl->tpl_vars['settings']->value['Vendors']['display_vendor']=="Y") {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?> paypal-adaptive-vendor-name <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=="verified") {?>paypal-adaptive-vendor-name-text<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("vendor");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("companies.products?company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['company_name']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value), ENT_QUOTES, 'UTF-8');
}?></a></span>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:product_company_data")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:product_company_data"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair'])) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['width'],'image_height'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['main_pair']), 0);?>

            <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified'])&&$_smarty_tpl->tpl_vars['product']->value['paypal_verification']['verified']=="verified") {?>
                <span class="ty-control-group__item"><?php echo $_smarty_tpl->__("verified_by_paypal");?>
</span>
            <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:product_company_data"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
<?php }?>
<?php }?><?php }} ?>
