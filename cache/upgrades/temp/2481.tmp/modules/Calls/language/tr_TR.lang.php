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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Telefon Aramaları',
    'LBL_MODULE_TITLE' => 'Telefon Aramaları: Ana sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Telefon Araması Arama',
    'LBL_LIST_FORM_TITLE' => 'Telefon Araması Listesi',
    'LBL_NEW_FORM_TITLE' => 'Görüşme Ekle',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_LIST_CONTACT' => 'İlgili',
    'LBL_LIST_RELATED_TO' => 'İlişkili ',
    'LBL_LIST_RELATED_TO_ID' => 'İlişkili Kod',
    'LBL_LIST_DATE' => 'Başlangıç Tarihi',
    'LBL_LIST_DIRECTION' => 'Yön',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_REMINDER' => 'Anımsatıcı:',
    'LBL_CONTACT_NAME' => 'İlgili:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_STATUS' => 'Durum:',
    'LBL_DIRECTION' => 'Yön:',
    'LBL_DATE' => 'Başlangıç Tarihi:',
    'LBL_DURATION' => 'Süre:',
    'LBL_DURATION_HOURS' => 'Saat Olarak Süre:',
    'LBL_DURATION_MINUTES' => 'Dakika Olarak Süre:',
    'LBL_HOURS_MINUTES' => '(saat/dakika)',
    'LBL_DATE_TIME' => 'Başlangıç Tarih ve Saati:',
    'LBL_TIME' => 'Başlangıç Saati:',
    'LBL_HOURS_ABBREV' => 's',
    'LBL_MINSS_ABBREV' => 'd',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_CALL_LIST' => 'Telefon Aramalarını Görüntüle',
    'LNK_IMPORT_CALLS' => 'Telefon Aramalarını İçe Aktar',
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_INVITEE' => 'Katılımcılar',
    'LBL_RELATED_TO' => 'İlişkili:',
    'LNK_NEW_APPOINTMENT' => 'Görüşme Ekle',
    'LBL_SCHEDULING_FORM_TITLE' => 'Zamanlanıyor',
    'LBL_ADD_INVITEE' => 'Katılımcı Ekle',
    'LBL_NAME' => 'Ad',
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_EMAIL' => 'E-Posta',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Açılan Pencere',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Katılımcılara e-posta gönder',
    'LBL_EMAIL_REMINDER' => 'E-Posta Anımsatıcı',
    'LBL_EMAIL_REMINDER_TIME' => 'E-posta Anımsatıcı Saati',
    'LBL_SEND_BUTTON_TITLE' => 'Kaydet ve Çağrıları Gönder',
    'LBL_SEND_BUTTON_LABEL' => 'Kaydet ve Çağrıları Gönder',
    'LBL_DATE_END' => 'Bitiş Tarihi',
    'LBL_REMINDER_TIME' => 'Anımsatıcı Saati',
    'LBL_EMAIL_REMINDER_SENT' => 'Anımsatma e-postası gönderildi',
    'LBL_SEARCH_BUTTON' => 'Arama',
    'LBL_ADD_BUTTON' => 'Ekle',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefon Aramaları',
    'LNK_SELECT_ACCOUNT' => 'Hesap Seçin',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_NEW_OPPORTUNITY' => 'Yeni Fırsat',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_USERS_SUBPANEL_TITLE' => 'Kullanıcılar',
    'LBL_OUTLOOK_ID' => 'Outlook Kodu',
    'LBL_MEMBER_OF' => 'Şunun üyesi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notlar',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_LIST_MY_CALLS' => 'Telefon Aramalarım',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı',
    'NOTICE_DURATION_TIME' => 'Süre 0 değerinden büyük olmalıdır',
    'LBL_CALL_INFORMATION' => 'Özet', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_REMOVE' => 'Sil',
    'LBL_ACCEPT_STATUS' => 'Kabul Durumu',
    'LBL_ACCEPT_LINK' => 'Kabul Etme Bağlantısı',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Katılımcı ekle',
    'LBL_CREATE_CONTACT' => 'Kişi Olarak',
    'LBL_CREATE_LEAD' => 'Potansiyel Olarak',
    'LBL_CREATE_AND_ADD' => 'Oluştur ve Ekle',
    'LBL_CANCEL_CREATE_INVITEE' => 'İptal',
    'LBL_EMPTY_SEARCH_RESULT' => 'Maalesef, herhangi bir sonuç bulunamadı. Lütfen aşağıdan bir katılımcı ekleyin.',
    'LBL_NO_ACCESS' => '$module modülünü ekleme izniniz yok',

    'LBL_REPEAT_TYPE' => 'Yinelenme Türü',
    'LBL_REPEAT_INTERVAL' => 'Yinelenme Aralığı',
    'LBL_REPEAT_DOW' => 'Haftanın Günleri',
    'LBL_REPEAT_UNTIL' => 'Son Yinelenme Tarihi',
    'LBL_REPEAT_COUNT' => 'Yinelenme Sayısı',
    'LBL_REPEAT_PARENT_ID' => 'Yinelenme Üst Öge Kodu',
    'LBL_RECURRING_SOURCE' => 'Yinelenme Kaynağı',

    'LBL_SYNCED_RECURRING_MSG' => 'Bu telefon aramasının kaynağı başka bir sistem ve SuiteCRM veritabanı ile eşitlenmiş. Değişiklik yapmak için, diğer sistem üzerindeki özgün telefon araması kaydına bakın. Diğer sistemde yapılan değişiklikler eşitlendiğinde bu kayıt güncellenir.',

    // for reminders
    'LBL_REMINDERS' => 'Anımsatıcılar',
    'LBL_REMINDERS_ACTIONS' => 'İşlemler:',
    'LBL_REMINDERS_POPUP' => 'Açılan Pencere',
    'LBL_REMINDERS_EMAIL' => 'Katılımcılara e-posta gönder',
    'LBL_REMINDERS_WHEN' => 'Ne zaman:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Anımsatıcıyı kaldır',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Tüm Katılımcıları Ekle',
    'LBL_REMINDERS_ADD_REMINDER' => 'Anımsatıcı ekle',

    'LBL_RESCHEDULE' => 'Yeniden Zamanla',
    'LBL_RESCHEDULE_COUNT' => 'Telefon Araması Girişimleri',
    'LBL_RESCHEDULE_DATE' => 'Tarih',
    'LBL_RESCHEDULE_REASON' => 'Neden',
    'LBL_RESCHEDULE_ERROR1' => 'Lütfen geçerli bir tarih seçin',
    'LBL_RESCHEDULE_ERROR2' => 'Lütfen bir neden seçin',
    'LBL_RESCHEDULE_PANEL' => 'Yeniden Zamanla',
    'LBL_RESCHEDULE_HISTORY' => 'Telefon Araması Girişimi Geçmişi',
    'LBL_CANCEL' => 'İptal',
    'LBL_SAVE' => 'Kaydet',

    'LBL_CALLS_RESCHEDULE' => 'Telefon Aramalarını Yeniden Zamanla',
    'LBL_LIST_STATUS'=>'Durum',
    'LBL_LIST_DATE_MODIFIED'=>'Değiştirilme Tarihi',
    'LBL_LIST_DUE_DATE'=>'Tamamlanma Tarihi',
    'LBL_RESCHEDULED_BY'=>'tarafından',
);