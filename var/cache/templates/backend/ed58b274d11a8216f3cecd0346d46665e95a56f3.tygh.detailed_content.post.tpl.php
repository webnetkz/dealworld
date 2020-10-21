<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:05
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/age_verification/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20516221475f8f081dbf39c5-80804608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed58b274d11a8216f3cecd0346d46665e95a56f3' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/age_verification/hooks/products/detailed_content.post.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20516221475f8f081dbf39c5-80804608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f081dbf74f4_21536567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f081dbf74f4_21536567')) {function content_5f8f081dbf74f4_21536567($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/age_verification/views/age_verification/components/update_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('array_name'=>"product_data",'record'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>
<?php }} ?>
