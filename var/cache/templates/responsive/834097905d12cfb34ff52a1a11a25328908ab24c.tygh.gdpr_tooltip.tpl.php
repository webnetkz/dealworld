<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:47:03
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/gdpr/componentes/gdpr_tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5519566765f8ef867b801e0-05375301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '834097905d12cfb34ff52a1a11a25328908ab24c' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/gdpr/componentes/gdpr_tooltip.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5519566765f8ef867b801e0-05375301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'target_elem_id' => 0,
    'type' => 0,
    'app' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef867bba697_78611799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef867bba697_78611799')) {function content_5f8ef867bba697_78611799($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="gdpr_tooltip_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_elem_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="tooltip cm-gdpr-tooltip arrow-down ty-gdpr-tooltip ty-gdpr-tooltip--light center"
    data-ce-gdpr-target-elem="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_elem_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="tooltip-arrow"></span>
    <button type="button" class="cm-gdpr-tooltip--close close ty-gdpr-tooltip--close">×</button>
    <div class="ty-gdpr-tooltip-content">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"gdpr:tooltip_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"gdpr:tooltip_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getFullAgreement($_smarty_tpl->tpl_vars['type']->value);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"gdpr:tooltip_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/componentes/gdpr_tooltip.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/componentes/gdpr_tooltip.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="gdpr_tooltip_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_elem_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="tooltip cm-gdpr-tooltip arrow-down ty-gdpr-tooltip ty-gdpr-tooltip--light center"
    data-ce-gdpr-target-elem="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_elem_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="tooltip-arrow"></span>
    <button type="button" class="cm-gdpr-tooltip--close close ty-gdpr-tooltip--close">×</button>
    <div class="ty-gdpr-tooltip-content">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"gdpr:tooltip_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"gdpr:tooltip_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getFullAgreement($_smarty_tpl->tpl_vars['type']->value);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"gdpr:tooltip_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div><?php }?><?php }} ?>
