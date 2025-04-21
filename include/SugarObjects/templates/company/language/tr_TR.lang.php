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
    'ERR_DELETE_RECORD' => 'Bu hesabı silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_ACCOUNT_NAME' => 'Kuruluş Adı:',
    'LBL_ACCOUNT' => 'Kuruluş:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_ANNUAL_REVENUE' => 'Yıllık Gelir:',
    'LBL_ANY_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_EMAIL' => 'Diğer E-posta:',
    'LBL_EMAIL_NON_PRIMARY' => 'İkincil E-posta Adresleri',
    'LBL_ANY_PHONE' => 'Diğer Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Kullanıcı:',
    'LBL_RATING' => 'Derecelendirme',
    'LBL_ASSIGNED_TO' => 'Atanmış Kişi:',
    'LBL_ASSIGNED_USER' => 'Atanmış Kişi:',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kişi:',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatura İlçe:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatura Ülke:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatura Posta Kodu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatura İl:',
    'LBL_BILLING_ADDRESS_STREET_2' => '2. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET_3' => '3. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET_4' => '4. Fatura Adresi Satırı',
    'LBL_BILLING_ADDRESS_STREET' => '1. Fatura Adresi Satırı:',
    'LBL_BILLING_ADDRESS' => 'Fatura Adresi:',
    'LBL_ACCOUNT_INFORMATION' => 'Kuruluş Bilgileri',
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
    'LBL_EMPLOYEES' => 'Çalışanlar:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Endüstri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_CITY' => 'İlçe',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta Adresi',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'İl',
    'LBL_MEMBER_OF' => 'Üyesi:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Üye Organizasyonlar',
    'LBL_NAME' => 'Ad:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-posta:',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_OWNERSHIP' => 'Sahibi:',
    'LBL_PARENT_ACCOUNT_ID' => 'Üst Hesap Kodu',
    'LBL_PHONE_ALT' => 'Alternatif Telefon:',
    'LBL_PHONE_FAX' => 'Ofis Faksı:',
    'LBL_PHONE_OFFICE' => 'Ofis Telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-posta Adresi',
    'LBL_EMAIL_ADDRESSES' => 'E-posta Adresleri',
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
    'LBL_TICKER_SYMBOL' => 'Borsa Hisse Kodu:',
    'LBL_TYPE' => 'Türü:',
    'LBL_WEBSITE' => 'Web Sitesi:',

    'LNK_ACCOUNT_LIST' => 'Hesaplar',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',

    'MSG_DUPLICATE' => 'Eklemek üzere olduğunuz hesap kaydı, zaten var olan bir hesabın benzeri olabilir. Benzer adı taşıyan hesapları aşağıda görebilirsiniz.<br>Hesap Ekle üzerine tıklayarak bu hesabı eklemeye devam edebilir ya da aşağıdaki listeden var olan bir hesap seçebilirsiniz.',
    'MSG_SHOW_DUPLICATES' => 'Eklemek üzere olduğunuz hesap kaydı, zaten var olan bir hesabın benzeri olabilir. Benzer adı taşıyan hesapları aşağıda görebilirsiniz.<br>Hesap Ekle üzerine tıklayarak bu hesabı eklemeye devam edebilir ya da aşağıdaki listeden var olan bir hesap seçebilirsiniz.',

    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',

    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Sil',

);
