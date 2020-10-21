<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:53
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/picker/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10739540495f8f0799c25d70-10427309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98453316a045f895f1fd2a5c714156aaae2cdc79' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/picker/picker.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10739540495f8f0799c25d70-10427309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'picker_id' => 0,
    'id' => 0,
    'input_name' => 0,
    'multiple' => 0,
    'show_advanced' => 0,
    'autofocus' => 0,
    'autoopen' => 0,
    'allow_clear' => 0,
    'item_ids' => 0,
    'empty_variant_text' => 0,
    'dropdown_css_class' => 0,
    'allow_add' => 0,
    'allow_sorting' => 0,
    'required' => 0,
    'disabled' => 0,
    'allow_multiple_created_objects' => 0,
    'close_on_select' => 0,
    'container_css_class' => 0,
    'view_mode' => 0,
    'meta' => 0,
    'type' => 0,
    'simple_class' => 0,
    'advanced_class' => 0,
    'runtime' => 0,
    'object_picker_advanced_btn_class' => 0,
    'tabindex' => 0,
    'select2_tabindex' => 0,
    'select_id' => 0,
    'select_class' => 0,
    'submit_url' => 0,
    'submit_form' => 0,
    'width' => 0,
    'picker_text_key' => 0,
    'created_object_holder_selector' => 0,
    'show_empty_variant' => 0,
    'item_id' => 0,
    'result_class' => 0,
    'selection_title_pre' => 0,
    'selection_title_post' => 0,
    'selection_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0799c8d180_72103651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0799c8d180_72103651')) {function content_5f8f0799c8d180_72103651($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_to_json')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.to_json.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('none','add'));
?>


<?php $_smarty_tpl->tpl_vars['picker_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['picker_id']->value)===null||$tmp==='' ? uniqid() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['select_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "product_categories_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['multiple'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['multiple']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_advanced'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_advanced']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autofocus'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autofocus']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['autoopen'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['autoopen']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_clear'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_clear']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['item_ids'] = new Smarty_variable(array_filter((($tmp = @$_smarty_tpl->tpl_vars['item_ids']->value)===null||$tmp==='' ? array() : $tmp)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['empty_variant_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['empty_variant_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("none") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['dropdown_css_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['dropdown_css_class']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_add'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_add']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_sorting'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_sorting']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['required'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['required']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['disabled']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_multiple_created_objects'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['close_on_select'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['close_on_select']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['container_css_class'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['container_css_class']->value)===null||$tmp==='' ? ".object-picker--categories" : $tmp), null, 0);?>

<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value, ENT_QUOTES, 'UTF-8');?>
" value=""/>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="external") {?>object-picker--external<?php }?> object-picker--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value=="list") {?>object-picker__simple--list<?php }?> object-picker__simple--categories <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value&&!$_smarty_tpl->tpl_vars['disabled']->value) {?>
            <div class="object-picker__advanced object-picker__advanced--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['advanced_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_id'=>"object_picker_advanced_".((string)$_smarty_tpl->tpl_vars['picker_id']->value),'company_ids'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'rnd'=>"category",'data_id'=>"categories",'view_mode'=>"button",'but_meta'=>"object-categories-add__picker object-picker__advanced-btn object-picker__advanced-btn--categories ".((string)$_smarty_tpl->tpl_vars['object_picker_advanced_btn_class']->value),'but_icon'=>"icon-reorder",'but_text'=>false,'multiple'=>true), 0);?>

            </div>
        <?php }?>

        <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?>disabled<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select2_tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-object-picker object-picker__select object-picker__select--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-dropdown-css-class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_css_class']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-close-on-select="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['close_on_select']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-object-type="categories"
            data-ca-object-picker-escape-html="false"
            data-ca-object-picker-ajax-url="<?php echo htmlspecialchars(fn_url("categories.get_categories_list"), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-ajax-delay="250"
            data-ca-object-picker-template-result-selector="#object_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-autofocus="<?php echo htmlspecialchars(smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-autoopen="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-allow-sorting="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_sorting']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-required="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['required']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder="<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder-value=""
            data-ca-object-picker-width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-extended-picker-id="object_picker_advanced_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                data-ca-object-picker-enable-create-object="true"
                data-ca-object-picker-template-result-new-selector="#object_picker_result_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-template-selection-new-selector="#object_picker_selection_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-created-object-holder-selector="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['created_object_holder_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-allow-multiple-created-objects="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_multiple_created_objects']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
                data-ca-object-picker-allow-clear="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-predefined-variants="<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty_variant_text']->value, ENT_QUOTES, 'UTF-8');?>
<?php $_tmp6=ob_get_clean();?><?php echo htmlspecialchars(smarty_modifier_to_json(array(array("id"=>0,"text"=>$_tmp5,"data"=>array("name"=>$_tmp6)))), ENT_QUOTES, 'UTF-8');?>
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

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result object-picker__result--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"result",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection object-picker__selection--categories <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selection_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"selection",'title_pre'=>$_smarty_tpl->tpl_vars['selection_title_pre']->value,'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"load"), 0);?>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_result_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__result-categories object-picker__result-categories--new">
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"new_item",'title_pre'=>$_smarty_tpl->__("add"),'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value,'help'=>true), 0);?>

    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_new_selector_categories_template_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__selection-categories object-picker__selection-categories--new">
        <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"new_item",'title_pre'=>((string)$_smarty_tpl->tpl_vars['selection_title_pre']->value),'title_post'=>$_smarty_tpl->tpl_vars['selection_title_post']->value,'help'=>false,'icon'=>false), 0);?>

    </div>
<?php echo '</script'; ?>
>
<?php }} ?>
