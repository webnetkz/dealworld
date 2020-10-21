<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:17
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/companies/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17233308785f8ef695def070-55865353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cdb008088868bdb2dc93d8c9df48bda76f69dac' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/companies/components/picker/item.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17233308785f8ef695def070-55865353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef695df2161_36212889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef695df2161_36212889')) {function content_5f8ef695df2161_36212889($_smarty_tpl) {?><div class="object-picker__companies-main">
    <div class="object-picker__companies-name">
        <div class="object-picker__companies-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 <span>${data.name}</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
