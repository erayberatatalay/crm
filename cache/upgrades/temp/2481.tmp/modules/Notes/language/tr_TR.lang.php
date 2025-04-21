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
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası yazmalısınız.',
    'LBL_ACCOUNT_ID' => 'Hesap Kodu:',
    'LBL_CASE_ID' => 'Destek Kaydı Kodu:',
    'LBL_CLOSE' => 'Kapat:',
    'LBL_CONTACT_ID' => 'İlgili Kişi Kodu:',
    'LBL_CONTACT_NAME' => 'İlgili Kişi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notlar',
    'LBL_DESCRIPTION' => 'Not',
    'LBL_EMAIL_ADDRESS' => 'E-posta Adresi:',
    'LBL_EMAIL_ATTACHMENT' => 'E-posta Ek Dosyası',
    'LBL_FILE_MIME_TYPE' => 'MIME Türü',
    'LBL_FILE_URL' => 'Dosya Adresi',
    'LBL_FILENAME' => 'Ek Dosya:',
    'LBL_LEAD_ID' => 'Potansiyel Kodu:',
    'LBL_LIST_CONTACT_NAME' => 'İlgili kişi',
    'LBL_LIST_DATE_MODIFIED' => 'Son Değişiklik',
    'LBL_LIST_FILENAME' => 'Ek Dosya',
    'LBL_LIST_FORM_TITLE' => 'Not Listesi',
    'LBL_LIST_RELATED_TO' => 'İlişkili',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_CONTACT' => 'İlgili Kişi',
    'LBL_MODULE_NAME' => 'Notlar',
    'LBL_MODULE_TITLE' => 'Notlar: Ana Sayfa',
    'LBL_NEW_FORM_TITLE' => 'Not ya da Dosya Ekle',
    'LBL_NOTE_STATUS' => 'Not',
    'LBL_NOTE_SUBJECT' => 'Konu:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Ek Dosyalar',
    'LBL_NOTE' => 'Not:',
    'LBL_OPPORTUNITY_ID' => 'Fırsat Kodu:',
    'LBL_PARENT_ID' => 'Üst Öge Kodu:',
    'LBL_PARENT_TYPE' => 'Üst Öge Türü',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => 'Portalde görüntülensin mi?',
    'LBL_EMBED_FLAG' => 'E-postaya gömülsün mü?',
    'LBL_PRODUCT_ID' => 'Ürün Kodu:',
    'LBL_QUOTE_ID' => 'Teklif Kodu:',
    'LBL_RELATED_TO' => 'İlişkili:',
    'LBL_SEARCH_FORM_TITLE' => 'Not Arama',
    'LBL_STATUS' => 'Durum',
    'LBL_SUBJECT' => 'Konu:',
    'LNK_IMPORT_NOTES' => 'Notları İçe Aktar',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NOTE_LIST' => 'Notları Görüntüle',
    'LBL_MEMBER_OF' => 'Şunun üyesi:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',
    'LBL_REMOVING_ATTACHMENT' => 'Ek dosya kaldırılıyor...',
    'ERR_REMOVING_ATTACHMENT' => 'Ek dosya kaldırılamadı...',
    'LBL_CREATED_BY' => 'Ekleyen',
    'LBL_MODIFIED_BY' => 'Düzenleyen',
    'LBL_SEND_ANYWAYS' => 'Bu e-postanın konusu yok. Yine de gönderilsin mi?',
    'LBL_NOTE_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Notlarım',
    'LBL_EDITLAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_DELETED' => 'Silindi',
    'LBL_FILE_CONTENTS' => 'Dosya İçerikleri',
);
