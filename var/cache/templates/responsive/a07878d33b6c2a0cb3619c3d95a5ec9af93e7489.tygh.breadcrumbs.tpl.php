<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:05:58
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/common/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8240645355f8efcd600c839-92711546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a07878d33b6c2a0cb3619c3d95a5ec9af93e7489' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/common/breadcrumbs.tpl',
      1 => 1603099823,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8240645355f8efcd600c839-92711546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'breadcrumbs' => 0,
    'key' => 0,
    'bc' => 0,
    'additional_class' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8efcd60f0b93_76982428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8efcd60f0b93_76982428')) {function content_5f8efcd60f0b93_76982428($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sizeof')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.sizeof.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>1) {?>
    <div class="ty-breadcrumbs clearfix">
        <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
if ($_smarty_tpl->tpl_vars['key']->value!="0") {?><span class="ty-breadcrumbs__slash">/</span><?php }
if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->tpl_vars['additional_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['bc']->value['nofollow']) {?> rel="nofollow"<?php }?>><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
</a><?php } else { ?><span class="ty-breadcrumbs__current"><bdi><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
</bdi></span><?php }
}
echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php }?>
<!--breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/breadcrumbs.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/breadcrumbs.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">

<?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value&&smarty_modifier_sizeof($_smarty_tpl->tpl_vars['breadcrumbs']->value)>1) {?>
    <div class="ty-breadcrumbs clearfix">
        <?php  $_smarty_tpl->tpl_vars["bc"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["bc"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["bc"]->key => $_smarty_tpl->tpl_vars["bc"]->value) {
$_smarty_tpl->tpl_vars["bc"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["bc"]->key;
if ($_smarty_tpl->tpl_vars['key']->value!="0") {?><span class="ty-breadcrumbs__slash">/</span><?php }
if ($_smarty_tpl->tpl_vars['bc']->value['link']) {?><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['bc']->value['link']), ENT_QUOTES, 'UTF-8');?>
" class="ty-breadcrumbs__a<?php if ($_smarty_tpl->tpl_vars['additional_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['bc']->value['nofollow']) {?> rel="nofollow"<?php }?>><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
</a><?php } else { ?><span class="ty-breadcrumbs__current"><bdi><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['bc']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
</bdi></span><?php }
}
echo $_smarty_tpl->getSubTemplate ("common/view_tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
<?php }?>
<!--breadcrumbs_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?><?php }} ?>
