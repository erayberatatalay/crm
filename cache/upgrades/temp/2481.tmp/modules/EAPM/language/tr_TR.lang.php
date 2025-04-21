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
    'LBL_ASSIGNED_TO_NAME' => 'SuiteCRM Kullanıcısı',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Uygulama Kullanıcı Adı',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Dış Hesap Listesi',
    'LBL_MODULE_NAME' => 'Dış Hesap',
    'LBL_MODULE_TITLE' => 'Dış Hesaplar',
    'LBL_HOMEPAGE_TITLE' => 'Dış Hesaplarım',
    'LNK_NEW_RECORD' => 'Dış Hesap Ekle',
    'LNK_LIST' => 'Dış Hesapları Görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Dış Kaynak Ara',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Dış Hesap',
    'LBL_PASSWORD' => 'Uygulama Parolası',
    'LBL_USER_NAME' => 'Uygulama Kullanıcı Adı',
    'LBL_URL' => 'Adres',
    'LBL_APPLICATION' => 'Uygulama',
    'LBL_API_DATA' => 'API Verileri',
    'LBL_API_CONSKEY' => 'Tüketici Anahtarı',
    'LBL_API_CONSSECRET' => 'Tüketici Parolası',
    'LBL_API_OAUTHTOKEN' => 'OAuth Kodu',
    'LBL_AUTH_UNSUPPORTED' => "Bu kimlik doğrulama yöntemi uygulama tarafından desteklenmiyor",
    'LBL_AUTH_ERROR' => 'Bu hesaba bağlanma girişimi başarısız oldu.',
    'LBL_VALIDATED' => 'Bağlı',
    'LBL_ACTIVE' => 'Etkin',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'Bağlan',
    'LBL_NOTE' => 'Lütfen Dikkat',
    'LBL_CONNECTED' => 'Bağlı',

    'LBL_ERR_NO_AUTHINFO' => 'Bu hesabın bir kimlik doğrulama bilgisi yok.',
    'LBL_ERR_NO_TOKEN' => 'Bu hesabın geçerli bir oturum açma kodu yok.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Şu anda {0} hesabınıza bağlı değilsiniz. Hesabınızla oturum açmak ve bağlantıyı yeniden etkinleştirmek ve için Tamam üzerine tıklayın.',

    'LBL_CLICK_TO_EDIT' => 'Düzenlemek için Tıklayın',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Kimliği Yeniden Doğrula',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Bu uygulama için zaten bir hesap var. Var olan hesabınız yeniden etkinleştirildi.',
    'LBL_OMIT_URL' => '(http:// ya da https:// kısmını atlayın)',
    'LBL_OAUTH_SAVE_NOTICE' => '<b>Bağlan</b> üzerine tıkladığınızda, hesap bilgilerinizi yazarak hesabınızın SuiteCRM tarafından erişilmesini sağlayacağınız sayfaya yönlendirilirsiniz. Bağlantı kurulduktan sonra yeniden SuiteCRM üzerine geri dönersiniz.',
    'LBL_BASIC_SAVE_NOTICE' => 'Bu hesabı SuiteCRM ile bağlamak için <b>Bağlan</b> üzerine tıklayın.',
    'LBL_ERR_POPUPS_DISABLED' => 'Bağlantıyı kurmak için açılan tarayıcı pencerelerine izin verin ya da \'\'{0}\'\' web sitesini açılan pencerelerin engellenmeyeceği siteler listesine ekleyin.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Parolası',
);
