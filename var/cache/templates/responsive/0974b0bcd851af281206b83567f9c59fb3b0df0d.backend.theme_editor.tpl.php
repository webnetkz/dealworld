<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:49:00
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2655484255f8ef8dccc5280-48910161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0974b0bcd851af281206b83567f9c59fb3b0df0d' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/theme_editor.tpl',
      1 => 1603097802,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '2655484255f8ef8dccc5280-48910161',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef8dcf3d579_12086806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef8dcf3d579_12086806')) {function content_5f8ef8dcf3d579_12086806($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
