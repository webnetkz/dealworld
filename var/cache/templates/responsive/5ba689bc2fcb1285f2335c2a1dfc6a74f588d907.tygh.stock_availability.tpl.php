<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:06:42
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/warehouses/views/warehouses/stock_availability.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5001186025f8efd02819902-44984154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba689bc2fcb1285f2335c2a1dfc6a74f588d907' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/warehouses/views/warehouses/stock_availability.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5001186025f8efd02819902-44984154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_id' => 0,
    'show_stock_availability' => 0,
    'location' => 0,
    'warn_about_delay' => 0,
    'in_stock_stores_count' => 0,
    'availbe_stores_count' => 0,
    'shipping_delay' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8efd02840435_67414994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8efd02840435_67414994')) {function content_5f8efd02840435_67414994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.product_availability','warehouses.product_availability'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div data-ca-warehouses-stock-availability-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
     id="warehouses_stock_availability_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_stock_availability']->value) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <div class="ty-warehouses-shipping__title">
                <?php echo $_smarty_tpl->__("warehouses.product_availability");?>
:
                <div class="ty-warehouses__geolocation">
                    <span class="ty-warehouses__geolocation__opener">
                        <i class="ty-icon-location-arrow"></i>
                        <span class="ty-warehouses__geolocation__opener-text">
                                <span class="ty-warehouses__geolocation__location"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['city'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_stock_availability']->value||$_smarty_tpl->tpl_vars['warn_about_delay']->value) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/product_availability.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('in_stock_stores_count'=>$_smarty_tpl->tpl_vars['in_stock_stores_count']->value,'availbe_stores_count'=>$_smarty_tpl->tpl_vars['availbe_stores_count']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/shipping_delay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('warn_about_delay'=>$_smarty_tpl->tpl_vars['warn_about_delay']->value,'shipping_delay'=>$_smarty_tpl->tpl_vars['shipping_delay']->value), 0);?>

        </div>
    <?php }?>
<!--warehouses_stock_availability_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php echo smarty_function_script(array('src'=>"js/addons/warehouses/stock_availability.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/views/warehouses/stock_availability.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/warehouses/views/warehouses/stock_availability.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div data-ca-warehouses-stock-availability-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"
     id="warehouses_stock_availability_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['show_stock_availability']->value) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <div class="ty-warehouses-shipping__title">
                <?php echo $_smarty_tpl->__("warehouses.product_availability");?>
:
                <div class="ty-warehouses__geolocation">
                    <span class="ty-warehouses__geolocation__opener">
                        <i class="ty-icon-location-arrow"></i>
                        <span class="ty-warehouses__geolocation__opener-text">
                                <span class="ty-warehouses__geolocation__location"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value['city'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['show_stock_availability']->value||$_smarty_tpl->tpl_vars['warn_about_delay']->value) {?>
        <div class="ty-warehouses-shipping__wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/product_availability.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('in_stock_stores_count'=>$_smarty_tpl->tpl_vars['in_stock_stores_count']->value,'availbe_stores_count'=>$_smarty_tpl->tpl_vars['availbe_stores_count']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_id']->value), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/warehouses/components/shipping_delay.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('warn_about_delay'=>$_smarty_tpl->tpl_vars['warn_about_delay']->value,'shipping_delay'=>$_smarty_tpl->tpl_vars['shipping_delay']->value), 0);?>

        </div>
    <?php }?>
<!--warehouses_stock_availability_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php echo smarty_function_script(array('src'=>"js/addons/warehouses/stock_availability.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
