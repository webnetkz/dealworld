<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:53:36
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1679221675f8f08003dc5f0-78254007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bcf463dfb3f8dac748eef2548b97675812f024c' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1679221675f8f08003dc5f0-78254007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f08003df840_73001203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f08003df840_73001203')) {function content_5f8f08003df840_73001203($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
