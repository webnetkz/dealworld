<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:11:06
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/hooks/companies/company_data.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14131498945f8efe0a964bd3-52659068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baad5727221ff35d6e10ba75e2378a5f428e4ca5' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/paypal_adaptive/hooks/companies/company_data.post.tpl',
      1 => 1603196089,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14131498945f8efe0a964bd3-52659068',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company' => 0,
    'object_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8efe0a981892_86101649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8efe0a981892_86101649')) {function content_5f8efe0a981892_86101649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!empty($_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['main_pair'])) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['width'],'image_height'=>$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['main_pair'],'class'=>"vendor-catalog-verification"), 0);?>

<?php } elseif (!empty($_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['verified'])&&$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['verified']=='verified') {?>
    <span class="vendor-catalog-verification">&nbsp;<?php echo $_smarty_tpl->__('verified_by_paypal');?>
</span>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/paypal_adaptive/hooks/companies/company_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/paypal_adaptive/hooks/companies/company_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!empty($_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['main_pair'])) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['width'],'image_height'=>$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['main_pair'],'class'=>"vendor-catalog-verification"), 0);?>

<?php } elseif (!empty($_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['verified'])&&$_smarty_tpl->tpl_vars['company']->value['paypal_verification_status']['verified']=='verified') {?>
    <span class="vendor-catalog-verification">&nbsp;<?php echo $_smarty_tpl->__('verified_by_paypal');?>
</span>
<?php }
}?><?php }} ?>
