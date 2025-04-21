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
    'LBL_MODULE_NAME' => 'Görevler',
    'LBL_MODULE_TITLE' => 'Görevler: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Görev Arama',
    'LBL_LIST_FORM_TITLE' => 'Görev Listesi',
    'LBL_NEW_FORM_TITLE' => ' Görev Ekle',
    'LBL_LIST_CLOSE' => 'Kapat',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_LIST_CONTACT' => 'İlgili Kişi',
    'LBL_LIST_PRIORITY' => 'Öncelik',
    'LBL_LIST_RELATED_TO' => 'İlişkili',
    'LBL_LIST_DUE_DATE' => 'Tamamlanma Tarihi',
    'LBL_LIST_DUE_TIME' => 'Tamamlanma Saati',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_STATUS' => 'Durum:',
    'LBL_DUE_DATE' => 'Tamamlanma Tarihi:',
    'LBL_DUE_TIME' => 'Tamamlanma Saati:',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_DUE_DATE_AND_TIME' => 'Tamamlanma Tarih ve Saati:',
    'LBL_START_DATE_AND_TIME' => 'Başlangıç Tarihi ve Saati:',
    'LBL_START_DATE' => 'Başlangıç Tarihi:',
    'LBL_LIST_START_DATE' => 'Başlangıç Tarihi',
    'LBL_START_TIME' => 'Başlangıç Saati:',
    'DATE_FORMAT' => '(yyyy-aa-gg)',
    'LBL_NONE' => 'Yok',
    'LBL_CONTACT' => 'İlgili Kişi:',
    'LBL_EMAIL_ADDRESS' => 'E-posta Adresi:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL' => 'E-posta Adresi:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_NAME' => 'Ad:',
    'LBL_CONTACT_NAME' => 'İlgili Kişi Adı',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_DATE_DUE_FLAG' => 'Tamamlanma Tarihi Yok',
    'LBL_DATE_START_FLAG' => 'Başlangıç Tarihi Yok',
    'LBL_LIST_MY_TASKS' => 'Açık Görevlerim',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_TASK_LIST' => 'Görevleri Görüntüle',
    'LNK_IMPORT_TASKS' => 'Görevleri İçe Aktar',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi:',
    'LBL_LIST_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_CONTACT_ID' => 'İlgili Kişi Kodu:',
    'LBL_PARENT_ID' => 'Üst Öge Kodu:',
    'LBL_CONTACT_PHONE' => 'İlgili Kişi Telefonu:',
    'LBL_PARENT_TYPE' => 'Üst Öge Türü:',
    'LBL_TASK_INFORMATION' => 'Görev Özeti', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notlar',
    //For export labels
    'LBL_DATE_DUE' => 'Tamamlanma Tarihi',
    'LBL_RELATED_TO' => 'İlişkili:',
);
