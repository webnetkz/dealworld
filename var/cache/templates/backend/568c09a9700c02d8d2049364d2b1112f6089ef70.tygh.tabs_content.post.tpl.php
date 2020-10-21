<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:08
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14941118695f8f08208d4504-95575490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568c09a9700c02d8d2049364d2b1112f6089ef70' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14941118695f8f08208d4504-95575490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f08208d7df4_64051183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f08208d7df4_64051183')) {function content_5f8f08208d7df4_64051183($_smarty_tpl) {?><div class="hidden" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
