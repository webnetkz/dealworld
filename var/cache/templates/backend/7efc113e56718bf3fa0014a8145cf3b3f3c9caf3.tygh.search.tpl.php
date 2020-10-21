<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:42:22
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13102872765f8ef74e63ec72-68847251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7efc113e56718bf3fa0014a8145cf3b3f3c9caf3' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/buttons/search.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13102872765f8ef74e63ec72-68847251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef74e642cc1_92823494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef74e642cc1_92823494')) {function content_5f8ef74e642cc1_92823494($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
