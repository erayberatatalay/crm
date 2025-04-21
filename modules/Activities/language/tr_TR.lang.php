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
    'LBL_MODULE_NAME' => 'İşlemler',
    'LBL_MODULE_TITLE' => 'İşlemler: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'İşlem Arama',
    'LBL_LIST_FORM_TITLE' => 'İşlem Listesi',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_OVERVIEW' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Görevler', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Toplantılar', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Telefon Aramaları', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'E-Postalar', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Notlar', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Yazdır', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Toplantı',
    'LBL_CALL_TYPE' => 'Telefon Araması',
    'LBL_EMAIL_TYPE' => 'E-posta',
    'LBL_NOTE_TYPE' => 'Not',
    'LBL_DATA_TYPE_START' => 'Başlangıç:',
    'LBL_DATA_TYPE_SENT' => 'Gönderildi:',
    'LBL_DATA_TYPE_MODIFIED' => 'Değiştirilme:',
    'LBL_LIST_CONTACT' => 'İlgili',
    'LBL_LIST_RELATED_TO' => 'İlişkili ',
    'LBL_LIST_DATE' => 'Tarih',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_STATUS' => 'Durum:',
    'LBL_LOCATION' => 'Konum:',
    'LBL_DATE_TIME' => 'Başlangıç Tarih ve Saati:',
    'LBL_DATE' => 'Başlangıç Tarihi:',
    'LBL_TIME' => 'Başlangıç Saati:',
    'LBL_DURATION' => 'Süre:',
    'LBL_HOURS_MINS' => '(saat/dakika)',
    'LBL_CONTACT_NAME' => 'İlgili Adı: ',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_MEETING' => 'Toplantı Planlama',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NEW_EMAIL' => 'Arşivlenmiş E-posta Ekle',
    'LNK_CALL_LIST' => 'Telefon Aramalarını Görüntüle',
    'LNK_MEETING_LIST' => 'Toplantıları Görüntüle',
    'LNK_TASK_LIST' => 'Görevleri Görüntüle',
    'LNK_NOTE_LIST' => 'Notları Görüntüle',
    'LBL_DELETE_ACTIVITY' => 'Bu işlemi silmek istediğinize emin misiniz?',
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_INVITEE' => 'Katılımcılar',
    'LBL_LIST_DIRECTION' => 'Yön',
    'LBL_DIRECTION' => 'Yön',
    'LNK_NEW_APPOINTMENT' => 'Görüşme Ekle',
    'LNK_VIEW_CALENDAR' => 'Takvimi Görüntüle',
    'LBL_OPEN_ACTIVITIES' => 'İşlemleri Aç',
    'LBL_HISTORY' => 'Geçmiş',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Görev Ekle',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Görev Ekle',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Toplantı Planlama',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Toplantı Planlama',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Not ya da Dosya Ekle',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Not ya da Dosya Ekle',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-postayı Arşivle',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-postayı Arşivle',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_DUE_DATE' => 'Tamamlanma Tarihi',
    'LBL_LIST_LAST_MODIFIED' => 'Son Değişiklik',
    'LNK_IMPORT_CALLS' => 'Telefon Aramalarını İçe Aktar',
    'LNK_IMPORT_MEETINGS' => 'Toplantıları İçe Aktar',
    'LNK_IMPORT_TASKS' => 'Görevleri İçe Aktar',
    'LNK_IMPORT_NOTES' => 'Notları İçe Aktar',
    'LBL_ACCEPT_THIS' => 'Onaylıyor musunuz?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'İşlemleri Aç',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',

    'LBL_ACCEPT' => 'Onayla' /*for 508 compliance fix*/,
);
