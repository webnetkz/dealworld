<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 19:54:34
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/product_variations/hooks/checkout/product_options.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4280075465f8f164a29ed96-61175455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c1c056a17b3faceea1c3c30835d3dfb5c14e06' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/product_variations/hooks/checkout/product_options.pre.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4280075465f8f164a29ed96-61175455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'feature' => 0,
    'variant' => 0,
    'key' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f164a2cf1f5_19047870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f164a2cf1f5_19047870')) {function content_5f8f164a2cf1f5_19047870($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div class="cm-picker-cart-product-variation-features ty-product-options">
        <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
            <div class="ty-control-group ty-product-options__item clearfix">
                <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                <bdi>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <select class="cm-ajax" data-ca-target-id="checkout*,cart*">
                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                            <option data-ca-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['product']['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-change-url="<?php echo htmlspecialchars(fn_url("checkout.change_variation?cart_item_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                            >
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                            </option>
                        <?php } ?>
                    </select>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </bdi>
            </div>
        <?php } ?>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/checkout/product_options.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/checkout/product_options.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/product_variations/picker_features.js"),$_smarty_tpl);?>

    <div class="cm-picker-cart-product-variation-features ty-product-options">
        <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
            <div class="ty-control-group ty-product-options__item clearfix">
                <label class="ty-control-group__label ty-product-options__item-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                <bdi>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    <select class="cm-ajax" data-ca-target-id="checkout*,cart*">
                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                            <option data-ca-variant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['product']['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                data-ca-change-url="<?php echo htmlspecialchars(fn_url("checkout.change_variation?cart_item_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&product_id=".((string)$_smarty_tpl->tpl_vars['variant']->value['product']['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']==$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                            >
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                            </option>
                        <?php } ?>
                    </select>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </bdi>
            </div>
        <?php } ?>
    </div>
<?php }?>
<?php }?><?php }} ?>
