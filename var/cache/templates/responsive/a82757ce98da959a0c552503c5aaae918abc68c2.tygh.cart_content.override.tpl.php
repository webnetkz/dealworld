<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:43:13
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/hooks/checkout/cart_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18233658445f8ef781628d38-17338309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a82757ce98da959a0c552503c5aaae918abc68c2' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/hooks/checkout/cart_content.override.tpl',
      1 => 1603196089,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18233658445f8ef781628d38-17338309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef781646966_06628796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef781646966_06628796')) {function content_5f8ef781646966_06628796($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['hide_cart']->value) {?>
&nbsp;
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/paypal_adaptive/hooks/checkout/cart_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/paypal_adaptive/hooks/checkout/cart_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['hide_cart']->value) {?>
&nbsp;
<?php }
}?><?php }} ?>
