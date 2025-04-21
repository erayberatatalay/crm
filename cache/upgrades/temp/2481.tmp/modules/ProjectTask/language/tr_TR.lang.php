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
    'LBL_MODULE_NAME' => 'Proje Görevleri',
    'LBL_MODULE_TITLE' => 'Proje Görevi: Ana Sayfa',

    'LBL_ID' => 'Kod:',
    'LBL_PROJECT_TASK_ID' => 'Proje Görevi Kodu:',
    'LBL_PROJECT_ID' => 'Proje Kodu:',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi:',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi:',
    'LBL_ASSIGNED_USER_ID' => 'Atanmış Kişi:',
    'LBL_MODIFIED_USER_ID' => 'Değiştiren Kullanıcı Kodu:',
    'LBL_CREATED_BY' => 'Ekleyen:',
    'LBL_NAME' => 'Ad:',
    'LBL_STATUS' => 'Durum:',
    'LBL_DATE_DUE' => 'Tamamlanma Tarihi:',
    'LBL_TIME_DUE' => 'Tamamlanma Tarihi:',
    'LBL_PREDECESSORS' => 'Öncülleri',
    'LBL_DATE_START' => 'Başlangıç Tarihi:',
    'LBL_DATE_FINISH' => 'Bitiş Tarihi:',
    'LBL_TIME_START' => 'Başlangıç Saati:',
    'LBL_TIME_FINISH' => 'Bitiş Saati:',
    'LBL_DURATION' => 'Süre:',
    'LBL_DURATION_UNIT' => 'Süre Birimi:',
    'LBL_ACTUAL_DURATION' => 'Gerçek Süre:',
    'LBL_PARENT_ID' => 'Proje:',
    'LBL_PARENT_TASK_ID' => 'Üst Görev Kodu:',
    'LBL_PERCENT_COMPLETE' => 'Tamamlanma Yüzdesi',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_DESCRIPTION' => 'Notlar:',
    'LBL_ORDER_NUMBER' => 'Sıra:',
    'LBL_TASK_NUMBER' => 'Görev Numarası:',
    'LBL_TASK_ID' => 'Görev Kodu:',
    'LBL_MILESTONE_FLAG' => 'Kilometre Taşı:',
    'LBL_ESTIMATED_EFFORT' => 'Harcanacak Zaman Öngörüsü (saat):',
    'LBL_ACTUAL_EFFORT' => 'Gerçekleşen Harcanan Zaman (saat):',
    'LBL_UTILIZATION' => 'Kullanım (%):',
    'LBL_DELETED' => 'Silindi:',

    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PARENT_NAME' => 'Proje',
    'LBL_LIST_PERCENT_COMPLETE' => 'Tamamlanma Yüzdesi',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atanmış Kişi',
    'LBL_LIST_DATE_DUE' => 'Tamamlanma Tarihi',
    'LBL_LIST_PRIORITY' => 'Öncelik',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_PROJECT_NAME' => 'Proje Adı',

    'LNK_NEW_PROJECT' => 'Proje Ekle',
    'LNK_PROJECT_LIST' => 'Proje Listesi',
    'LNK_NEW_PROJECT_TASK' => 'Proje Görevi Ekle',
    'LNK_PROJECT_TASK_LIST' => 'Proje Görevleri',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Proje Görevlerim',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Proje Görevleri',
    'LBL_NEW_FORM_TITLE' => 'Yeni Proje Görevi',

    'LBL_HISTORY_TITLE' => 'Geçmiş',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',

    'LBL_ASSIGNED_USER_NAME' => 'Atanmış Kişi',
    'LBL_PARENT_NAME' => 'Proje Adı',
    'LBL_EDITLAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Zaman Tüneli',

    'LBL_SUBTASK' => 'Alt Görev',
    'LBL_LAG' => 'Gecikme',
    'LBL_DAYS' => 'Gün',
    'LBL_HOURS' => 'Saat',
    'LBL_RELATIONSHIP_TYPE' => 'İlişki Türü',
);
