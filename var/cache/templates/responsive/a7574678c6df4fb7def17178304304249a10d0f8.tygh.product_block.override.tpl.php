<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 21:22:47
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/age_verification/hooks/products/product_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6338284795f8f2af707cbc8-89390106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7574678c6df4fb7def17178304304249a10d0f8' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/age_verification/hooks/products/product_block.override.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6338284795f8f2af707cbc8-89390106',
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
  'unifunc' => 'content_5f8f2af70a5205_50406854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f2af70a5205_50406854')) {function content_5f8f2af70a5205_50406854($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_need_age_verification','verify','product_need_age_verification','verify'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_SESSION['auth']['age']&&$_smarty_tpl->tpl_vars['product']->value['need_age_verification']=="Y") {?>
<div class="ty-product-list">

    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="ty-mt-m">
        <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0);?>

        </div>
    </div>
</div>
<hr />
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/age_verification/hooks/products/product_block.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/age_verification/hooks/products/product_block.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_SESSION['auth']['age']&&$_smarty_tpl->tpl_vars['product']->value['need_age_verification']=="Y") {?>
<div class="ty-product-list">

    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_additional_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_additional_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="ty-mt-m">
        <div class="ty-age-verification__txt"><?php echo $_smarty_tpl->__("product_need_age_verification");?>
</div>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("verify"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_meta'=>"ty-btn__secondary",'but_role'=>"text"), 0);?>

        </div>
    </div>
</div>
<hr />
<?php }
}?><?php }} ?>
