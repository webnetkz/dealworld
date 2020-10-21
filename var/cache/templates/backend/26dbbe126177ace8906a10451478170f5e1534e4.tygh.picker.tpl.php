<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:17
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/companies/components/picker/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11186842845f8ef695d16e29-95520381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26dbbe126177ace8906a10451478170f5e1534e4' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/companies/components/picker/picker.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11186842845f8ef695d16e29-95520381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'picker_text_key' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'allow_clear' => 0,
    'item_ids' => 0,
    'empty_variant_text' => 0,
    'view_mode' => 0,
    'meta' => 0,
    'select_group_class' => 0,
    'type' => 0,
    'simple_class' => 0,
    'select_class' => 0,
    'submit_url' => 0,
    'submit_form' => 0,
    'width' => 0,
    'dropdown_parent_selector' => 0,
    'show_empty_variant' => 0,
    'item_id' => 0,
    'selection_title_pre' => 0,
    'selection_title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef695dcb428_87548010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef695dcb428_87548010')) {function content_5f8ef695dcb428_87548010($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['picker_text_key'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_text_key']->value)===null||$tmp==='' ? "value" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_clear'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_clear']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value&&$_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") : $tmp), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>
<?php }?>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>object-picker--external<?php }?> object-picker--companies <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--companies <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--companies <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--companies <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="company"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("companies.get_companies_list"), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-id="object_extended_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_external_seleceted_companies_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php echo htmlspecialchars(smarty_modifier_to_json(array(array("id"=>0,"text"=>$_tmp6,"data"=>array("name"=>$_tmp7)))), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php  $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->key => $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="cm-object-picker-object object-picker__selection <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__selection--list<?php }?> object-picker__selection--companies">
        <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_title_pre']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_title_post']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection",'title_pre'=>$_tmp8,'title_post'=>$_tmp9), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--companies">...
    </div>
<?php echo '</script'; ?>
><?php }} ?>
