<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:41:15
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/rus_unisender/hooks/profiles/list_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19611946375f8ef70b1b4315-25080246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f3beda87989dc2aef15fba0da064effb17b4f7' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/rus_unisender/hooks/profiles/list_tools.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19611946375f8ef70b1b4315-25080246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'show_unisender_tool' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef70b208ba6_57112818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef70b208ba6_57112818')) {function content_5f8ef70b208ba6_57112818($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.rus_unisender.add_selected_to_unisender'));
?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['user_type']=="C"&&$_smarty_tpl->tpl_vars['show_unisender_tool']->value) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("addons.rus_unisender.add_selected_to_unisender"),'dispatch'=>"dispatch[unisender.add_selected]",'form'=>"userlist_form"));?>
</li>
<?php }?>
<?php }} ?>
