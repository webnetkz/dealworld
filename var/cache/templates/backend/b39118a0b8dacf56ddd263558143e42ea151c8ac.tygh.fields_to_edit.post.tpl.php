<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:53:01
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11026611885f8f07dd0cc748-46473740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b39118a0b8dacf56ddd263558143e42ea151c8ac' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11026611885f8f07dd0cc748-46473740',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07dd0dedd4_85728357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07dd0dedd4_85728357')) {function content_5f8f07dd0dedd4_85728357($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
