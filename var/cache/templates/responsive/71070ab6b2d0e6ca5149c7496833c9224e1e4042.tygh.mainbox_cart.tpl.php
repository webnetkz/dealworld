<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 19:54:41
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/common/mainbox_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19879741855f8f16516cef71-86519277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71070ab6b2d0e6ca5149c7496833c9224e1e4042' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/common/mainbox_cart.tpl',
      1 => 1603099823,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19879741855f8f16516cef71-86519277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'mainbox_id' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f16516e2e69_54761222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f16516e2e69_54761222')) {function content_5f8f16516e2e69_54761222($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div>
    <div class="ty-mainbox-cart__body" <?php if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['content']->value;
if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/mainbox_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/mainbox_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div>
    <div class="ty-mainbox-cart__body" <?php if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['content']->value;
if ($_smarty_tpl->tpl_vars['mainbox_id']->value) {?><!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainbox_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div><?php }?><?php }} ?>
