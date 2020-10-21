<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:42:23
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/block_manager/render/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4626208375f8ef74fcb7700-97799799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406b6771ee2201a85c8d1515a6a22e6514562940' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/views/block_manager/render/block.tpl',
      1 => 1603099820,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4626208375f8ef74fcb7700-97799799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'content' => 0,
    'block' => 0,
    'content_alignment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef74fcd8670_33874859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef74fcd8670_33874859')) {function content_5f8ef74fcd8670_33874859($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } elseif (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT') {?>ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>ty-float-left<?php }?>">
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']||$_smarty_tpl->tpl_vars['content_alignment']->value=='RIGHT'||$_smarty_tpl->tpl_vars['content_alignment']->value=='LEFT') {?>
        </div>
    <?php }?>
<?php }?>
<?php }} ?>
