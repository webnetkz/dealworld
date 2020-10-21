<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:01
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/suppliers/hooks/select_popup/notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3155308615f8ef685e3d2d2-45247599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff8c078eccbbe47dacbe07d1a6030fe09efc1f8' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/suppliers/hooks/select_popup/notify_checkboxes.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3155308615f8ef685e3d2d2-45247599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notify' => 0,
    'order_info' => 0,
    'prefix' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef685e43898_86897991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef685e43898_86897991')) {function content_5f8ef685e43898_86897991($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['notify']->value&&$_smarty_tpl->tpl_vars['order_info']->value['have_suppliers']) {?>
    <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_supplier">
        <input type="checkbox" name="__notify_supplier" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_supplier" value="Y" checked="checked" onclick="Tygh.$('input[name=__notify_supplier]').prop('checked', this.checked);" />
        <?php echo $_smarty_tpl->__("notify_supplier");?>
</label></a>
    </li>
<?php }?><?php }} ?>
