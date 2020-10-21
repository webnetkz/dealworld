<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:38:43
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1119699915f8ef6739f7993-00366327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22500cda706d06270139d949d1265dd7cf396ab' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/previewer.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1119699915f8ef6739f7993-00366327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6739fbb76_68531436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6739fbb76_68531436')) {function content_5f8ef6739fbb76_68531436($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
