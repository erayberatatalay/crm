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
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı Kodu',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Ad',
    'LBL_SAVING' => 'Kaydediliyor...',
    'LBL_SAVED' => 'Kaydedildi',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_FORM_TITLE' => 'Akış Listesi',
    'LBL_MODULE_NAME' => 'İşlem Akışları',
    'LBL_MODULE_TITLE' => 'İşlem Akışları',
    'LBL_DASHLET_DISABLED' => 'Uyarı: SuiteCRM akış sistemi devre dışı bırakıldı. Yeniden etkinleştirilene kadar yeni bir akış kaydı gönderilmeyecek',
    'LBL_RECORDS_DELETED' => 'Önceki tüm akış kayıtları silindi. SuiteCRM akış sistemi etkinleştirilirse yeni kayıtlar otomatik olarak eklenir.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Tüm akış kayıtlarını silmek istediğinize emin misiniz?',
    'LBL_FLUSH_RECORDS' => 'Akış Kayıtlarını Sil',
    'LBL_ENABLE_FEED' => 'İşlem Akışım Gerecini Etkinleştir',
    'LBL_ENABLE_MODULE_LIST' => 'Şunun için Akışlar Etkinleştirilsin',
    'LBL_HOMEPAGE_TITLE' => 'İşlem Akışım',
    'LNK_NEW_RECORD' => 'Akış Ekle',
    'LNK_LIST' => 'Akış',
    'LBL_SEARCH_FORM_TITLE' => 'Akış Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Akış',
    'LBL_ALL' => 'Tümü',
    'LBL_USER_FEED' => 'Kullanıcı Akışı',
    'LBL_ENABLE_USER_FEED' => 'Kullanıcı Akışını Etkinleştir',
    'LBL_TO' => 'Takıma Görüntülensin',
    'LBL_IS' => 'olduğu',
    'LBL_DONE' => 'Tamamlandı',
    'LBL_TITLE' => 'Başlık',
    'LBL_ROWS' => 'Satırlar',
    'LBL_CATEGORIES' => 'Modüller',
    'LBL_TIME_LAST_WEEK' => 'Geçen Hafta',
    'LBL_TIME_WEEKS' => 'hafta',
    'LBL_TIME_DAY' => 'gün', // PR 6080
    'LBL_TIME_DAYS' => 'gün',
    'LBL_TIME_YESTERDAY' => 'Dün',
    'LBL_TIME_HOURS' => 'Saat',
    'LBL_TIME_HOUR' => 'Saat',
    'LBL_TIME_MINUTES' => 'Dakika',
    'LBL_TIME_MINUTE' => 'Dakika',
    'LBL_TIME_SECONDS' => 'Saniye',
    'LBL_TIME_SECOND' => 'Saniye',
    'LBL_TIME_AND' => 've',
    'LBL_TIME_AGO' => 'önce',
// Activity stream
    'CREATED_CONTACT' => '<b>YENİ</b> bir {0} ekledi',
    'CREATED_OPPORTUNITY' => '<b>YENİ</b> bir {0} ekledi',
    'CREATED_CASE' => '<b>YENİ</b> bir {0} ekledi',
    'CREATED_LEAD' => '<b>YENİ</b> bir {0} ekledi',
    'FOR' => 'için', // Activity stream for cases
    'FOR_AMOUNT' => 'şu tutar için', // Activity stream for opportunity
    'CLOSED_CASE' => 'bir {0} <b>KAPATTI</b> ',
    'CONVERTED_LEAD' => 'bir {0} <b>DÖNÜŞTÜRDÜ</b>',
    'WON_OPPORTUNITY' => 'bir {0} <b>KAZANDI</b>',
    'WITH' => 'ile',

    'LBL_LINK_TYPE_Link' => 'Bağlantı',
    'LBL_LINK_TYPE_Image' => 'Görsel',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Seçin',
    'LBL_POST' => 'Gönder',
    'LBL_AUTHENTICATE' => 'Şuna bağlan',
    'LBL_AUTHENTICATION_PENDING' => 'Seçtiğiniz dış hesapların tümünün kimliği doğrulanmamış. Dış hesapların kimliğini doğrulamak üzere Seçenekler penceresine dönmek için \'İptal\' üzerine tıklayın. Kimlik doğrulamasını yapmadan devam etmek için \'Tamam\' üzerine tıklayın.',
    'LBL_ADVANCED_SEARCH' => 'Gelişmiş Süzgeç' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Diğer Seçenekleri Görüntüle',
    'LBL_HIDE_OPTIONS' => 'Seçenekleri Gizle',
    'LBL_VIEW' => 'Görünüm',
    'LBL_POST_TITLE' => 'Şunun için durum güncellemesi yayınla ',
    'LBL_URL_LINK_TITLE' => 'Kullanılacak adres bağlantısı',
);
