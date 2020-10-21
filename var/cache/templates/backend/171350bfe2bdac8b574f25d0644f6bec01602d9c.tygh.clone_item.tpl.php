<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:53:52
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/buttons/clone_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11216988255f8f0810604607-58846006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171350bfe2bdac8b574f25d0644f6bec01602d9c' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/buttons/clone_item.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11216988255f8f0810604607-58846006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0810607668_90262356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0810607668_90262356')) {function content_5f8f0810607668_90262356($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone'));
?>
<a class="icon-copy cm-tooltip" name="clone" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
