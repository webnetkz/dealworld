<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:38:39
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/styles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16347507105f8ef66f930167-37413417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58da767f7c5032039518e6ad7b626d0e9e9a151e' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/styles.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16347507105f8ef66f930167-37413417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef66f94c943_72984650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef66f94c943_72984650')) {function content_5f8ef66f94c943_72984650($_smarty_tpl) {?><?php if (!is_callable('smarty_block_styles')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.styles.php';
if (!is_callable('smarty_function_style')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_block_hook')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('styles', array()); $_block_repeat=true; echo smarty_block_styles(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_style(array('src'=>"ui/jqueryui.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:styles")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

        <?php if (@constant('ACCOUNT_TYPE')==="vendor") {?>
            <?php echo smarty_function_style(array('src'=>"config_vendor.less"),$_smarty_tpl);?>

        <?php }?>
        <?php echo smarty_function_style(array('src'=>"glyphs.css"),$_smarty_tpl);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/statuses/components/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>@constant('STATUSES_ORDER')), 0);?>


        <?php if ($_smarty_tpl->tpl_vars['language_direction']->value=='rtl') {?>
            <?php echo smarty_function_style(array('src'=>"rtl.less"),$_smarty_tpl);?>

        <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:styles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo smarty_function_style(array('src'=>"font-awesome.css"),$_smarty_tpl);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_styles(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
