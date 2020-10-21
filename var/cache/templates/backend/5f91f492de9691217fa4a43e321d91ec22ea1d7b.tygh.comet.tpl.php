<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 17:39:34
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2162217655f8ef6a681f8c5-70235472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f91f492de9691217fa4a43e321d91ec22ea1d7b' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/common/comet.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2162217655f8ef6a681f8c5-70235472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8ef6a6841142_00062020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8ef6a6841142_00062020')) {function content_5f8ef6a6841142_00062020($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
