<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:44:00
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11632760835f8ef7b0d1eaf2-04554401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efacebd33193fb85046b14cf67aa865d97add4ec' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/index/index.tpl',
      1 => 1603099820,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11632760835f8ef7b0d1eaf2-04554401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef7b0d3bd64_11647053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef7b0d3bd64_11647053')) {function content_5f8ef7b0d3bd64_11647053($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/index/index.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/index/index.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
}?><?php }} ?>
