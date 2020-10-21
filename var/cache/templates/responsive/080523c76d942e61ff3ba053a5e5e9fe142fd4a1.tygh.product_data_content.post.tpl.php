<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:45:36
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/master_products/hooks/products/product_data_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17737263375f8ef810a32ed3-03299072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080523c76d942e61ff3ba053a5e5e9fe142fd4a1' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/master_products/hooks/products/product_data_content.post.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17737263375f8ef810a32ed3-03299072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'show_view_offers_btn' => 0,
    'details_page' => 0,
    'quick_view' => 0,
    'obj_id' => 0,
    'obj_prefix' => 0,
    'no_capture' => 0,
    'capture_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef810a84377_27231211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef810a84377_27231211')) {function content_5f8ef810a84377_27231211($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.view_product_offers','master_products.view_product_offers'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&$_smarty_tpl->tpl_vars['show_view_offers_btn']->value&&(!$_smarty_tpl->tpl_vars['details_page']->value||$_smarty_tpl->tpl_vars['quick_view']->value)) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
        <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-product-offers-btn" id="view_product_offers_btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn__offers ty-btn__primary ty-btn__big ty-btn__add-to-cart ty-btn"><?php echo $_smarty_tpl->__("master_products.view_product_offers");?>
</a>
        <!--view_product_offers_btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
        <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/product_data_content.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/master_products/hooks/products/product_data_content.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&$_smarty_tpl->tpl_vars['show_view_offers_btn']->value&&(!$_smarty_tpl->tpl_vars['details_page']->value||$_smarty_tpl->tpl_vars['quick_view']->value)) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?>
        <div class="cm-reload-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-product-offers-btn" id="view_product_offers_btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-btn__offers ty-btn__primary ty-btn__big ty-btn__add-to-cart ty-btn"><?php echo $_smarty_tpl->__("master_products.view_product_offers");?>
</a>
        <!--view_product_offers_btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
        <?php $_smarty_tpl->tpl_vars["capture_name"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['capture_name']->value];?>

    <?php }?>
<?php }
}?><?php }} ?>
