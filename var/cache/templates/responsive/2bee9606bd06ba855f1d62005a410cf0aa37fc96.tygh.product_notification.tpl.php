<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 19:53:44
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/checkout/components/product_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13828808625f8f16186a9ee4-27015097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bee9606bd06ba855f1d62005a410cf0aa37fc96' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/checkout/components/product_notification.tpl',
      1 => 1603099820,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13828808625f8f16186a9ee4-27015097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f16187e3996_08529814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f16187e3996_08529814')) {function content_5f8f16187e3996_08529814($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('continue_shopping','view_cart','checkout','items_in_cart','cart_subtotal','continue_shopping','view_cart','checkout','items_in_cart','cart_subtotal'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_notification:scripts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_notification:scripts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <div class="ty-float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("continue_shopping"),'but_meta'=>"ty-btn__secondary cm-notification-close"), 0);?>

    </div>

    <div class="ty-float-right">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__primary",'but_text'=>$_smarty_tpl->__("view_cart"),'but_href'=>"checkout.cart"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("checkout"),'but_meta'=>"ty-btn__primary cm-notification-close"), 0);?>

    <?php }?>
    </div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("info", null, null); ob_start(); ?>
    <div class="clearfix"></div>
    <hr class="ty-product-notification__divider" />

    <div class="ty-product-notification__total-info clearfix">
        <div class="ty-product-notification__amount ty-float-left"> <?php echo $_smarty_tpl->__("items_in_cart",array($_SESSION['cart']['amount']));?>
</div>
        <div class="ty-product-notification__subtotal ty-float-right">
            <?php echo $_smarty_tpl->__("cart_subtotal");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'product_info'=>Smarty::$_smarty_vars['capture']['info']), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_notification:scripts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/product_notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/product_notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"product_notification:scripts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"product_notification:scripts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <div class="ty-float-left">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("continue_shopping"),'but_meta'=>"ty-btn__secondary cm-notification-close"), 0);?>

    </div>

    <div class="ty-float-right">
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['checkout_redirect']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__primary",'but_text'=>$_smarty_tpl->__("view_cart"),'but_href'=>"checkout.cart"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/proceed_to_checkout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("checkout"),'but_meta'=>"ty-btn__primary cm-notification-close"), 0);?>

    <?php }?>
    </div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("info", null, null); ob_start(); ?>
    <div class="clearfix"></div>
    <hr class="ty-product-notification__divider" />

    <div class="ty-product-notification__total-info clearfix">
        <div class="ty-product-notification__amount ty-float-left"> <?php echo $_smarty_tpl->__("items_in_cart",array($_SESSION['cart']['amount']));?>
</div>
        <div class="ty-product-notification__subtotal ty-float-right">
            <?php echo $_smarty_tpl->__("cart_subtotal");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_SESSION['cart']['display_subtotal']), 0);?>

        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'product_info'=>Smarty::$_smarty_vars['capture']['info']), 0);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"product_notification:scripts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
