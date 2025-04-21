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

    'LBL_SHAREDWEEK' => 'Paylaşılmış Hafta',
    'LBL_SHAREDMONTH' => 'Paylaşılmış Ay',

    'LBL_MODULE_NAME' => 'Takvim',
    'LBL_MODULE_TITLE' => 'Takvim',
    'LNK_NEW_CALL' => 'Telefon Araması Zamanla',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_CALL_LIST' => 'Telefon Aramaları',
    'LNK_MEETING_LIST' => 'Toplantılar',
    'LNK_TASK_LIST' => 'Görevler',
    'LNK_TASK' => 'Görev',
    'LNK_TASK_VIEW' => 'Görevi Görüntüle',
    'LNK_EVENT' => 'Etkinlik',
    'LNK_EVENT_VIEW' => 'Etkinliği Görüntüle',
    'LNK_VIEW_CALENDAR' => 'Bugün',
    'LNK_IMPORT_CALLS' => 'Telefon Aramalarını İçe Aktar',
    'LNK_IMPORT_MEETINGS' => 'Toplantıları İçe Aktar',
    'LNK_IMPORT_TASKS' => 'Görevleri İçe Aktar',
    'LBL_MONTH' => 'Ay',
    'LBL_AGENDADAY' => 'Gün',
    'LBL_YEAR' => 'Yıl',

    'LBL_AGENDAWEEK' => 'Hafta',
    'LBL_PREVIOUS_MONTH' => 'Önceki Ay',
    'LBL_PREVIOUS_DAY' => 'Önceki Gün',
    'LBL_PREVIOUS_YEAR' => 'Önceki Yıl',
    'LBL_PREVIOUS_WEEK' => 'Önceki Hafta',
    'LBL_NEXT_MONTH' => 'Sonraki Ay',
    'LBL_NEXT_DAY' => 'Sonraki Gün',
    'LBL_NEXT_YEAR' => 'Sonraki Yıl',
    'LBL_NEXT_WEEK' => 'Sonraki Hafta',
    'LBL_AM' => 'ÖÖ (AM)',
    'LBL_PM' => 'ÖS (PM)',
    'LBL_SCHEDULED' => 'Zamanlanmış',
    'LBL_BUSY' => 'Meşgul',
    'LBL_CONFLICT' => 'Çakışma',
    'LBL_USER_CALENDARS' => 'Kullanıcı Takvimleri',
    'LBL_SHARED' => 'Paylaşılmış',
    'LBL_PREVIOUS_SHARED' => 'Önceki',
    'LBL_NEXT_SHARED' => 'Sonraki',
    'LBL_SHARED_CAL_TITLE' => 'Paylaşılan Takvim',
    'LBL_USERS' => 'Kullanıcılar',
    'LBL_REFRESH' => 'Yenile',
    'LBL_EDIT_USERLIST' => 'Kullanıcı Listesi',
    'LBL_SELECT_USERS' => 'Takvim görünümü için kullanıcıları seçin',
    'LBL_FILTER_BY_TEAM' => 'Kullanıcı listesini takıma göre süz:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_DATE' => 'Başlangıç Tarih ve Saati',
    'LBL_CREATE_MEETING' => 'Toplantı Zamanla',
    'LBL_CREATE_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LBL_HOURS_ABBREV' => 's',
    'LBL_MINS_ABBREV' => 'd',


    'LBL_YES' => 'Evet',
    'LBL_NO' => 'Hayır',
    'LBL_SETTINGS' => 'Ayarlar',
    'LBL_CREATE_NEW_RECORD' => 'İşlem Ekle',
    'LBL_LOADING' => 'Yükleniyor...',
    'LBL_SAVING' => 'Kaydediliyor...',
    'LBL_SENDING_INVITES' => 'Çağrılar Kaydediliyor ve Gönderiliyor .....',
    'LBL_CONFIRM_REMOVE' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Yinelenen tüm kayıtları silmek istediğinize emin misiniz?',
    'LBL_EDIT_RECORD' => 'İşlemi Düzenle',
    'LBL_ERROR_SAVING' => 'Kayıt sırasında sorun çıktı',
    'LBL_ERROR_LOADING' => 'Yükleme sırasında sorun çıktı',
    'LBL_GOTO_DATE' => 'Tarihe Git',
    'NOTICE_DURATION_TIME' => 'Süre 0 değerinden büyük olmalıdır',
    'LBL_STYLE_BASIC' => 'Basit', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Gelişmiş', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Alan İçin Eşleşme Yok: Atanmış Kişi',
    'LBL_SUBJECT' => 'Konu',
    'LBL_DURATION' => 'Süre',
    'LBL_STATUS' => 'Durum',
    'LBL_PRIORITY' => 'Öncelik',

    'LBL_SETTINGS_TITLE' => 'Ayarlar',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Gün ve Hafta görünümlerinde zaman dilimleri görüntülensin:',
    'LBL_SETTINGS_TIME_STARTS' => 'Başlangıç saati:',
    'LBL_SETTINGS_TIME_ENDS' => 'Bitiş zamanı:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Telefon Aramalarını Görüntüle:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Görevleri Görüntüle:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Tamamlanan Toplantı, Telefon Araması ve Görevleri Görüntüle:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Paylaşılan Takvim Ayrı:',

    'LBL_SAVE_BUTTON' => 'Kaydet',
    'LBL_DELETE_BUTTON' => 'Sil',
    'LBL_APPLY_BUTTON' => 'Uygula',
    'LBL_SEND_INVITES' => 'Kaydet ve Çağrı Gönder',
    'LBL_CANCEL_BUTTON' => 'İptal',
    'LBL_CLOSE_BUTTON' => 'Kapat',

    'LBL_GENERAL_TAB' => 'Ayrıntılar',
    'LBL_PARTICIPANTS_TAB' => 'Katılımcılar',
    'LBL_REPEAT_TAB' => 'Yinelenme',

    'LBL_REPEAT_TYPE' => 'Yinele',
    'LBL_REPEAT_INTERVAL' => 'Her',
    'LBL_REPEAT_END' => 'Son',
    'LBL_REPEAT_END_AFTER' => 'Sonra',
    'LBL_REPEAT_OCCURRENCES' => 'yinelenme',
    'LBL_REPEAT_END_BY' => 'Sıklık',
    'LBL_REPEAT_DOW' => 'Zaman',
    'LBL_REPEAT_UNTIL' => 'Yinelenme Sonu Tarih',
    'LBL_REPEAT_COUNT' => 'Yinelenme sayısı',
    'LBL_REPEAT_LIMIT_ERROR' => 'İsteğiniz $limit değerinden daha fazla toplantı oluşturacak.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Tüm Yinelenmeleri Düzenle',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Bütün Yinelenmeleri Sil',

    'LBL_DATE_END_ERROR' => 'Bitiş tarihi, başlangıç tarihinden önce',
    'ERR_YEAR_BETWEEN' => 'Maalesef, takvim istediğiniz yılı kapsamıyor<br>Yıl 1970 ile 2037 arasında olmalıdır',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: bu görüntü için belirtilmemiş',
    'LBL_NO_ITEMS_MOBILE' => 'Takviminiz bu hafta için boş.',
    'LBL_GENERAL_SETTINGS' => 'Genel Ayarlar',
    'LBL_COLOR_SETTINGS' => 'Renk Ayarları',
    'LBL_MODULE' => 'Modül',
    'LBL_BODY' => 'İçerik Metni',
    'LBL_BORDER' => 'Sınır',
    'LBL_TEXT' => 'Metin',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Paz",
            '1' => "Pzt",
            '2' => "Sal",
            '3' => "Çar",
            '4' => "Per",
            '5' => "Cum",
            '6' => "Cmt",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Pazar",
            '1' => "Pazartesi",
            '2' => "Salı",
            '3' => "Çarşamba",
            '4' => "Perşembe",
            '5' => "Cuma",
            '6' => "Cumartesi",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Oca",
            '2' => "Şub",
            '3' => "Mar",
            '4' => "Nis",
            '5' => "May",
            '6' => "Haz",
            '7' => "Tem",
            '8' => "Ağu",
            '9' => "Eyl",
            '10' => "Eki",
            '11' => "Kas",
            '12' => "Ara",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Ocak",
            '2' => "Şubat",
            '3' => "Mart",
            '4' => "Nisan",
            '5' => "Mayıs",
            '6' => "Haziran",
            '7' => "Temmuz",
            '8' => "Ağustos",
            '9' => "Eylül",
            '10' => "Ekim",
            '11' => "Kasım",
            '12' => "Aralık",
        ),
);
