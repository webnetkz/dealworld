<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:51:38
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/hidpi/hooks/theme_editor/logo_uploader.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132294345f8ef97aaca529-58836942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52c414880fafda627ac68e3d3b05264effa3ec9b' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/hidpi/hooks/theme_editor/logo_uploader.post.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2132294345f8ef97aaca529-58836942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'id' => 0,
    'prefix' => 0,
    'var_name' => 0,
    'id_var_name' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef97aaea153_72388946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef97aaea153_72388946')) {function content_5f8ef97aaea153_72388946($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hidpi.upload_high_res_image.tooltip','hidpi.upload_high_res_image','hidpi.upload_high_res_image.tooltip','hidpi.upload_high_res_image'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['var_name'] = new Smarty_variable("logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]", null, 0);?>
<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['id_var_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp3, null, 0);?>
<div class="te-warning-info clearfix">
    <br>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_FALSE'), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" />
    <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_TRUE'), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image']==="Y") {?>checked="checked"<?php }?>/>
    <label for="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hidpi.upload_high_res_image.tooltip");?>
" class="cm-tooltip"> <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <i class="ty-icon-help-circle"></i></label>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hidpi/hooks/theme_editor/logo_uploader.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hidpi/hooks/theme_editor/logo_uploader.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['var_name'] = new Smarty_variable("logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['id']->value)."]", null, 0);?>
<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['id_var_name'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp4, null, 0);?>
<div class="te-warning-info clearfix">
    <br>
    <input type="hidden" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_FALSE'), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_hidden" />
    <input type="checkbox" name="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(@constant('HIDPI_IS_HIGH_RES_TRUE'), ENT_QUOTES, 'UTF-8');?>
" id="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['addons']->value['hidpi']['default_upload_high_res_image']==="Y") {?>checked="checked"<?php }?>/>
    <label for="is_high_res_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("hidpi.upload_high_res_image.tooltip");?>
" class="cm-tooltip"> <?php echo $_smarty_tpl->__("hidpi.upload_high_res_image");?>
 <i class="ty-icon-help-circle"></i></label>
</div><?php }?><?php }} ?>
