<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:52:28
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/warehouses/hooks/products/update_product_amount.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9107363055f8f07bc63d7c8-60183327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c97f105c3f2660e7ba9a2c5cdce5bad034e530d3' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/warehouses/hooks/products/update_product_amount.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9107363055f8f07bc63d7c8-60183327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_warehouses_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07bc646288_10927753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07bc646288_10927753')) {function content_5f8f07bc646288_10927753($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('in_stock'));
?>
<?php if (isset($_smarty_tpl->tpl_vars['product_warehouses_amount']->value)) {?>
    <div class="control-group">
        <label class="control-label" for="elm_in_stock"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[amount]" id="elm_in_stock" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_warehouses_amount']->value, ENT_QUOTES, 'UTF-8');?>
" disabled class="input-small" />
        </div>
    </div>
<?php }?>
<?php }} ?>
