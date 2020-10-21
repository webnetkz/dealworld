<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:13
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2536765f8f0825e45fa2-20178612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c113534d106312ec2b1515f309b9d0c159b7a6a4' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2536765f8f0825e45fa2-20178612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0825e4a2e9_16146523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0825e4a2e9_16146523')) {function content_5f8f0825e4a2e9_16146523($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?>
<?php }} ?>
