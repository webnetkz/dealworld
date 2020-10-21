<?php /* Smarty version Smarty-3.1.21, created on 2020-10-21 02:37:47
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/components/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2603249245f8f74cb749b63-42829591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df9ef633514d0c9ea9165d22f045da8d81c3f57' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/vendor_communication/views/vendor_communication/components/login_form.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2603249245f8f74cb749b63-42829591',
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
  'unifunc' => 'content_5f8f74cb817b15_90940148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f74cb817b15_90940148')) {function content_5f8f74cb817b15_90940148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','vendor_communication.please_log_in_to_be_notified','sign_in','vendor_communication.please_log_in_to_be_notified'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="new_thread_login_form" class="hidden ty-vendor-communication-login" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <h3>
            <?php echo $_smarty_tpl->__("vendor_communication.please_log_in_to_be_notified");?>

        </h3>
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"new_thread_login_form_popup"), 0);?>

    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/views/vendor_communication/components/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/views/vendor_communication/components/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="new_thread_login_form" class="hidden ty-vendor-communication-login" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
    <div class="ty-login-popup">
        <h3>
            <?php echo $_smarty_tpl->__("vendor_communication.please_log_in_to_be_notified");?>

        </h3>
        <?php echo $_smarty_tpl->getSubTemplate ("views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"popup",'id'=>"new_thread_login_form_popup"), 0);?>

    </div>
</div>
<?php }?><?php }} ?>
