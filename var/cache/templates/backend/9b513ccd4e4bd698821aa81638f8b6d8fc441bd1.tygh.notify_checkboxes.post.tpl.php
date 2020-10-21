<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:01
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/rus_unisender/hooks/select_popup/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19435489365f8ef685e5a259-06129368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b513ccd4e4bd698821aa81638f8b6d8fc441bd1' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/rus_unisender/hooks/select_popup/notify_checkboxes.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19435489365f8ef685e5a259-06129368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_send_sms_order' => 0,
    'show_send_sms_shipment' => 0,
    'prefix' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef685e613c1_74713815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef685e613c1_74713815')) {function content_5f8ef685e613c1_74713815($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.rus_unisender.notify_unisender_users'));
?>
<?php if ($_smarty_tpl->tpl_vars['show_send_sms_order']->value||$_smarty_tpl->tpl_vars['show_send_sms_shipment']->value) {?>
<li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_unisender_users">
    <input type="checkbox" name="__notify_unisender_users" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_unisender_users" value="Y" checked="checked" onclick="Tygh.$('input[name=__notify_unisender_users]').prop('checked', this.checked);" />
    <?php echo $_smarty_tpl->__("addons.rus_unisender.notify_unisender_users");?>
</label></a>
</li>
<?php }?><?php }} ?>
