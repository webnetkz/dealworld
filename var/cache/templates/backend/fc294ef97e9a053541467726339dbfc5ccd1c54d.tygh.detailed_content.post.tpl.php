<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:05
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12770936485f8f081db830d4-04682211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc294ef97e9a053541467726339dbfc5ccd1c54d' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12770936485f8f081db830d4-04682211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f081db877c9_64515713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f081db877c9_64515713')) {function content_5f8f081db877c9_64515713($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
