<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:06:19
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/suppliers/hooks/products/options_advanced.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3730837885f8efceb752903-11404646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ebced41c6e382b6f5996b37b82334c866fed41' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/suppliers/hooks/products/options_advanced.post.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3730837885f8efceb752903-11404646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'product' => 0,
    'capture_options_vs_qty' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8efceb771226_75255380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8efceb771226_75255380')) {function content_5f8efceb771226_75255380($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('supplier','supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['suppliers']['display_supplier']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['supplier_id']) {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("supplier");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("suppliers.view?supplier_id=".((string)$_smarty_tpl->tpl_vars['product']->value['supplier_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['product']->value['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</a></span>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/suppliers/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/suppliers/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['suppliers']['display_supplier']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['supplier_id']) {?>
    <div class="ty-control-group<?php if (!$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value) {?> product-list-field<?php }?>">
        <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("supplier");?>
:</label>
        <span class="ty-control-group__item"><a href="<?php echo htmlspecialchars(fn_url("suppliers.view?supplier_id=".((string)$_smarty_tpl->tpl_vars['product']->value['supplier_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['product']->value['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</a></span>
    </div>
<?php }
}?><?php }} ?>
