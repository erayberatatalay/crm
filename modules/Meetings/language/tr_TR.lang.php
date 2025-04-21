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
    'LBL_ACCEPT_THIS' => 'Kabul ediyor musunuz?',
    'LBL_ADD_BUTTON' => 'Ekle',
    'LBL_ADD_INVITEE' => 'Çağrılan Ekle',
    'LBL_CONTACT_NAME' => 'İlgili Kişi:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_CREATED_BY' => 'Ekleyen',
    'LBL_DATE_END' => 'Bitiş Tarihi',
    'LBL_DATE_TIME' => 'Başlangıç Tarihi ve Saati:',
    'LBL_DATE' => 'Başlangıç Tarihi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Toplantılar',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DIRECTION' => 'Yön:',
    'LBL_DURATION_HOURS' => 'Saat Olarak Süre:',
    'LBL_DURATION_MINUTES' => 'Dakika Olarak Süre:',
    'LBL_DURATION' => 'Süre:',
    'LBL_EMAIL' => 'E-posta',
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notlar',
    'LBL_HOURS_ABBREV' => 's',
    'LBL_HOURS_MINS' => '(saat/dakika)',
    'LBL_INVITEE' => 'Çağrılanlar',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_LIST_CONTACT' => 'İlgili kişi',
    'LBL_LIST_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_LIST_DATE' => 'Başlangıç Tarihi',
    'LBL_LIST_DIRECTION' => 'Yön',
    'LBL_LIST_DUE_DATE' => 'Tamamlanma Tarihi',
    'LBL_LIST_FORM_TITLE' => 'Toplantı Listesi',
    'LBL_LIST_MY_MEETINGS' => 'Toplantılarım',
    'LBL_LIST_RELATED_TO' => 'İlişkili',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_LOCATION' => 'Konum:',
    'LBL_MINSS_ABBREV' => 'd',
    'LBL_MODIFIED_BY' => 'Düzenleyen',
    'LBL_MODULE_NAME' => 'Toplantılar',
    'LBL_MODULE_TITLE' => 'Toplantılar: Ana Sayfa',
    'LBL_NAME' => 'Ad',
    'LBL_NEW_FORM_TITLE' => 'Görüşme Ekle',
    'LBL_OUTLOOK_ID' => 'Outlook Kodu',
    'LBL_SEQUENCE' => 'Toplantı Güncelleme Sırası',
    'LBL_PHONE' => 'İş Telefonu:',
    'LBL_REMINDER_TIME' => 'Anımsatıcı Saati',
    'LBL_EMAIL_REMINDER_SENT' => 'Anımsatma e-postası gönderildi',
    'LBL_REMINDER' => 'Anımsatıcılar:',
    'LBL_REMINDER_POPUP' => 'Açılan Pencere',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Tüm çağrılanlara e-posta',
    'LBL_EMAIL_REMINDER' => 'E-posta Anımsatıcı',
    'LBL_EMAIL_REMINDER_TIME' => 'E-posta Anımsatıcı Saati',
    'LBL_REMOVE' => 'Sil',
    'LBL_SCHEDULING_FORM_TITLE' => 'Zamanlama',
    'LBL_SEARCH_BUTTON' => 'Arama',
    'LBL_SEARCH_FORM_TITLE' => 'Toplantı Arama',
    'LBL_SEND_BUTTON_LABEL' => 'Kaydet ve Çağrıları Gönder',
    'LBL_SEND_BUTTON_TITLE' => 'Kaydet ve Çağrıları Gönder',
    'LBL_STATUS' => 'Durum:',
    'LBL_TYPE' => 'Toplantı Türü',
    'LBL_PASSWORD' => 'Toplantı Parolası',
    'LBL_URL' => 'Toplantıyı Başlat/Katıl',
    'LBL_HOST_URL' => 'Sunucu Adresi',
    'LBL_DISPLAYED_URL' => 'Görüntülenen Adres',
    'LBL_CREATOR' => 'Toplantıyı Ekleyen',
    'LBL_EXTERNALID' => 'Dış Uygulama Kodu',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_TIME' => 'Başlangıç Saati:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Kullanıcılar',
    'LBL_PARENT_TYPE' => 'Üst Öge Türü',
    'LBL_PARENT_ID' => 'Üst Öge Kodu',
    'LNK_MEETING_LIST' => 'Toplantıları Görüntüle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme Ekle',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_IMPORT_MEETINGS' => 'Toplantıları İçe Aktar',

    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'NOTICE_DURATION_TIME' => 'Süre 0 değerinden büyük olmalıdır',
    'LBL_MEETING_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Toplantıya Katıl',
    'LBL_ACCEPT_STATUS' => 'Kabul Edilme Durumu',
    'LBL_ACCEPT_LINK' => 'Kabul Etme Bağlantısı',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Çağrılmadığınızdan bu toplantıya katılamazsınız.',
    'LBL_EXTNOT_RECORD_LINK' => 'Toplantıyı Görüntüle',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Bir yönetici ya da toplantının sahibi olmadığınızdan bu toplantıyı başlatamazsınız.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Çağrılan ekle',
    'LBL_CREATE_CONTACT' => 'İlgili Kişi olarak',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Potansiyel olarak', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Oluştur ve Ekle', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'İptal',
    'LBL_EMPTY_SEARCH_RESULT' => 'Maalesef, herhangi bir sonuç bulunamadı. Lütfen aşağıdan bir çağrılmış kişi ekleyin.',
    'LBL_NO_ACCESS' => '$module modülünü ekleme izniniz yok',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Yinelenme Türü',
    'LBL_REPEAT_INTERVAL' => 'Yinelenme Aralığı',
    'LBL_REPEAT_DOW' => 'Yineleme Günleri',
    'LBL_REPEAT_UNTIL' => 'Yinelenme Sonu Tarihi',
    'LBL_REPEAT_COUNT' => 'Yinelenme Sayısı',
    'LBL_REPEAT_PARENT_ID' => 'Yinelenme Üst Öge Kodu',
    'LBL_RECURRING_SOURCE' => 'Yinelenme Kaynağı',

    'LBL_SYNCED_RECURRING_MSG' => 'Bu toplantının kaynağı başka bir sistem ve SuiteCRM veritabanı ile eşitlenmiş. Değişiklik yapmak için, diğer sistem üzerindeki özgün toplantı kaydına bakın. Diğer sistemde yapılan değişiklikler eşitlendiğinde bu kayıt güncellenir.',
    'LBL_RELATED_TO' => 'İlişkili:',

    // for reminders
    'LBL_REMINDERS' => 'Anımsatıcılar',
    'LBL_REMINDERS_ACTIONS' => 'İşlemler:',
    'LBL_REMINDERS_POPUP' => 'Açılan Pencere',
    'LBL_REMINDERS_EMAIL' => 'Çağrılanlara E-posta',
    'LBL_REMINDERS_WHEN' => 'Ne zaman:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Anımsatıcıyı kaldır',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Tüm Çağrılanları Ekle',
    'LBL_REMINDERS_ADD_REMINDER' => 'Anımsatıcı ekle',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Etkinlik Kodu',
    'LBL_GSYNC_LASTSYNC' => 'Son Google Eşitlemesinin Zaman Damgası',
);
