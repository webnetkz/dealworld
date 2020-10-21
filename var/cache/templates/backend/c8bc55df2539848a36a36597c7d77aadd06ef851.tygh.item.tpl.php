<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:51:53
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20183135775f8f0799d50865-02821700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8bc55df2539848a36a36597c7d77aadd06ef851' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/views/categories/components/picker/item.tpl',
      1 => 1603097801,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20183135775f8f0799d50865-02821700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'title_post' => 0,
    'icon' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0799d5e1a4_80666378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0799d5e1a4_80666378')) {function content_5f8f0799d5e1a4_80666378($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('enter_category_name_and_path'));
?>
<div class="object-picker__categories-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="result"||$_smarty_tpl->tpl_vars['type']->value==="selection") {?>
        <div class="object-picker__categories-main-content">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
            ${data.name} 
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="new_item") {?>
        <div class="object-picker__results-label object-picker__results-label--categories">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__results-label-icon-wrapper--categories">
                    <i class="object-picker__results-label-icon object-picker__results-label-icon--categories <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-plus-sign" : $tmp), ENT_QUOTES, 'UTF-8');?>
"></i>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__results-label-prefix--categories">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__results-label-body--categories">
                <span class="select2-selection__choice__handler"></span>
                ${data.text}
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['help']->value) {?>
            <div class="object-picker__results-help object-picker__results-help--categories">
                <?php echo $_smarty_tpl->__("enter_category_name_and_path");?>

            </div>
        <?php }?>
    <?php }?>
</div><?php }} ?>
