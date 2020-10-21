<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:40:14
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629318905f8ef6ce440505-73704134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81df88072cbc799add1fefde4a55353280623f34' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1629318905f8ef6ce440505-73704134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6ce445ba7_45193263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6ce445ba7_45193263')) {function content_5f8ef6ce445ba7_45193263($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==@constant('PROFILE_FIELD_TYPE_VENDOR_PLAN')) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }?>
<?php }} ?>
