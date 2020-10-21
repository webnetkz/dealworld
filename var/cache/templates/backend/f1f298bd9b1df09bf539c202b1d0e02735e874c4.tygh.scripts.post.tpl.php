<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:51
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_locations/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21210312035f8ef6b7875118-39259976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f298bd9b1df09bf539c202b1d0e02735e874c4' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/vendor_locations/hooks/index/scripts.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21210312035f8ef6b7875118-39259976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6b789f4f8_54707588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6b789f4f8_54707588')) {function content_5f8ef6b789f4f8_54707588($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.inline_script.php';
if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        _.vendor_locations = {
            api_key: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['addons']->value['vendor_locations']['api_key'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'
        };
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geocomplete.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/geolocate.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/vendor_locations/func.js"),$_smarty_tpl);?>
<?php }} ?>
