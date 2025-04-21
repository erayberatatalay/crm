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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Belgeler',
    // Dashlet Categories
    'LBL_CHARTS' => 'Çizelgeler',
    'LBL_DEFAULT' => 'Görünümler',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_ACCOUNT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Hesap Adı:',
    'LBL_ACCOUNT' => 'Hesap:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_ANNUAL_REVENUE' => 'Yıllık Gelir:',
    'LBL_ANY_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_EMAIL' => 'Diğer E-posta:',
    'LBL_ANY_PHONE' => 'Diğer Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi:',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatura İlçe:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatura Ülke:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatura Posta Kodu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatura İl:',
    'LBL_BILLING_ADDRESS_STREET_2' => '2. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET_3' => '3. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET_4' => '4. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET' => '1. Fatura Adresi Satırı:',
    'LBL_BILLING_ADDRESS' => 'Fatura Adresi:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_CAMPAIGN_ID' => 'Kampanya Kodu',
    'LBL_CASES_SUBPANEL_TITLE' => 'Destek İstekleri',
    'LBL_CITY' => 'İlçe:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi:',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_DESCRIPTION_INFORMATION' => 'Açıklayıcı Bilgiler',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DUPLICATE' => 'Olası Çift Hesap',
    'LBL_EMAIL' => 'E-Posta Adresi:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta Abonelikten Ayrılma:',
    'LBL_EMAIL_ADDRESSES' => 'E-posta Adresleri',
    'LBL_EMPLOYEES' => 'Çalışanlar:',
    'LBL_FAX' => 'Faks:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarihçe',
    'LBL_HOMEPAGE_TITLE' => 'Hesaplarım',
    'LBL_INDUSTRY' => 'Branş:',
    'LBL_INVALID_EMAIL' => 'E-posta Geçersiz:',
    'LBL_INVITEE' => 'İlgili Kişiler',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyel',
    'LBL_LIST_ACCOUNT_NAME' => 'Ad',
    'LBL_LIST_CITY' => 'İlçe',
    'LBL_LIST_CONTACT_NAME' => 'İlgili Adı',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta Adresi',
    'LBL_LIST_FORM_TITLE' => 'Hesap Listesi',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'İl',
    'LBL_MEMBER_OF' => 'Şuraya Üye:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Üye Kuruluşlar',
    'LBL_MODULE_NAME' => 'Hesaplar',
    'LBL_MODULE_TITLE' => 'Hesaplar: Ana Sayfa',
    'LBL_MODULE_ID' => 'Hesaplar',
    'LBL_NAME' => 'Ad:',
    'LBL_NEW_FORM_TITLE' => 'Hesap Ekle',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-Posta:',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_OWNERSHIP' => 'Sahibi:',
    'LBL_PARENT_ACCOUNT_ID' => 'Ana Hesap Kodu',
    'LBL_PHONE_ALT' => 'Alternatif Telefon:',
    'LBL_PHONE_FAX' => 'İş Faksı:',
    'LBL_PHONE_OFFICE' => 'İş Telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_PRODUCTS_TITLE' => 'Ürünler',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'İlgili Kişilere Kopyala',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopyala...',
    'LBL_RATING' => 'Değerlendirme:',
    'LBL_SAVE_ACCOUNT' => 'Hesabı Kaydet',
    'LBL_SEARCH_FORM_TITLE' => 'Hesap Arama',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Gönderilecek İlçe:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Gönderilecek Ülke:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Gönderilecek Posta Kodu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Gönderilecek İl:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '2. Gönderilecek Adres Satırı',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '3. Gönderilecek Adres Satırı',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '4. Gönderilecek Adres Satırı',
    'LBL_SHIPPING_ADDRESS_STREET' => '1. Gönderilecek Adres Satırı:',
    'LBL_SHIPPING_ADDRESS' => 'Gönderilecek Adres:',
    'LBL_SIC_CODE' => 'Kimlik Kodu:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_TICKER_SYMBOL' => 'Borsa Hisse Kodu',
    'LBL_TYPE' => 'Tür:',
    'LBL_WEBSITE' => 'Web Sitesi:',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LNK_ACCOUNT_LIST' => 'Hesapları Görüntüle',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_IMPORT_ACCOUNTS' => 'Hesapları İçe Aktar',
    'MSG_DUPLICATE' => 'Eklemek üzere olduğunuz hesap kaydı, zaten var olan bir hesabın benzeri olabilir. Benzer adı taşıyan hesapları aşağıda görebilirsiniz.<br>Hesap Ekle üzerine tıklayarak bu hesabı eklemeye devam edebilir ya da aşağıdaki listeden var olan bir hesap seçebilirsiniz.',
    'MSG_SHOW_DUPLICATES' => 'Eklemek üzere olduğunuz hesap kaydı, zaten var olan bir hesabın benzeri olabilir. Benzer adı taşıyan hesapları aşağıda görebilirsiniz.<br>Hesap Ekle üzerine tıklayarak bu hesabı eklemeye devam edebilir ya da aşağıdaki listeden var olan bir hesap seçebilirsiniz.',
    'LBL_ASSIGNED_USER_NAME' => 'Atanmış Kişi:',
    'LBL_PROSPECT_LIST' => 'Potansiyel Listesi',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    //For export labels
    'LBL_PARENT_ID' => 'Üst Öge Kodu',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Alınan Ürün ve Hizmetler',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
    'LBL_AOS_INVOICES' => 'Faturalar',
    'LBL_AOS_QUOTES' => 'Teklifler',
);
