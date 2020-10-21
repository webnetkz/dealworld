<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:44:51
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/rus_kupivkredit/hooks/buttons/add_to_cart.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119029525f8ef7e35602d5-74649456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d615975fdf6f8c31ad93832cd941b0068e551a5' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/rus_kupivkredit/hooks/buttons/add_to_cart.post.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119029525f8ef7e35602d5-74649456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tinkoff_payments_exist' => 0,
    'settings' => 0,
    'auth' => 0,
    'config' => 0,
    'quick_view' => 0,
    'but_role' => 0,
    'but_id' => 0,
    'obj_id' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'but_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef7e35b4877_62726889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef7e35b4877_62726889')) {function content_5f8ef7e35b4877_62726889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('kupivkredit_button','kupivkredit_button'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['tinkoff_payments_exist']->value&&($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']==="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
	<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['quick_view']->value||$_smarty_tpl->tpl_vars['but_role']->value=="action") {?>
		<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("kupivkredit-button-mini", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("kupivkredit-button", null, 0);?>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"kvk_".((string)$_smarty_tpl->tpl_vars['but_id']->value),'but_text'=>$_smarty_tpl->__("kupivkredit_button"),'but_name'=>"dispatch[checkout.add.kvk_activate.".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>"text",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_icon'=>"kupivkredit-icon"), 0);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_kupivkredit/hooks/buttons/add_to_cart.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_kupivkredit/hooks/buttons/add_to_cart.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['tinkoff_payments_exist']->value&&($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping']==="allow_shopping"||$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
	<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['quick_view']->value||$_smarty_tpl->tpl_vars['but_role']->value=="action") {?>
		<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("kupivkredit-button-mini", null, 0);?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("kupivkredit-button", null, 0);?>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"kvk_".((string)$_smarty_tpl->tpl_vars['but_id']->value),'but_text'=>$_smarty_tpl->__("kupivkredit_button"),'but_name'=>"dispatch[checkout.add.kvk_activate.".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>"text",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_icon'=>"kupivkredit-icon"), 0);?>

<?php }?>
<?php }?><?php }} ?>
