<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:13
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_product_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19737899655f8f0825e345f8-71364797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd8681b465951580d530025d080d30909b3766c' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_product_buttons.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19737899655f8f0825e345f8-71364797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0825e3c9a4_64800362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0825e3c9a4_64800362')) {function content_5f8f0825e3c9a4_64800362($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.sell_this'));
?>
<?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <!-- Overridden by the Common Products for Vendors add-on -->
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn btn-primary",'text'=>$_smarty_tpl->__("master_products.sell_this"),'href'=>"products.sell_master_product?master_product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'method'=>"post"));?>

<?php }?><?php }} ?>
