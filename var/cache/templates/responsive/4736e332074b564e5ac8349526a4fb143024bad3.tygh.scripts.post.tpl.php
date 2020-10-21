<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:48:08
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/step_by_step_checkout/overrides/addons/paypal/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20944605315f8ef8a8ed9c71-63761732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4736e332074b564e5ac8349526a4fb143024bad3' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/step_by_step_checkout/overrides/addons/paypal/hooks/index/scripts.post.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20944605315f8ef8a8ed9c71-63761732',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef8a8f27ca8_17520754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef8a8f27ca8_17520754')) {function content_5f8ef8a8f27ca8_17520754($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/step_by_step_checkout/overrides/addons/paypal/in_context_checkout.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/step_by_step_checkout/overrides/addons/paypal/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/step_by_step_checkout/overrides/addons/paypal/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/step_by_step_checkout/overrides/addons/paypal/in_context_checkout.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
