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
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Sil',
    'LBL_LIST_FORM_TITLE' => 'Dizin Listesi',
    'LBL_MODULE_NAME' => 'Dizin',
    'LBL_MODULE_TITLE' => 'Dizin',
    'LBL_HOMEPAGE_TITLE' => 'Dizinim',
    'LNK_NEW_RECORD' => 'Dizin Ekle',
    'LNK_LIST' => 'Dizini Görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Dizin Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Dizin Ekle',
    'LBL_LAST_OPTIMISED' => 'Son İyileştirme',
    'LBL_LOCATION' => 'Konum',
    'LBL_SEARCH_BUTTON' => 'Arama',
    'LBL_SEARCH_QUERY_PLACEHOLDER' => 'Aranacak ifadeyi yazın...',
    'LBL_INDEX_STATS' => 'Dizin istatistikleri',
    'LBL_OPTIMISE_NOW' => "Şimdi iyileştir",
    'LBL_TOTAL_RECORDS' => 'Toplam kayıt sayısı',
    'LBL_INDEXED_RECORDS' => 'Dizine eklenmiş kayıt sayısı',
    'LBL_UNINDEXED_RECORDS' => 'Dizine eklenmemiş kayıt sayısı',
    'LBL_FAILED_RECORDS' => 'Başarısız kayıtlar',
    'LBL_INDEX_FILES' => 'Dizin dosya sayısı',
    'LBL_SEARCH_RESULT_SCORE' => 'Aranan İfadeye Uygunluk',
    'LBL_SEARCH_RESULT_MODULE' => 'Modül',
    'LBL_SEARCH_RESULT_NAME' => 'Ad',
    'LBL_SEARCH_RESULT_DATE_CREATED' => 'Eklenme Tarihi',
    'LBL_SEARCH_RESULT_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_SEARCH_RESULT_EMPTY' => 'Herhangi bir sonuç yok',
    'LBL_SEARCH_RESULT_SUMMARY' => 'Özet',
    'LBL_NEVER_OPTIMISED' => 'Asla',
    'LBL_USE_AOD_SEARCH' => 'Gelişmiş Arama Kullanılsın',
    'LBL_USE_VANILLA_SEARCH' => 'Basit Arama Kullanılsın',
);
