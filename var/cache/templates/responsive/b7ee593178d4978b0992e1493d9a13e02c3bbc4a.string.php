<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 20:09:58
         compiled from "b7ee593178d4978b0992e1493d9a13e02c3bbc4a" */ ?>
<?php /*%%SmartyHeaderCode:14400207145f8f19e623dd80-99649458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ee593178d4978b0992e1493d9a13e02c3bbc4a' => 
    array (
      0 => 'b7ee593178d4978b0992e1493d9a13e02c3bbc4a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '14400207145f8f19e623dd80-99649458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f19e6249554_24962700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f19e6249554_24962700')) {function content_5f8f19e6249554_24962700($_smarty_tpl) {?>
                            <ul id="customer_service_links">
                            <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
">About your order</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']&&$_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=='A') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
">Wishlist</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=='Y') {?>
                                <li class="ty-footer-menu__item"><a href="<?php echo htmlspecialchars(fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
">Comparison list</a></li>
                            <?php }?>
                            </ul><?php }} ?>
