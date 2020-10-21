<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:06:42
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2236763395f8efd026f79a0-66967179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e546f33b90294ff99fb495df4739e1f1e1a1882' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2236763395f8efd026f79a0-66967179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'shipping_estimation_product_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8efd027072f5_05940227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8efd027072f5_05940227')) {function content_5f8efd027072f5_05940227($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('shipping_methods'=>null,'product_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value)===null||$tmp==='' ? null : $tmp)), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('shipping_methods'=>null,'product_id'=>(($tmp = @$_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value)===null||$tmp==='' ? null : $tmp)), 0);?>

<?php }?><?php }} ?>
