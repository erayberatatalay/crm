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
    'ERR_DELETE_RECORD' => 'Kişiyi silmek için kayıt numarasını belirtin.',
    'LBL_ACCOUNT_ID' => 'Hesap Kodu:',
    'LBL_ACCOUNT_NAME' => 'Hesap Adı:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_ALT_ADDRESS_CITY' => 'Diğer Adres İlçe:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Diğer Adres Ülke:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Diğer Adres Posta Kodu:',
    'LBL_ALT_ADDRESS_STATE' => 'Diğer Adres İl:',
    'LBL_ALT_ADDRESS_STREET_2' => '2. Diğer Adres Satırı:',
    'LBL_ALT_ADDRESS_STREET_3' => '3. Diğer Adres Satırı:',
    'LBL_ALT_ADDRESS_STREET' => '1. Diğer Adres Satırı:',
    'LBL_ALTERNATE_ADDRESS' => 'Diğer Adres:',
    'LBL_ALT_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_EMAIL' => 'Diğer E-posta:',
    'LBL_ANY_PHONE' => 'Diğer Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi:',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı',
    'LBL_ASSISTANT_PHONE' => 'Sekreter Telefonu:',
    'LBL_ASSISTANT' => 'Sekreter:',
    'LBL_BIRTHDATE' => 'Doğum Tarihi:',
    'LBL_CITY' => 'İlçe:',
    'LBL_CAMPAIGN_ID' => 'Kampanya Kodu',
    'LBL_CONTACT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'İlgili Adı:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'İlgili - Fırsat:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'İlgili Kişi:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_CREATED_ACCOUNT' => 'Yeni bir hesap oluşturuldu',
    'LBL_CREATED_CALL' => 'Yeni bir telefon araması eklendi',
    'LBL_CREATED_CONTACT' => 'Yeni bir kişi eklendi',
    'LBL_CREATED_MEETING' => 'Yeni bir toplantı eklendi',
    'LBL_CREATED_OPPORTUNITY' => 'Yeni bir fırsat eklendi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Doğrudan Raporlar',
    'LBL_DO_NOT_CALL' => 'Telefonla Aranmasın:',
    'LBL_DUPLICATE' => 'Olası Çift İlgili',
    'LBL_EMAIL_ADDRESS' => 'E-posta:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta Abonelikten Ayrılma:',
    'LBL_EXISTING_ACCOUNT' => 'Var olan bir hesap kullanılsın',
    'LBL_EXISTING_CONTACT' => 'Var olan bir kişi kullanıldı',
    'LBL_EXISTING_OPPORTUNITY' => 'Var olan bir fırsat kullanıldı',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Adı:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_HOME_PHONE' => 'Ana Sayfa:',
    'LBL_ID' => 'Kod:',
    'LBL_IMPORT_VCARD' => 'İçe vCard Aktar',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Aygıtınızdaki bir vCard dosyasını içe aktararak yeni bir kişi kaydını otomatik olarak ekleyebilirsiniz.',
    'LBL_INVALID_EMAIL' => 'E-posta Geçersiz:',
    'LBL_INVITEE' => 'Doğrudan Raporlar',
    'LBL_LAST_NAME' => 'Soyadı:',
    'LBL_LEAD_SOURCE' => 'Potansiyel Kaynağı:',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul Durumu',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_CONTACT_NAME' => 'İlgili Adı',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta',
    'LBL_LIST_FIRST_NAME' => 'Adı',
    'LBL_LIST_FORM_TITLE' => 'İlgililer Listesi',
    'LBL_LIST_LAST_NAME' => 'Soyadı',
    'LBL_LIST_NAME' => 'Adı',
    'LBL_LIST_PHONE' => 'Ofis Telefonu',
    'LBL_LIST_TITLE' => 'İş Unvanı',
    'LBL_MOBILE_PHONE' => 'Cep Telefonu:',
    'LBL_MODIFIED' => 'Değiştiren:',
    'LBL_MODULE_NAME' => 'İlgili Kişiler',
    'LBL_MODULE_TITLE' => 'İlgili Kişiler: Ana sayfa',
    'LBL_NAME' => 'Ad:',
    'LBL_NEW_FORM_TITLE' => 'Yeni Kişi',
    'LBL_NOTE_SUBJECT' => 'Not Konusu',
    'LBL_OFFICE_PHONE' => 'Ofis Telefonu:',
    'LBL_OPP_NAME' => 'Fırsat Adı:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Fırsat Rol Kodu:',
    'LBL_OPPORTUNITY_ROLE' => 'Fırsat Rolü',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-Posta:',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal Uygulaması:',
    'LBL_PORTAL_INFORMATION' => 'Portal Bilgileri',
    'LBL_PORTAL_NAME' => 'Portal Adı:',
    'LBL_STREET' => 'Sokak',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil Adres İlçe:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil Adres Ülke:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Birincil Adres Posta Kodu:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil Adres İl:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '2. Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '3. Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil Adres:',
    'LBL_PRODUCTS_TITLE' => 'Ürünler',
    'LBL_REPORTS_TO_ID' => 'Raporlanacak Kod:',
    'LBL_REPORTS_TO' => 'Raporlanacak Kişi:',
    'LBL_RESOURCE_NAME' => 'Kaynak Adı',
    'LBL_SALUTATION' => 'Karşılama:',
    'LBL_SAVE_CONTACT' => 'Kişiyi Kaydet',
    'LBL_SEARCH_FORM_TITLE' => 'Kişi Arama',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretlenmiş Kişileri Seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretlenmiş Kişileri Seç',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_SYNC_CONTACT' => 'Outlook&reg; ile Eşitle:',
    'LBL_PROSPECT_LIST' => 'Aday Listesi',
    'LBL_TITLE' => 'İş Unvanı:',
    'LNK_CONTACT_LIST' => 'Kişileri Görüntüle',
    'LNK_IMPORT_VCARD' => 'vCard ile Kişi Ekle',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme Ekle',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_CASE' => 'Destek Kaydı Ekle',
    'LNK_NEW_CONTACT' => 'Kişi Ekle',
    'LNK_NEW_EMAIL' => 'E-posta Arşivle',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_NOTE' => 'Not Ekle',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Ekle',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_SELECT_ACCOUNT' => "Hesap Seçin",
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Bir fırsat oluşturmak için bir hesap gereklidir.\nLütfen yeni bir hesap ekleyin ya da var olan bir hesabı seçin.',
    'NTC_REMOVE_CONFIRMATION' => 'Bu kişiyi destek kaydından çıkarmak istediğinize emin misiniz?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Belgeler',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Birincil Adrese Kopyala',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Diğer Adrese Kopyala',

    'LBL_CASES_SUBPANEL_TITLE' => 'Destek Kayıtları',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_PROJECTS_RESOURCES' => 'Proje Kaynakları',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanyalar',
    'LBL_LIST_CITY' => 'İlçe',
    'LBL_LIST_STATE' => 'İl ya da Bölge',
    'LBL_HOMEPAGE_TITLE' => 'Kişilerim',
    'LBL_OPPORTUNITIES' => 'Fırsatlar',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LNK_IMPORT_CONTACTS' => 'Kişileri İçe Aktar',

    // SNIP
    'LBL_USER_SYNC' => 'Kullanıcı Eşitleme',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Etkinlikler',

    'LBL_AOP_CASE_UPDATES' => 'Destek Kaydı Güncellemeleri',
    'LBL_CREATE_PORTAL_USER' => 'Portal Kullanıcısı Ekle',
    'LBL_ENABLE_PORTAL_USER' => 'Portal Kullanıcısını Etkinleştir',
    'LBL_DISABLE_PORTAL_USER' => 'Portal Kullanıcısını Devre Dışı Bırak',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Portal kullanıcısı eklenemedi',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Portal kullanıcısı etkinleştirilemedi',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Portal kullanıcısı devre dışı bırakılamadı',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portal kullanıcısı eklendi',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portal Kullanıcısı etkinleştirildi',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portal kullanıcısı devre dışı bırakıldı',
    'LBL_NO_JOOMLA_URL' => 'Portal adresi belirtilmemiş',
    'LBL_PORTAL_USER_TYPE' => 'Portal Kullanıcısı Türü',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Hesap Devre Dışı',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla! Hesap Kodu',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
    'LBL_AOS_INVOICES' => 'Faturalar',
    'LBL_AOS_QUOTES' => 'Teklifler',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Proje Başlığından Proje İlgili Kişileri',
);
