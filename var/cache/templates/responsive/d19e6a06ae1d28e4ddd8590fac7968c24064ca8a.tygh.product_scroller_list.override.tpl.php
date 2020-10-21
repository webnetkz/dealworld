<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:44:08
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/age_verification/hooks/products/product_scroller_list.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11382014085f8ef7b83a82c4-79209151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd19e6a06ae1d28e4ddd8590fac7968c24064ca8a' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/age_verification/hooks/products/product_scroller_list.override.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11382014085f8ef7b83a82c4-79209151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef7b83f2e00_51076638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef7b83f2e00_51076638')) {function content_5f8ef7b83f2e00_51076638($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_need_age_verification','verify','product_need_age_verification','verify'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_SESSION['auth']['age']&&$_smarty_tpl->tpl_vars['product']->value['need_age_verification']=="Y") {?>
<div class="ty-age-verification ty-scroller-list__item">

    <div class="ty-scroller-list__description">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>false,'show_add_to_cart'=>false,'but_role'=>"action",'hide_price'=>true,'hide_qty'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false), 0);?>

    </div>

    <div class="ty-mt-m">
        <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0);?>

        </div>
    </div>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/age_verification/hooks/products/product_scroller_list.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/age_verification/hooks/products/product_scroller_list.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_SESSION['auth']['age']&&$_smarty_tpl->tpl_vars['product']->value['need_age_verification']=="Y") {?>
<div class="ty-age-verification ty-scroller-list__item">

    <div class="ty-scroller-list__description">
        <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_name'=>true,'show_price'=>false,'show_add_to_cart'=>false,'but_role'=>"action",'hide_price'=>true,'hide_qty'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false), 0);?>

    </div>

    <div class="ty-mt-m">
        <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0);?>

        </div>
    </div>
</div>
<?php }
}?><?php }} ?>
