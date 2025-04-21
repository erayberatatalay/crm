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
    'LBL_LIST_FORM_TITLE' => 'Giden E-posta Hesapları Listesi',
    'LBL_MODULE_NAME' => 'Giden E-posta Hesapları',
    'LBL_MODULE_TITLE' => 'Giden E-posta Hesapları',
    'LBL_HOMEPAGE_TITLE' => 'Giden E-posta Hesaplarım',
    'LNK_NEW_RECORD' => 'Giden E-posta Hesabı Ekle',
    'LNK_LIST' => 'Giden E-posta Hesaplarını Görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Giden E-posta Hesaplarında Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Giden E-posta Hesapları',
    'LBL_USERNAME' => 'Kullanıcı Adı',
    'LBL_PASSWORD' => 'Parola',
    'LBL_SMTP_SERVERNAME' => 'SMTP Sunucusu Adı',
    'LBL_SMTP_AUTH' => 'SMTP Kimlik Doğrulaması',
    'LBL_SMTP_PORT' => 'SMTP Kapı Numarası',
    'LBL_SMTP_PROTOCOL' => 'SMTP İletişim Kuralı',
    'LBL_EDITVIEW_PANEL1' => 'Hesap Ayarları',
    'LBL_CHANGE_PASSWORD' => 'Parolayı Değiştir',
    'LBL_SEND_TEST_EMAIL' => 'Sınama E-postası Gönder',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Yönetici henüz bir varsayılan giden hesabı yapılandırmamış. Sınama e-postası gönderilemedi.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP kimlik doğrulaması kullanılsın',
    'LBL_MAIL_SMTPPASS' => 'SMTP Parolası:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Kapı Numarası:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı Adı:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Sunucu Özellikleri',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta hizmeti sağlayıcınızı seçin:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Parolası:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail Kimliği:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Parolası:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Posta Adresi:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Parolası:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Kullanıcı Adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Sunucu Kapı Numarası:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Sunucusu:',

    'LBL_TYPE' => 'Türü',
    'LBL_MAIL_SENDTYPE' => 'E-posta Gönderme Türü',
    'LBL_MAIL_SMTPSSL' => 'E-posta SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"Kimden" adı',
    'LBL_SMTP_FROM_ADDR' => '"Kimden" adresi',
);
