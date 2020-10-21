<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:16
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11621179765f8f0828bc3918-94120474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5ed9a018c070efbc044f5fcc16dc73bd6f9e112' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11621179765f8f0828bc3918-94120474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0828bc6a70_37762747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0828bc6a70_37762747')) {function content_5f8f0828bc6a70_37762747($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
