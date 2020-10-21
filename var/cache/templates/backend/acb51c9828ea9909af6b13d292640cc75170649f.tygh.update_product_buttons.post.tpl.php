<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:13
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20117178235f8f0825e7dd72-44058923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb51c9828ea9909af6b13d292640cc75170649f' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20117178235f8f0825e7dd72-44058923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'is_form_readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0825e86de4_75895410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0825e86de4_75895410')) {function content_5f8f0825e86de4_75895410($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save','save'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_group_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php } elseif (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>}
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[product_variations.add_product]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php }?>

<?php }} ?>
