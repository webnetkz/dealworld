<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:40:58
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7263982315f8ef6fad44987-36950907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33dbbf1034efad40b7d1b2e2786a37e02f59bfdb' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/reward_points/hooks/profiles/list_extra_links.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7263982315f8ef6fad44987-36950907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6fada0447_06331670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6fada0447_06331670')) {function content_5f8ef6fada0447_06331670($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C"&&fn_check_permissions("reward_points","userlog","admin","GET")) {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {
echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
