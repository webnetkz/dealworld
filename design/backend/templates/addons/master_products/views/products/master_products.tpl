{capture name="mainbox"}

    <form action="{""|fn_url}" method="post" name="manage_products_form" id="manage_products_form">
        <input type="hidden" name="category_id" value="{$search.cid}" />
        <input type="hidden" name="redirect_url" value="{$config.current_url}" />

        {include
            file="common/pagination.tpl"
            save_current_page=true
            save_current_url=false
            div_id=$smarty.request.content_id
        }

        {$c_url = $config.current_url|fn_query_remove:"sort_by":"sort_order"}

        {$rev = $smarty.request.content_id|default:"pagination_contents"}
        {$c_icon = "<i class=\"icon-`$search.sort_order_rev`\"></i>"}
        {$c_dummy = "<i class=\"icon-dummy\"></i>"}

        {if $products}

            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive products-table">
                    <thead data-ca-bulkedit-default-object="true" data-target=".products-table">
                    <tr>
                        {hook name="master_products:manage_head"}
                            <th width="6%" class="left mobile-hide">
                                {include file="common/check_items.tpl"}
                            </th>
                            <th width="6%"></th>
                            <th><a class="cm-ajax" href="{"`$c_url`&sort_by=product&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("name")}{if $search.sort_by == "product"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a> /&nbsp;&nbsp;&nbsp; <a class="{$ajax_class}" href="{"`$c_url`&sort_by=code&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("sku")}{if $search.sort_by == "code"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th width="13%"><a class="cm-ajax" href="{"`$c_url`&sort_by=price&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("price")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "price"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                            <th width="12%" class="mobile-hide"><a class="cm-ajax" href="{"`$c_url`&sort_by=list_price&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("list_price")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "list_price"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                        {/hook}
                        <th width="9%" class="mobile-hide">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $products as $product}

                        <tr class="cm-row-status-{$product.status|lower} cm-longtap-target"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="{$product.product_id}"
                        >

                            {hook name="master_products:manage_body"}

                                <td width="6%" class="left mobile-hide">
                                    <input type="checkbox"
                                           name="{if $runtime.company_id}master_{/if}product_ids[]"
                                           value="{$product.product_id}"
                                           class="cm-item cm-item-status-{$product.status|lower} hide"
                                    />
                                </td>
                                <td class="products-list__image">
                                    {include
                                        file="common/image.tpl"
                                        image=$product.main_pair.icon|default:$product.main_pair.detailed
                                        image_id=$product.main_pair.image_id
                                        image_width=$settings.Thumbnails.product_admin_mini_icon_width
                                        image_height=$settings.Thumbnails.product_admin_mini_icon_height
                                        href="products.update?product_id=`$product.product_id`"|fn_url
                                        image_css_class="products-list__image--img"
                                        link_css_class="products-list__image--link"
                                    }
                                </td>
                                <td class="product-name-column" data-th="{__("name")}">
                                    {if $product.vendor_product_id}
                                        <a class="row-status"
                                           title="{$product.product|strip_tags}"
                                           href="{"products.update?product_id=`$product.vendor_product_id`"|fn_url}"
                                        >{$product.product|truncate:40 nofilter}</a>
                                    {else}
                                        <a class="row-status"
                                           title="{$product.product|strip_tags}"
                                           href="{"products.update?product_id=`$product.product_id`"|fn_url}"
                                        >{$product.product|truncate:40 nofilter}</a>
                                    {/if}

                                    <div class="product-list__labels">
                                        {hook name="products:list_product_code"}
                                            <div class="product-code">
                                                <span class="product-code__label">{$product.product_code}</span>
                                            </div>
                                        {/hook}
                                    </div>
                                </td>
                                <td width="13%" data-th="{__("price")}">
                                    {if !$runtime.company_id}
                                        <input type="hidden"
                                               name="products_data[{$product.product_id}][product]"
                                               value="{$product.product}"
                                        />
                                    {/if}
                                    {if $runtime.company_id}
                                        {if $product.vendor_product.price}
                                            {$product.vendor_product.price|fn_format_price:$primary_currency:null:false}
                                        {else}
                                            {$product.price|fn_format_price:$primary_currency:null:false}
                                        {/if}
                                    {elseif $product.master_product_offers_count}
                                        {include file="common/price.tpl" value=$product.price assign=price_from}
                                        <a href="{"products.manage?product_type[]=`$smarty.const.PRODUCT_TYPE_VENDOR_PRODUCT_OFFER`&product_type[]=`$smarty.const.PRODUCT_TYPE_PRODUCT_OFFER_VARIATION`&master_product_id=`$product.product_id`"|fn_url}">
                                            {__("master_products.price_from", ["[formatted_price]" => $price_from])}
                                        </a>
                                    {else}
                                        <input type="text"
                                               name="products_data[{$product.product_id}][price]"
                                               size="6" value="{$product.price|fn_format_price:$primary_currency:null:false}"
                                               class="input-mini input-hidden"
                                        />
                                    {/if}
                                </td>
                                <td width="12%" data-th="{__("list_price")}">
                                    {if $runtime.company_id}
                                        {$product.list_price|fn_format_price:$primary_currency:null:false}
                                    {else}
                                        <input type="text"
                                               name="products_data[{$product.product_id}][list_price]"
                                               size="6" value="{$product.list_price|fn_format_price:$primary_currency:null:false}"
                                               class="input-mini input-hidden"
                                        />
                                    {/if}
                                </td>
                            {/hook}
                            <td width="9%" class="nowrap">
                                {if $runtime.company_id}
                                    {if $product.vendor_product_id}
                                        <span class="pull-right label label-info">{__("master_products.for_sale")}</span>
                                    {else}
                                        {include
                                            file="buttons/button.tpl"
                                            but_text=__("master_products.sell_this")
                                            but_meta="cm-post"
                                            but_role="action"
                                            but_href="products.sell_master_product?master_product_id=`$product.product_id`"
                                        }
                                    {/if}
                                {else}
                                    {include file="common/select_popup.tpl"
                                        popup_additional_class="dropleft"
                                        id=$product.product_id
                                        status=$product.status
                                        hidden=true
                                        object_id_name="product_id"
                                        table="products"
                                    }
                                {/if}
                            </td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}

        {capture name="buttons"}
            {capture name="tools_list"}
                {hook name="master_products:action_buttons"}
                    {if $products}
                        {if $runtime.company_id}
                            <li>
                                {btn type="list"
                                    text=__("master_products.sell_selected")
                                    dispatch="dispatch[products.m_sell_master_product]"
                                    form="manage_products_form"
                                }
                            </li>
                        {else}
                            <li>
                                {btn type="delete_selected"
                                    text=__("delete_selected")
                                    dispatch="dispatch[products.m_delete]"
                                    form="manage_products_form"
                                }
                            </li>
                        {/if}
                        <li>
                            {btn type="list"
                                text=__("export_selected")
                                dispatch="dispatch[products.export_range.master]"
                                form="manage_products_form"
                            }
                        </li>
                        <li>
                            {btn type="list"
                                text=__("export_found_products")
                                href="products.export_found.master"
                            }
                        </li>
                    {/if}
                {/hook}
            {/capture}
            {dropdown content=$smarty.capture.tools_list}

            {if $products && !$runtime.company_id}
                {include file="buttons/save.tpl"
                    but_name="dispatch[products.m_update]"
                    but_role="action"
                    but_target_form="manage_products_form"
                    but_meta="cm-submit"
                }
            {/if}
        {/capture}

        {capture name="adv_buttons"}
            {hook name="master_products:manage_tools"}
                {if !$runtime.company_id}
                    {include file="common/tools.tpl"
                            tool_href="products.add.master"
                            prefix="top"
                            title=__("add_product")
                            hide_tools=true
                            icon="icon-plus"
                    }
                {/if}
            {/hook}
        {/capture}

        <div class="clearfix">
            {include file="common/pagination.tpl" div_id=$smarty.request.content_id}
        </div>

    </form>

{/capture}

{capture name="sidebar"}
    {hook name="master_products:manage_sidebar"}
        {include file="common/saved_search.tpl" dispatch="products.master_products" view_type="products"}
        {include file="views/products/components/products_search_form.tpl" dispatch="products.master_products"}
    {/hook}
{/capture}

{include
    file="common/mainbox.tpl"
    title=__("master_products.products_that_vendors_can_sell")
    content=$smarty.capture.mainbox
    title_extra=$smarty.capture.title_extra
    adv_buttons=$smarty.capture.adv_buttons
    select_languages=true
    buttons=$smarty.capture.buttons
    sidebar=$smarty.capture.sidebar
    content_id="manage_products"
}
