<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:08
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/yml_export/common/yml_categories_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3371873275f8f0820836429-66691672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6885860e6040925f2ffeeb50339e8edb9dc9eb93' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/yml_export/common/yml_categories_selector.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3371873275f8f0820836429-66691672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj_id' => 0,
    'name' => 0,
    'value' => 0,
    'yml2_market_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0820843433_55445530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0820843433_55445530')) {function content_5f8f0820843433_55445530($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml2_export_market_category','tt_yml2_export_market_category'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? "yml_categories" : $tmp), null, 0);?>

<div class="control-group">
    <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_export_market_category");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_yml2_export_market_category")), 0);?>
:</label>
    <div class="controls" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_box">
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" size="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large cm-yml-categories" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_market_category']->value))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_market_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/></br>
    </div>
</div>

<?php }} ?>
