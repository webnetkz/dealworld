<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:43:06
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/call_requests/blocks/call_request.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7859395595f8ef77a9d5a74-97301576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fc22c51c893615fc86324cdf1d2ebfea42578e4' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/call_requests/blocks/call_request.tpl',
      1 => 1603196090,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7859395595f8ef77a9d5a74-97301576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'phone_number' => 0,
    'block' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'company_id' => 0,
    'href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef77aa1d785_94074645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef77aa1d785_94074645')) {function content_5f8ef77aa1d785_94074645($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('call_request.work_time','call_requests.request_call','call_requests.request_call','call_request.work_time','call_requests.request_call','call_requests.request_call'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><bdi><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</bdi></span><span class="ty-cr-work"><?php echo $_smarty_tpl->__("call_request.work_time");?>
</span></div>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable("block", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>

        <?php if ($_REQUEST['company_id']) {?>
            <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>$_smarty_tpl->tpl_vars['href']->value,'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0);?>

    </div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/blocks/call_request.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/blocks/call_request.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><span><bdi><span class="ty-cr-phone-prefix"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone_number']->value['postfix'], ENT_QUOTES, 'UTF-8');?>
</bdi></span><span class="ty-cr-work"><?php echo $_smarty_tpl->__("call_request.work_time");?>
</span></div>
    <div class="ty-cr-link">
        <?php $_smarty_tpl->tpl_vars['obj_prefix'] = new Smarty_variable("block", null, 0);?>
        <?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['snapping_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>

        <?php if ($_REQUEST['company_id']) {?>
            <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['company_id']->value), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable("call_requests.request?obj_prefix=".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)."&obj_id=".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);?>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('href'=>$_smarty_tpl->tpl_vars['href']->value,'link_text'=>$_smarty_tpl->__("call_requests.request_call"),'text'=>$_smarty_tpl->__("call_requests.request_call"),'id'=>"call_request_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'content'=>''), 0);?>

    </div>
</div><?php }?><?php }} ?>
