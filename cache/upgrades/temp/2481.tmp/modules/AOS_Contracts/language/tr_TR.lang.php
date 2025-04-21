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
    'LBL_ASSIGNED_TO_NAME' => 'Sözleşme Yönetimi',
    'LBL_CONTRACT_ACCOUNT' => 'Hesap',
    'LBL_OPPORTUNITY' => 'Fırsat',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Sözleşme Başlığı',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Sözleşme Listesi',
    'LBL_MODULE_NAME' => 'Sözleşmeler',
    'LBL_MODULE_TITLE' => 'Sözleşmeler: Ana Sayfa',
    'LBL_HOMEPAGE_TITLE' => 'Sözleşmelerim',
    'LNK_NEW_RECORD' => 'Sözleşme Ekle',
    'LNK_LIST' => 'Sözleşmeleri Görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Sözleşme Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Sözleşme',
    'LBL_CONTRACT_NAME' => 'Sözleşme Adı',
    'LBL_REFERENCE_CODE ' => 'Referans Kodu ',
    'LBL_START_DATE' => 'Başlangıç Tarihi',
    'LBL_END_DATE' => 'Bitiş Tarihi',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Sözleşme Değeri',
    'LBL_STATUS' => 'Durum',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Müşteri İmza Tarihi',
    'LBL_COMPANY_SIGNED_DATE' => 'Kuruluş İmza Tarihi',
    'LBL_RENEWAL_REMINDER_DATE' => 'Yenileme Anımsatma Tarihi',
    'LBL_CONTRACT_TYPE' => 'Sözleşme Türü',
    'LBL_CONTACT' => 'İlgili',
    'LBL_ADD_GROUP' => 'Grup Ekle',
    'LBL_DELETE_GROUP' => 'Grubu Sil',
    'LBL_GROUP_NAME' => 'Grup Adı',
    'LBL_GROUP_TOTAL' => 'Grup Toplamı',
    'LBL_PRODUCT_QUANITY' => 'Adet',
    'LBL_PRODUCT_NAME' => 'Ürün',
    'LBL_PART_NUMBER' => 'Parça Numarası',
    'LBL_PRODUCT_NOTE' => 'Not',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıklama',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'İndirim',
    'LBL_UNIT_PRICE' => 'Satış Fiyatı',
    'LBL_TOTAL_PRICE' => 'Toplam',
    'LBL_VAT' => 'Vergi',
    'LBL_VAT_AMT' => 'Vergi Tutarı',
    'LBL_SERVICE_NAME' => 'Hizmet',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Satış Fiyatı',
    'LBL_SERVICE_DISCOUNT' => 'İndirim',
    'LBL_LINE_ITEMS' => 'Satır Ögeleri',
    'LBL_SUBTOTAL_AMOUNT' => 'Ara Toplam',
    'LBL_DISCOUNT_AMOUNT' => 'İndirim',
    'LBL_TAX_AMOUNT' => 'Vergi',
    'LBL_SHIPPING_AMOUNT' => 'Kargo',
    'LBL_TOTAL_AMT' => 'Toplam',
    'LBL_GRAND_TOTAL' => 'Son Toplam',
    'LBL_SHIPPING_TAX' => 'Kargo Vergisi',
    'LBL_SHIPPING_TAX_AMT' => 'Kargo Vergisi',
    'LBL_ADD_PRODUCT_LINE' => 'Ürün Satırı Ekle',
    'LBL_ADD_SERVICE_LINE' => 'Hizmet Satırı Ekle ',
    'LBL_PRINT_AS_PDF' => 'PDF Olarak Yazdır',
    'LBL_EMAIL_PDF' => 'PDF Olarak Postala',
    'LBL_PDF_NAME' => 'Sözleşme',
    'LBL_EMAIL_NAME' => 'Şunun sözleşmesi',
    'LBL_NO_TEMPLATE' => 'HATA\nHerhangi bir kalıp bulunamadı. Henüz bir Sözleşme kalıbınız yoksa, PDF kalıpları modülüne giderek bir kalıp ekleyin',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Sözleşme Değeri (Varsayılan Para Birimi)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ara Toplam (Varsayılan Para Birimi)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'İndirim (Varsayılan Para Birimi)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vergi (Varsayılan Para Birimi)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Kargo (Varsayılan Para Birimi)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Toplam (Varsayılan Para Birimi)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Kargo Vergisi (Varsayılan Para Birimi)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Genel Toplam (Varsayılan Para Birimi)',

    'LBL_CALL_ID' => 'Telefon Araması Kodu',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Satır Ögesi Grupları',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ürün Teklifleri',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Teklifler: Sözleşmeler',
);
