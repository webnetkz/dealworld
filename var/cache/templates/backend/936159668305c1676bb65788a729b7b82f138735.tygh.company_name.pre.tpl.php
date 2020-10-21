<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:42:22
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/companies/company_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6188615905f8ef74e578091-34154692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '936159668305c1676bb65788a729b7b82f138735' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/companies/company_name.pre.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6188615905f8ef74e578091-34154692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef74e57e1e4_04780402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef74e57e1e4_04780402')) {function content_5f8ef74e57e1e4_04780402($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.all_vendors_master_product'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['object']->value['company_id']&&$_smarty_tpl->tpl_vars['object']->value['product_id']&&!$_smarty_tpl->tpl_vars['clone']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('object', null, 1);
$_smarty_tpl->tpl_vars['object']->value['company_name'] = $_smarty_tpl->__("master_products.all_vendors_master_product");
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['object'] = clone $_smarty_tpl->tpl_vars['object'];?>
<?php }?><?php }} ?>
