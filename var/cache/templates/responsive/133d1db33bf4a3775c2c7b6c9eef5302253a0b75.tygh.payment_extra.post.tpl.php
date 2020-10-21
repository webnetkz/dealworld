<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 19:54:56
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10641697445f8f1660f20d68-18398916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '133d1db33bf4a3775c2c7b6c9eef5302253a0b75' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/reward_points/hooks/checkout/payment_extra.post.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10641697445f8f1660f20d68-18398916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart_products' => 0,
    'cart' => 0,
    'user_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f1660f33ea6_14366659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f1660f33ea6_14366659')) {function content_5f8f1660f33ea6_14366659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout"&&$_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="ty-right">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/checkout/payment_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/checkout/payment_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['runtime']->value['mode']=="checkout"&&$_smarty_tpl->tpl_vars['cart_products']->value&&$_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_info']->value['points']>0) {?>
<div class="ty-right">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/hooks/checkout/payment_options.post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }?>
<?php }?><?php }} ?>
