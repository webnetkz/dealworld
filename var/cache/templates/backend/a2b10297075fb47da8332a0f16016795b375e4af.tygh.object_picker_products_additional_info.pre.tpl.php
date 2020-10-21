<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:54:11
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19018343225f8f08234350d5-84571108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2b10297075fb47da8332a0f16016795b375e4af' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '19018343225f8f08234350d5-84571108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0823436756_20403937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0823436756_20403937')) {function content_5f8f0823436756_20403937($_smarty_tpl) {?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }} ?>
