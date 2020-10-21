<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:45:10
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/master_products/hooks/products/prices_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4105993105f8ef7f643bcb9-37679239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b610274d6bc83c8ca984cea626dbc4cfad91dbbf' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/master_products/hooks/products/prices_block.override.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4105993105f8ef7f643bcb9-37679239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'hide_add_to_cart_button' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef7f64b3271_58844265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef7f64b3271_58844265')) {function content_5f8ef7f64b3271_58844265($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.price_from','master_products.price_from'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&!$_smarty_tpl->tpl_vars['product']->value['master_product_id']) {?>
<?php if (floatval($_smarty_tpl->tpl_vars['product']->value['price'])||$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="P"||($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value=="Y"&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A")) {
$_smarty_tpl->_capture_stack[0][] = array("master_product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?><span class="ty-price<?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&!$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>"id="line_discounted_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price'],'span_id'=>"discounted_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'live_editor_phrase'=>$_smarty_tpl->tpl_vars['product']->value['base_price']), 0);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->__("master_products.price_from",array("[formatted_price]"=>Smarty::$_smarty_vars['capture']["master_product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)],"[clean_price]"=>$_smarty_tpl->tpl_vars['product']->value['price'],"[currency]"=>$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]));
}?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/master_products/hooks/products/prices_block.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/master_products/hooks/products/prices_block.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['product']->value['company_id']&&!$_smarty_tpl->tpl_vars['product']->value['master_product_id']) {?>
<?php if (floatval($_smarty_tpl->tpl_vars['product']->value['price'])||$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="P"||($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value=="Y"&&$_smarty_tpl->tpl_vars['product']->value['zero_price_action']=="A")) {
$_smarty_tpl->_capture_stack[0][] = array("master_product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null); ob_start(); ?><span class="ty-price<?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price'])&&!$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>"id="line_discounted_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price'],'span_id'=>"discounted_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'live_editor_phrase'=>$_smarty_tpl->tpl_vars['product']->value['base_price']), 0);?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->__("master_products.price_from",array("[formatted_price]"=>Smarty::$_smarty_vars['capture']["master_product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)],"[clean_price]"=>$_smarty_tpl->tpl_vars['product']->value['price'],"[currency]"=>$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]));
}?>
<?php }?>
<?php }?><?php }} ?>
