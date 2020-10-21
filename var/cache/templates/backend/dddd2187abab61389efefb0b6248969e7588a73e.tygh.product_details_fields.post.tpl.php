<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:53
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8894946405f8f0799bba111-72314722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dddd2187abab61389efefb0b6248969e7588a73e' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/suppliers/hooks/companies/product_details_fields.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8894946405f8f0799bba111-72314722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0799bc68a1_99477447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0799bc68a1_99477447')) {function content_5f8f0799bc68a1_99477447($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('supplier'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/supplier_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("supplier"),'name'=>"product_data[supplier_id]",'id'=>"product_data_supplier_id",'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['supplier_id'],'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'read_only'=>$_smarty_tpl->tpl_vars['readonly']->value), 0);?>
<?php }} ?>
