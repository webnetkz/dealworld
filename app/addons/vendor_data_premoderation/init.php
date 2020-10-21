<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

use Tygh\Addons\VendorDataPremoderation\ServiceProvider;

defined('BOOTSTRAP') or die('Access denied');

Tygh::$app->register(new ServiceProvider());

fn_register_hooks(
    ['get_product_data_post', 1600],
    'update_company_pre',
    'set_admin_notification',
    'clone_product_post',
    'update_product_pre',
    'update_product_post',
    'data_feeds_export_before_get_products',
    'tools_update_status_before_query',
    'gather_additional_products_data_post',
    'get_product_statuses_post',
    'get_all_product_statuses_post',
    'delete_product_post',
    'update_product_categories_pre',
    'update_product_categories_post'
);
