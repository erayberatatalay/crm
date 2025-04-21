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
    'LBL_LIST_FORM_TITLE' => 'Rapor Listesi',
    'LBL_MODULE_NAME' => 'Raporlar',
    'LBL_MODULE_TITLE' => 'Raporlar',
    'LBL_HOMEPAGE_TITLE' => 'Raporlarım',
    'LNK_NEW_RECORD' => 'Rapor Ekle',
    'LNK_LIST' => 'Raporlar',
    'LBL_SEARCH_FORM_TITLE' => 'Rapor Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Rapor',
    'LBL_REPORT_MODULE' => 'Rapor Modülü',
    'LBL_GRAPHS_PER_ROW' => 'Bir satırdaki çizelge sayısı',
    'LBL_FIELD_LINES' => 'Görüntülenecek Alanlar',
    'LBL_ADD_FIELD' => 'Alan Ekle',
    'LBL_CONDITION_LINES' => 'Koşullar',
    'LBL_ADD_CONDITION' => 'Koşul Ekle',
    'LBL_EXPORT' => 'Dışa Aktar',
    'LBL_DOWNLOAD_PDF' => 'PDF İndir',
    'LBL_ADD_TO_PROSPECT_LIST' => 'Hedef Listesine Ekle',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'Modül ağacı',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'Alanlar',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'Koşullar',
    'LBL_TOTAL' => 'Toplam',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'Çizelgeler',
    'LBL_ADD_CHART' => 'Çizelge ekle',
    'LBL_ADD_PARENTHESIS' => 'Parantez ekle',
    'LBL_INSERT_PARENTHESIS' => 'Parantez ekle', // issue 8924
    'LBL_CHART_TITLE' => 'Başlık',
    'LBL_CHART_TYPE' => 'Tür',
    'LBL_CHART_X_FIELD' => 'X Ekseni',
    'LBL_CHART_Y_FIELD' => 'Y Ekseni',
    'LBL_AOR_REPORTS_DASHLET' => 'Raporlar',
    'LBL_DASHLET_TITLE' => 'Başlık',
    'LBL_DASHLET_REPORT' => 'Rapor',
    'LBL_DASHLET_CHOOSE_REPORT' => 'Lütfen bir rapor seçin',
    'LBL_DASHLET_SAVE' => 'Kaydet',
    'LBL_DASHLET_CHARTS' => 'Çizelgeler',
    'LBL_DASHLET_ONLY_CHARTS' => 'Yalnız çizelgeler görüntülensin',
    'LBL_UPDATE_PARAMETERS' => 'Güncelle',
    'LBL_PARAMETERS' => 'Parametreler',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'Bileşenleri sürükleyip alan ya da koşul bölgesine bırakın',
    'LBL_MAIN_GROUPS' => 'Ana Grup:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'Adsız Çizelge',
    'LBL_REPORT' => 'Raporla',
);
