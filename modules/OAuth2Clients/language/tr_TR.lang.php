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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2 İstemcileri',
    'LBL_MODULE_TITLE' => 'OAuth2 İstemcileri',
    'LBL_MODULE_ID' => 'OAuth2 İstemcileri',
    'LBL_IS_CONFIDENTIAL' => 'Gizli',
    'LBL_SECRET' => 'Parola',
    'LBL_SECRET_HASHED' => 'Parolayı değiştir',
    'LBL_LEAVE_BLANK' => 'Değiştirmek istemiyorsanız boş bırakın',
    'LBL_REMEMBER_SECRET' => 'Kaydettikten sonra bir daha görüntülenmeyeceği için parolayı not edin.',
    'LBL_REDIRECT_URL' => 'Yönlendirme Adresi',
    'LBL_ALLOWED_GRANT_TYPE' => 'Verilen İzin Türü',
    'LBL_DURATION_AMOUNT' => 'Süre değeri',
    'LBL_DURATION_UNIT' => 'Süre birimi',
    'LBL_USER' => 'Atanmış Kullanıcı',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'OAuth2 Kodlarını Etkinleştir',
    'LBL_TOKEN_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Erişim kodu son kullanma zamanı',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Erişim kodu son kullanma zamanını yenile',

    'LNK_OAUTH2_TOKEN_LIST'=> 'OAuth2 Kodlarının Listesi',
    'LNK_OAUTH2_CLIENT_LIST' => 'OAuth2 İstemcilerinin Listesi',

    'LNK_NEW_OAUTH2_CLIENT' => 'OAuth2 İstemcisi Ekle',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Yeni Parola İstemcisi',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Yeni İstemci Kimlik Doğrulama İstemcisi',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Yeni Örtülü İstemci',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Yeni Kimlik Doğrulama İstemcisi',

];
