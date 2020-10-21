<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:50
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/categories_section.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8962553985f8f0796878020-51050130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c3e86071aec0f1143c980f77fc3bf93724d8daf' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/categories_section.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8962553985f8f0796878020-51050130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f079687d810_07850801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f079687d810_07850801')) {function content_5f8f079687d810_07850801($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("categories")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:categories_section")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:categories_section"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <!-- Overridden by the Product Variations add-on -->
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:categories_section"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
