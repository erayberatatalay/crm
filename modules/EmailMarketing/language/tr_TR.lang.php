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
    'LBL_REPLY_ADDR' => '"Yanıt" Adresi: ',
    'LBL_REPLY_NAME' => '"Yanıt" Adı: ',

    'LBL_MODULE_NAME' => 'E-posta Pazarlaması',
    'LBL_MODULE_TITLE' => 'E-posta Pazarlaması: Ana Sayfa',
    'LBL_LIST_FORM_TITLE' => 'E-posta Pazarlaması Kampanyaları',
    'LBL_NAME' => 'Ad: ',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_FROM_ADDR' => 'Kimden Adresi',
    'LBL_LIST_DATE_START' => 'Başlangıç Tarihi',
    'LBL_LIST_TEMPLATE_NAME' => 'E-posta Kalıbı',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_STATUS' => 'Durum',
    'LBL_STATUS_TEXT' => 'Durum:',
    'LBL_TEMPLATE_NAME' => 'Kalıp Adı',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Düzenleyen: ',
    'LBL_CREATED' => 'Ekleyen: ',
    'LBL_MESSAGE_FOR' => 'Bu İletinin Gönderileceği Kişi:',

    'LBL_FROM_NAME' => 'Kimden Adı: ',
    'LBL_FROM_ADDR' => 'Kimden E-posta Adresi: ',
    'LBL_DATE_START' => 'Başlangıç Tarihi',
    'LBL_TIME_START' => 'Başlangıç Saati',
    'LBL_START_DATE_TIME' => 'Başlangıç Tarihi ve Saati: ',
    'LBL_TEMPLATE' => 'E-posta Kalıbı: ',

    'LBL_MODIFIED_BY' => 'Düzenleyen',
    'LBL_CREATED_BY' => 'Ekleyen: ',

    'LNK_NEW_CAMPAIGN' => 'Kampanya Ekle',
    'LNK_CAMPAIGN_LIST' => 'Kampanyalar',
    'LNK_NEW_PROSPECT_LIST' => 'Hedef Listesi Ekle',
    'LNK_PROSPECT_LIST_LIST' => 'Hedef Listeleri',
    'LNK_NEW_PROSPECT' => 'Hedef Ekle',
    'LNK_PROSPECT_LIST' => 'Hedefler',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-posta Pazarlaması',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Ekle',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Düzenle',
    'LBL_FROM_MAILBOX' => 'Posta Kutusundan',
    'LBL_FROM_MAILBOX_NAME' => 'Posta Kutusu Kullanılsın:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Giden E-posta Hesabı:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Hedef Listeleri',
    'LBL_ALL_PROSPECT_LISTS' => 'Kampanyadaki tüm hedef listeleri seçmek için işaretleyin.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Bu ileti ile ilgili tüm Hedef Listeleri.',
    'LBL_PROSPECT_LIST_NAME' => 'Hedef Listesi Adı',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Hedeflenen Listeler',
    'LBL_MODULE_SEND_TEST' => 'Kampanya: Deneme Gönder',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanya: E-postaları Gönder',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Lütfen denemek istediğiniz kampanya iletilerini seçin:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Lütfen belirtilen başlangıç tarih ve saatinde gönderilmeye başlanmasını istediğiniz kampanya iletilerini seçin:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Gönder',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Gönder',
    'LBL_ERROR_ON_MARKETING' => 'Zorunlu alanlar doldurulmamış',

    'LBL_CAMPAIGN_ID' => 'Kampanya Kodu',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Giden E-posta Hesabı Kodu',
    'LBL_EMAIL_TEMPLATE' => 'E-posta Kalıbı',
    'LBL_PROSPECT_LISTS' => 'Aday Listeleri',

);
