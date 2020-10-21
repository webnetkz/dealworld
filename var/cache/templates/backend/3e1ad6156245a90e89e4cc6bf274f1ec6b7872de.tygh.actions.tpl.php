<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:52:39
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3339343255f8f07c73c8c54-16419625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e1ad6156245a90e89e4cc6bf274f1ec6b7872de' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/bulk_edit/actions.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3339343255f8f07c73c8c54-16419625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07c73df6b3_67285552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07c73df6b3_67285552')) {function content_5f8f07c73df6b3_67285552($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('category_deletion_side_effects','export_products'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[categories.m_delete]",'form'=>"category_tree_form",'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_smarty_tpl->__("category_deletion_side_effects"))));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_products"),'dispatch'=>"dispatch[products.export_range]",'form'=>"category_tree_form"));?>

</li>
<?php }} ?>
