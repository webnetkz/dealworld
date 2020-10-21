<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:42:36
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/hybrid_auth/hooks/index/login_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5606365725f8ef75c757937-91997058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e68e11b8c135be6f163b5d02a6363232028e2e40' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/hybrid_auth/hooks/index/login_buttons.pre.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5606365725f8ef75c757937-91997058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'providers_list' => 0,
    'redirect_url' => 0,
    'config' => 0,
    'provider_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef75c7cab46_38473241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef75c7cab46_38473241')) {function content_5f8ef75c7cab46_38473241($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('hybrid_auth.social_login','hybrid_auth.social_login'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (is_array($_smarty_tpl->tpl_vars['providers_list']->value)) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"hybrid_auth:login_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"hybrid_auth:login_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!isset($_smarty_tpl->tpl_vars['redirect_url']->value)) {?>
        <?php $_smarty_tpl->tpl_vars["redirect_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->__("hybrid_auth.social_login");?>
:
    <p class="ty-text-center"><?php echo Smarty::$_smarty_vars['capture']['hybrid_auth'];?>

    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
if ($_smarty_tpl->tpl_vars['provider_data']->value['status']=='A') {?><a class="cm-login-provider ty-hybrid-auth__icon" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php }
} ?>
    </p>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"hybrid_auth:login_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hybrid_auth/hooks/index/login_buttons.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hybrid_auth/hooks/index/login_buttons.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (is_array($_smarty_tpl->tpl_vars['providers_list']->value)) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"hybrid_auth:login_buttons")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"hybrid_auth:login_buttons"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if (!isset($_smarty_tpl->tpl_vars['redirect_url']->value)) {?>
        <?php $_smarty_tpl->tpl_vars["redirect_url"] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->__("hybrid_auth.social_login");?>
:
    <p class="ty-text-center"><?php echo Smarty::$_smarty_vars['capture']['hybrid_auth'];?>

    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php  $_smarty_tpl->tpl_vars["provider_data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["provider_data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['providers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["provider_data"]->key => $_smarty_tpl->tpl_vars["provider_data"]->value) {
$_smarty_tpl->tpl_vars["provider_data"]->_loop = true;
if ($_smarty_tpl->tpl_vars['provider_data']->value['status']=='A') {?><a class="cm-login-provider ty-hybrid-auth__icon" data-idp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value['provider'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php }
} ?>
    </p>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"hybrid_auth:login_buttons"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }
}?><?php }} ?>
