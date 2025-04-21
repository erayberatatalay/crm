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
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Başlık',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_ACCOUNT_NAME' => 'Başlık',
    'LBL_ACCOUNT' => 'Kuruluş:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_ANNUAL_REVENUE' => 'Yıllık Gelir:',
    'LBL_ANY_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_EMAIL' => 'Diğer E-posta:',
    'LBL_ANY_PHONE' => 'Diğer Telefon:',
    'LBL_RATING' => 'Değerlendirme',
    'LBL_ASSIGNED_USER' => 'Kullanıcı',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatura İlçe:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatura Ülke:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatura Posta Kodu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatura İl:',
    'LBL_BILLING_ADDRESS_STREET_2' => '2. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET_3' => '3. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET_4' => '4. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET' => '1. Fatura Adresi Satırı:',
    'LBL_BILLING_ADDRESS' => 'Fatura Adresi:',
    'LBL_ACCOUNT_INFORMATION' => 'Özet',
    'LBL_CITY' => 'İlçe:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_DUPLICATE' => 'Olası Çift Hesap',
    'LBL_EMAIL' => 'E-Posta:',
    'LBL_EMPLOYEES' => 'Çalışanlar:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Endüstri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_CITY' => 'İlçe',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta Adresi',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'İl ya da Bölge',
    'LBL_MEMBER_OF' => 'Şunun üyesi:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Üye Kuruluşlar',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-Posta:',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_OWNERSHIP' => 'Sahibi:',
    'LBL_PARENT_ACCOUNT_ID' => 'Üst Hesap Kodu',
    'LBL_PHONE_ALT' => 'Alternatif Telefon:',
    'LBL_PHONE_FAX' => 'İş Faks:',
    'LBL_PHONE_OFFICE' => 'İş Telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_SAVE_ACCOUNT' => 'Hesabı Kaydet',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Gönderilecek İlçe:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Gönderilecek Ülke:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Gönderilecek Posta Kodu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Gönderilecek İl:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '2. Gönderim Adresi Satırı',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '3. Gönderim Adresi Satırı',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '4. Gönderim Adresi Satırı',
    'LBL_SHIPPING_ADDRESS_STREET' => '1. Gönderim Adresi Satırı:',
    'LBL_SHIPPING_ADDRESS' => 'Gönderim Adresi:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_TICKER_SYMBOL' => 'Borsa Hisse Kodu',
    'LBL_TYPE' => 'Tür:',
    'LBL_WEBSITE' => 'Web Sitesi:',
    'LNK_ACCOUNT_LIST' => 'Hesaplar',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'MSG_DUPLICATE' => 'Bu hesabın eklenmesi büyük olasılıkla çift hesap oluşmasına neden olacak. Bu nedenle aşağıdaki listeden bir hesap seçebilir ya da Kaydet üzerine tıklayarak yazdığınız bilgilerle yeni bir hesap ekleyebilirsiniz.',
    'MSG_SHOW_DUPLICATES' => 'Bu hesabın eklenmesi büyük olasılıkla çift hesap oluşmasına neden olacak. Bu nedenle aşağıdaki listeden bir hesap seçebilir ya da Kaydet üzerine tıklayarak yazdığınız bilgilerle yeni bir hesap ekleyebilirsiniz.',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'LBL_LIST_FORM_TITLE' => 'Fatura Listesi',
    'LBL_MODULE_NAME' => 'Faturalar',
    'LBL_MODULE_TITLE' => 'Faturalar: Ana Sayfa',
    'LBL_HOMEPAGE_TITLE' => 'Faturalarım',
    'LNK_NEW_RECORD' => 'Fatura Ekle',
    'LNK_LIST' => 'Faturaları Görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Fatura Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_NEW_FORM_TITLE' => 'Yeni Fatura',
    'LBL_TERMS_C' => 'Koşullar',
    'LBL_APPROVAL_ISSUE' => 'Onay Sorunları',
    'LBL_APPROVAL_STATUS' => 'Onay Durumu',
    'LBL_BILLING_ACCOUNT' => 'Hesap',
    'LBL_BILLING_CONTACT' => 'İlgili',
    'LBL_EXPIRATION' => 'Geçerlilik Tarihi',
    'LBL_INVOICE_NUMBER' => 'Fatura Numarası',
    'LBL_OPPORTUNITY' => 'Fırsat Adı',
    'LBL_TEMPLATE_DDOWN_C' => 'Fatura Kalıpları',
    'LBL_STAGE' => 'Teklif Aşaması',
    'LBL_TERM' => 'Ödeme Koşulları',
    'LBL_SUBTOTAL_AMOUNT' => 'Ara Toplam',
    'LBL_DISCOUNT_AMOUNT' => 'İndirim',
    'LBL_TAX_AMOUNT' => 'Vergi',
    'LBL_SHIPPING_AMOUNT' => 'Kargo',
    'LBL_TOTAL_AMT' => 'Toplam',
    'VALUE' => 'Başlık',
    'LBL_EMAIL_ADDRESSES' => 'E-posta Adresleri',
    'LBL_LINE_ITEMS' => 'Satır Ögeleri',
    'LBL_GRAND_TOTAL' => 'Son Toplam',
    'LBL_QUOTE_NUMBER' => 'Teklif Numarası',
    'LBL_QUOTE_DATE' => 'Teklif Tarihi',
    'LBL_INVOICE_DATE' => 'Fatura Tarihi',
    'LBL_DUE_DATE' => 'Tamamlanma Tarihi',
    'LBL_STATUS' => 'Durum',
    'LBL_INVOICE_STATUS' => 'Fatura Durumu',
    'LBL_PRODUCT_QUANITY' => 'Adet',
    'LBL_PRODUCT_NAME' => 'Ürün',
    'LBL_PART_NUMBER' => 'Parça Numarası',
    'LBL_PRODUCT_NOTE' => 'Not',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıklama',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'İndirim',
    'LBL_UNIT_PRICE' => 'Satış Fiyatı',
    'LBL_TOTAL_PRICE' => 'Toplam',
    'LBL_VAT' => 'Vergi', //VAT
    'LBL_VAT_AMT' => 'Vergi Tutarı', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Ürün Satırı Ekle',
    'LBL_SERVICE_NAME' => 'Hizmet',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Satış Fiyatı',
    'LBL_SERVICE_DISCOUNT' => 'İndirim',
    'LBL_ADD_SERVICE_LINE' => 'Hizmet Satırı Ekle ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Sil',
    'LBL_PRINT_AS_PDF' => 'PDF Olarak Yazdır',
    'LBL_EMAIL_INVOICE' => 'Faturayı E-postala',
    'LBL_LIST_NUM' => 'No',
    'LBL_PDF_NAME' => 'Fatura',
    'LBL_EMAIL_NAME' => 'Şunun faturası',
    'LBL_NO_TEMPLATE' => 'HATA\nHerhangi bir kalıp bulunamadı. Henüz bir Fatura kalıbınız yoksa, PDF kalıpları modülüne giderek bir kalıp ekleyin',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Ara Toplam + Vergi',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF Olarak Postala',
    'LBL_ADD_GROUP' => 'Grup Ekle',
    'LBL_DELETE_GROUP' => 'Grubu Sil',
    'LBL_GROUP_NAME' => 'Grup Adı',
    'LBL_GROUP_TOTAL' => 'Grup Toplamı',
    'LBL_SHIPPING_TAX' => 'Kargo Vergisi',
    'LBL_SHIPPING_TAX_AMT' => 'Kargo Vergisi',
    'LBL_IMPORT_LINE_ITEMS' => 'Satır Ögelerini İçe Aktar',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ara Toplam (Varsayılan Para Birimi)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'İndirim (Varsayılan Para Birimi)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vergi (Varsayılan Para Birimi)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Kargo (Varsayılan Para Birimi)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Toplam (Varsayılan Para Birimi)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Kargo Vergisi (Varsayılan Para Birimi)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Genel Toplam (Varsayılan Para Birimi)',
    'LBL_INVOICE_TO' => 'Fatura Edilen',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Satır Ögesi Grupları',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ürün Teklifleri',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Teklifler: Faturalar',
);
