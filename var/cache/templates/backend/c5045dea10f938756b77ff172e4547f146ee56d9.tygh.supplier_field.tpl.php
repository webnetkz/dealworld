<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:53
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/suppliers/views/suppliers/components/supplier_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11951729615f8f0799bd2f09-18128398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5045dea10f938756b77ff172e4547f146ee56d9' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/suppliers/views/suppliers/components/supplier_field.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11951729615f8f0799bd2f09-18128398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_id' => 0,
    'selected' => 0,
    'supplier' => 0,
    'read_only' => 0,
    'name' => 0,
    'no_wrap' => 0,
    'id' => 0,
    'tooltip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0799bf6b95_25585655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0799bf6b95_25585655')) {function content_5f8f0799bf6b95_25585655($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['company_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars['company_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['result_ids'] = new Smarty_variable("content_detailed", null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['result_ids'] = clone $_smarty_tpl->tpl_vars['result_ids']; $_ptr = $_ptr->parent; }?>

<?php $_smarty_tpl->tpl_vars['supplier'] = new Smarty_variable(fn_if_get_supplier($_smarty_tpl->tpl_vars['selected']->value,$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['supplier']->value!==false) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("s_body", null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['read_only']->value) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>$_smarty_tpl->tpl_vars['name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['supplier']->value['supplier_id']),'meta'=>"span3"), 0);?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?>
        <div class="control-group" id="suppliers_selector">
            <label class="control-label" for="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("supplier");
if ($_smarty_tpl->tpl_vars['tooltip']->value) {?> <?php $_smarty_tpl->_capture_stack[0][] = array("tooltip", null, null); ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>Smarty::$_smarty_vars['capture']['tooltip']), 0);
}?></label>
            <div class="controls">
                <?php echo Smarty::$_smarty_vars['capture']['s_body'];?>

            </div>
        <!--suppliers_selector--></div>
    <?php } else { ?>
        <?php echo Smarty::$_smarty_vars['capture']['c_body'];?>

    <?php }?>

<?php }?><?php }} ?>
