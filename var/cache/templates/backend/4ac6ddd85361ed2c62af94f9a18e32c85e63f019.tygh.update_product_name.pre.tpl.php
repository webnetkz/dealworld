<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:47
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15708243005f8f079361b9f8-28355472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac6ddd85361ed2c62af94f9a18e32c85e63f019' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_product_name.pre.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15708243005f8f079361b9f8-28355472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0793625f88_58487758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0793625f88_58487758')) {function content_5f8f0793625f88_58487758($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.master_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']) {?>
    <div class="control-group">
        <label for="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        ><?php echo $_smarty_tpl->__("master_products.master_product");?>
:</label>
        <div class="controls" id="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a class="shift-input"
               href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['master_product_id'])), ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>
