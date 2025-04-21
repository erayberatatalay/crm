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
    'LBL_MODULE_NAME' => 'Hedefler',
    'LBL_MODULE_ID' => 'Hedefler',
    'LBL_INVITEE' => 'Doğrudan Raporlar',
    'LBL_MODULE_TITLE' => 'Hedefler: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Hedef Arama',
    'LBL_LIST_FORM_TITLE' => 'Hedef Listesi',
    'LBL_NEW_FORM_TITLE' => 'Yeni Hedef',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_TITLE' => 'İş Unvanı',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Ad',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kişi:',
    'LBL_CAMPAIGN_ID' => 'Kampanya Kodu',
    'LBL_EXISTING_ACCOUNT' => 'Var olan bir hesap kullanıldı',
    'LBL_CREATED_ACCOUNT' => 'Yeni bir hesap eklendi',
    'LBL_CREATED_CALL' => 'Yeni bir telefon araması eklendi',
    'LBL_CREATED_MEETING' => 'Yeni bir toplantı eklendi',
    'LBL_NAME' => 'Ad:',
    'LBL_PROSPECT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Diğer Bilgiler',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_OFFICE_PHONE' => 'İş Telefonu:',
    'LBL_ANY_PHONE' => 'Herhangi Bir Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Soyad:',
    'LBL_MOBILE_PHONE' => 'Cep Telefonu:',
    'LBL_HOME_PHONE' => 'Ana Sayfa:',
    'LBL_OTHER_PHONE' => 'Diğer Telefon:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil Adres İlçe:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil Adres Ülke:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil Adres İl:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Öncelikli Adres Posta Kodu:',
    'LBL_ALT_ADDRESS_STREET' => '1. Alternatif Adres Satırı:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatif Adres İlçe:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatif Adres Ülke:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatif Adres İl:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatif Adres Posta Kodu:',
    'LBL_TITLE' => 'İş Unvanı:',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_BIRTHDATE' => 'Doğum Tarihi:',
    'LBL_EMAIL_ADDRESS' => 'E-posta Adresi:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer E-posta:',
    'LBL_ANY_EMAIL' => 'Herhangi Bir E-posta:',
    'LBL_ASSISTANT' => 'Sekreter:',
    'LBL_ASSISTANT_PHONE' => 'Sekreter Telefonu:',
    'LBL_DO_NOT_CALL' => 'Telefonla Aranmasın:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta Aboneliğinden Ayrılma:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil Adres:',
    'LBL_ALTERNATE_ADDRESS' => 'Diğer Adres:',
    'LBL_ANY_ADDRESS' => 'Herhangi Bir Adres:',
    'LBL_CITY' => 'İlçe:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_ADDRESS_INFORMATION' => 'Adres Bilgileri',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_OPP_NAME' => 'Fırsat Adı:',
    'LBL_IMPORT_VCARD' => 'İçe vCard Aktar',
    'LBL_IMPORT_VCARDTEXT' => 'Aygıtınızdaki bir vCard dosyasını içe aktararak yeni bir kişi kaydını otomatik olarak ekleyebilirsiniz.',
    'LBL_DUPLICATE' => 'Olası Çift Hedef',
    'MSG_SHOW_DUPLICATES' => 'Eklemek üzere olduğunuz hedef kaydı, zaten var olan bir hedef kaydının benzeri olabilir. Benzer adı ya da e-posta adresini taşıyan hedefleri aşağıda görebilirsiniz.<br>Hedef Ekle üzerine tıklayarak bu hedefi eklemeye devam edebilir ya da aşağıdaki listeden var olan bir hedef seçebilirsiniz.',
    'MSG_DUPLICATE' => 'Eklemek üzere olduğunuz hedef kaydı, zaten var olan bir hedef kaydının benzeri olabilir. Benzer adı ya da e-posta adresini taşıyan hedefleri aşağıda görebilirsiniz.<br>Kaydet üzerine tıklayarak bu yeni hedefi eklemeye devam edebilir ya da İptal üzerine tıklayarak hedefi eklemeden modüle geri dönebilirsiniz.',
    'LNK_IMPORT_VCARD' => 'vCard ile Ekle',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Ekle',
    'LNK_NEW_CASE' => 'Destek Kaydı Ekle',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_EMAIL' => 'E-postayı Arşivle',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme Ekle',
    'LNK_IMPORT_PROSPECTS' => 'Hedefleri İçe Aktar',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_REMOVE_CONFIRMATION' => 'Bu kişiyi destek kaydından çıkarmak istediğinize emin misiniz?',
    'ERR_DELETE_RECORD' => 'Bir ilgili kişiyi silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_SALUTATION' => 'Hitap',
    'LBL_CREATED_OPPORTUNITY' => 'Yeni bir fırsat eklendi',
    'LNK_SELECT_ACCOUNT' => "Hesap Seçin",
    'LNK_NEW_PROSPECT' => 'Hedef Ekle',
    'LNK_PROSPECT_LIST' => 'Hedefleri Görüntüle',
    'LNK_NEW_CAMPAIGN' => 'Kampanya Ekle',
    'LNK_CAMPAIGN_LIST' => 'Kampanyalar',
    'LNK_NEW_PROSPECT_LIST' => 'Hedef Listesi Ekle',
    'LNK_PROSPECT_LIST_LIST' => 'Hedef Listeleri',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretlenmiş Hedefleri Seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretlenmiş Hedefleri Seç',
    'LBL_INVALID_EMAIL' => 'E-posta Geçersiz:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hedefler',
    'LBL_PROSPECT_LIST' => 'Aday Listesi',
    'LBL_CONVERT_BUTTON_TITLE' => 'Hedef Dönüştür',
    'LBL_CONVERT_BUTTON_LABEL' => 'Hedef Dönüştür',
    'LNK_NEW_CONTACT' => 'Yeni İlgili Kişi',
    'LBL_CREATED_CONTACT' => "Yeni bir kişi eklendi",
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanya Günlüğü',
    'LBL_TRACKER_KEY' => 'İzleyici Anahtarı',
    'LBL_LEAD_ID' => 'Potansiyel Kodu',
    'LBL_CONVERTED_LEAD' => 'Dönüştürülmüş Potansiyel',
    'LBL_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_EDIT_ACCOUNT_NAME' => 'Hesap Adı:',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Etkinlikler',
);
