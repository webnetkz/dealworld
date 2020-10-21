<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:26
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/profiles/components/bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15657480085f8ef69ef09015-46109828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e7710faa858307f68598cd709999b0d1e3b247' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/profiles/components/bulk_edit.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15657480085f8ef69ef09015-46109828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef69f00e5c8_91324012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef69f00e5c8_91324012')) {function content_5f8ef69f00e5c8_91324012($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_modifier_enum')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected','status','actions'));
?>
<div class="bulk-edit clearfix hidden"
     data-ca-bulkedit-expanded-object="true"
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:bulk_edit_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:bulk_edit_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
            <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                   type="checkbox" 
                   checked 
                   data-ca-bulkedit-toggler="true"
                   data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                   data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
            />
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
            </span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>fn_get_default_status_filters('',true)), 0);?>

        </li>

        <?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::VENDOR"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php if (!($_smarty_tpl->tpl_vars['auth']->value['user_type']===$_tmp3&&$_REQUEST['user_type']===$_tmp4)&&(fn_check_permissions("profiles","m_activate","admin","POST",array("user_type"=>$_REQUEST['user_type']))&&fn_check_permissions("profiles","m_disable","admin","POST",array("user_type"=>$_REQUEST['user_type'])))) {?>
            <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod cm-no-hide-input">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>
        <?php }?>

        <?php $_smarty_tpl->_capture_stack[0][] = array("action_tools", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php if (trim(Smarty::$_smarty_vars['capture']['action_tools'])) {?>
            <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
                <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("actions");?>
 <span class="caret mobile-hide"></span></span>

                <ul class="dropdown-menu">
                    <?php echo $_smarty_tpl->getSubTemplate ("views/profiles/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </ul>
            </li>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:bulk_edit_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div>
<?php }} ?>
