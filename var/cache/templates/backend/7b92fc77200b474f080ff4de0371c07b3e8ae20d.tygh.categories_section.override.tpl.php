<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:50
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_debt_payout/hooks/products/categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8927459175f8f07968b2f28-87649848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b92fc77200b474f080ff4de0371c07b3e8ae20d' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_debt_payout/hooks/products/categories_section.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8927459175f8f07968b2f28-87649848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07968b6412_34124357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07968b6412_34124357')) {function content_5f8f07968b6412_34124357($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
