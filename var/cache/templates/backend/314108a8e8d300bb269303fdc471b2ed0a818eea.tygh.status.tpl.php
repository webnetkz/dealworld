<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:52:39
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/bulk_edit/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6000779925f8f07c73a00d2-96161933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '314108a8e8d300bb269303fdc471b2ed0a818eea' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/bulk_edit/status.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6000779925f8f07c73a00d2-96161933',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07c73bbbb8_15385216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07c73bbbb8_15385216')) {function content_5f8f07c73bbbb8_15385216($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status','active','change_to_status','disabled','change_to_status','hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("active")));
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp1,'dispatch'=>"dispatch[categories.m_activate]",'form'=>"category_tree_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("disabled")));
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[categories.m_disable]",'form'=>"category_tree_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->__("hidden")));
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[categories.m_hide]",'form'=>"category_tree_form"));?>

</li>
<?php }} ?>
