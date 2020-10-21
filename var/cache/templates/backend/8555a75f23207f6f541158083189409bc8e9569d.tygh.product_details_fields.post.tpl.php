<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:53
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20453974205f8f0799c042b8-99951434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8555a75f23207f6f541158083189409bc8e9569d' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20453974205f8f0799c042b8-99951434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0799c137b0_52178901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0799c137b0_52178901')) {function content_5f8f0799c137b0_52178901($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('approved','yes','pending','no'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation']=="Y"||$_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit']=="Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("no");
}?>
        	</div>
        </div>
    </div>
<?php }?><?php }} ?>
