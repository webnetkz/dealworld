<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:40:30
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/step_by_step_checkout/hooks/profile_fields/field_settings.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9958068465f8ef6de7cfb49-34263528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd845ed88f735da6500289c8c3b00d2e8cc49be6c' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/step_by_step_checkout/hooks/profile_fields/field_settings.override.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9958068465f8ef6de7cfb49-34263528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'has_billing_and_shipping_email_profile_field' => 0,
    'section' => 0,
    'field' => 0,
    '_show' => 0,
    'area' => 0,
    '_required' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6de924059_70890225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6de924059_70890225')) {function content_5f8ef6de924059_70890225($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('step_by_step_checkout.tooltip.email_can_not_be_disabled','step_by_step_checkout.tooltip.email_can_not_be_disabled'));
?>
<?php if ($_smarty_tpl->tpl_vars['has_billing_and_shipping_email_profile_field']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['section']->value===smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")&&$_smarty_tpl->tpl_vars['field']->value['profile_type']===smarty_modifier_enum("ProfileTypes::CODE_USER")&&in_array($_smarty_tpl->tpl_vars['field']->value['field_name'],array("email","phone"))) {?>
        <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
        <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-skipp-check-checkbox"/>
        <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
        <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="N") {?>disabled="disabled"<?php }?> class="cm-skipp-check-checkbox"/>
        </span>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="email"&&$_smarty_tpl->tpl_vars['field']->value['profile_type']==smarty_modifier_enum("ProfileTypes::CODE_USER")&&in_array($_smarty_tpl->tpl_vars['section']->value,array(smarty_modifier_enum("ProfileFieldSections::BILLING_ADDRESS"),smarty_modifier_enum("ProfileFieldSections::SHIPPING_ADDRESS")))) {?>
        <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N"/>
        <input type="radio" name="fields_data[email][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked"<?php }?> id="sw_req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y"/>
        <span id="req_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['area']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y") {?>checked="checked"<?php }?> disabled="disabled"/>
        </span>

        <?php if ($_smarty_tpl->tpl_vars['area']->value===smarty_modifier_enum("ProfileFieldAreas::CHECKOUT")) {?>
            <?php ob_start();?><?php echo $_smarty_tpl->__("step_by_step_checkout.tooltip.email_can_not_be_disabled");?>
<?php $_tmp15=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_tmp15), 0);?>

        <?php }?>
    <?php }?>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['area']->value===smarty_modifier_enum("ProfileFieldAreas::CHECKOUT")&&$_smarty_tpl->tpl_vars['section']->value===smarty_modifier_enum("ProfileFieldSections::CONTACT_INFORMATION")&&$_smarty_tpl->tpl_vars['field']->value['profile_type']===smarty_modifier_enum("ProfileTypes::CODE_USER")&&$_smarty_tpl->tpl_vars['field']->value['field_name']==="email") {?>
        <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y"/>
        <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_show']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_show']->value]=="Y") {?>checked="checked" disabled="disabled"<?php }?> class="cm-skipp-check-checkbox"/>

        <input type="hidden" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y"/>
        <span>
            <input type="checkbox" name="fields_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_id'], ENT_QUOTES, 'UTF-8');?>
][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_required']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['_required']->value]=="Y") {?>checked="checked"  disabled="disabled"<?php }?> class="cm-skipp-check-checkbox"/>
        </span>
        <?php ob_start();?><?php echo $_smarty_tpl->__("step_by_step_checkout.tooltip.email_can_not_be_disabled");?>
<?php $_tmp16=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_tmp16), 0);?>

    <?php }?>
<?php }?><?php }} ?>
