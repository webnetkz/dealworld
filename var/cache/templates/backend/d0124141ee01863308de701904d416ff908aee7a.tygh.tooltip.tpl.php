<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:40:30
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20104563925f8ef6dea49111-48507991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0124141ee01863308de701904d416ff908aee7a' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/tooltip.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20104563925f8ef6dea49111-48507991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6dea4da52_40356594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6dea4da52_40356594')) {function content_5f8ef6dea4da52_40356594($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
