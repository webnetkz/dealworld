<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:42:23
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/blocks/languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18650870195f8ef74faf7c78-80672557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02667053cb64a4b156bcc545804e650ce7577840' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/blocks/languages.tpl',
      1 => 1603099820,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18650870195f8ef74faf7c78-80672557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'languages' => 0,
    'dropdown_limit' => 0,
    'config' => 0,
    'language' => 0,
    'format' => 0,
    'code' => 0,
    'uid' => 0,
    'key_name' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef74fba85e4_18964742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef74fba85e4_18964742')) {function content_5f8ef74fba85e4_18964742($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_language','change_language'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['languages']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value>0&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)<=$_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-select-wrapper ty-languages">
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                <a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("change_language");?>
" class="ty-languages__item<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }
if (@constant('DESCR_SL')==$_smarty_tpl->tpl_vars['code']->value) {?> ty-languages__active<?php }?>"><i class="ty-flag ty-flag-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i><?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');
}?></a>
            <?php } ?>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable("name", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <div class="ty-select-wrapper<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>@constant('CART_LANGUAGE'),'display_icons'=>true,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value,'language_var_name'=>"sl",'link_class'=>"hidden-phone hidden-tablet"), 0);?>
</div>
    <?php }?>
<?php }?>

<!--languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/languages.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/languages.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['languages']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value>0&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)<=$_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-select-wrapper ty-languages">
            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                <a href="<?php echo htmlspecialchars(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("change_language");?>
" class="ty-languages__item<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }
if (@constant('DESCR_SL')==$_smarty_tpl->tpl_vars['code']->value) {?> ty-languages__active<?php }?>"><i class="ty-flag ty-flag-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"></i><?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');
}?></a>
            <?php } ?>
        </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value=="name") {?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable("name", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["key_name"] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <div class="ty-select-wrapper<?php if ($_smarty_tpl->tpl_vars['format']->value=="icon") {?> ty-languages__icon-link<?php }?>"><?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'suffix'=>"language_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>@constant('CART_LANGUAGE'),'display_icons'=>true,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value,'language_var_name'=>"sl",'link_class'=>"hidden-phone hidden-tablet"), 0);?>
</div>
    <?php }?>
<?php }?>

<!--languages_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?><?php }} ?>
