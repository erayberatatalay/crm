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
    'LBL_SECURITYGROUPS' => 'Güvenlik Grupları',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Güvenlik Grupları',
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
    'LBL_LIST_FORM_TITLE' => 'Özet Liste',
    'LBL_MODULE_NAME' => 'Özet',
    'LBL_MODULE_TITLE' => 'Özet',
    'LBL_HOMEPAGE_TITLE' => 'Özetim',
    'LNK_NEW_RECORD' => 'Özet Ekle',
    'LNK_LIST' => 'Özeti Görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Özet Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi Görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni Özet',
    'LBL_CONFIG' => 'Yapılandır',
    'LBL_TYPE' => 'İncelenecek Bölge',
    'LNK_SPOT_LIST' => 'Noktaları Görüntüle',
    'LNK_SPOT_CREATE' => 'Nokta Ekle',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Yapılandırma',

    'LBL_AN_UNSUPPORTED_DB' => 'Maalesef, Suite Spots şu anda yalnız MySQL ve MS SQL için yapılandırılmış',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Ad',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Hesap Türü',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Endüstri',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Fatura Ülke',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Atanmış Kullanıcı',
    'LBL_AN_LEADS_STATUS' => 'Durum',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Potansiyel Kaynağı',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Kampanya Adı',
    'LBL_AN_LEADS_YEAR' => 'Yıl',
    'LBL_AN_LEADS_QUARTER' => 'Çeyrek',
    'LBL_AN_LEADS_MONTH' => 'Ay',
    'LBL_AN_LEADS_WEEK' => 'Hafta',
    'LBL_AN_LEADS_DAY' => 'Gün',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Fırsat Adı',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Atanmış Kullanıcı',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'FırsatTürü',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Potansiyel Kaynağı',
    'LBL_AN_SALES_AMOUNT' => 'Tutar',
    'LBL_AN_SALES_STAGE' => 'Satış Aşaması',
    'LBL_AN_SALES_PROBABILITY' => 'Olasılık',
    'LBL_AN_SALES_DATE' => 'Satış Tarihi',
    'LBL_AN_SALES_QUARTER' => 'Satış Çeyreği',
    'LBL_AN_SALES_MONTH' => 'Satış Ayı',
    'LBL_AN_SALES_WEEK' => 'Satış Haftası',
    'LBL_AN_SALES_DAY' => 'Satış Günü',
    'LBL_AN_SALES_YEAR' => 'Satış Yılı',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanya',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_AN_SERVICE_STATE' => 'Durum',
    'LBL_AN_SERVICE_STATUS' => 'Durum',
    'LBL_AN_SERVICE_PRIORITY' => 'Öncelik',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Eklendiği Gün',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Eklendiği Hafta',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Eklendiği Ay',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Eklendiği Çeyrek',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Eklendiği Yıl',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'İlgili Kişi Adı',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Atanmış Kullanıcı',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tür',
    'LBL_AN_ACTIVITIES_NAME' => 'Ad',
    'LBL_AN_ACTIVITIES_STATUS' => 'Durum',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Atanmış Kullanıcı',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Durum',
    'LBL_AN_MARKETING_TYPE' => 'Tür',
    'LBL_AN_MARKETING_BUDGET' => 'Bütçe',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Öngörülen Maliyet',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Öngörülen Kazanç',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Fırsat Adı',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Fırsat Tutarı',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Fırsatın Satış Aşaması',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Fırsatın Atandığı Kişi',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Hesap Adı',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Kampanya Adı',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'İşlem Tarihi',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'İşlem Türü',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'İlişkili Öge Türü',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'İlişkili Öge Kodu',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Fırsat Adı',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Fırsat Türü',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Fırsat Potansiyeli Kaynağı',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Fırsatın Satış Aşaması',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'İlgili Kişi Adı',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Öge Adı',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Öge Türü',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Öge Kategorisi',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Öge Miktarı',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Ürün Liste Fiyatı',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Ürün Satış Fiyatı',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Ürün Maliyeti',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Ürün İndirimli Fiyatı',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'İndirim Tutarı',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Ürün Toplamı',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Son Toplam',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Atanmış Kullanıcı',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Eklenme Tarihi',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Eklendiği Gün',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Eklendiği Hafta',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Eklendiği Ay',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Eklendiği Çeyrek',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Eklendiği Yıl',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Özet alt alan etiketi doğrulanırken sorun çıktı',
);
