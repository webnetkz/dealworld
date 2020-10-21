<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:42:46
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19996436825f8ef766906551-79860919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea8b3940e9dddc58187ed24b23caf7d6a052a90' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1603099820,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19996436825f8ef766906551-79860919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef76692b8e7_34161811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef76692b8e7_34161811')) {function content_5f8ef76692b8e7_34161811($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
