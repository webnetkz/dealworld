<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:40:30
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/buttons/save.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12634959555f8ef6dec1e461-51416901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86a002bb30346ba5fa8d7b5f75d80cb431a11052' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/buttons/save.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12634959555f8ef6dec1e461-51416901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6dec22fa6_62811531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6dec22fa6_62811531')) {function content_5f8ef6dec22fa6_62811531($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("save"),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'allow_href'=>true), 0);?>
<?php }} ?>
