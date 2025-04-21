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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Potansiyeli silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Hesap Açıklaması',
    'LBL_ACCOUNT_ID' => 'Hesap Kodu',
    'LBL_ACCOUNT_NAME' => 'Hesap Adı:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatif Adres İlçe',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatif Adres Ülke',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatif Adres Posta Kodu',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatif Adres İl',
    'LBL_ALT_ADDRESS_STREET_2' => '2. Alternatif Adres Satırı',
    'LBL_ALT_ADDRESS_STREET_3' => '3. Alternatif Adres Satırı',
    'LBL_ALT_ADDRESS_STREET' => '1. Alternatif Adres Satırı',
    'LBL_ALTERNATE_ADDRESS' => 'Diğer Adres:',
    'LBL_ALT_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_ADDRESS' => 'Herhangi Bir Adres:',
    'LBL_ANY_EMAIL' => 'Herhangi Bir E-Posta:',
    'LBL_ANY_PHONE' => 'Herhangi Bir Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı:',
    'LBL_CITY' => 'İlçe:',
    'LBL_CONTACT_ID' => 'İlgili Kişi Kodu',
    'LBL_CONTACT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Potansiyel Adı:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potansiyel Fırsat:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Potansiyel:',
    'LBL_CONVERTED_ACCOUNT' => 'Dönüştürülen Hesap:',
    'LBL_CONVERTED_CONTACT' => 'Dönüştürülen İlgili Kişi:',
    'LBL_CONVERTED_OPP' => 'Dönüştürülen Fırsat:',
    'LBL_CONVERTED' => 'Dönüştürüldü',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Potansiyeli Dönüştür',
    'LBL_CONVERTLEAD' => 'Potansiyeli Dönüştür',
    'LBL_CONVERTLEAD_WARNING' => 'Uyarı: Dönüştürmek istediğiniz Potansiyelin durumu "Değiştirilmiş". Bu Potansiyelden zaten İlgili Kişi ve/veya Hesap kayıtları eklenmiş olabilir. Potansiyeli dönüştürmeye devam etmek istiyorsanız Kaydet üzerine tıklayın. Dönüştürmeden Potansiyel kaydına geri dönmek için İptal üzerine tıklayın.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Olası İlgili Kişi:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_CREATED_NEW' => 'Yeni eklenen',
    'LBL_CREATED_ACCOUNT' => 'Yeni bir hesap eklendi',
    'LBL_CREATED_CALL' => 'Yeni bir telefon araması eklendi',
    'LBL_CREATED_CONTACT' => 'Yeni bir kişi eklendi',
    'LBL_CREATED_MEETING' => 'Yeni bir toplantı eklendi',
    'LBL_CREATED_OPPORTUNITY' => 'Yeni bir fırsat eklendi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DO_NOT_CALL' => 'Telefonla Aranmasın:',
    'LBL_DUPLICATE' => 'Benzer Potansiyeller',
    'LBL_EMAIL_ADDRESS' => 'E-posta:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta Aboneliğinden Ayrılma:',
    'LBL_EXISTING_ACCOUNT' => 'Var olan bir hesap kullanıldı',
    'LBL_EXISTING_CONTACT' => 'Var olan bir ilgili kişi kullanıldı',
    'LBL_EXISTING_OPPORTUNITY' => 'Var olan bir fırsat kullanıldı',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_HOME_PHONE' => 'Ev Telefonu:',
    'LBL_IMPORT_VCARD' => 'İçe vCard Aktar',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Aygıtınızdaki bir vCard dosyasını içe aktararak yeni bir potansiyel kaydını otomatik olarak ekleyebilirsiniz.',
    'LBL_INVALID_EMAIL' => 'E-posta Geçersiz:',
    'LBL_INVITEE' => 'Doğrudan Raporlar',
    'LBL_LAST_NAME' => 'Soyad:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Potansiyel Kaynağı Açıklaması:',
    'LBL_LEAD_SOURCE' => 'Potansiyel Kaynağı:',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul Edilme Durumu',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_CONTACT_NAME' => 'Potansiyel Adı',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta',
    'LBL_LIST_FIRST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Potansiyel Listesi',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Potansiyel Kaynağı Açıklaması',
    'LBL_LIST_LEAD_SOURCE' => 'Potansiyel Kaynağı',
    'LBL_LIST_MY_LEADS' => 'Potansiyellerim',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PHONE' => 'İş Telefonu',
    'LBL_LIST_REFERED_BY' => 'Öneren',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_TITLE' => 'İş Unvanı',
    'LBL_MOBILE_PHONE' => 'Cep Telefonu:',
    'LBL_MODULE_NAME' => 'Potansiyeller',
    'LBL_MODULE_TITLE' => 'Potansiyeller: Ana Sayfa',
    'LBL_NAME' => 'Ad:',
    'LBL_NEW_FORM_TITLE' => 'Yeni Potansiyel',
    'LBL_OFFICE_PHONE' => 'İş Telefonu:',
    'LBL_OPP_NAME' => 'Fırsat Adı:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Fırsat Tutarı:',
    'LBL_OPPORTUNITY_ID' => 'Fırsat Kodu',
    'LBL_OPPORTUNITY_NAME' => 'Fırsat Adı:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-posta:',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal Uygulaması',
    'LBL_PORTAL_INFORMATION' => 'Portal Bilgileri',
    'LBL_PORTAL_NAME' => 'Portal Adı:',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_STREET' => 'Sokak',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil Adres İlçe',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil Adres Ülke',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Birincil Adres Posta Kodu',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil Adres İl',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '2. Birincil Adres Satırı',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '3. Birincil Adres Satırı',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil Adres Satırı',
    'LBL_PRIMARY_ADDRESS' => 'Birincil Adres:',
    'LBL_REFERED_BY' => 'Öneren:',
    'LBL_REPORTS_TO_ID' => 'Raporlanacak Kod',
    'LBL_REPORTS_TO' => 'Raporlanacak Kişi:',
    'LBL_SALUTATION' => 'Hitap',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_SEARCH_FORM_TITLE' => 'Potansiyel Arama',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretlenmiş Potansiyelleri Seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretlenmiş Potansiyelleri Seç',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_STATUS_DESCRIPTION' => 'Durum Açıklaması:',
    'LBL_STATUS' => 'Durum:',
    'LBL_TITLE' => 'İş Unvanı:',
    'LNK_IMPORT_VCARD' => 'vCard ile Potansiyel Ekle',
    'LNK_LEAD_LIST' => 'Potansiyelleri Görüntüle',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme Ekle',
    'LNK_NEW_CONTACT' => 'Kişi Ekle',
    'LNK_NEW_LEAD' => 'Potansiyel Ekle',
    'LNK_NEW_NOTE' => 'Not Ekle',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_NEW_CASE' => 'Destek Kaydı Ekle',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Ekle',
    'LNK_SELECT_ACCOUNTS' => ' <b>YA DA</b> Hesap Seçin',
    'LNK_SELECT_CONTACTS' => ' <b>YA DA</b> İlgili Kişi Seçin',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_REMOVE_CONFIRMATION' => 'Destek kaydından bu potansiyeli çıkarmak istediğinize emin misiniz?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanyalar',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',
    'LBL_PROSPECT_LIST' => 'Aday Listesi',
    'LBL_CAMPAIGN_LEAD' => 'Kampanyalar',
    'LBL_BIRTHDATE' => 'Doğum Tarihi:',
    'LBL_ASSISTANT_PHONE' => 'Sekreter Telefonu',
    'LBL_ASSISTANT' => 'Sekreter',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CONVERT_MODULE_NAME' => 'Modül',
    'LBL_CONVERT_REQUIRED' => 'Zorunlu',
    'LBL_CONVERT_SELECT' => 'Seçim Yapılabilsin',
    'LBL_CONVERT_COPY' => 'Verileri Kopyala',
    'LBL_CONVERT_EDIT' => 'Düzenle',
    'LBL_CONVERT_DELETE' => 'Sil',
    'LBL_CONVERT_ADD_MODULE' => 'Modül Ekle',
    'LBL_CREATE' => 'Ekle',
    'LBL_SELECT' => ' <b>YA DA</b> Seçin',
    'LBL_WEBSITE' => 'Web Sitesi',
    'LNK_IMPORT_LEADS' => 'İçe Potansiyel Aktar',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Yeni kayıdın ekleneceği modül.',
    'LBL_REQUIRED_TIP' => 'Potansiyel dönüştürülmeden önce zorunlu modüllerin eklenmiş ya da seçilmiş olması gereklidir.',
    'LBL_COPY_TIP' => 'Bu seçenek etkinleştirildiğinde, Potansiyeldeki alanlar yeni eklenen kayıtlardaki aynı adlı alanlara kopyalanır.',
    'LBL_SELECTION_TIP' => 'Potansiyel dönüştürülürken eklenmek yerine İlgili Kişilerde ilişkili bir alanı bulunan modüller seçilebilir.',
    'LBL_EDIT_TIP' => 'Bu modül için dönüştürme düzenini değiştirir.',
    'LBL_DELETE_TIP' => 'Bu modülü dönüştürme düzeninden çıkarır.',

    'LBL_ACTIVITIES_MOVE' => 'İşlemleri Şuraya Taşı',
    'LBL_ACTIVITIES_COPY' => 'İşlemleri Şuraya Kopyala',
    'LBL_ACTIVITIES_MOVE_HELP' => "Potansiyelin işlemlerinin taşınacağı kayıtları seçin. Görevler, Telefon Aramaları, Toplantılar, Notlar ve E-postalar seçilen kayıt(lara) taşınır.",
    'LBL_ACTIVITIES_COPY_HELP' => "Potansiyel işlemlerinin kopyalanacağı kayıtları seçin. Yeni Görevler, Telefon Aramaları, Toplantılar ve Notlar seçilen kayıtların her birine kopyalanır. E-postalar seçilmiş kayıt(lar) ile ilişkilendirilir.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampanya Kodu',
    'LBL_EDITLAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Tarihi Yazın' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Yükleniyor' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Düzenle' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Etkinlikler',
);
