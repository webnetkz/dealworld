<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 21:22:10
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10309855075f8f2ad20d24c2-38016711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6f67f33823008bdf936d0a10de9e8a997c9083' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10309855075f8f2ad20d24c2-38016711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'filter' => 0,
    'filter_uid' => 0,
    'collapse' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f2ad20f32e7_83437073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f2ad20f32e7_83437073')) {function content_5f8f2ad20f32e7_83437073($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::REGION")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_region.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::ZONE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_zone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_locations/hooks/blocks/product_filters_variants_element.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::REGION")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_region.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['field_type']==constant("\Tygh\Addons\VendorLocations\Enum\FilterTypes::ZONE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_locations/blocks/product_filters/components/product_filter_location_zone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('filter_uid'=>$_smarty_tpl->tpl_vars['filter_uid']->value,'filter'=>$_smarty_tpl->tpl_vars['filter']->value,'collapse'=>$_smarty_tpl->tpl_vars['collapse']->value), 0);?>

    <?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/product_filters.js"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
