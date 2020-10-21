<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:52:08
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_detailed_images.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11175933825f8f07a8c07eb2-07277213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9b1bf27614ee2c769cdc7e3f5657a68848150b7' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/master_products/hooks/products/update_detailed_images.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11175933825f8f07a8c07eb2-07277213',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'product_type' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07a8c19527_73059953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07a8c19527_73059953')) {function content_5f8f07a8c19527_73059953($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('images'));
?>
<?php if (($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']&&!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("detailed_image"))||($_smarty_tpl->tpl_vars['product_data']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&isset($_smarty_tpl->tpl_vars['product_data']->value['company_id'])&&$_smarty_tpl->tpl_vars['product_data']->value['company_id']==0)) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("images");?>
:</label>
        <div class="controls">
            <?php echo $_smarty_tpl->getSubTemplate ("common/form_file_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('existing_pairs'=>($_smarty_tpl->tpl_vars['product_data']->value['main_pair'] ? array($_smarty_tpl->tpl_vars['product_data']->value['main_pair']) : array())+(($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['image_pairs'])===null||$tmp==='' ? array() : $tmp),'file_name'=>"file",'image_pair_types'=>array('N'=>'product_add_additional_image','M'=>'product_main_image','A'=>'product_additional_image'),'allow_update_files'=>false), 0);?>

        </div>
    </div>
<?php }?>
<?php }} ?>
