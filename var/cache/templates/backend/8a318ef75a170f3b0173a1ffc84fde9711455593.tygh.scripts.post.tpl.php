<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:51
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/stripe_connect/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13051905635f8ef6b7581969-15299406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a318ef75a170f3b0173a1ffc84fde9711455593' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/stripe_connect/hooks/index/scripts.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13051905635f8ef6b7581969-15299406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6b7584575_92399393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6b7584575_92399393')) {function content_5f8ef6b7584575_92399393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/stripe_connect/checkout.js"),$_smarty_tpl);?>

<?php }} ?>
