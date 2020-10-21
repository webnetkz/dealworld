<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:05
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11920872675f8f081dbe10e3-49928291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb2e05f7d5b55d0e8c2d2f9f69f9843e7a3c2ea7' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/bestsellers/hooks/products/detailed_content.post.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11920872675f8f081dbe10e3-49928291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_edit_sales_amount' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f081dbebae3_08926333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f081dbebae3_08926333')) {function content_5f8f081dbebae3_08926333($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestselling','sales_amount'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("bestselling"),'target'=>"#acc_bestsellers"), 0);?>

<div id="acc_bestsellers" class="collapse in <?php if (!$_smarty_tpl->tpl_vars['allow_edit_sales_amount']->value) {?>cm-hide-inputs<?php }?>">
    <div class="control-group">
        <label class="control-label" for="sales_amount"><?php echo $_smarty_tpl->__("sales_amount");?>
</label>
        <div class="controls">
        <input type="text" id="sales_amount" name="product_data[sales_amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['sales_amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-large" size="10" />
        </div>
    </div>
</div><?php }} ?>
