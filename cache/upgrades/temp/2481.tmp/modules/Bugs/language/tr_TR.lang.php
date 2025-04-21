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
    'LBL_MODULE_NAME' => 'Hatalar',
    'LBL_MODULE_TITLE' => 'Hata İzleyici : Ana Sayfa',
    'LBL_MODULE_ID' => 'Hatalar',
    'LBL_SEARCH_FORM_TITLE' => 'Hata Arama',
    'LBL_LIST_FORM_TITLE' => 'Hata Listesi',
    'LBL_NEW_FORM_TITLE' => 'Yeni Hata',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_NUMBER' => 'Numara:',
    'LBL_STATUS' => 'Durum:',
    'LBL_PRIORITY' => 'Öncelik:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_CONTACT_NAME' => 'İlgili Adı:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_LIST_NUMBER' => 'No.',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_PRIORITY' => 'Öncelik',
    'LBL_LIST_RESOLUTION' => 'Çözüm',
    'LBL_LIST_LAST_MODIFIED' => 'Son Değişiklik',
    'LBL_INVITEE' => 'İlgili Kişiler',
    'LBL_TYPE' => 'Tür:',
    'LBL_LIST_TYPE' => 'Tür',
    'LBL_RESOLUTION' => 'Çözüm:',
    'LBL_RELEASE' => 'Yayın:',
    'LNK_NEW_BUG' => 'Hata Bildir',
    'LNK_BUG_LIST' => 'Hataları Görüntüle',
    'ERR_DELETE_RECORD' => 'Hatayı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_LIST_MY_BUGS' => 'Bana Atanmış Hatalar',
    'LNK_IMPORT_BUGS' => 'Hataları İçe Aktar',
    'LBL_FOUND_IN_RELEASE' => 'Bulunduğu Yayın:',
    'LBL_FIXED_IN_RELEASE' => 'Düzeltildiği Yayın:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Düzeltildiği Yayın',
    'LBL_WORK_LOG' => 'İş Günlüğü:',
    'LBL_SOURCE' => 'Kaynak:',
    'LBL_PRODUCT_CATEGORY' => 'Kategori:',

    'LBL_CREATED_BY' => 'Ekleyen:',
    'LBL_MODIFIED_BY' => 'Son Değiştiren:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta Adresi',
    'LBL_LIST_CONTACT_NAME' => 'İlgili Adı',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Bu ilgiliyi bu hatadan çıkarmak istediğinize emin misiniz?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hata İzleyici',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Destek Kayıtları',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Belgeler',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',

    'LBL_BUG_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);