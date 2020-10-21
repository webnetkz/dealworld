<?php /* Smarty version Smarty-3.1.21, created on 2020-10-20 18:53:52
         compiled from "/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/warehouses/hooks/products/update_qty_discounts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16666329145f8f081061e925-26121859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59e8194e80a3e851300f3e4ca68499b65d85ff1' => 
    array (
      0 => '/var/www/www-root/data/www/dealworld.shop/design/backend/templates/addons/warehouses/hooks/products/update_qty_discounts.post.tpl',
      1 => 1603097802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16666329145f8f081061e925-26121859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warehouses' => 0,
    'warehouse' => 0,
    'store_types' => 0,
    'warehouses_amounts' => 0,
    'runtime' => 0,
    'amount' => 0,
    'class' => 0,
    'store_locator_type_store' => 0,
    'store_locator_type_warehouse' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5f8f0810645e02_93392172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f8f0810645e02_93392172')) {function content_5f8f0810645e02_93392172($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.name','warehouses.city','warehouses.store_type','warehouses.quantity','warehouses.name','warehouses.city','warehouses.store_type','warehouses.quantity','warehouses.quantity_tab.no_data','no_data'));
?>
<div class="hidden" id="content_warehouses_quantity">
    <?php if ($_smarty_tpl->tpl_vars['warehouses']->value) {?>
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive" width="100%">
            <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->__("warehouses.name");?>
</th>
                    <th width="30%"><?php echo $_smarty_tpl->__("warehouses.city");?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->__("warehouses.store_type");?>
</th>
                    <th width="15%"><?php echo $_smarty_tpl->__("warehouses.quantity");?>
</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['warehouse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warehouse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warehouses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->key => $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->_loop = true;
?>
                    <tr class="cm-row-item cm-row-status-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['warehouse']->value['status']), ENT_QUOTES, 'UTF-8');?>
">
                        <td data-th="<?php echo $_smarty_tpl->__("warehouses.name");?>
">
                            <a href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['warehouse']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"
                               class="row-status"
                               target="_blank"
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['warehouse']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['warehouse']->value), 0);?>

                            <?php }?>
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("warehouses.city");?>
">
                            <span class="row-status">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['warehouse']->value['city'], ENT_QUOTES, 'UTF-8');?>

                            </span>
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("warehouses.store_type");?>
">
                            <span class="row-status">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_types']->value[$_smarty_tpl->tpl_vars['warehouse']->value['store_type']], ENT_QUOTES, 'UTF-8');?>

                            </span>
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("warehouses.quantity");?>
">
                            <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable('', null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['warehouses_amounts']->value[$_smarty_tpl->tpl_vars['warehouse']->value['warehouse_id']]) {?>
                                <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['warehouses_amounts']->value[$_smarty_tpl->tpl_vars['warehouse']->value['warehouse_id']]["amount"], null, 0);?>
                            <?php }?>
                            <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('', null, 0);?>
                            <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||$_smarty_tpl->tpl_vars['runtime']->value['company_id']==$_smarty_tpl->tpl_vars['warehouse']->value['company_id']) {?>
                                <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                            <?php }?>
                            <input type="text" name="product_data[warehouses][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['warehouse']->value['warehouse_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-small <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"/>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php $_smarty_tpl->tpl_vars['store_locator_type_warehouse'] = new Smarty_variable(constant("\Tygh\Addons\Warehouses\Manager::STORE_LOCATOR_TYPE_WAREHOUSE"), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['store_locator_type_store'] = new Smarty_variable(constant("\Tygh\Addons\Warehouses\Manager::STORE_LOCATOR_TYPE_STORE"), null, 0);?>

            <p class="no-items"><?php echo $_smarty_tpl->__("warehouses.quantity_tab.no_data",array("[create_url]"=>fn_url("store_locator.add?store_type=".((string)$_smarty_tpl->tpl_vars['store_locator_type_store']->value)),"[list_url]"=>fn_url("store_locator.manage?store_types[]=".((string)$_smarty_tpl->tpl_vars['store_locator_type_warehouse']->value)."&store_types[]=".((string)$_smarty_tpl->tpl_vars['store_locator_type_store']->value)."&switch_company_id=0")));?>

            </p>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    <?php }?>
</div><?php }} ?>
