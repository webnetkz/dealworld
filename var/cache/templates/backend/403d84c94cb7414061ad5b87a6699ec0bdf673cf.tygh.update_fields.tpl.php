<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:05
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/age_verification/views/age_verification/components/update_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15901337765f8f081dbfec67-12344816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '403d84c94cb7414061ad5b87a6699ec0bdf673cf' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/age_verification/views/age_verification/components/update_fields.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15901337765f8f081dbfec67-12344816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'array_name' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f081dc0dda5_89377021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f081dc0dda5_89377021')) {function content_5f8f081dc0dda5_89377021($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification','age_limit','years','age_warning_message'));
?>
<div id="age_verification_fields" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label for="age_verification" class="control-label"><?php echo $_smarty_tpl->__("age_verification");?>
:</label>
            <div class="controls">
                <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_verification]" value="N">
                <span class="checkbox">
                    <input type="checkbox" id="age_verification" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_verification]" value="Y" <?php if ($_smarty_tpl->tpl_vars['record']->value['age_verification']=="Y") {?>checked="checked"<?php }?>>
                </span>
            </div>
        </div>

        <div class="control-group">
            <label for="age_limit" class="control-label"><?php echo $_smarty_tpl->__("age_limit");?>
:</label>
            <div class="controls">
                <input type="text" id="age_limit" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_limit]" size="10" maxlength="2" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['record']->value['age_limit'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro">
                <span> &nbsp; <?php echo $_smarty_tpl->__("years");?>
</span>
            </div>
        </div>

        <div class="control-group">
            <label for="age_warning_message" class="control-label"><?php echo $_smarty_tpl->__("age_warning_message");?>
:</label>
            <div class="controls">
                <textarea id="age_warning_message" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array_name']->value, ENT_QUOTES, 'UTF-8');?>
[age_warning_message]" cols="55" rows="4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['age_warning_message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            </div>
        </div>
    </fieldset>
</div><?php }} ?>
