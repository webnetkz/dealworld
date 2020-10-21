<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:48:09
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/rus_yandex_metrika/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10864518245f8ef8a9973185-07107460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '172bd68630d28a20297c66ac65810bb54f82b645' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/themes/responsive/templates/addons/rus_yandex_metrika/hooks/index/scripts.post.tpl',
      1 => 1603196091,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10864518245f8ef8a9973185-07107460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'yandex_metrika_goals_scheme' => 0,
    'yandex_metrika_settings' => 0,
    'yandex_metrika_object' => 0,
    'yandex_metrika' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef8a9b9dc41_78201686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef8a9b9dc41_78201686')) {function content_5f8ef8a9b9dc41_78201686($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_script')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/var/www/www-root/data/www/dealworld.shop/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['yandex_metrika_settings'] = new Smarty_variable(array("id"=>(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'])===null||$tmp==='' ? '' : $tmp),"collectedGoals"=>array_filter((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['collect_stats_for_goals'])===null||$tmp==='' ? array() : $tmp))), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['clickmap']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["clickmap"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['external_links']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["trackLinks"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['denial']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["accurateTrackBounce"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['track_hash']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["trackHash"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['visor']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["webvisor"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["ecommerce"] = "dataLayerYM";?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['yandex_metrika_object'] = new Smarty_variable(array("goalsSchema"=>(($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika_goals_scheme']->value)===null||$tmp==='' ? array() : $tmp),"settings"=>$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value,"currentController"=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],"currentMode"=>$_smarty_tpl->tpl_vars['runtime']->value['mode']), null, 0);?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $, window) {
        window.dataLayerYM = window.dataLayerYM || [];
        $.ceEvent('one', 'ce.commoninit', function() {
            _.yandexMetrika = <?php echo json_encode($_smarty_tpl->tpl_vars['yandex_metrika_object']->value);?>
;
            $.ceEvent('trigger', 'ce:yandexMetrika:init');
        });
    })(Tygh, Tygh.$, window);
<?php echo '</script'; ?>
>


<?php if ((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['is_obsolete_code_snippet_used'])===null||$tmp==='' ? (smarty_modifier_enum("YesNo::NO")) : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_yandex_metrika/providers/obsolete.js"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_yandex_metrika/providers/default.js"),$_smarty_tpl);?>

<?php }?>
<?php echo smarty_function_script(array('src'=>"js/addons/rus_yandex_metrika/index.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']===smarty_modifier_enum("YesNo::YES")&&((($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika']->value['deleted'])===null||$tmp==='' ? array() : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika']->value['added'])===null||$tmp==='' ? array() : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased'])===null||$tmp==='' ? array() : $tmp))) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_yandex_metrika/views/components/datalayer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/rus_yandex_metrika/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/rus_yandex_metrika/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['yandex_metrika_settings'] = new Smarty_variable(array("id"=>(($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['counter_number'])===null||$tmp==='' ? '' : $tmp),"collectedGoals"=>array_filter((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['collect_stats_for_goals'])===null||$tmp==='' ? array() : $tmp))), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['clickmap']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["clickmap"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['external_links']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["trackLinks"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['denial']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["accurateTrackBounce"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['track_hash']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["trackHash"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['visor']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["webvisor"] = true;?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('yandex_metrika_settings', null, 0);
$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value["ecommerce"] = "dataLayerYM";?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['yandex_metrika_object'] = new Smarty_variable(array("goalsSchema"=>(($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika_goals_scheme']->value)===null||$tmp==='' ? array() : $tmp),"settings"=>$_smarty_tpl->tpl_vars['yandex_metrika_settings']->value,"currentController"=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],"currentMode"=>$_smarty_tpl->tpl_vars['runtime']->value['mode']), null, 0);?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $, window) {
        window.dataLayerYM = window.dataLayerYM || [];
        $.ceEvent('one', 'ce.commoninit', function() {
            _.yandexMetrika = <?php echo json_encode($_smarty_tpl->tpl_vars['yandex_metrika_object']->value);?>
;
            $.ceEvent('trigger', 'ce:yandexMetrika:init');
        });
    })(Tygh, Tygh.$, window);
<?php echo '</script'; ?>
>


<?php if ((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['is_obsolete_code_snippet_used'])===null||$tmp==='' ? (smarty_modifier_enum("YesNo::NO")) : $tmp)===smarty_modifier_enum("YesNo::YES")) {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_yandex_metrika/providers/obsolete.js"),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_script(array('src'=>"js/addons/rus_yandex_metrika/providers/default.js"),$_smarty_tpl);?>

<?php }?>
<?php echo smarty_function_script(array('src'=>"js/addons/rus_yandex_metrika/index.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addons']->value['rus_yandex_metrika']['ecommerce']===smarty_modifier_enum("YesNo::YES")&&((($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika']->value['deleted'])===null||$tmp==='' ? array() : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika']->value['added'])===null||$tmp==='' ? array() : $tmp)||(($tmp = @$_smarty_tpl->tpl_vars['yandex_metrika']->value['purchased'])===null||$tmp==='' ? array() : $tmp))) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/rus_yandex_metrika/views/components/datalayer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
}?><?php }} ?>
