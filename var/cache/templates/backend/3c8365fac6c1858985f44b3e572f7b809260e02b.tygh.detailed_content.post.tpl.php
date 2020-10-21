<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:05
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/discussion/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3605251305f8f081dc16293-58944073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c8365fac6c1858985f44b3e572f7b809260e02b' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/discussion/hooks/products/detailed_content.post.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3605251305f8f081dc16293-58944073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'no_hide_input' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f081dc20ff4_53467606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f081dc20ff4_53467606')) {function content_5f8f081dc20ff4_53467606($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('comments_and_reviews','discussion_title_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_product_setting"), 0);?>

    <div id="discussion_product_setting" class="in collapse">
    	<fieldset>
			<?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable(false, null, 0);?>
			<?php if (fn_allowed_for("ULTIMATE")) {?>
				<?php $_smarty_tpl->tpl_vars['no_hide_input'] = new Smarty_variable(true, null, 0);?>
			<?php }?>

            <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PRODUCT"),'title'=>$_smarty_tpl->__("discussion_title_product"),'no_hide_input'=>$_smarty_tpl->tpl_vars['no_hide_input']->value,'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['product_discussion_type']), 0);?>

    	</fieldset>
    </div>
<?php }?><?php }} ?>
