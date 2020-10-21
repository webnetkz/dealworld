<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:52:05
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8724672875f8f07a5a8bcf5-07130117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '145a891d784fb67016f541fae47046514aa4aee5' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8724672875f8f07a5a8bcf5-07130117',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f07a5a949d6_56087908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f07a5a949d6_56087908')) {function content_5f8f07a5a949d6_56087908($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapproval_reason'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason']&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")||$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"))) {?>
    <div class="control-group">
        <label for="elm_disapproval_reason" class="control-label">
            <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
        </label>
        <div class="controls">
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    </div>
<?php }?><?php }} ?>
