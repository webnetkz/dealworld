<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:57
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/myob/hooks/profiles/export_tools_list_for_selected.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19064055025f8ef6bdcde7b8-04003857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea745968fc4c396337f5f31c3af14e80ed52a167' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/myob/hooks/profiles/export_tools_list_for_selected.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19064055025f8ef6bdcde7b8-04003857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6bdce2200_61112467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6bdce2200_61112467')) {function content_5f8ef6bdce2200_61112467($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('export_to_myob'));
?>

<?php if ($_smarty_tpl->tpl_vars['search']->value['user_type']=='C') {?>
    <li><a class="cm-process-items cm-submit" data-ca-dispatch="dispatch[myob_export.export_profiles]" data-ca-target-form="userlist_form"><?php echo $_smarty_tpl->__("export_to_myob");?>
</a></li>
<?php }?><?php }} ?>
