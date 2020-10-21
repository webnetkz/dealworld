<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:13
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5707999695f8f0825e50f03-93631557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50781e55373451da9a118b79245ea539dd175c0a' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_product_buttons.pre.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5707999695f8f0825e50f03-93631557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0825e54781_77147390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0825e54781_77147390')) {function content_5f8f0825e54781_77147390($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?><?php }} ?>
