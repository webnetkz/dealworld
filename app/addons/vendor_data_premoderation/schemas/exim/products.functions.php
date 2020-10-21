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

use Tygh\Enum\Addons\VendorDataPremoderation\ProductStatuses;
use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

/**
 * The "import_process_data" exim handler.
 *
 * Actions performed:
 *     - Prevents vendors from changing "Requires approval" or "Disapproved" product status.
 *     - Stores initial data for products that are not in the "Requires approval" product status.
 */
function fn_exim_vendor_data_premoderation_load_initial_product_state($primary_object_id, &$object)
{
    static $runtime_company_id = null;
    if ($runtime_company_id === null) {
        $runtime_company_id = fn_get_runtime_company_id();
    }
    if (!$runtime_company_id) {
        return;
    }

    static $runtime_company_data = null;
    if ($runtime_company_data === null) {
        $runtime_company_data = Registry::get('runtime.company_data');
    }

    $is_created = !$primary_object_id;
    if ($is_created && !fn_vendor_data_premoderation_product_requires_approval($runtime_company_data, $is_created)) {
        return;
    }

    if ($primary_object_id) {
        $product_id = $primary_object_id['product_id'];

        $current_status = fn_vendor_data_premoderation_get_current_product_statuses([$product_id])[$product_id];
        if (in_array($current_status, [ProductStatuses::REQUIRES_APPROVAL, ProductStatuses::DISAPPROVED])) {
            $object['status'] = ProductStatuses::REQUIRES_APPROVAL;
            $current_status = ProductStatuses::REQUIRES_APPROVAL;
        }

        if ($current_status !== ProductStatuses::REQUIRES_APPROVAL) {
            $initial_product_state = fn_vendor_data_premoderation_get_product_state($product_id);
            Registry::set("vendor_data_premoderation.initial_product_state.{$product_id}", $initial_product_state, true);
        }
    }
}

/**
 * The "post_processing" exim handler.
 *
 * Actions performed:
 *     - Requires approval for products that were changed during import.
 */
function fn_exim_vendor_data_premoderation_set_approval_status($primary_object_ids)
{
    static $runtime_company_id = null;
    if ($runtime_company_id === null) {
        $runtime_company_id = fn_get_runtime_company_id();
    }
    if (!$runtime_company_id) {
        return;
    }

    static $runtime_company_data = null;
    if ($runtime_company_data === null) {
        $runtime_company_data = Registry::get('runtime.company_data');
    }

    foreach ($primary_object_ids as $primary_object_id) {
        $product_id = $primary_object_id['product_id'];
        $initial_product_state = Registry::ifGet("vendor_data_premoderation.initial_product_state.{$product_id}", null);
        $is_created = $initial_product_state === null;

        Registry::del("vendor_data_premoderation.initial_product_state.{$product_id}");

        $product_status = fn_vendor_data_premoderation_get_current_product_statuses([$product_id])[$product_id];
        if ($product_status === ProductStatuses::REQUIRES_APPROVAL) {
            continue;
        }

        $requires_premoderation = fn_vendor_data_premoderation_product_requires_approval($runtime_company_data, $is_created);
        if (!$is_created && $requires_premoderation) {
            $resulting_product_state = fn_vendor_data_premoderation_get_product_state($product_id);
            $requires_premoderation = fn_vendor_data_premoderation_is_product_changed($initial_product_state, $resulting_product_state);
        }

        if ($requires_premoderation) {
            fn_vendor_data_premoderation_request_approval_for_products([$product_id], true);
        }
    }
}
