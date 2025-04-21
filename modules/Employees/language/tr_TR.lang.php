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
    'LBL_MODULE_NAME' => 'Çalışanlar',
    'LBL_MODULE_TITLE' => 'Çalışanlar: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Çalışan Arama',
    'LBL_LIST_FORM_TITLE' => 'Çalışanlar',
    'LBL_NEW_FORM_TITLE' => 'Çalışan Ekle',
    'LBL_LOGIN' => 'Oturum Aç',
    'LBL_RESET_PREFERENCES' => 'Varsayılan Ayarları Geri Yükle',
    'LBL_TIME_FORMAT' => 'Saat Biçimi:',
    'LBL_DATE_FORMAT' => 'Tarih Biçimi:',
    'LBL_TIMEZONE' => 'Geçerli Saat:',
    'LBL_CURRENCY' => 'Para Birimi:',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_EMPLOYEE_NAME' => 'Çalışan Adı',
    'LBL_LIST_DEPARTMENT' => 'Bölüm',
    'LBL_LIST_REPORTS_TO_NAME' => 'Raporlanacak Kişi',
    'LBL_LIST_EMAIL' => 'E-posta',
    'LBL_LIST_USER_NAME' => 'Kullanıcı Adı',
    'LBL_ERROR' => 'Hata:',
    'LBL_PASSWORD' => 'Parola:',
    'LBL_USER_NAME' => 'Kullanıcı Adı:',
    'LBL_USER_TYPE' => 'Kullanıcı Türü',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_LAST_NAME' => 'Soyad:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_ADMIN' => 'Yönetici:',
    'LBL_EMPLOYEE_INFORMATION' => 'Çalışan Bilgileri',
    'LBL_OFFICE_PHONE' => 'Ofis Telefonu:',
    'LBL_REPORTS_TO' => 'Raporlanacak Kişi Kodu:',
    'LBL_REPORTS_TO_NAME' => 'Raporlanacak Kişi',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_NOTES' => 'Notlar:',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_TITLE' => 'İş Unvanı:',
    'LBL_ANY_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_PHONE' => 'Diğer Telefon:',
    'LBL_ANY_EMAIL' => 'Diğer E-posta:',
    'LBL_ADDRESS' => 'Adres',
    'LBL_CITY' => 'İlçe:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_NAME' => 'Ad:',
    'LBL_MOBILE_PHONE' => 'Cep Telefonu:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'E-posta Adresi:',
    'LBL_EMAIL_LINK_TYPE' => 'E-posta İstemcisi',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM E-posta İstemcisi:</b> E-postalar SuiteCRM uygulaması kullanılarak gönderilir.<br><b>Dış E-posta İstemcisi:</b> E-postalar Microsoft Outlook gibi bir dış uygulama kullanılarak gönderilir.',
    'LBL_HOME_PHONE' => 'Ev Telefonu:',
    'LBL_WORK_PHONE' => 'İş Telefonu:',
    'LBL_EMPLOYEE_STATUS' => 'Çalışan Durumu:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil Adres:',
    'LBL_SAVED_SEARCH' => 'Görünüm Ayarları',
    'LBL_MESSENGER_ID' => 'Anlık İleti Adı:',
    'LBL_MESSENGER_TYPE' => 'Anlık İleti Türü:',
    'ERR_LAST_ADMIN_1' => 'Çalışan adı "',
    'ERR_LAST_ADMIN_2' => '" adlı çalışan sistem yöneticisi yetkisine sahip son kullanıcıdır. En az bir çalışanın sistem yöneticisi olması gereklidir.',
    'LNK_NEW_EMPLOYEE' => 'Çalışan Ekle',
    'LNK_EMPLOYEE_LIST' => 'Çalışanları Görüntüle',
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Çalışan Durumu',

    'LBL_SUITE_LOGIN' => 'Kullanıcı',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Atama Bildirimleri Gönder',
    'LBL_IS_ADMIN' => 'Yönetici',
    'LBL_GROUP' => 'Grup Kullanıcısı',
    'LBL_PHOTO' => 'Görsel',
    'LBL_DELETE_USER_CONFIRM' => 'Bu çalışan aynı zamanda bir kullanıcıdır. Çalışan kaydı silinirse kullanıcı kaydı da silinir ve kullanıcı uygulamaya erişemez. Bu kaydı silmeye devam etmek istiyor musunuz?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Bu çalışanı silmek istediğinize emin misiniz?',
    'LBL_ONLY_ACTIVE' => 'Etkin Çalışanlar',
    'LBL_SELECT' => 'Seçin' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Kimlik Doğrulama Kodu',
    'LBL_EXT_AUTHENTICATE' => 'Dış Kimlik Doğrulaması',
    'LBL_GROUP_USER' => 'Grup Kullanıcısı',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul Edilme Durumu',
    'LBL_MODIFIED_BY' => 'Düzenleyen',
    'LBL_MODIFIED_BY_ID' => 'Değiştiren Kodu',
    'LBL_CREATED_BY_NAME' => 'Ekleyen', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API Kullanıcısı',
    'LBL_PSW_MODIFIED' => 'Son Parola Değişimi',
    'LBL_SHOW_ON_EMPLOYEES' => 'Çalışan Kaydı Görüntülensin',
    'LBL_USER_HASH' => 'Parola',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistem Tarafından Üretilmiş Parola',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_STATUS' => 'Durum',
    'LBL_ADDRESS_CITY' => 'Adres İlçe',
    'LBL_ADDRESS_COUNTRY' => 'Adres Ülke',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_ADDRESS_POSTALCODE' => 'Adres Posta Kodu',
    'LBL_ADDRESS_STATE' => 'Adres İl',
    'LBL_ADDRESS_STREET' => 'Adres Sokak',

    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DELETED' => 'Silindi',

    'LBL_BUTTON_SELECT' => 'Seçin',
    'LBL_BUTTON_CLEAR' => 'Sil',

    'LBL_CONTACTS_SYNC' => 'Kişi Eşitleme',
    'LBL_OAUTH_TOKENS' => 'Kimlik Doğrulama Kodları',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Proje Başlığından Proje Kullanıcıları',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'İlgili Kişiler Başlığından Proje İlgili Kişileri',
    'LBL_ROLES' => 'Roller',
    'LBL_SECURITYGROUPS' => 'Güvenlik Grupları',
    'LBL_PROSPECT_LIST' => 'Aday Listesi',
);
