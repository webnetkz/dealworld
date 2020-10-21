<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:34
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/searchanise/hooks/index/main_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4954208555f8ef6a6815373-28058405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f96f10d911e47e2f158e1867379e955d3b58e51' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/searchanise/hooks/index/main_content.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4954208555f8ef6a6815373-28058405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6a6819832_52980055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6a6819832_52980055')) {function content_5f8ef6a6819832_52980055($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['se_use_custom_frontend_sync_call']) {?>
    <object data="<?php echo fn_url("searchanise.async?no_session=Y","C","current");?>
" style="position:absolute;" width="0" height="0" type="text/html"></object>
<?php }?>
<?php }} ?>
