<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:43
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/profiles/components/bulk_edit/actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20202805155f8ef6af2960a4-36776832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb1aeeb88e5ad8f15e799cdc85eb5a57b71a552' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/profiles/components/bulk_edit/actions.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20202805155f8ef6af2960a4-36776832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6af2cc376_69538455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6af2cc376_69538455')) {function content_5f8ef6af2cc376_69538455($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view_orders','export_selected'));
?>
<?php if (fn_check_view_permissions("orders.manage","GET")) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("view_orders"),'dispatch'=>"dispatch[orders.manage]",'form'=>"userlist_form",'data'=>array("data-ca-pass-selected-object-ids-as"=>"user_ids")));?>

    </li>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:view_tools_list_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:view_tools_list_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:view_tools_list_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (fn_allowed_for("ULTIMATE")||!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
     <?php if (fn_check_view_permissions("profiles.export_range","POST")) {?>
        <li class="divider"></li>

        <li>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[profiles.export_range]",'form'=>"userlist_form"));?>

        </li>
    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:export_tools_list_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:export_tools_list_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:export_tools_list_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (fn_check_permissions("profiles","m_delete","admin","POST",array("user_type"=>$_REQUEST['user_type']))) {?>
    <li class="divider"></li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[profiles.m_delete]",'form'=>"userlist_form"));?>

    </li>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"profiles:list_tools_for_selected")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"profiles:list_tools_for_selected"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"profiles:list_tools_for_selected"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
