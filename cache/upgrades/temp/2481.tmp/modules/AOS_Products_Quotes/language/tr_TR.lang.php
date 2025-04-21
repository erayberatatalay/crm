<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı Kodu',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Not',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Ad',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_FORM_TITLE' => 'Ürün Teklifleri Listesi',
    'LBL_MODULE_NAME' => 'Satır Ögeleri',
    'LBL_MODULE_TITLE' => 'Ürün Teklifleri: Ana Sayfa',
    'LBL_HOMEPAGE_TITLE' => 'Ürün Tekliflerim',
    'LNK_NEW_RECORD' => 'Ürün Teklifi Ekle',
    'LNK_LIST' => 'Ürün Teklifleri',
    'LBL_SEARCH_FORM_TITLE' => 'Ürün Teklifi Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Ürün Teklifi',
    'LBL_PRODUCT_NAME' => 'Ad',
    'LBL_PRODUCT_QTY' => 'Adet',
    'LBL_PRODUCT_COST_PRICE' => 'Maliyet Fiyatı',
    'LBL_PRODUCT_LIST_PRICE' => 'Liste Fiyatı',
    'LBL_PRODUCT_UNIT_PRICE' => 'Birim Fiyatı',
    'LBL_PRODUCT_DISCOUNT' => 'İndirim',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'İndirim Tutarı',
    'LBL_PART_NUMBER' => 'Parça Numarası',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıklama',
    'LBL_DISCOUNT' => 'İndirim Türü',
    'LBL_VAT_AMT' => 'Vergi Tutarı',
    'LBL_VAT' => 'Vergi',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Toplam Fiyat',
    'LBL_PRODUCT_NOTE' => 'Not',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'İlişkili ',
    'LBL_PRODUCT' => 'Ürün',

    'LBL_SERVICE_MODULE_NAME' => 'Hizmetler',
    'LBL_LIST_NUM' => 'Sayı',
    'LBL_PARENT_ID' => 'Üst Öge Kodu',
    'LBL_GROUP_NAME' => 'Grup',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Maliyet Fiyatı (Varsayılan Para Birimi)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Liste Fiyatı (Varsayılan Para Birimi)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Birim Fiyatı (Varsayılan Para Birimi)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Toplam Fiyat (Varsayılan Para Birimi)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'İndirim (Varsayılan Para Birimi)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'İndirim Tutarı (Varsayılan Para Birimi)',
    'LBL_VAT_AMT_USDOLLAR' => 'Vergi Tutarı (Varsayılan Para Birimi)',
    'LBL_PRODUCTS_SERVICES' => 'Ürün / Hizmet',
    'LBL_PRODUCT_ID' => 'Ürün Kodu',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
    'LBL_AOS_INVOICES' => 'Faturalar',
    'LBL_AOS_PRODUCTS' => 'Ürünler',
    'LBL_AOS_QUOTES' => 'Teklifler',
);
