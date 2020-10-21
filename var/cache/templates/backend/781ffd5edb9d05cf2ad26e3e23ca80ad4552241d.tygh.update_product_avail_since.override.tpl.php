<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:53:22
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15166737885f8f07f2e784f2-38701174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781ffd5edb9d05cf2ad26e3e23ca80ad4552241d' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15166737885f8f07f2e784f2-38701174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07f2e7bce7_63606166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07f2e7bce7_63606166')) {function content_5f8f07f2e7bce7_63606166($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
