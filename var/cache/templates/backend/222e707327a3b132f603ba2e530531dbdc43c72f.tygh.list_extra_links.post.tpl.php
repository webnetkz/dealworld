<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:40:58
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6040967965f8ef6facd64b4-88190044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222e707327a3b132f603ba2e530531dbdc43c72f' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/gdpr/hooks/profiles/list_extra_links.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6040967965f8ef6facd64b4-88190044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'return_current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6face13b3_84946312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6face13b3_84946312')) {function content_5f8ef6face13b3_84946312($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.text_anonymize_question','gdpr.anonymize'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C"&&$_smarty_tpl->tpl_vars['user']->value['anonymized']!="Y") {?>
    <li><?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_tmp7=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("gdpr.anonymize"),'href'=>"gdpr.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp7),'method'=>"POST"));?>
</li>
<?php }?>
<?php }} ?>
