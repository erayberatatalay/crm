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
    'LBL_MODULE_NAME' => 'Fırsatlar',
    'LBL_MODULE_TITLE' => 'Fırsatlar: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Fırsat Arama',
    'LBL_LIST_FORM_TITLE' => 'Fırsat Listesi',
    'LBL_OPPORTUNITY_NAME' => 'Fırsat Adı:',
    'LBL_OPPORTUNITY' => 'Fırsat:',
    'LBL_NAME' => 'Fırsat Adı',
    'LBL_INVITEE' => 'İlgili Kişiler',
    'LBL_CURRENCIES' => 'Para Birimleri',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Ad',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_AMOUNT' => 'Fırsat Tutarı',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Tutar',
    'LBL_LIST_DATE_CLOSED' => 'Kapat',
    'LBL_LIST_SALES_STAGE' => 'Satış Aşaması',
    'LBL_ACCOUNT_ID' => 'Hesap Kodu',
    'LBL_CURRENCY_NAME' => 'Para Birimi',
    'LBL_CURRENCY_SYMBOL' => 'Para Birimi Simgesi',

    'UPDATE' => 'Fırsat - Para Birimi Güncelle',
    'LBL_ACCOUNT_NAME' => 'Hesap Adı:',
    'LBL_AMOUNT' => 'Fırsat Tutarı:',
    'LBL_AMOUNT_USDOLLAR' => 'Tutar:',
    'LBL_CURRENCY' => 'Para Birimi:',
    'LBL_DATE_CLOSED' => 'Öngörülen Tamamlanma Tarihi:',
    'LBL_TYPE' => 'Tür:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_NEXT_STEP' => 'Sonraki Adım:',
    'LBL_LEAD_SOURCE' => 'Potansiyel Kaynağı:',
    'LBL_SALES_STAGE' => 'Satış Aşaması:',
    'LBL_PROBABILITY' => 'Olasılık (%):',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DUPLICATE' => 'Olası Çift Fırsat',
    'MSG_DUPLICATE' => 'Eklemek üzere olduğunuz fırsat kaydı, zaten var olan bir fırsatın benzeri olabilir. Benzer adı taşıyan fırsatları aşağıda görebilirsiniz.<br>Kaydet üzerine tıklayarak bu yeni fırsatı eklemeye devam edebilir ya da İptal üzerine tıklayarak fırsatı eklemeden modüle geri dönebilirsiniz.',
    'LBL_NEW_FORM_TITLE' => 'Fırsat Ekle',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Ekle',
    'LNK_OPPORTUNITY_LIST' => 'Fırsatları Görüntüle',
    'ERR_DELETE_RECORD' => 'Fırsatı silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_TOP_OPPORTUNITIES' => 'En İyi Açık Fırsatlarım',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Bu fırsatı projeden silmek istediğinize emin misiniz?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Belgeler',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Kapanmış Fırsatlarım',
    'LBL_TOTAL_OPPORTUNITIES' => 'Fırsatlar Toplamı',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Kazanılarak Kapatılmış Fırsatlar',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı:',
    'LBL_MODIFIED_NAME' => 'Değiştiren Kullanıcı Adı',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanyalar',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LNK_IMPORT_OPPORTUNITIES' => 'Fırsatları İçe Aktar',
    'LBL_EDITLAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
    'LBL_AOS_QUOTES' => 'Teklifler',
);
