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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Türkçe (Turkish) - tr_TR',
    'moduleList' => array(
        'Home' => 'Ana Sayfa',
        'ResourceCalendar' => 'Kaynak Takvimi',
        'Contacts' => 'Kişiler',
        'Accounts' => 'Hesaplar',
        'Alerts' => 'Uyarılar',
        'Opportunities' => 'Fırsatlar',
        'Cases' => 'Destek Kayıtları',
        'Notes' => 'Notlar',
        'Calls' => 'Telefon Aramaları',
        'TemplateSectionLine' => 'Kalıp Bölümü Çizgisi',
        'Calls_Reschedule' => 'Telefon Aramalarını Yeniden Zamanla',
        'Emails' => 'E-postalar',
        'EAPM' => 'Dış API Modülü',
        'Meetings' => 'Toplantılar',
        'Tasks' => 'Görevler',
        'Calendar' => 'Takvim',
        'Leads' => 'Potansiyeller',
        'Currencies' => 'Para Birimleri',
        'Activities' => 'Etkinlikler',
        'Bugs' => 'Hatalar',
        'Feeds' => 'RSS',
        'iFrames' => 'Sitelerim',
        'TimePeriods' => 'Zaman Aralıkları',
        'ContractTypes' => 'Sözleşme Türleri',
        'Schedulers' => 'Zamanlanmış Görevler',
        'Project' => 'Projeler',
        'ProjectTask' => 'Proje Görevleri',
        'Campaigns' => 'Kampanyalar',
        'CampaignLog' => 'Kampanya Günlüğü',
        'Documents' => 'Belgeler',
        'DocumentRevisions' => 'Belge Revizyonları',
        'Connectors' => 'Bağlayıcılar',
        'Roles' => 'Roller',
        'Notifications' => 'Bildirimler',
        'Sync' => 'Eşitle',
        'Users' => 'Kullanıcılar',
        'Employees' => 'Çalışanlar',
        'Administration' => 'Yönetim',
        'ACLRoles' => 'Roller',
        'InboundEmail' => 'Gelen E-Posta',
        'Releases' => 'Yayınlar',
        'Prospects' => 'Hedefler',
        'Queues' => 'Kuyruklar',
        'EmailMarketing' => 'E-posta Pazarlaması',
        'EmailTemplates' => 'E-Posta - Kalıplar',
        'ProspectLists' => 'Hedefler - Listeler',
        'SavedSearch' => 'Kaydedilmiş Aramalar',
        'UpgradeWizard' => 'Güncelleme Yardımcısı',
        'Trackers' => 'İzleyiciler',
        'TrackerSessions' => 'İzleyici Oturumları',
        'TrackerQueries' => 'İzleyici Sorguları',
        'FAQ' => 'SSS',
        'Newsletters' => 'Haber Bültenleri',
        'SugarFeed' => 'SuiteCRM Akışı',
        'SugarFavorites' => 'SuiteCRM Sık Kullanılanlar',

        'OAuthKeys' => 'OAuth Müsteri Anahtarları',
        'OAuthTokens' => 'OAuth Anahtarları',
        'OAuth2Clients' => 'OAuth İstemcileri',
        'OAuth2Tokens' => 'OAuth Anahtarları',
    ),

    'moduleListSingular' => array(
        'Home' => 'Ana Sayfa',
        'Dashboard' => 'Pano',
        'Contacts' => 'İlgili',
        'Accounts' => 'Hesap',
        'Opportunities' => 'Fırsat',
        'Cases' => 'Destek Kaydı',
        'Notes' => 'Not',
        'Calls' => 'Telefon Araması',
        'Emails' => 'E-posta',
        'EmailTemplates' => 'E-Posta Kalıbı',
        'Meetings' => 'Toplantı',
        'Tasks' => 'Görev',
        'Calendar' => 'Takvim',
        'Leads' => 'Potansiyel',
        'Activities' => 'Etkinlikler',
        'Bugs' => 'Hata',
        'KBDocuments' => 'Bilgi Bankası Belgesi',
        'Feeds' => 'RSS',
        'iFrames' => 'Sitelerim',
        'TimePeriods' => 'Zaman Aralığı',
        'Project' => 'Proje',
        'ProjectTask' => 'Proje Görevi',
        'Prospects' => 'Hedef',
        'Campaigns' => 'Kampanya',
        'Documents' => 'Belge',
        'Sync' => 'Eşitle',
        'Users' => 'Kullanıcı',
        'SugarFavorites' => 'SuiteCRM Sık Kullanılanlar',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Evet',
        '2' => 'Hayır',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analist',
        'Competitor' => 'Rakip',
        'Customer' => 'Müşteri',
        'Integrator' => 'Entegratör',
        'Investor' => 'Yatırımcı',
        'Partner' => 'İş Ortağı',
        'Press' => 'Basın',
        'Prospect' => 'Aday',
        'Reseller' => 'Bayi',
        'Other' => 'Diğer',
    ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Tekstil',
        'Banking' => 'Bankacılık',
        'Biotechnology' => 'Biyoteknoloji',
        'Chemicals' => 'Kimyasal',
        'Communications' => 'İletişim',
        'Construction' => 'İnşaat',
        'Consulting' => 'Danışmanlık',
        'Education' => 'Eğitim',
        'Electronics' => 'Elektronik',
        'Energy' => 'Enerji',
        'Engineering' => 'Mühendislik',
        'Entertainment' => 'Eğlence',
        'Environmental' => 'Çevresel',
        'Finance' => 'Finans',
        'Government' => 'Kamu',
        'Healthcare' => 'Sağlık',
        'Hospitality' => 'Ağırlama',
        'Insurance' => 'Sigorta',
        'Machinery' => 'Makine',
        'Manufacturing' => 'Üretim',
        'Media' => 'Medya',
        'Not For Profit' => 'Sivil Toplum Kuruluşu',
        'Recreation' => 'Rekreasyon',
        'Retail' => 'Perakende',
        'Shipping' => 'Kargo',
        'Technology' => 'Teknoloji',
        'Telecommunications' => 'Telekomünikasyon',
        'Transportation' => 'Ulaşım',
        'Utilities' => 'Alt Yapı',
        'Other' => 'Diğer',
    ),
    'lead_source_default_key' => 'Otomatik Oluşturuldu',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Soğuk Telefon Araması',
        'Existing Customer' => 'Var Olan Müşteri',
        'Self Generated' => 'Otomatik Oluşturuldu',
        'Employee' => 'Çalışan',
        'Partner' => 'İş Ortağı',
        'Public Relations' => 'Halkla İlişkiler',
        'Direct Mail' => 'Doğrudan Posta',
        'Conference' => 'Konferans',
        'Trade Show' => 'Ticari Etkinlik',
        'Web Site' => 'Web Sitesi',
        'Word of mouth' => 'Sözlü',
        'Email' => 'E-posta',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Mevcut Müşteri',
        'New Business' => 'Yeni Müşteri',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Ciro',
        'Investment' => 'Yatırım',
        'Expected_Revenue' => 'Beklenen Gelir',
        'Budget' => 'Bütçe',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Birincil Karar Verici',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Birincil Karar Verici',
        'Business Decision Maker' => 'Müşteri Karar Verici',
        'Business Evaluator' => 'Müşteri Değerlendirici',
        'Technical Decision Maker' => 'Teknik Karar Verici',
        'Technical Evaluator' => 'Teknik Değerlendirici',
        'Executive Sponsor' => 'Yönetici Sponsor',
        'Influencer' => 'Kararı Etkileyici',
        'Other' => 'Diğer',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Birincil İlgili',
        'Alternate Contact' => 'Alternatif İlgili Kişi',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Aday',
    'sales_stage_dom' => array(
        'Prospecting' => 'Aday',
        'Qualification' => 'Ön Değerlendirme',
        'Needs Analysis' => 'İhtiyaç Analizi',
        'Value Proposition' => 'Değer Önerisi',
        'Id. Decision Makers' => 'Karar Alıcılar Belirleniyor',
        'Perception Analysis' => 'Algı Analizi',
        'Proposal/Price Quote' => 'Teklif/Fiyat Verme',
        'Negotiation/Review' => 'Pazarlık/Gözden Geçirme',
        'Closed Won' => 'Kapandı Kazanıldı',
        'Closed Lost' => 'Kapandı Kaybedildi',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Telefon Araması',
        'Meeting' => 'Toplantı',
        'Task' => 'Görev',
        'Email' => 'E-posta',
        'Note' => 'Not',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Bay',
        'Ms.' => 'Bayan',
        'Mrs.' => 'Bayan',
        'Miss' => 'Bayan',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 dakika önce',
        300 => '5 dakika önce',
        600 => '10 dakika önce',
        900 => '15 dakika önce',
        1800 => '30 dakika önce',
        3600 => '1 saat önce',
        7200 => '2 saat önce',
        10800 => '3 saat önce',
        18000 => '5 saat önce',
        86400 => '1 gün önce',
    ),

    'task_priority_default' => 'Orta',
    'task_priority_dom' => array(
        'High' => 'Yüksek',
        'Medium' => 'Orta',
        'Low' => 'Düşük',
    ),
    'task_status_default' => 'Başlamadı',
    'task_status_dom' => array(
        'Not Started' => 'Başlamadı',
        'In Progress' => 'Sürüyor',
        'Completed' => 'Tamamlandı',
        'Pending Input' => 'Yanıt Bekleniyor',
        'Deferred' => 'Ertelendi',
    ),
    'meeting_status_default' => 'Planlandı',
    'meeting_status_dom' => array(
        'Planned' => 'Planlanmış',
        'Held' => 'Yapıldı',
        'Not Held' => 'Yapılmadı',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Diğer',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planlandı',
    'call_status_dom' => array(
        'Planned' => 'Planlanmış',
        'Held' => 'Yapıldı',
        'Not Held' => 'Yapılmadı',
    ),
    'call_direction_default' => 'Giden',
    'call_direction_dom' => array(
        'Inbound' => 'Gelen',
        'Outbound' => 'Giden',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'In Process' => 'İşleniyor',
        'Converted' => 'Dönüştürüldü',
        'Recycled' => 'Geri Kazanıldı',
        'Dead' => 'Ölü',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Yüksek',
        'P2' => 'Orta',
        'P3' => 'Düşük',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Normal Kullanıcı',
        'Administrator' => 'Yönetici',
    ),
    'user_status_dom' => array(
        'Active' => 'Etkin',
        'Inactive' => 'Devre Dışı',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'E-posta Kodu',
    ),
    'employee_status_dom' => array(
        'Active' => 'Etkin',
        'Terminated' => 'Sonlandırıldı',
        'Leave of Absence' => 'İzin Süresi',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Yüksek',
        'Medium' => 'Orta',
        'Low' => 'Düşük',
    ),
    'project_task_priority_default' => 'Orta',

    'project_task_status_options' => array(
        'Not Started' => 'Başlamadı',
        'In Progress' => 'Sürüyor',
        'Completed' => 'Tamamlandı',
        'Pending Input' => 'Yanıt Bekleniyor',
        'Deferred' => 'Ertelendi',
    ),
    'project_task_utilization_options' => array(
        '0' => 'yok',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Taslak',
        'In Review' => 'İnceleniyor',
        'Underway' => 'Çalışılıyor',
        'On_Hold' => 'Askıda',
        'Completed' => 'Tamamlandı',
    ),
    'project_status_default' => 'Taslak',

    'project_duration_units_dom' => array(
        'Days' => 'Gün',
        'Hours' => 'Saat',
    ),

    'activity_status_type_dom' => array(
        '' => '--Yok--',
        'active' => 'Etkin',
        'inactive' => 'Devre Dışı',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Hesaplar',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Hesap',
        'Opportunities' => 'Fırsat',
        'Cases' => 'Destek Kaydı',
        'Leads' => 'Potansiyel',
        'Contacts' => 'İlgili', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Hata',
        'Project' => 'Proje',

        'Prospects' => 'Hedef',
        'ProjectTask' => 'Proje Görevi',

        'Tasks' => 'Görev',

        'AOS_Contracts' => 'Sözleşme',
        'AOS_Invoices' => 'Fatura',
        'AOS_Quotes' => 'Teklif',
        'AOS_Products' => 'Ürün',

    ),
// PR 4606
    'record_type_display_notes' => array(
        'Accounts' => 'Hesap',
        'Contacts' => 'İlgili',
        'Opportunities' => 'Fırsat',
        'Campaigns' => 'Kampanya',
        'Tasks' => 'Görev',
        'Emails' => 'E-posta',

        'Bugs' => 'Hata',
        'Project' => 'Proje',
        'ProjectTask' => 'Proje Görevi',
        'Prospects' => 'Hedef',
        'Cases' => 'Destek Kaydı',
        'Leads' => 'Potansiyel',

        'Meetings' => 'Toplantı',
        'Calls' => 'Telefon Araması',

        'AOS_Contracts' => 'Sözleşme',
        'AOS_Invoices' => 'Fatura',
        'AOS_Quotes' => 'Teklif',
        'AOS_Products' => 'Ürün',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Hesap',
        'Contacts' => 'İlgili',
        'Tasks' => 'Görev',
        'Opportunities' => 'Fırsat',

        'Bugs' => 'Hata',
        'Cases' => 'Destek Kaydı',
        'Leads' => 'Potansiyel',

        'Project' => 'Proje',
        'ProjectTask' => 'Proje Görevi',

        'Prospects' => 'Hedef',
        
        'AOS_Contracts' => 'Sözleşme',
        'AOS_Invoices' => 'Fatura',
        'AOS_Quotes' => 'Teklif',
        'AOS_Products' => 'Ürün', 

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Teklifler',
        'AOS_Invoices' => 'Faturalar',
        'AOS_Contracts' => 'Sözleşmeler',
    ),
    'issue_priority_default_key' => 'Orta',
    'issue_priority_dom' => array(
        'Urgent' => 'Acil',
        'High' => 'Yüksek',
        'Medium' => 'Orta',
        'Low' => 'Düşük',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Onaylandı',
        'Duplicate' => 'Çift',
        'Closed' => 'Kapalı',
        'Out of Date' => 'Süresi Geçmiş',
        'Invalid' => 'Geçersiz',
    ),

    'issue_status_default_key' => 'Yeni',
    'issue_status_dom' => array(
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'Closed' => 'Kapalı',
        'Pending' => 'Bekliyor',
        'Rejected' => 'Reddedildi',
    ),

    'bug_priority_default_key' => 'Orta',
    'bug_priority_dom' => array(
        'Urgent' => 'Acil',
        'High' => 'Yüksek',
        'Medium' => 'Orta',
        'Low' => 'Düşük',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Onaylandı',
        'Duplicate' => 'Çift',
        'Fixed' => 'Sabit',
        'Out of Date' => 'Süresi Geçmiş',
        'Invalid' => 'Geçersiz',
        'Later' => 'Sonra',
    ),
    'bug_status_default_key' => 'Yeni',
    'bug_status_dom' => array(
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'Closed' => 'Kapalı',
        'Pending' => 'Bekliyor',
        'Rejected' => 'Reddedildi',
    ),
    'bug_type_default_key' => 'Hata',
    'bug_type_dom' => array(
        'Defect' => 'Kusur',
        'Feature' => 'Özellik',
    ),
    'case_type_dom' => array(
        'Administration' => 'Yönetim',
        'Product' => 'Ürün',
        'User' => 'Kullanıcı',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'İç',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'E-posta',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Hesaplar',
        'Activities' => 'Etkinlikler',
        'Bugs' => 'Hatalar',
        'Calendar' => 'Takvim',
        'Calls' => 'Telefon Aramaları',
        'Campaigns' => 'Kampanyalar',
        'Cases' => 'Destek Kayıtları',
        'Contacts' => 'Kişiler',
        'Currencies' => 'Para Birimleri',
        'Dashboard' => 'Pano',
        'Documents' => 'Belgeler',
        'Emails' => 'E-postalar',
        'Feeds' => 'Akışlar',
        'Forecasts' => 'Öngörüler',
        'Help' => 'Yardım',
        'Home' => 'Ana Sayfa',
        'Leads' => 'Potansiyeller',
        'Meetings' => 'Toplantılar',
        'Notes' => 'Notlar',
        'Opportunities' => 'Fırsatlar',
        'Outlook Plugin' => 'Outlook Eklentisi',
        'Projects' => 'Projeler',
        'Quotes' => 'Teklifler',
        'Releases' => 'Yayınlar',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Güncelle',
        'Users' => 'Kullanıcılar',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planlama',
        'Active' => 'Etkin',
        'Inactive' => 'Devre Dışı',
        'Complete' => 'Tamamlandı',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Tele Satış',
        'Mail' => 'Posta',
        'Email' => 'E-posta',
        'Print' => 'Yazdır',
        'Web' => 'Web',
        'Radio' => 'Radyo',
        'Television' => 'Televizyon',
        'NewsLetter' => 'Haber Bülteni',
        'Survey' => 'Anket',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Haftalık',
        'Monthly' => 'Aylık',
        'Quarterly' => 'Üç Aylık',
        'Annually' => 'Yıllık',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Ocak',
        '2' => 'Şubat',
        '3' => 'Mart',
        '4' => 'Nisan',
        '5' => 'Mayıs',
        '6' => 'Haziran',
        '7' => 'Temmuz',
        '8' => 'Ağustos',
        '9' => 'Eylül',
        '10' => 'Ekim',
        '11' => 'Kasım',
        '12' => 'Aralık',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Oca',
        '2' => 'Şub',
        '3' => 'Mar',
        '4' => 'Nis',
        '5' => 'Mayıs',
        '6' => 'Haz',
        '7' => 'Tem',
        '8' => 'Ağu',
        '9' => 'Eyl',
        '10' => 'Eki',
        '11' => 'Kas',
        '12' => 'Ara',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Pazar',
        '2' => 'Pazartesi',
        '3' => 'Salı',
        '4' => 'Çarşamba',
        '5' => 'Perşembe',
        '6' => 'Cuma',
        '7' => 'Cumartesi',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Paz',
        '2' => 'Pzt',
        '3' => 'Sal',
        '4' => 'Çar',
        '5' => 'Per',
        '6' => 'Cum',
        '7' => 'Cmt',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'öö',
        'pm' => 'ös',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'ÖÖ',
        'PM' => 'ÖS',
    ),

    'dom_email_types' => array(
        'out' => 'Gönderildi',
        'archived' => 'Arşivlendi',
        'draft' => 'Taslak',
        'inbound' => 'Gelen',
        'campaign' => 'Kampanya',
    ),
    'dom_email_status' => array(
        'archived' => 'Arşivlendi',
        'closed' => 'Kapalı',
        'draft' => 'Taslakta',
        'read' => 'Okundu',
        'replied' => 'Yanıtlandı',
        'sent' => 'Gönderildi',
        'send_error' => 'Gönderim Hatası',
        'unread' => 'Okunmadı',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arşivlendi',
    ),

    'dom_email_server_type' => array(
        '' => '--Yok--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Yok--',
        'createcase' => 'Destek Kaydı Ekle',
        'bounce' => 'Geri Dönen E-Posta Yönetimi',
    ),
    'dom_email_distribution' => array(
        '' => '--Yok--',
        'direct' => 'Doğrudan Atama',
        'roundRobin' => 'Sırayla',
        'leastBusy' => 'En Az Meşgul',
    ),
    'dom_email_errors' => array(
        1 => 'Ögeleri Doğrudan Atarken yalnız bir kullanıcı seçin.',
        2 => 'Ögeleri Doğrudan Atarken Yalnız Denetlemiş Ögeler atamalısınız.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Evet',
        'bool_false' => 'Hayır',
    ),
    'dom_int_bool' => array(
        1 => 'Evet',
        0 => 'Hayır',
    ),
    'dom_switch_bool' => array(
        'on' => 'Evet',
        'off' => 'Hayır',
        '' => 'Hayır',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM E-Posta İstemcisi',
        'mailto' => 'Dış E-Posta İstemcisi',
    ),

    'dom_editor_type' => array(
        'none' => 'Doğrudan HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Varsayılan E-Posta Biçimi',
        'html' => 'HTML E-posta',
        'plain' => 'Düz Metin E-posta',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Önceki İşlem Zamanı, Çalıştırılmadı',
        'ready' => 'Hazır',
        'in progress' => 'Sürüyor',
        'failed' => 'Tamamlanamadı',
        'completed' => 'Tamamlandı',
        'no curl' => 'Çalışamadı: cURL bulunamadı',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Etkin',
        'Inactive' => 'Devre Dışı',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Dakika',
        'hour' => 'Saat',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Pazarlama',
        'Knowledege Base' => 'Bilgi Bankası',
        'Sales' => 'Satışlar',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arşivlendi',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Pazarlama Malzemeleri',
        'Product Brochures' => 'Ürün Broşürleri',
        'FAQ' => 'SSS',
    ),

    'document_status_dom' => array(
        'Active' => 'Etkin',
        'Draft' => 'Taslak',
        'FAQ' => 'SSS',
        'Expired' => 'Süresi Geçmiş',
        'Under Review' => 'İnceleniyor',
        'Pending' => 'Bekliyor',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Posta Birleştirme',
        'eula' => 'SKLS',
        'nda' => 'NDA',
        'license' => 'Lisans Sözleşmesi',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Kabul Et',
        'decline' => 'Reddet',
        'tentative' => 'Kesin Değil',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Kabul edildi',
        'decline' => 'Reddedildi',
        'tentative' => 'Kesin Değil',
        'none' => 'Yok',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Yok',
        'Daily' => 'Günlük',
        'Weekly' => 'Haftalık',
        'Monthly' => 'Aylık',
        'Yearly' => 'Yıllık',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'gün',
        'Weekly' => 'hafta',
        'Monthly' => 'ay',
        'Yearly' => 'yıl',
    ),

    'duration_dom' => array(
        '' => 'Yok',
        '900' => '15 dakika',
        '1800' => '30 dakika',
        '2700' => '45 dakika',
        '3600' => '1 saat',
        '5400' => '1.5 saat',
        '7200' => '2 saat',
        '10800' => '3 saat',
        '21600' => '6 saat',
        '86400' => '1 gün',
        '172800' => '2 gün',
        '259200' => '3 gün',
        '604800' => '1 hafta',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Varsayılan',
        'seed' => 'Kaynak',
        'exempt_domain' => 'Engelleme Listesi - Etki Alanına Göre',
        'exempt_address' => 'Engelleme Listesi - E-posta Adresine Göre',
        'exempt' => 'Engelleme Listesi - Id\'ye Göre',
        'test' => 'Deneme',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Etkin',
        'inactive' => 'Devre Dışı',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'İleti Gönderildi/Gönderilmeye Çalışıldı',
        'send error' => 'Geri Dönen İletiler, Diğerleri',
        'invalid email' => 'Geri Dönen İletiler, E-posta Geçersiz',
        'link' => 'Bağlantıya Tıklanan',
        'viewed' => 'Görüntülenen İleti',
        'removed' => 'Abonelikten Çıkan',
        'lead' => 'Potansiyeller Eklendi',
        'contact' => 'İlgililer Eklendi',
        'blocked' => 'Adres ya da etki alanı tarafından engellendi',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kişiler',
        'Users' => 'Kullanıcılar',
        'Prospects' => 'Hedefler',
        'Leads' => 'Potansiyeller',
        'Accounts' => 'Hesaplar',
    ),
    'merge_operators_dom' => array(
        'like' => 'Şunu İçeren',
        'exact' => 'Tam Şu Olan',
        'start' => 'Şununla Başlayan',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Evet',
        'false' => 'Hayır',
        'required' => 'Zorunlu',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Devre dışı',
        1 => 'Etkin',
    ),

    'projects_priority_options' => array(
        'high' => 'Yüksek',
        'medium' => 'Orta',
        'low' => 'Düşük',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Başlatılmadı',
        'inprogress' => 'Sürüyor',
        'completed' => 'Tamamlandı',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Açıklamaları Genişlet',
        'collapselegend' => 'Açıklamaları Daralt',
        'clickfordrilldown' => 'Ayrıntıya İnmek İçin Tıklayın',
        'detailview' => 'Diğer Ayrıntılar...',
        'piechart' => 'Dairesel Çizelge',
        'groupchart' => 'Grup Çizelge',
        'stackedchart' => 'Yığma Çizelge',
        'barchart' => 'Çubuk Çizelge',
        'horizontalbarchart' => 'Yatay Çubuk Çizelge',
        'linechart' => 'Çizgi Çizelge',
        'noData' => 'Veri kullanılamıyor',
        'print' => 'Yazdır',
        'pieWedgeName' => 'bölümler',
    ),
    'release_status_dom' => array(
        'Active' => 'Etkin',
        'Inactive' => 'Devre Dışı',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Tek Tırnak (&#39;)',
        '"' => 'Çift Tırnak (&#34;)',
        '' => 'Yok',
        'other' => 'Diğer:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Diğer:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Yeni Pencere',
        '_self' => 'Aynı Pencere',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Otomatik olarak yenilenmesin',
        '30' => '30 saniyede bir',
        '60' => '1 dakikada bir',
        '180' => '3 dakikada bir',
        '300' => '5 dakikada bir',
        '600' => '10 dakikada bir',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Asla',
        '30' => '30 saniyede bir',
        '60' => '1 dakikada bir',
        '180' => '3 dakikada bir',
        '300' => '5 dakikada bir',
        '600' => '10 dakikada bir',
    ),
    'date_range_search_dom' => array(
        '=' => 'Eşittir',
        'not_equal' => 'Üzerinde değil',
        'greater_than' => 'Sonra',
        'less_than' => 'Önce',
        'last_7_days' => 'Geçmiş 7 gün',
        'next_7_days' => 'Gelecek 7 Gün',
        'last_30_days' => 'Son 30 gün',
        'next_30_days' => 'Gelecek 30 Gün',
        'last_month' => 'Geçen Ay',
        'this_month' => 'Bu Ay',
        'next_month' => 'Sonraki Ay',
        'last_year' => 'Geçen Yıl',
        'this_year' => 'Bu Yıl',
        'next_year' => 'Sonraki Yıl',
        'between' => 'Şunun Arasında Olan',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Şuna Eşit Olan',
        'not_equal' => 'Şuna Eşit Olmayan',
        'greater_than' => 'Şundan Büyük Olan',
        'greater_than_equals' => 'Şuna Eşit ya da Büyük Olan',
        'less_than' => 'Şundan Küçük Olan',
        'less_than_equals' => 'Şuna Eşit ya da Küçük Olan',
        'between' => 'Şunun Arasında Olan',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopyalansın',
        'move' => 'Taşınsın',
        'donothing' => 'Hiçbir şey yapılmasın',
    ),
    // PR 6009
    'inboundmail_assign_replies_to_admin' => array(
        'donothing' => 'Hiçbir şey yapılmasın',
        'repliedtoowner' => 'E-posta Sahibine Yanıt Verildi',
        'recordowner' => 'Atanmış Kayıt Sahibi',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Sonuçlar',
    'ERR_SEARCH_INVALID_QUERY' => 'Arama yapılırken bir sorun çıktı. Sorgu söz dizimi geçersiz olabilir.',
    'ERR_SEARCH_NO_RESULTS' => 'Arama ölçütlerinize uyan bir sonuç yok. Arama ölçütlerinizi genişletmeyi deneyin.',
    'LBL_SEARCH_PERFORMED_IN' => 'Arama şurada yapıldı',
    'LBL_EMAIL_CODE' => 'E-posta Kodu:',
    'LBL_SEND' => 'Gönder',
    'LBL_LOGOUT' => 'Oturumu Kapat',
    'LBL_TOUR_NEXT' => 'Sonraki',
    'LBL_TOUR_SKIP' => 'Atla',
    'LBL_TOUR_BACK' => 'Önceki',
    'LBL_TOUR_TAKE_TOUR' => 'Tura başlayın',
    'LBL_MOREDETAIL' => 'Diğer Ayrıntılar' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Satır İçi Düzenle' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Görüntüle' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Süzgeç' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Ekle' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'E-Posta Adresi Ekle' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Gizle/Görüntüle' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Temizle' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'E-Posta Adresini Kaldır' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Abonelikten Çıkar',
    'LBL_ID_FF_OPT_IN' => 'Abone Ol',
    'LBL_ID_FF_INVALID' => 'Geçersiz Kıl',
    'LBL_ADD' => 'Ekle' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Kuruluş Logosu' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Bağlantı Açılan Pencereleri',
    'LBL_CLOSEINLINE' => 'Kapat',
    'LBL_VIEWINLINE' => 'Görüntüle',
    'LBL_INFOINLINE' => 'Bilgiler',
    'LBL_PRINT' => 'Yazdır',
    'LBL_HELP' => 'Yardım',
    'LBL_ID_FF_SELECT' => 'Seçin',
    'DEFAULT' => 'Temel', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Sıralama',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP SSL ya da TLS üzerinden kullanılsın',
    'LBL_NO_ACTION' => 'Bu adı taşıyan herhangi bir işlem yok: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Uygun işlem yok.',
    'LBL_NO_DATA' => 'Herhangi bir veri yok',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => 'Beklenmedik bir sorun çıktı.', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => 'İşlemin sürdürülmesini engelleyen, bir değer doğru şekilde işlenemedi.', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => 'İşlemin sürdürülmesini engelleyen kullanılamayacak bir değer bulundu.', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => 'Değer türü beklenenden farklı.', //PR 3669

    'LBL_ROUTING_FLAGGED' => 'işaret koy',
    'LBL_NOTIFICATIONS' => 'Bildirimler',

    'LBL_ROUTING_TO' => 'kime',
    'LBL_ROUTING_TO_ADDRESS' => 'kime adresi',
    'LBL_ROUTING_WITH_TEMPLATE' => 'şu kalıp ile',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Bu kayıtta Ofis Telefonu ve Adres alanları zaten doldurulmuş. Seçmiş olduğunuz kayıttaki Ofis Telefonu ve Adres bilgilerinin bu kayıttaki bilgilerin üzerine yazılması için "Tamam" üzerine, geçerli bilgilerin korunması için "İptal" üzerine tıklayın.',
    'LBL_DROP_HERE' => '[Buraya Bırakın]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Gmail&#153; Varsayılanları ile Doldur',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Adı',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Giden Posta Sunucusu',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP Parolası',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Kapı Numarası',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP Sunucusu',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP Kullanıcı Adı',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Varsayılan',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Uyarı: Giden e-posta hesabının kullanıcı adı ve parolası eksik.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Hesaplarınıza gelen e-postaları görüntüleyebilmek için e-posta hesaplarını kurun.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Hesaplardan e-posta gönderebilmek için SMTP posta sunucu bilgilerini yazın.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Tamamlandı',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Temizle',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Kime:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Kopya:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Gizli Kopya:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Kime/Kopya/Gizli Kopya',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-posta Adresi',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Süzgeç',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Ad',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Herhangi Bir Adres Bulunamadı',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Kaydedip Adres Defterine Ekle',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'E-posta Alıcılarını Seçin',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adres Defteri',
    'LBL_EMAIL_REPORTS_TITLE' => 'Raporlar',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Uyarı! Silmeye çalıştığınız giden hesap, var olan bir gelen hesap ile ilişkilendirilmiş. Devam etmek istediğinize emin misiniz?',
    'LBL_EMAIL_ADDRESSES' => 'E-posta',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-posta Adresi',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'E-posta adresinizin iletişim amaçlı kullanılmasına onay verdiniz: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'E-posta adresi doğrulanamadı',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'SuiteCRM İçine Aktar',
    'LBL_EMAIL_ASSIGNMENT' => 'Atama',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Dosya Ekle',
    'LBL_EMAIL_ATTACHMENT' => 'Dosya Ekle',
    'LBL_EMAIL_ATTACHMENTS' => 'Yerel Sistemden',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM Belgelerinden',
    'LBL_EMAIL_ATTACHMENTS3' => 'Kalıp Ekleri',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Dosya',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Belge',
    'LBL_EMAIL_BCC' => 'Gizli Kopya',
    'LBL_EMAIL_CANCEL' => 'İptal',
    'LBL_EMAIL_CC' => 'Kopya',
    'LBL_EMAIL_CHARSET' => 'Karakter Kümesi',
    'LBL_EMAIL_CHECK' => 'E-postayı Denetle',
    'LBL_EMAIL_CHECKING_NEW' => 'Yeni E-Postalar Denetleniyor',
    'LBL_EMAIL_CHECKING_DESC' => 'Yeni e-postalar denetleniyor. <br><br>Hesabı ilk kez denetliyorsanız bu işlem biraz zaman alabilir.',
    'LBL_EMAIL_CLOSE' => 'Kapat',
    'LBL_EMAIL_COFFEE_BREAK' => 'Yeni e-postalar denetleniyor. <br><br>Büyük posta hesapların işlenmesi uzun zaman alabilir.',

    'LBL_EMAIL_COMPOSE' => 'E-posta',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Lütfen bu e-postanın alıcılarını yazın.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Bu e-postanın içerik metni yok. Yine de gönderilsin mi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Bu e-postanın konusu yok. Yine de gönderilsin mi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(konu yok)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Kime, Kopya ve Gizli Kopya alanlarına geçerli e-posta adresleri yazın',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Bu e-posta yok sayılsın mı?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Bu imzayı silmek istediğinize emin misiniz?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-posta gönderildi',

    'LBL_EMAIL_CREATE_NEW' => '--Kayıt Sırasında Ekle--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Çoklu',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Boş',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Gönderenin Gönderdiği Tarih',
    'LBL_EMAIL_DATE_TODAY' => 'Bugün',
    'LBL_EMAIL_DELETE' => 'Sil',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Seçilmiş iletiler silinsin mi?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-posta silindi.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'İleti Siliniyor',
    'LBL_EMAIL_DETAILS' => 'Ayrıntılar',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Kişiler ile çalışılırken yalnız Birincil Adres kullanılır.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Çöp Kutusu Boşaltılıyor',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Giden sunucusu siliniyor',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Ön bellek dosyaları temizleniyor',
    'LBL_EMAIL_EMPTY_MSG' => 'Görüntülenecek bir e-posta yok.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Görüntülenecek bir e-posta adresi yok.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Klasör adı eşsiz olmalıdır ve boş olamaz. Lütfen yeniden deneyin.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Klasör silinemedi. Klasör ya da alt klasörde e-postalar var ya da bir posta kutusu ile ilişkilendirilmiş.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'İstenilen klasör bağlam içinde bulamadı. Yeniden deneyin.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Lütfen ayarlarınızı denetleyin.',
    'LBL_EMAIL_ERROR_DESC' => 'Sorunlar algılandı: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Bu bölüme erişme izniniz yok. İzin almak için site yöneticiniz ile görüşün.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM Klasör adları eşsiz olmalıdır.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Lütfen bir arama ölçütü yazın.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Bir sorun çıktı',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'İleti Sunucudan Silindi',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'İleti sunucudan silinmiş ya da başka bir klasöre taşınmış',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Posta sunucusu ile bağlantı kurulamadı. Lütfen sistem yöneticisi ile görüşün',
    'LBL_EMAIL_ERROR_MOVE' => 'Sunucular arasında e-posta ve e-posta hesaplarının taşınması şu anda desteklenmiyor.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Taşıma Sorunu',
    'LBL_EMAIL_ERROR_NAME' => 'Bir ad yazmalısınız.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Kimden adresini yazmalısınız. Lütfen geçerli bir e-posta adresi yazın.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Lütfen bir dosya belirtin.',
    'LBL_EMAIL_ERROR_SERVER' => 'Bir e-posta sunucusu adresi yazmalısınız.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'E-posta hesabı kaydedilmemiş olabilir.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'E-posta sunucusu ile iletişim kurulurken bir sorun çıktı.',
    'LBL_EMAIL_ERROR_USER' => 'Bir kullanıcı adı yazmalısınız.',
    'LBL_EMAIL_ERROR_PORT' => 'Bir e-posta sunucusu kapı numarası yazmalısınız.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Bir sunucu iletişim kuralı seçmelisiniz.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'İzlenen Klasör zorunludur.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Silinenler Klasörü zorunludur.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Bu bilgi kullanılamıyor',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Giden e-posta sunucusu belirtilmemiş.',
    'LBL_EMAIL_ERROR_SENDING' => 'E-posta gönderilirken sorun çıktı. Lütfen destek almak için yöneticiniz ile görüşün.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Klasörler',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Ekle',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Yeni Klasör Ekle',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Klasör Adını Değiştir',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Kaydet',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Bu klasörü şuraya ekle',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Bu klasör değiştirilemez',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Bu dizini silmek istediğinize emin misiniz?\nBu işlem geri alınamaz.\nKlasörün tüm alt klasörleri de silinecek.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Yeni Klasör Adı',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Lütfen bu işlemi yapmadan önce bir klasör seçin.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Klasör Yönetimi',

    'LBL_EMAIL_FORWARD' => 'İlet',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[count]] / [[total]] e-posta indirildi',
    'LBL_EMAIL_FROM' => 'Kimden',
    'LBL_EMAIL_GROUP' => 'grup',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grup',
    'LBL_EMAIL_HOME_FOLDER' => 'Ana Sayfa',
    'LBL_EMAIL_IE_DELETE' => 'Posta Hesabı Siliniyor',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'İmza siliniyor',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Bu posta hesabını silmek istediğinize emin misiniz?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Silindi.',
    'LBL_EMAIL_IE_SAVE' => 'E-posta Hesabı Bilgileri Kaydediliyor',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'E-Posta İçe Aktarılıyor',
    'LBL_EMAIL_IMPORT_EMAIL' => 'SuiteCRM İçine Aktar',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'İçe Aktarma Ayarları',
    'LBL_EMAIL_INVALID' => 'Geçersiz',
    'LBL_EMAIL_LOADING' => 'Yükleniyor...',
    'LBL_EMAIL_MARK' => 'İşaretle',
    'LBL_EMAIL_MARK_FLAGGED' => 'İşaretlenmiş',
    'LBL_EMAIL_MARK_READ' => 'Okunmuş',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'İşaretlenmemiş',
    'LBL_EMAIL_MARK_UNREAD' => 'Okunmamış',
    'LBL_EMAIL_ASSIGN_TO' => 'Şuna Ata',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Klasör Ekle',
    'LBL_EMAIL_MENU_COMPOSE' => 'Şu kişiye gönder',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Klasör Sil',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Çöpü Boşalt',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Eşitle',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Ön Bellek dosyalarını temizle',
    'LBL_EMAIL_MENU_REMOVE' => 'Sil',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Klasör Adını Değiştir',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Klasör Yeniden Adlandırılıyor',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Bu işlemi yapmayı denemeden önce bir seçim yapın.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Klasör Ekle (uzakta ya da SuiteCRM üzerinde)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Klasörü Sil (uzak ya da SuiteCRM üzerinde)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tüm e-posta hesaplarındaki çöp kutularını boşaltır',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Bu e-postaları Okunmuş olarak işaretle',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'E-postaları İşaretlenmemiş olarak işaretle',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Klasörü Yeniden Adlandır (uzak ya da SuiteCRM üzerinde)',

    'LBL_EMAIL_MESSAGES' => 'ileti',

    'LBL_EMAIL_ML_NAME' => 'Liste Adı',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Seçilmiş Liste Adresleri',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Kullanılabilecek Liste Adresleri',

    'LBL_EMAIL_MULTISELECT' => 'Birden fazla seçim yapmak için <b>Ctrl-Tıklayın</b><br />(Mac kullanıcıları <b>CMD-Tıklayın</b>)',

    'LBL_EMAIL_NO' => 'Hayır',
    'LBL_EMAIL_NOT_SENT' => 'Sistem isteğinizi yerine getiremiyor. Lütfen sistem yöneticinizle görüşün.',

    'LBL_EMAIL_OK' => 'Tamam',
    'LBL_EMAIL_ONE_MOMENT' => 'Bir dakika lütfen...',
    'LBL_EMAIL_OPEN_ALL' => 'Birden Fazla İleti Aç',
    'LBL_EMAIL_OPTIONS' => 'Seçenekler',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Hızlı E-posta',
    'LBL_EMAIL_OPT_OUT' => 'Abonelikten Çıkan',
    'LBL_EMAIL_OPT_IN' => 'Abone Olan',
    'LBL_EMAIL_OPT_IN_AND_INVALID' => 'Abone Olan ve Geçersiz',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Abonelikten Çıkan ve Geçersiz',
    'LBL_EMAIL_PERFORMING_TASK' => 'Görev Yürütülüyor',
    'LBL_EMAIL_PRIMARY' => 'Birincil',
    'LBL_EMAIL_PRINT' => 'Yazdır',

    'LBL_EMAIL_QC_BUGS' => 'Hata',
    'LBL_EMAIL_QC_CASES' => 'Destek Kaydı',
    'LBL_EMAIL_QC_LEADS' => 'Potansiyel',
    'LBL_EMAIL_QC_CONTACTS' => 'İlgili',
    'LBL_EMAIL_QC_TASKS' => 'Görev',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Fırsat',
    'LBL_EMAIL_QUICK_CREATE' => 'Hızlı Ekle',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Klasörler Yeniden Oluşturuluyor',
    'LBL_EMAIL_RELATE_TO' => 'İlişkilendir',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'İlişkileri Görüntüle',
    'LBL_EMAIL_RECORD' => 'E-posta Kaydı',
    'LBL_EMAIL_REMOVE' => 'Sil',
    'LBL_EMAIL_REPLY' => 'Yanıtla',
    'LBL_EMAIL_REPLY_ALL' => 'Tümünü Yanıtla',
    'LBL_EMAIL_REPLY_TO' => 'Yanıt',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'İleti Alınıyor',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'E-Posta Kaydı Alınıyor',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Lütfen yalnız bir e-posta seçin',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Önceki modüle dönmek ister misiniz?',
    'LBL_EMAIL_REVERT' => 'Geri Al',
    'LBL_EMAIL_RELATE_EMAIL' => 'E-posta İlişkilendir',

    'LBL_EMAIL_RULES_TITLE' => 'Kural Yönetimi',

    'LBL_EMAIL_SAVE' => 'Kaydet',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Kaydedip Yanıtla',
    'LBL_EMAIL_SAVE_DRAFT' => 'Taslak Kaydet',
    'LBL_EMAIL_DRAFT_SAVED' => 'Taslak kaydedildi',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Başlangıç Tarihi',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Bitiş Tarihi',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Arama ölçütlerinize uyan bir sonuç bulunamadı.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Arama Sonuçları',

    'LBL_EMAIL_SELECT' => 'Seçin',

    'LBL_EMAIL_SEND' => 'Gönder',
    'LBL_EMAIL_SENDING_EMAIL' => 'E-posta Gönderiliyor',

    'LBL_EMAIL_SETTINGS' => 'Ayarlar',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-posta Hesapları',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Formu Temizle',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Yeni E-postaları Denetle',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Kimden Adresi',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Test Bildirimi için E-posta Adresi:',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Kimden Adı',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Yanıt Adresi',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Tüm E-posta Hesaplarını Eşitle',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Belirtilen e-posta adresine belirtilen giden sunucu ayarları ile bir e-posta gönderildi. Ayarların doğru olup olmadığını anlamak için e-postanın alınıp alınmadığına bakın.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Tam SMTP günlüğüne bakın',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Tam eşitleme yapılsın mı?\nBüyük e-posta hesapları için bu işlem birkaç dakika sürebilir.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Birden fazla klasör seçmek için Shift ya da Ctrl tuşuna basarak tıklayın.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Genel',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Grup Klasörleri Ekle',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Grup Klasörünü Düzenle',

    'LBL_EMAIL_SETTINGS_NAME' => 'E-posta Hesabı Adı',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Gelen kutusunda bir sayfada görüntülenecek ileti sayısını seçin. Bu ayarın etkin olması için sayfanın yeniden yüklenmesi gerekebilir.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'E-posta Hesabı Alınıyor',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Ayarlar kaydedildi.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'E-postalar Yalnız Düz Metin Olarak Gönderilsin',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Bir Sayfadaki E-Posta Sayısı',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Görünüm Ayarları',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Ayarlar',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Kullanılabilecek Kullanıcı Klasörleri',
    'LBL_EMAIL_ERROR_PREPEND' => 'Bir e-posta sorunu çıktı:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'E-posta hesabı için seçtiğiniz giden sunucu geçersiz. Ayarlar üzerine tıklayın ya da e-posta hesabınız için başka bir giden e-posta sunucusu seçin.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'E-posta göndermek için bir giden e-posta sunucusu yapılandırılmamış. Lütfen bir giden e-posta sunucusu yapılandırın ya da Ayarlar >> E-posta Hesabı bölümünden daha önce yapılandırılmış giden e-posta sunucularından birini seçin.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Varsayılan İmza',
    'LBL_EMAIL_SIGNATURES' => 'İmzalar',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! E-Posta',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Diğer',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Uzakta Klasörler ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM Klasörleri ]',
    'LBL_EMAIL_SUBJECT' => 'Konu',
    'LBL_EMAIL_SUCCESS' => 'Başarılı',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM Klasörü',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-posta kalıbının içerik metni boş',
    'LBL_EMAIL_TEMPLATES' => 'Kalıplar',
    'LBL_EMAIL_TO' => 'Kime',
    'LBL_EMAIL_VIEW' => 'Görüntüle',
    'LBL_EMAIL_VIEW_HEADERS' => 'Üst Bilgiler Görüntülensin',
    'LBL_EMAIL_VIEW_RAW' => 'İşlenmemiş E-postayı Görüntüle',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'POP3 kullanıldığında, bu özellik desteklenmez.',
    'LBL_DEFAULT_LINK_TEXT' => 'Varsayılan bağlantı metni.',
    'LBL_EMAIL_YES' => 'Evet',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Sınama E-postası Gönder',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Sınama E-postası Gönderildi',
    'LBL_EMAIL_MESSAGE_NO' => 'İleti no.', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => 'İçe Aktarıldı',
    'LBL_EMAIL_IMPORT_FAIL' => 'İçe aktarılamadı, ileti zaten içe aktarılmış ya da sunucudan silinmiş',

    'LBL_LINK_NONE' => 'Yok',
    'LBL_LINK_ALL' => 'Tümü',
    'LBL_LINK_RECORDS' => 'Kayıtlar',
    'LBL_LINK_SELECT' => 'Seçin',
    'LBL_LINK_ACTIONS' => 'İşlemler', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Onayla',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Bu #module# kapatılsın mı?',
    'LBL_INVALID_FILE_EXTENSION' => 'Dosya Uzantısı Geçersiz',

    'ERR_AJAX_LOAD' => 'Bir sorun çıktı:',
    'ERR_AJAX_LOAD_FAILURE' => 'İsteğiniz işlenirken bir sorun çıktı, lütfen daha sonra yeniden deneyin.',
    'ERR_AJAX_LOAD_FOOTER' => 'Bu sorun sürerse, yöneticinizden bu modülde Ajax özelliğini devre dışı bırakmasını isteyin',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Ondalık ayraç karakteri Binlik ayraç karakteri ile aynı olamaz.\n\n  Lütfen karakterleri değiştirin.',
    'ERR_DELETE_RECORD' => 'Bir kişiyi silmek için bir kayıt numarası belirtilmelidir.',
    'ERR_EXPORT_DISABLED' => 'Dışa Aktarma Devre Dışı Bırakılmış.',
    'ERR_EXPORT_TYPE' => 'Dışa aktarma sorunu ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'e-posta adresi geçersiz.',
    'ERR_INVALID_FILE_REFERENCE' => 'Dosya Referansı Geçersiz',
    'ERR_NO_HEADER_ID' => 'Bu özellik bu temada kullanılamaz.',
    'ERR_NOT_ADMIN' => 'Yönetim bölümüne erişim yetkisi yok.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Zorunlu alan eksik:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Zorunlu alan geçersiz:',
    'ERR_INVALID_VALUE' => 'Değer Geçersiz:',
    'ERR_NO_SUCH_FILE' => 'Dosya sistemde bulunamadı',
    'ERR_FILE_EMPTY' => 'Dosya boş', // PR 6672
    'ERR_NO_SINGLE_QUOTE' => 'Tek tırnak işareti şunun için kullanılamaz ',
    'ERR_NOTHING_SELECTED' => 'Lütfen başlamadan önce bir seçim yapın.',
    'ERR_SELF_REPORTING' => 'Kullanıcı kendisini şikayet edemez.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Şu alan için eşleşme yok: ',
    'ERR_SQS_NO_MATCH' => 'Eşleşme Yok',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Lütfen üst veri tanımlarında için displayParams özniteliği için \'key\' indeksini belirtin',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Hata: Portal Adı zaten başka bir kişiye atanmış.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Alan değeri kesinlik değeri ile uyumlu değil',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Dış hesaba kaydedilmeye çalışılırken sorun çıktı.',
    'ERR_NO_DB' => 'Veritabanı bağlantısı kurulamadı. Ayrıntılı bilgi almak için suitecrm.log dosyasına bakın (0).',
    'ERR_DB_FAIL' => 'Veritabanı sorunu. Ayrıntılı bilgi almak için sugarcrm.log dosyasına bakın.',
    'ERR_DB_VERSION' => 'SuiteCRM Crm {0} dosyaları yalnız SuiteCRM Crm {1} Veritabanı ile kullanılabilir.',

    'LBL_ACCOUNT' => 'Hesap',
    'LBL_ACCOUNTS' => 'Hesaplar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Özeti Görüntüle',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Özeti Görüntüle',
    'LBL_ADD_BUTTON' => 'Ekle',
    'LBL_ADD_DOCUMENT' => 'Belge Ekle',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Hedef Listesine Ekle',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Kişileri Hedef Listesine Ekle',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kapatmak için Tıklayın',
    'LBL_ADDITIONAL_DETAILS' => 'Ek Ayrıntılar',
    'LBL_ADMIN' => 'Yönetici',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arşivle',
    'LBL_ASSIGNED_TO_USER' => 'Atanmış Kullanıcı',
    'LBL_ASSIGNED_TO' => 'Atanmış Kişi:',
    'LBL_BACK' => 'Önceki',
    'LBL_BILLING_ADDRESS' => 'Fatura Adresi',
    'LBL_QUICK_CREATE' => 'Ekle ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Açık Kaynak Kodlu CRM',
    'LBL_BUGS' => 'Hatalar',
    'LBL_BY' => 'tarafından',
    'LBL_CALLS' => 'Telefon Aramaları',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Kuyruktaki Kampanya E-Postalarını Gönder',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Gönder',
    'LBL_CASE' => 'Destek Kaydı',
    'LBL_CASES' => 'Destek Kayıtları',
    'LBL_CHANGE_PASSWORD' => 'Parolayı değiştir',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Tümünü Seç',
    'LBL_CITY' => 'İlçe',
    'LBL_CLEAR_BUTTON_LABEL' => 'Temizle',
    'LBL_CLEAR_BUTTON_TITLE' => 'Temizle',
    'LBL_CLEARALL' => 'Tümünü Bırak',
    'LBL_CLOSE_BUTTON_TITLE' => 'Kapat', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Kapatıp Yeni Ekle', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Kapatıp Yeni Ekle', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Açık Ögeler:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Yeni E-posta',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Yeni E-posta',
    'LBL_SEARCH_DROPDOWN_YES' => 'Evet',
    'LBL_SEARCH_DROPDOWN_NO' => 'Hayır',
    'LBL_CONTACT_LIST' => 'Kişi Listesi',
    'LBL_CONTACT' => 'İlgili',
    'LBL_CONTACTS' => 'İlgili Kişiler',
    'LBL_CONTRACT' => 'Sözleşme',
    'LBL_CONTRACTS' => 'Sözleşmeler',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_CREATE_BUTTON_LABEL' => 'Ekle', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Ekleyen Kullanıcı',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_CURRENT_USER_FILTER' => 'Ögelerim:',
    'LBL_CURRENCY' => 'Para Birimi:',
    'LBL_DOCUMENTS' => 'Belgeler',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi:',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi:',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_DUPLICATE_BUTTON' => 'Kopyala',
    'LBL_DELETE_BUTTON' => 'Sil',
    'LBL_DELETE' => 'Sil',
    'LBL_DELETED' => 'Silindi',
    'LBL_DIRECT_REPORTS' => 'Doğrudan Raporlar',
    'LBL_DONE_BUTTON_LABEL' => 'Tamamlandı',
    'LBL_DONE_BUTTON_TITLE' => 'Tamamlandı',
    'LBL_FAVORITES' => 'Sık Kullanılanlar',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Lütfen bir vCard dosyası seçin',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard içinde bu modül için gerekli tüm alanlar yok. Ayrıntılı bilgi almak için suitecrm.log dosyasına bakın.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Yüklenen dosya HTML formları için belirtilmiş olan 30000 bayt boyut sınırını aşıyor.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Vcard dosyası yüklenirken bir sorun çıktı. Ayrıntılı bilgi almak için suitecrm.log dosyasına bakın.',
    'LBL_IMPORT_VCARD' => 'İçe vCard Aktar:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'İçe vCard Aktar',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'İçe vCard Aktar',
    'LBL_VIEW_BUTTON' => 'Görüntüle',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'PDF olarak e-posta gönder',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'PDF olarak e-posta gönder',
    'LBL_EMAILS' => 'E-postalar',
    'LBL_EMPLOYEES' => 'Çalışanlar',
    'LBL_ENTER_DATE' => 'Tarihi Yazın',
    'LBL_EXPORT' => 'Dışa Aktar',
    'LBL_FAVORITES_FILTER' => 'Sık Kullanılandıklarım:',
    'LBL_GO_BUTTON_LABEL' => 'Git',
    'LBL_HIDE' => 'Gizle',
    'LBL_ID' => 'Kod',
    'LBL_IMPORT' => 'İçe Aktar',
    'LBL_IMPORT_STARTED' => 'İçe Aktarma Başlatıldı: ',
    'LBL_LAST_VIEWED' => 'Son Görüntülenenler',
    'LBL_LEADS' => 'Potansiyeller',
    'LBL_LESS' => 'daha az',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CAMPAIGNLOG' => 'Kampanya Günlüğü',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanyalar',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Yok',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Bulunduğu Yayın',
    'LBL_FIXED_IN_RELEASE' => 'Düzeltildiği Yayın',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap Adı',
    'LBL_LIST_ASSIGNED_USER' => 'Kullanıcı',
    'LBL_LIST_CONTACT_NAME' => 'İlgili Adı',
    'LBL_LIST_CONTACT_ROLE' => 'İlgili Rolü',
    'LBL_LIST_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_LIST_EMAIL' => 'E-posta',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_OF' => '/',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'İlişkili ',
    'LBL_LIST_USER_NAME' => 'Kullanıcı Adı',
    'LBL_LISTVIEW_NO_SELECTED' => 'Lütfen işlenecek en az bir kayıt seçin.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Lütfen işlenecek en az iki kayıt seçin.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Seçilmiş Kayıtlar',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Seçilmiş: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Ali',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Kaya',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Program Geliştirme Uzmanı',
    'LBL_CANCEL' => 'İptal',
    'LBL_VERIFY' => 'Doğrula',
    'LBL_RESEND' => 'Yeniden Gönder',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Posta Birleştir',
    'LBL_MASS_UPDATE' => 'Toplu Güncelleme',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Toplu Güncelleme işlemi için kullanılabilecek bir alan yok',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Birincil E-Postayı Abonelikten Çıkar',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Birincil E-Postayı Abone Et',
    'LBL_MEETINGS' => 'Toplantılar',
    'LBL_MEETING_GO_BACK' => 'Toplantıya geri dön',
    'LBL_MEMBERS' => 'Üyeler',
    'LBL_MEMBER_OF' => 'Şunun üyesi',
    'LBL_MODIFIED_BY_USER' => 'Değiştiren Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı',
    'LBL_MORE' => 'Diğerleri',
    'LBL_MY_ACCOUNT' => 'Ayarlarım',
    'LBL_NAME' => 'Ad',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Ekle',
    'LBL_NEW_BUTTON_TITLE' => 'Ekle',
    'LBL_NEXT_BUTTON_LABEL' => 'Sonraki',
    'LBL_NONE' => '--Yok--',
    'LBL_NOTES' => 'Notlar',
    'LBL_OPPORTUNITIES' => 'Fırsatlar',
    'LBL_OPPORTUNITY_NAME' => 'Fırsat Adı',
    'LBL_OPPORTUNITY' => 'Fırsat',
    'LBL_OR' => 'YA DA',
    'LBL_PANEL_OVERVIEW' => 'Özet', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Diğer', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Ayrıntılı bilgiler', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Üst Öge Türü',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Posta Kodu:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil Adres İlçe:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil Adres Ülke:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Birincil Adres Posta Kodu:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil Adres İl:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '2. Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '3. Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil Adres Satırı:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil Adres:',

    'LBL_PROSPECTS' => 'Adaylar',
    'LBL_PRODUCTS' => 'Ürünler',
    'LBL_PROJECT_TASKS' => 'Proje Görevleri',
    'LBL_PROJECTS' => 'Projeler',
    'LBL_QUOTES' => 'Fiyat Teklifleri',

    'LBL_RELATED' => 'İlişkili',
    'LBL_RELATED_RECORDS' => 'İlişkili Kayıtlar',
    'LBL_REMOVE' => 'Sil',
    'LBL_REPORTS_TO' => 'Rapor Edilen Kişi',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Zorunlu alanı gösterir',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Tamamlandı',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Tam Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Tam Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Kaydedip Yeni Ekle',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Kaydedip Yeni Ekle',
    'LBL_SAVE_OBJECT' => '{0} Kaydet',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Arama',
    'LBL_SEARCH_BUTTON_TITLE' => 'Arama',
    'LBL_FILTER' => 'Süzgeç',
    'LBL_SEARCH' => 'Arama',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'diğerleri',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Dosya türü geçersiz, yalnız görüntü dosyaları yüklenebilir.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Seçin',
    'LBL_SELECT_BUTTON_TITLE' => 'Seçin',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Belgelere Gözat',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Belgelere Gözat',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Kişi Seçin',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Kişi Seçin',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Raporlardan Seçin',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Raporları Seçin',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Kullanıcı Seçin',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Kullanıcı Seçin',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Seçilmişleri Bırak',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Seçilmişleri Bırak',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Seçilmişleri Bırak',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Seçilmişleri Bırak',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Dosya Seçin',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Dosya Seçin',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Dosyayı Bırak',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Dosyayı Bırak',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Kullanıcı Seçin',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Kullanıcı Seçin',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Kullanıcıyı Temizle',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Kullanıcıyı Temizle',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Hesap Seçin',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Hesap Seçin',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Hesabı Bırak',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Hesabı Bırak',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Kampanyayı Seç',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Kampanyayı Seç',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Kampanyayı Bırak',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Kampanyayı Bırak',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Kişi Seçin',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Kişi Seçin',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Kişiyi Bırak',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Kişiyi Bırak',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Takımı Seç',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Takımı Seç',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Takımı Bırak',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Takımı Bırak',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Bu sayfanın oluşturulması için kullanılan gerekli kaynaklar (sorgular, dosyalar)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'saniye.',
    'LBL_SERVER_RESPONSE_TIME' => 'Sunucu yanıt süresi:',
    'LBL_SERVER_MEMORY_BYTES' => 'bayt',
    'LBL_SERVER_MEMORY_USAGE' => 'Sunucu Bellek Kullanımı: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Kullanımı: - modül: {0} - işlem: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Sunucu En Fazla Bellek Kullanımı: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Gönderim Adresi',
    'LBL_SHOW' => 'Görüntüle',
    'LBL_STATE' => 'Durum:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Bu etkinlik için durumunuz güncellendi!',
    'LBL_STATUS' => 'Durum:',
    'LBL_STREET' => 'Sokak',
    'LBL_SUBJECT' => 'Konu',

    'LBL_INBOUNDEMAIL_ID' => 'Gelen E-Posta Kodu',

    'LBL_SCENARIO_SALES' => 'Satışlar',
    'LBL_SCENARIO_MARKETING' => 'Pazarlama',
    'LBL_SCENARIO_FINANCE' => 'Finans',
    'LBL_SCENARIO_SERVICE' => 'Hizmet',
    'LBL_SCENARIO_PROJECT' => 'Proje Yönetimi',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Bu senaryo satış ögelerinin yönetilmesini sağlar',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Bu senaryo pazarlama ögelerinin yönetilmesini sağlar',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Bu senaryo finans ile ilgili ögelerin yönetilmesini sağlar',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Bu senaryo hizmet ile ilgili ögelerin yönetilmesini sağlar',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Bu senaryo proje ile ilgili ögelerin yönetilmesini sağlar',

    'LBL_SYNC' => 'Eşitle',
    'LBL_TABGROUP_ALL' => 'Tümü',
    'LBL_TABGROUP_ACTIVITIES' => 'İşlemler',
    'LBL_TABGROUP_COLLABORATION' => 'İş birliği',
    'LBL_TABGROUP_MARKETING' => 'Pazarlama',
    'LBL_TABGROUP_OTHER' => 'Diğer',
    'LBL_TABGROUP_SALES' => 'Satışlar',
    'LBL_TABGROUP_SUPPORT' => 'Destek',
    'LBL_TASKS' => 'Görevler',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-postayı Arşivle',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-postayı Arşivle',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Silinenleri Geri Al',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Silinenleri Geri Al',
    'LBL_UNDELETE_BUTTON' => 'Silinenleri Geri Al',
    'LBL_UNDELETE' => 'Silinenleri Geri Al',
    'LBL_UNSYNC' => 'Eşitlemeyi Kaldır',
    'LBL_UPDATE' => 'Güncelle',
    'LBL_USER_LIST' => 'Kullanıcı Listesi',
    'LBL_USERS' => 'Kullanıcılar',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Var olan e-posta kaydı denetleniyor...',
    'LBL_VERIFY_PORTAL_NAME' => 'Var olan portal adı denetleniyor...',
    'LBL_VIEW_IMAGE' => 'görünüm',

    'LNK_ABOUT' => 'Hakkında',
    'LNK_ADVANCED_FILTER' => 'Gelişmiş Süzgeç',
    'LNK_BASIC_FILTER' => 'Hızlı Süzgeç',
    'LBL_ADVANCED_SEARCH' => 'Gelişmiş Süzgeç',
    'LBL_QUICK_FILTER' => 'Hızlı Süzgeç',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Tümünü Görüntüle',
    'LNK_CLOSE' => 'Kapat',
    'LBL_MODIFY_CURRENT_FILTER' => 'Geçerli süzgeci değiştir',
    'LNK_SAVED_VIEWS' => 'Görünüm Ayarları',
    'LNK_DELETE' => 'Sil',
    'LNK_EDIT' => 'Düzenle',
    'LNK_GET_LATEST' => 'Sonuncuyu al',
    'LNK_GET_LATEST_TOOLTIP' => 'Son sürümle değiştir',
    'LNK_HELP' => 'Yardım',
    'LNK_CREATE' => 'Ekle',
    'LNK_LIST_END' => 'Son',
    'LNK_LIST_NEXT' => 'Sonraki',
    'LNK_LIST_PREVIOUS' => 'Önceki',
    'LNK_LIST_RETURN' => 'Listeye Geri Dön',
    'LNK_LIST_START' => 'İlk',
    'LNK_LOAD_SIGNED' => 'İmza',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'İmzalı belge ile değiştir',
    'LNK_PRINT' => 'Yazdır',
    'LNK_BACKTOTOP' => 'Üste git',
    'LNK_REMOVE' => 'Sil',
    'LNK_RESUME' => 'Sürdür',
    'LNK_VIEW_CHANGE_LOG' => 'Değişiklik Geçmişini Görüntüle',

    'NTC_CLICK_BACK' => 'Lütfen web tarayıcının geri düğmesine tıklayarak sorunu düzeltin.',
    'NTC_DATE_FORMAT' => '(yyyy-aa-gg)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Seçilmiş kayıtları silmek istediğinize emin misiniz?',
    'NTC_TEMPLATE_IS_USED' => 'Kalıp en azından bir e-posta pazarlama kaydında kullanılıyor. Silmek istediğinize emin misiniz?',
    'NTC_TEMPLATES_IS_USED' => 'Aşağıdaki kalıplar e-posta pazarlama kayıtları için kullanılıyor. Bunları silmek istediğinize emin misiniz?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Şunları silmek istediğinize emin misiniz ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Şunları güncellemek istediğinize emin misiniz ',
    'NTC_DELETE_SELECTED_RECORDS' => ' seçilmiş kayıt?',
    'NTC_LOGIN_MESSAGE' => 'Lütfen kullanıcı adı ve parolanızı yazın.',
    'NTC_NO_ITEMS_DISPLAY' => 'yok',
    'NTC_REMOVE_CONFIRMATION' => 'Bu ilişkiyi kaldırmak istediğinize emin misiniz? Yalnız ilişki kaldırılır. Kayıt silinmez.',
    'NTC_REQUIRED' => 'Doldurulması zorunlu alanı gösterir',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Hoş geldiniz',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Bu kayıtta yaptığınız değişiklikleri kaydetmeden çıkıyorsunuz. Bu kayıttan çıkmak istediğinize emin misiniz?',
    'ERROR_NO_RECORD' => 'Kayıt alınırken sorun çıktı. Bu kayıt silinmiş olabilir ya da görüntüleme izniniz yok.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Uyarı:</b>Tarayıcı sürümünüz artık desteklenmiyor ya da desteklenmeyen bir tarayıcı kullanıyorsunuz.<p></p>Aşağıdaki tarayıcı sürümlerini kullanmanız önerilir:<p></p><ul><li> Internet Explorer 10 (uyumluluk görünümü desteklenmez)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Uyarı:</b> Tarayıcınız desteklenmeyen IE uyumluluk kipinde çalışıyor.',
    'ERROR_TYPE_NOT_VALID' => 'Hata. Bu tür geçersiz.',
    'ERROR_NO_BEAN' => 'Bean verileri alınamadı.',
    'LBL_DUP_MERGE' => 'Çiftleri Bul',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Abonelik Yönetimi',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Şunun Abonelik Yönetimi ',
    // Ajax status strings
    'LBL_LOADING' => 'Yükleniyor...',
    'LBL_SEARCHING' => 'Aranıyor...',
    'LBL_SAVING_LAYOUT' => 'Görünüm Kaydediliyor...',
    'LBL_SAVED_LAYOUT' => 'Görünüm kaydedildi.',
    'LBL_SAVED' => 'Kaydedildi',
    'LBL_SAVING' => 'Kaydediliyor',
    'LBL_DISPLAY_COLUMNS' => 'Sütunları Görüntüle',
    'LBL_HIDE_COLUMNS' => 'Sütunları Gizle',
    'LBL_SEARCH_CRITERIA' => 'Arama Ölçütü',
    'LBL_SAVED_VIEWS' => 'Kaydedilmiş Görünümler',
    'LBL_PROCESSING_REQUEST' => 'İşleniyor...',
    'LBL_REQUEST_PROCESSED' => 'Tamamlandı',
    'LBL_AJAX_FAILURE' => 'Ajax sorunu',
    'LBL_MERGE_DUPLICATES' => 'Birleştir',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Süzgeçlerim',
    'LBL_SEARCH_POPULATE_ONLY' => 'Yukarıdaki formu kullanarak arama yapın',
    'LBL_DETAILVIEW' => 'Ayrıntı Görünümü',
    'LBL_LISTVIEW' => 'Liste Görünümü',
    'LBL_EDITVIEW' => 'Düzenleme Görünümü',
    'LBL_BILLING_STREET' => 'Sokak:',
    'LBL_SHIPPING_STREET' => 'Sokak:',
    'LBL_SEARCHFORM' => 'Arama Formu',
    'LBL_SAVED_SEARCH_ERROR' => 'Bu görünüme bir ad yazın.',
    'LBL_DISPLAY_LOG' => 'Günlüğü Görüntüle',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistem',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Oturum Zaman Aşımı',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Oturumunuz yaklaşık 2 dakika sonra zaman aşımına uğrayacak. Lütfen çalışmalarınızı kaydedin.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Oturumunuz zaman aşımına uğradı.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nGündem: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Toplantı',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Telefon Araması',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Zaman: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Konum:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Açıklama: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Durum: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'İlişkili:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nBu telefon aramasını görüntülemek için Tamam, bu iletiyi kapatmak için İptal üzerine tıklayın.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nToplantıyı görüntülemek için Tamam, bu iletiyi kapatmak için İptal üzerine tıklayın.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Etkinlik',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Etkinlik ayarlanmamış.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Konum ayarlanmamış.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Başlangıç tarihi belirtilmemiş.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Herhangi bir sonuç bulunamadı.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Herhangi bir sonuç bulunamadı... Arama ölçütlerinizi değiştirip yeniden denemek ister misiniz?',
    'MSG_LIST_VIEW_NO_RESULTS' => '<item1> için bir sonuç bulunamadı',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Yeni <item2> gibi <item1> ekle',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ya da arama ölçütünüzü değiştirin',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Henüz bir kayıt yok. <item2> ya da <item3>.',

    'LBL_CLICK_HERE' => 'Buraya tıklayın',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Sık Kullandıklarıma Ekle',
    'LBL_CREATE_CONTACT' => 'Kişi Ekle',
    'LBL_CREATE_CASE' => 'Destek Kaydı Ekle',
    'LBL_CREATE_NOTE' => 'Not Ekle',
    'LBL_CREATE_OPPORTUNITY' => 'Fırsat Ekle',
    'LBL_SCHEDULE_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LBL_SCHEDULE_MEETING' => 'Toplantı Planla',
    'LBL_CREATE_TASK' => 'Görev Ekle',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Form Oluştur',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Web Formu Kaydet',
    'LBL_AVAILABLE_FIELDS' => 'Kullanılabilecek Alanlar',
    'LBL_FIRST_FORM_COLUMN' => 'Birinci Form Sütunu',
    'LBL_SECOND_FORM_COLUMN' => 'İkinci Form Sütunu',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Zorunlu alan eksik: Atanmış Kişi',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Zorunlu eksik alan: İlgili kampanya',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Eklenecek web formu ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Bu formun gönderilmesi sonucu eklenecek ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Tüm Alanları Ekle',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Tüm Alanları Sıfırla',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Tüm Alanları Kaldır',
    'LBL_NEXT_BTN' => 'Sonraki',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Yalnız desteklenen görüntü dosyası türleri eklenebilir: JPG, PNG.',
    'LBL_TRAINING' => 'Destek Forumu',
    'ERR_MSSQL_DB_CONTEXT' => 'Veritabanı kodlaması şuna değiştirildi',
    'ERR_MSSQL_WARNING' => 'Uyarı:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Hata: [[file]] dosyası eksik. Karşılık gelen bir HTML dosyası bulunamadığından eklenemedi.',
    'ERR_CANNOT_FIND_MODULE' => 'Hata: [module] modülü bulunamadı.',
    'LBL_ALT_ADDRESS' => 'Diğer Adres:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Hata: displayParams dizisinde eşit olmayan sayıda \'key\' ve \'copy\' bileşeni bulunuyor.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Genel',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Süzgeçler',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Yalnız Benim Ögelerim',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Başlık',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Görüntülenecek Satır',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Yönetici tarafından belirlemiş en fazla SuiteCRM pano bileşeni sayısına ulaştınız. Yeni bir pano bileşeni eklemek için var olanlardan birini kaldırmalısınız.',
    'LBL_ADDING_DASHLET' => 'SuiteCRM Pano Bileşeni Ekleniyor...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Pano Bileşeni Eklendi',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Bu SuiteCRM pano bileşenini kaldırmak istediğinize emin misiniz?',
    'LBL_REMOVING_DASHLET' => 'SuiteCRM Pano Bileşeni Kaldırılıyor...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Pano Bileşeni Kaldırıldı',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Sayfa yükleniyor, lütfen bekleyin...',

    'LBL_RELOAD_PAGE' => 'Lütfen bu SuiteCRM pano bileşenini kullanmak için <a href="javascript: window.location.reload()">sayfayı yeniden yükleyin</a>.',
    'LBL_ADD_DASHLETS' => 'Pano Bileşeni Ekle',
    'LBL_CLOSE_DASHLETS' => 'Kapat',
    'LBL_OPTIONS' => 'Ayarlar',
    'LBL_1_COLUMN' => '1 Sütun',
    'LBL_2_COLUMN' => '2 Sütun',
    'LBL_3_COLUMN' => '3 Sütun',
    'LBL_PAGE_NAME' => 'Sayfa Adı',

    'LBL_SEARCH_RESULTS' => 'Arama Sonuçları',
    'LBL_SEARCH_MODULES' => 'Modüller',
    'LBL_SEARCH_TOOLS' => 'Araçlar',
    'LBL_SEARCH_HELP_TITLE' => 'Arama İpuçları',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Görsel Yok',

    'LBL_MODULE' => 'Modül',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Soldaki adres kopyalansın:',
    'LBL_SAVE_AND_CONTINUE' => 'Kaydedip Devam Et',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Bİrden çok seçim denetimleri</strong></p><ul><li>Bir özniteliği seçmek için değerlerin üzerine tıklayın.</li><li>Ctrl tuşuna basarken tıklayarak birden fazla seçim yapabilirsiniz. Mac kullanıcıları CMD tuşuna basarken tıklayabilir.</li><li>İki öznitelik arasındaki bütün değerleri seçmek için, ilk değere tıkladıktan sonra, Shift tuşuna basarken son değere tıklayın.</li></ul><p><strong>Gelişmiş Arama ve Görünüm Ayarları</strong><br><br><b>Kaydedilmiş Arama ve Görünüm</b> seçeneği ile çeşitli arama parametrelerini ve uyarlanmış Liste Görünümünü kaydederek arama sonuçlarını istediğiniz zaman hızlıca görebilirsiniz. Sınırsız sayıda uyarlanmış arama ve görünüm kaydedebilirsiniz. Kaydedilen tüm aramalar, son kullanılan kaydedilen arama en üstte olacak şekilde Kaydedilen Aramalar Listesinde adlarına göre görüntülenir.<br><br>Gizlenecek Sütunlar ve Görüntülenecek Sütunlar alanlarını kullanarak arama sonucu Liste Görünümünü istediğiniz verileri görüntüleyecek şekilde uyarlayabilirsiniz. Örneğin, Kayıt Adı, Atanmış Kullanıcı, Atanmış Takım gibi verileri arama sonucuna ekleyebilir ya da kaldırabilirsiniz. Liste Görünümüne yeni bir sütun eklemek için, ilgili sütunu Gizlenecek Sütunlar listesinden seçip sol ok üzerine tıklayarak Görüntülenecek Sütunlar listesine taşıyın. Liste Görünümünden bir sütun kaldırmak için, ilgili sütunu Görüntülenecek Sütunlar listesinden seçip sağ ok üzerine tıklayarak Gizlenecek Sütunlar listesine taşıyın.<br><br>Görünüm ayarlarını kaydederseniz, arama sonuçlarını uyarlanmış görünümde istediğiniz zaman görüntüleyebilirsiniz.<br><br>Bir aramayı ya da görünümü kaydetmek ya da güncellemek için:<ol><li><b>Bu aramayı farklı kaydet</b> alanına bir ad yazarak <b>Kaydet</b> üzerine tıklayın. Yazdığınız ad <b>Temizle</b> düğmesinin yanındaki Kaydedilmiş Aramalar listesinde görüntülenir.</li><li>Kaydedilmiş arama sonuçlarını görüntülemek için, Kaydedilmiş Aramalar listesinden bir ad seçin. Arama sonuçları Liste Görünümünde görüntülenir.</li><li>Kaydedilmiş bir aramanın özelliklerini güncellemek için, listeden kaydedilmiş aramayı seçin. Gelişmiş Arama bölümünden yeni arama ölçütü ve görüntü ayarlarını seçip <b>Geçerli Aramayı Değiştir</b> yanındaki <b>Güncelle</b> üzerine tıklayın.</li><li>Kaydedilmiş bir aramayı silmek için, Kaydedilmiş Aramalar listesinden seçin, <b>Geçerli Aramayı Değiştir</b> yanındaki <b>Sil</b> üzerine tıklayıp <b>Tamam</b> üzerine tıklayarak onaylayın.</li></ol><p><strong>İpuçları</strong><br><br>% genel arama karakterini kullanarak daha çok sonuç elde edebilirsiniz. Örneğin yalnız "Elma" sözcüğünün olduğu sonuçlar yerine "Elma%" ile arama yaparsanız "Elmalı" gibi Elma sözcüğü ile başlayan tüm sonuçları görebilirsiniz.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Hata: $module modülü için $limit sorgu sınırına ulaşıldı.',
    'ERROR_NOTIFY_OVERRIDE' => 'Hata: ResourceObserver->notify() üzerine yazılmalı.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Hata: Üst veri dosyası boş olduğundan ya da bulunamadığından izleyici eklenemedi.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Hata: İstenilen ad ile bir izleyici yapılandırılmamış',
    'ERR_UNDEFINED_METRIC' => 'Hata: Tanımlanmamış ölçüt için değer ayarlanamadı',
    'ERR_STORE_FILE_MISSING' => 'Hata: Store uyarlama dosyası bulunamadı',

    'LBL_MONITOR_ID' => 'İzleyici Kodu',
    'LBL_USER_ID' => 'Kullanıcı Kodu',
    'LBL_MODULE_NAME' => 'Modül Adı',
    'LBL_ITEM_ID' => 'Öge Kodu',
    'LBL_ITEM_SUMMARY' => 'Öge Özeti',
    'LBL_ACTION' => 'İşlem',
    'LBL_SESSION_ID' => 'Oturum Kodu',
    'LBL_BREADCRUMBSTACK_CREATED' => '{0} kodlu kullanıcı için BreadCrumbStack eklendi',
    'LBL_VISIBLE' => 'Kayıt Görülebilir',
    'LBL_DATE_LAST_ACTION' => 'Son İşlem Tarihi',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'şundan önce değil',
    'MSG_IS_MORE_THAN' => 'şundan fazla',
    'MSG_IS_LESS_THAN' => 'şundan az',
    'MSG_SHOULD_BE' => 'olması gereken',
    'MSG_OR_GREATER' => 'ya da şundan büyük',

    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Hata Ekle',

    'LBL_OBJECT_IMAGE' => 'nesne görseli',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Tarih Seçin',

    'LBL_VALIDATE_RANGE' => 'geçerli aralıkta değil',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Lütfen bir başlangıç ve bitiş tarihi ile bir aralık belirtin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Lütfen aralık için hem başlangıç hem bitiş tarihini seçin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tümü',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Hata: bean parametresi dizi sayısı, sonuçların dizi sayısı ile aynı değil.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Hata: Modül için eşleştirme kaydı eksik.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Hata: {0} bağlantısı için veri alınamadı. Hizmete şu anda ulaşılamıyor ya da yapılandırma ayarları geçersiz. Bağlantı hata iletisi: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'IIS/FastCGI sapı kullanırken en iyi deneyim için php.ini dosyasında fastcgi.logging değerini 0 olarak ayarlayın.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Ad',
    'LBL_COLLECTION_PRIMARY' => 'Birincil',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Zorunlu alan boş',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_DESCRIPTION' => 'Açıklama',

    'LBL_YESTERDAY' => 'dün',
    'LBL_TODAY' => 'bugün',
    'LBL_TOMORROW' => 'yarın ',
    'LBL_NEXT_WEEK' => 'gelecek hafta',
    'LBL_NEXT_MONDAY' => 'gelecek pazartesi',
    'LBL_NEXT_FRIDAY' => 'gelecek cuma',
    'LBL_TWO_WEEKS' => '2 hafta',
    'LBL_NEXT_MONTH' => 'sonraki ay',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'gelecek ayın ilk günü',
    'LBL_THREE_MONTHS' => 'üç ay',
    'LBL_SIXMONTHS' => 'altı ay',
    'LBL_NEXT_YEAR' => 'gelecek yıl',

    //Datetimecombo fields
    'LBL_HOURS' => 'Saat',
    'LBL_MINUTES' => 'Dakika',
    'LBL_MERIDIEM' => 'Öğle',
    'LBL_DATE' => 'Tarih',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Otomatik-Yenileme',

    'LBL_DURATION_DAY' => 'gün',
    'LBL_DURATION_HOUR' => 'saat',
    'LBL_DURATION_MINUTE' => 'dakika',
    'LBL_DURATION_DAYS' => 'gün',
    'LBL_DURATION_HOURS' => 'Süre Saat',
    'LBL_DURATION_MINUTES' => 'Süre Dakika',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Ay Seçin',
    'LBL_ENTER_YEAR' => 'Yılı Yazın',
    'LBL_ENTER_VALID_YEAR' => 'Lütfen geçerli bir yıl yazın',

    //File write error label
    'ERR_FILE_WRITE' => 'Hata: {0} dosyasına yazılamıyor. Lütfen sistem ve web sunucusu izinlerini denetleyin.',
    'ERR_FILE_NOT_FOUND' => 'Hata: {0} dosyası yüklenemiyor. Lütfen sistem ve web sunucusu izinlerini denetleyin.',

    'LBL_AND' => 'Ve',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Dış Kaynak üzerindeki Dosya',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Güvenlik',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"İçe aktarılmaya hazır bir dosyanın nasıl olacağını görmek için bu örnek içe aktarma dosyası kullanılabilir." 
"Dosya, içindeki bilgiler virgül ile ayrılmış bir .csv dosyasıdır, alandaki bilgiyi belirlemek çift tırnak işaretleri kullanılır."

"Üst bilgi satırı dosyanın en üstünde bulunur ve uygulamada görülen alan adlarını içerir." 
"Bu alan adları, dosyadaki veriler ile uygulama alanlarını eşleştirmek için kullanılır."

"Notlar: Veritabanı adları üst bilgi satırında da kullanılabilir. Böylece phpMyAdmin ya da başka bir veritabanı aracı kullanılarak veriler daha sonra içe aktarmak amacıyla dışa aktarılabilir." 
"İçe aktarma işlemi sırasında uygulama alanları üst bilgi satırındaki alan adları ile eşleştirileceği için sütun sıralaması önemli değildir."


"Bu dosyayı bir kalıp olarak kullanmak için şunları yapın:" 
"1. Örnek veri satırlarını kaldırın." 
"2. Şu anda okuduğunuz yardım metnini kaldırın." 
"3. Kendi verilerinizi uygun satır ve sütunlara yazın"
" 4. Dosyayı sisteminizde bilinen bir konuma kaydedin "
" 5. Uygulamada İşlemler menüsünden İçe Aktar üzerine tıklayın ve yüklenecek dosyayı seçin "   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Herhangi Bir Bildirim Yok',
    'LBL_ALT_SORT_DESC' => 'Azalarak Sıralandı',
    'LBL_ALT_SORT_ASC' => 'Artarak Sıralandı',
    'LBL_ALT_SORT' => 'Sıralama',
    'LBL_ALT_SHOW_OPTIONS' => 'Seçenekleri Görüntüle',
    'LBL_ALT_HIDE_OPTIONS' => 'Seçenekleri Gizle',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Seçilmiş kaydı soldaki listeye taşı',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Seçilmiş kaydı sağdaki listeye taşı',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Seçilmiş kaydı listede yukarı taşı',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Seçilmiş kaydı listede aşağı taşı',
    'LBL_ALT_INFO' => 'Bilgiler',
    'MSG_DUPLICATE' => 'Eklemek üzere olduğunuz {0} kaydı, zaten var olan bir {0} kaydının benzeri olabilir. Benzer adı taşıyan {1} kayıtlarını aşağıda görebilirsiniz.<br>{1} Ekle üzerine tıklayarak bu {0} ögesini eklemeye devam edebilir ya da aşağıdaki listeden var olan bir {0} seçebilirsiniz.',
    'MSG_SHOW_DUPLICATES' => 'Eklemek üzere olduğunuz {0} kaydı, zaten var olan bir {0} kaydının benzeri olabilir. Benzer adı taşıyan {1} kayıtlarını aşağıda görebilirsiniz. Kaydet üzerine tıklayarak bu {0} ögesini eklemeye devam edebilir ya da İptal üzerine tıklayarak {0} ögesini eklemeden modüle geri dönebilirsiniz.',
    'LBL_EMAIL_TITLE' => 'e-posta adresi',
    'LBL_EMAIL_OPT_TITLE' => 'abonelikten ayrılan e-posta adresi',
    'LBL_EMAIL_INV_TITLE' => 'e-posta adresi geçersiz',
    'LBL_EMAIL_PRIM_TITLE' => 'Birincil E-posta Adresi Olarak Ata',
    'LBL_SELECT_ALL_TITLE' => 'Tümünü seç',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Bu satırı seç',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'HATA: Yükleme sırasında bir sorun çıktı. Hata kodu: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'HATA: Yükleme sırasında bir sorun çıktı. Hata kodu: {0} - {1}. Upload_maxsize değeri: {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'HATA: Yükleme sırasında bir sorun çıktı, yardım almak için yöneticiniz ile görüşün.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Yüklenen dosyanın boyutu ({0} bayt) izin verilen en büyük {1} bayt boyutundan büyük',
    'UPLOAD_REQUEST_ERROR' => 'Bir sorun çıktı. Lütfen sayfayı yenileyip yeniden deneyin.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Düzenle',
    'LBL_EDIT_BUTTON_TITLE' => 'Düzenle',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Kopyala',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Kopyala',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Sil',
    'LBL_DELETE_BUTTON_TITLE' => 'Sil',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Toplu İşlem', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'İşlem', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Kaydet',
    'LBL_SAVE_BUTTON_TITLE' => 'Kaydet',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'İptal',
    'LBL_CANCEL_BUTTON_TITLE' => 'İptal',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => '{0} içindeki bağlantı dizisi hatalı tanımlanmış ya da boş olduğundan kullanılamıyor.',
    'ERR_SUHOSIN' => 'Yükleme akışı Suhosin tarafından engellendi. Lütfen &quot;yüklemeyi&quot; suhosin.executor.include.whitelist bölümüne ekleyin (Ayrıntılar için suitecrm.log dosyasına bakın)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Sunucudan gelen yanıt hatalı',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Teklif',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Satış Fiyatı',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'El ile',
        '5' => '5 dakikada bir',
        '15' => '15 dakikada bir',
        '30' => '30 dakikada bir',
        '60' => 'Saatte bir',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Bir anımsatıcı boş ya da hatalı.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Anımsatıcı olarak bir açılan kutu ya da e-posta ayarlanmamış.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Anımsatıcının herhangi bir katılımcısı yok.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Anımsatıcıda herhangi bir katılımcı yok, anımsatıcıyı kaldırmak ister misiniz?',
    'LBL_DELETE_REMINDER' => 'Anımsatıcıyı Sil',
    'LBL_OK' => 'Tamam',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Sütunları seçin',
    'LBL_COLUMN_CHOOSER' => 'Sütun Seçici',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Değişiklikleri Kaydet',
    'LBL_DISPLAYED' => 'Görüntülenen',
    'LBL_HIDDEN' => 'Gizli',
    'ERR_EMPTY_COLUMNS_LIST' => 'En az bir bileşen gerekli',

    'LBL_FILTER_HEADER_TITLE' => 'Süzgeç',

    'LBL_CATEGORY' => 'Kategori',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'ERR_FACTOR_TPL_INVALID' => 'Aşamalı Kimlik Doğrulama iletisi geçersiz. Lütfen yöneticinizle görüşün.',
    'LBL_SUBTHEMES' => 'Biçem',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Gün Doğumu',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Gün',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Gün Batımı',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Gece',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Öğle', 

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Taslağı yoksay',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Bu işlem bu e-postayı silecek. Devam etmek istiyor musunuz?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'E-posta penceresinden çık',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'E-posta yazma penceresinde çıkıldığında yazılmış tüm bilgiler kaybolur. Devam etmek ister misiniz?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Bir E-Posta Kalıbı Uygula',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Bu işlem e-postanın İçerik Metni ve Konu bölümlerini değiştirecek. Devam etmek istiyor musunuz?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Abone Olma Onaylandı',
    'LBL_OPT_IN_TITLE' => 'Abone Ol',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Abone Olma Onayı Tarihi',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Abone Olma Onayı Gönderim Tarihi',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Abone Olma Onayı Başarısızlık Tarihi',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Abone Olma Kodunu Onayla',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Abone olma e-posta kalıbı yapılandırılmamış. Lütfen e-posta ayarları bölümünden kurun.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Abone olmak için e-postanın Hesap/Kişi/Potansiyel/Hedef ile ilişkilendirilmiş olması gerekir',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Devir Alınamaz Grup',
    'LBL_PRIMARY_GROUP' => "Birincil Grup",

    // footer
    'LBL_SUITE_TOP' => 'Üste git',
    'LBL_SUITE_SUPERCHARGED' => 'SuiteCRM tarafından süperşarjlı',
    'LBL_SUITE_POWERED_BY' => 'SuiteCRM tarafından desteklenmektedir',
    'LBL_SUITE_DESC1' => 'SuiteCRM <a href="https://salesagility.com">SelesAgility</a> tarafından geliştirilmiş ve bir araya getirilmiştir. Bu Program herhangi bir garanti verilmeden OLDUĞU GİBİ sunulmaktadır. AGPLv3 koşulları altında lisanslanmıştır.',
    'LBL_SUITE_DESC2' => 'Bu program özgür ve ücretsiz bir yazılımdır; yeniden dağıtılabilir ve Özgür Yazılım Vakfı tarafından yayınlanan GNU Affero Genel Kamu Lisansı sürüm 3 koşulları altında, kaynak kodu üst bilgisinde belirtilen ek izin de dahil olmak üzere değiştirilebilir.',
    'LBL_SUITE_DESC3' => 'SuiteCRM, SalesAgility Ltd. kuruluşunun ticari markasıdır. Diğer tüm kuruluş ve ürün adları ilgili kuruluşların ticari markaları olabilir.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Parolayı Sıfırla',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Abone Olma Onayı E-postası Gönderildi',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Abone Olma Onayı E-postası yalnız Hesaplar/Kişiler/Potansiyeller/Adaylara gönderilsin',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Abone Olma Onayı E-postasının gönderilmesi devre dışı bırakılmış. E-posta Ayarları bölümünden Abone Olma Onayı seçeneğini etkinleştirin ya da Yöneticiniz ile görüşün.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'İlgilinin Birincil E-posta Adersi olmadığından Abone Olma Onayı E-postası gönderilemiyor',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Abone Olma Onayı E-postası gönderilemedi',
    'LBL_CONFIRM_EMAIL_SENT' => 'Abone Olma Onayı E-postası gönderildi',
);

$app_list_strings['moduleList']['Library'] = 'Kitaplık';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-posta Adresi';
$app_list_strings['project_priority_default'] = 'Orta';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Yüksek',
    'Medium' => 'Orta',
    'Low' => 'Düşük',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Kabul',
    'contract' => 'Sözleşme',
    'legal_obligation' => 'Yasal yükümlülükler',
    'protection_of_interest' => 'Hakların korunması',
    'public_interest' => 'Kamu yararı',
    'legitimate_interest' => 'Kazanılmış hak',
    'withdrawn' => 'Geri alındı',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Web Sitesi',
    'phone' => 'Telefon',
    'given_to_user' => 'Kullanıcıya Verildi',
    'email' => 'E-posta',
    'third_party' => 'Üçüncü Taraf',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Bilgi Bankası';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DABİ',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGANİSTAN',
    'ALBANIA' => 'ARNAVUTLUK',
    'ALGERIA' => 'CEZAYİR',
    'AMERICAN SAMOA' => 'AMERİKAN SAMOA',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTİKA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARJANTİN',
    'ARMENIA' => 'ERMENİSTAN',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AVUSTRALYA',
    'AUSTRIA' => 'AVUSTURYA',
    'AZERBAIJAN' => 'AZERBAYCAN',
    'BAHAMAS' => 'BAHAMALAR',
    'BAHRAIN' => 'BAHREYN',
    'BANGLADESH' => 'BANGLADEŞ',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BEYAZ RUSYA',
    'BELGIUM' => 'BELÇİKA',
    'BELIZE' => 'BELİZ',
    'BENIN' => 'BENİN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BUTAN',
    'BOLIVIA' => 'BOLİVYA',
    'BOSNIA' => 'BOSNA',
    'BOTSWANA' => 'BOTSVANA',
    'BOUVET ISLAND' => 'BUVE ADASI',
    'BRAZIL' => 'BREZİLYA',
    'BRITISH ANTARCTICA TERRITORY' => 'İNGİLİZ ANTARKTİK BÖLGESİ',
    'BRITISH INDIAN OCEAN TERRITORY' => 'İNGİLİZ HİNT OKYANUSU BÖLGESİ',
    'BRITISH VIRGIN ISLANDS' => 'İNGİLİZ VİRGİN ADALARI',
    'BRITISH WEST INDIES' => 'İNGİLİZ BATI HİNT ADALARI',
    'BRUNEI' => 'BRUNEİ',
    'BULGARIA' => 'BULGARİSTAN',
    'BURKINA FASO' => 'BURKİNA FASO',
    'BURUNDI' => 'BURUNDİ',
    'CAMBODIA' => 'KAMBOÇYA',
    'CAMEROON' => 'KAMERUN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'KANAL BÖLGESİ',
    'CANARY ISLAND' => 'KANARYA ADALARI',
    'CAPE VERDI ISLANDS' => 'YEŞİL BURUN ADALARI',
    'CAYMAN ISLANDS' => 'CAYMAN ADALARI',
    'CHAD' => 'ÇAD',
    'CHANNEL ISLAND UK' => 'İNGİLİZ KANAL ADASI',
    'CHILE' => 'ŞİLİ',
    'CHINA' => 'ÇİN ',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ADASI',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ADASI',
    'COLOMBIA' => 'KOLOMBİYA',
    'COMORO ISLANDS' => 'KOMORO ADALARI',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'KONGO KİNŞASA',
    'COOK ISLANDS' => 'COOK ADALARI',
    'COSTA RICA' => 'KOSTARİKA',
    'CROATIA' => 'HIRVATİSTAN',
    'CUBA' => 'KÜBA',
    'CURACAO' => 'CURAÇAO',
    'CYPRUS' => 'KIBRIS',
    'CZECH REPUBLIC' => 'ÇEK CUMHURİYETİ',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANİMARKA',
    'DJIBOUTI' => 'CİBUTİ',
    'DOMINICA' => 'DOMİNİK',
    'DOMINICAN REPUBLIC' => 'DOMİNİK CUMHURİYETİ',
    'DUBAI' => 'DUBAİ',
    'ECUADOR' => 'EKVATOR',
    'EGYPT' => 'MISIR',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EKVATOR GİNESİ',
    'ESTONIA' => 'ESTONYA',
    'ETHIOPIA' => 'ETİYOPYA',
    'FAEROE ISLANDS' => 'FAROE ADALARI',
    'FALKLAND ISLANDS' => 'FALKLAND ADALARI',
    'FIJI' => 'FİJİ',
    'FINLAND' => 'FİNLANDİYA',
    'FRANCE' => 'FRANSA',
    'FRENCH GUIANA' => 'FRANSIZ GİNESİ',
    'FRENCH POLYNESIA' => 'FRANSIZ POLİNEZYASI',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBİYA',
    'GEORGIA' => 'GÜRCİSTAN',
    'GERMANY' => 'ALMANYA',
    'GHANA' => 'GANA',
    'GIBRALTAR' => 'CEBELİTARIK',
    'GREECE' => 'YUNANİSTAN',
    'GREENLAND' => 'GRÖNLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'YENİ GİNE',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAİTİ',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'MACARİSTAN',
    'ICELAND' => 'İZLANDA',
    'IFNI' => 'IFNI',
    'INDIA' => 'HİNDİSTAN',
    'INDONESIA' => 'ENDONEZYA',
    'IRAN' => 'İRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'İRLANDA',
    'ISRAEL' => 'İSRAİL',
    'ITALY' => 'İTALYA',
    'IVORY COAST' => 'FİLDİŞİ SAHİLİ',
    'JAMAICA' => 'JAMAİKA',
    'JAPAN' => 'JAPONYA',
    'JORDAN' => 'ÜRDÜN',
    'KAZAKHSTAN' => 'KAZAKİSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KORE',
    'KOREA, SOUTH' => 'GÜNEY KORE',
    'KUWAIT' => 'KUVEYT',
    'KYRGYZSTAN' => 'KIRGIZİSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETONYA',
    'LEBANON' => 'LÜBNAN',
    'LEEWARD ISLANDS' => 'RÜZGARALTI ADALARI',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LİBYA',
    'LIECHTENSTEIN' => 'LİHTENŞTAYN',
    'LITHUANIA' => 'LİTVANYA',
    'LUXEMBOURG' => 'LÜKSEMBURG',
    'MACAO' => 'MAKAU',
    'MACEDONIA' => 'MAKEDONYA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAVİ',
    'MALAYSIA' => 'MALEZYA',
    'MALDIVES' => 'MALDİVLER',
    'MALI' => 'MALİ',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTİNİK',
    'MAURITANIA' => 'MORİTANYA',
    'MAURITIUS' => 'MAURİTİUS',
    'MELANESIA' => 'MELANEZYA',
    'MEXICO' => 'MEKSİKA',
    'MOLDOVIA' => 'MOLDOVYA',
    'MONACO' => 'MONAKO',
    'MONGOLIA' => 'MOĞOLİSTAN',
    'MOROCCO' => 'FAS',
    'MOZAMBIQUE' => 'MOZAMBİK',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMİBYA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'HOLLANDA',
    'NETHERLANDS ANTILLES' => 'HOLLANDA ANTİLLERİ',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'HOLLANDA ANTİLLERİ TARAFSIZ BÖLGE',
    'NEW CALADONIA' => 'YENİ KALADONYA',
    'NEW HEBRIDES' => 'YENİ HEBRİDLER',
    'NEW ZEALAND' => 'YENİ ZELANDA',
    'NICARAGUA' => 'NİKARAGUA',
    'NIGER' => 'NİJER',
    'NIGERIA' => 'NİJERYA',
    'NORFOLK ISLAND' => 'NORFOLK ADASI',
    'NORWAY' => 'NORVEÇ',
    'OMAN' => 'UMMAN',
    'OTHER' => 'DİĞER',
    'PACIFIC ISLAND' => 'PASİFİK ADASI',
    'PAKISTAN' => 'PAKİSTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA YENİ GİNE',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FİLİPİNLER',
    'POLAND' => 'POLONYA',
    'PORTUGAL' => 'PORTEKİZ',
    'PORTUGUESE TIMOR' => 'PORTEKİZ TİMOR',
    'PUERTO RICO' => 'PORTO RİKO',
    'QATAR' => 'KATAR',
    'REPUBLIC OF BELARUS' => 'BEYAZ RUSYA CUMHURİYETİ',
    'REPUBLIC OF SOUTH AFRICA' => 'GÜNEY AFRİKA CUMHURİYETİ',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANYA',
    'RUSSIA' => 'RUSYA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ADALARI',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARİNO',
    'SAUDI ARABIA' => 'SUUDİ ARABİSTAN',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SIRBİSTAN',
    'SEYCHELLES' => 'SEYŞELLER',
    'SIERRA LEONE' => 'SİERRA LEONE',
    'SINGAPORE' => 'SİNGAPUR',
    'SLOVAKIA' => 'SLOVAKYA',
    'SLOVENIA' => 'SLOVENYA',
    'SOMALILIAND' => 'SOMALİ',
    'SOUTH AFRICA' => 'GÜNEY AFRİKA',
    'SOUTH YEMEN' => 'GÜNEY YEMEN',
    'SPAIN' => 'İSPANYA',
    'SPANISH SAHARA' => 'İSPANYOL SAHRASI',
    'SRI LANKA' => 'SRİ LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS VE NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURİNAM',
    'SW AFRICA' => 'GÜNEY BATI AFRİKA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'İSVEÇ',
    'SWITZERLAND' => 'İSVİÇRE',
    'SYRIA' => 'SURİYE',
    'TAIWAN' => 'TAYVAN',
    'TAJIKISTAN' => 'TACİKİSTAN',
    'TANZANIA' => 'TANZANYA',
    'THAILAND' => 'TAYLAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRİNİDAD',
    'TUNISIA' => 'TUNUS',
    'TURKEY' => 'TÜRKİYE',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAYNA',
    'UNITED ARAB EMIRATES' => 'BİRLEŞİK ARAP EMİRLİKLERİ',
    'UNITED KINGDOM' => 'BİRLEŞİK KRALLIK',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'ABD PASİFİK ADALARI',
    'US VIRGIN ISLANDS' => 'ABD VİRJİN ADALARI',
    'USA' => 'ABD',
    'UZBEKISTAN' => 'ÖZBEKİSTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATİKAN ŞEHRİ',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VİETNAM',
    'WAKE ISLAND' => 'WAKE ADASI',
    'WEST INDIES' => 'BATI HİNT ADALARI',
    'WESTERN SAHARA' => 'BATI SAHRA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAİRE',
    'ZAMBIA' => 'ZAMBİYA',
    'ZIMBABWE' => 'ZİMBABVE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Tayvan ve Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Kiril)',
    'CP1252' => 'CP1252 (MS Batı Avrupa ve ABD)',
    'EUC-CN' => 'EUC-CN (Basitleştirilmiş Çince GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japonca)',
    'EUC-KR' => 'EUC-KR (Korece)',
    'EUC-TW' => 'EUC-TW (Tayvanca)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japonca)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korece)',
    'ISO-8859-1' => 'ISO-8859-1 (Batı Avrupa ve ABD)',
    'ISO-8859-2' => 'ISO-8859-2 (Merkezi ve Doğu Avrupa)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Kiril)',
    'ISO-8859-6' => 'ISO-8859-6 (Arapça)',
    'ISO-8859-7' => 'ISO-8859-7 (Yunanca)',
    'ISO-8859-8' => 'ISO-8859-8 (İbranice)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Kiril Rusça)',
    'KOI8-U' => 'KOI8-U (Slav Alfabesi Ukraynaca)',
    'SJIS' => 'SJIS (MS Japonca)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Cezayir',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantik/Cape Verde',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/Ndjamena',
    'Indian/Comoro' => 'Hint/Komorlar',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazzaville',
    'Africa/Abidjan' => 'Afrika/Abidjan',
    'Africa/Djibouti' => 'Afrika/Cibuti',
    'Africa/Cairo' => 'Afrika/Kahire',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Asmera',
    'Africa/Addis_Ababa' => 'Afrika/Addis Ababa',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Banjul' => 'Afrika/Banjul',
    'Africa/Accra' => 'Afrika/Akra',
    'Africa/Conakry' => 'Afrika/Konakri',
    'Africa/Bissau' => 'Afrika/Bissau',
    'Africa/Nairobi' => 'Afrika/Nairobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'Hint/Antananarivo',
    'Africa/Blantyre' => 'Afrika/Blantyre',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nuakşot',
    'Indian/Mauritius' => 'Hint/Mauritius',
    'Indian/Mayotte' => 'Hint/Mayotte',
    'Africa/Casablanca' => 'Afrika/Kazablanka',
    'Africa/El_Aaiun' => 'Afrika/Layun',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Windhoek' => 'Afrika/Windhoek',
    'Africa/Niamey' => 'Afrika/Niamey',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Indian/Reunion' => 'Hint/Reunion',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Atlantic/St_Helena' => 'Atlantik/St. Helena',
    'Africa/Sao_Tome' => 'Afrika/Sao Tome',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'Hint/Mahe',
    'Africa/Freetown' => 'Afrika/Freetown',
    'Africa/Mogadishu' => 'Afrika/Mogadişu',
    'Africa/Johannesburg' => 'Afrika/Johannesburg',
    'Africa/Khartoum' => 'Afrika/Hartum',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Darüsselam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunus',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harare',
    'Antarctica/Casey' => 'Antarktika/Casey',
    'Antarctica/Davis' => 'Antarktika/Davis',
    'Antarctica/Mawson' => 'Antarktika/Mawson',
    'Indian/Kerguelen' => 'Hint/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarktika/DumontDUrville',
    'Antarctica/Syowa' => 'Antarktika/Syowa',
    'Antarctica/Vostok' => 'Antarktika/Vostok',
    'Antarctica/Rothera' => 'Antarktika/Rothera',
    'Antarctica/Palmer' => 'Antarktika/Palmer',
    'Antarctica/McMurdo' => 'Antarktika/McMurdo',
    'Asia/Kabul' => 'Asya/Kabil',
    'Asia/Yerevan' => 'Asya/Erivan',
    'Asia/Baku' => 'Asya/Bakü',
    'Asia/Bahrain' => 'Asya/Bahreyn',
    'Asia/Dhaka' => 'Asya/Dakka',
    'Asia/Thimphu' => 'Asya/Thimphu',
    'Indian/Chagos' => 'Hint/Chagos',
    'Asia/Brunei' => 'Asya/Brunei',
    'Asia/Rangoon' => 'Asya/Rangoon',
    'Asia/Phnom_Penh' => 'Asya/Phnom_Penh',
    'Asia/Beijing' => 'Asya/Beijing',
    'Asia/Harbin' => 'Asya/Harbin',
    'Asia/Shanghai' => 'Asya/Şangay',
    'Asia/Chongqing' => 'Asya/Chongqing',
    'Asia/Urumqi' => 'Asya/Urumçi',
    'Asia/Kashgar' => 'Asya/Kaşgar',
    'Asia/Hong_Kong' => 'Asya/Hong Kong',
    'Asia/Taipei' => 'Asya/Taipei',
    'Asia/Macau' => 'Asya/Makau',
    'Asia/Nicosia' => 'Asya/Nicosia',
    'Asia/Tbilisi' => 'Asya/Tiflis',
    'Asia/Dili' => 'Asya/Dili',
    'Asia/Calcutta' => 'Asya/Kalküta',
    'Asia/Jakarta' => 'Asya/Cakarta',
    'Asia/Pontianak' => 'Asya/Pontianak',
    'Asia/Makassar' => 'Asya/Makassar',
    'Asia/Jayapura' => 'Asya/Jayapura',
    'Asia/Tehran' => 'Asya/Tahran',
    'Asia/Baghdad' => 'Asya/Bağdat',
    'Asia/Jerusalem' => 'Asya/Kudüs',
    'Asia/Tokyo' => 'Asya/Tokyo',
    'Asia/Amman' => 'Asya/Amman',
    'Asia/Almaty' => 'Asya/Almatı',
    'Asia/Qyzylorda' => 'Asya/Kızılorda',
    'Asia/Aqtobe' => 'Asya/Aktöbe',
    'Asia/Aqtau' => 'Asya/Aktav',
    'Asia/Oral' => 'Asya/Oral',
    'Asia/Bishkek' => 'Asya/Bişkek',
    'Asia/Seoul' => 'Asya/Seul',
    'Asia/Pyongyang' => 'Asya/Pyongyang',
    'Asia/Kuwait' => 'Asya/Kuveyt',
    'Asia/Vientiane' => 'Asya/Vientiane',
    'Asia/Beirut' => 'Asya/Beyrut',
    'Asia/Kuala_Lumpur' => 'Asya/Kuala Lumpur',
    'Asia/Kuching' => 'Asya/Kuching',
    'Indian/Maldives' => 'Hint/Maldivler',
    'Asia/Hovd' => 'Asya/Hovd',
    'Asia/Ulaanbaatar' => 'Asya/Ulan Batur',
    'Asia/Choibalsan' => 'Asya/Çoybalsan',
    'Asia/Katmandu' => 'Asya/Katmandu',
    'Asia/Muscat' => 'Asya/Maskat',
    'Asia/Karachi' => 'Asya/Karaçi',
    'Asia/Gaza' => 'Asya/Gazze',
    'Asia/Manila' => 'Asya/Manila',
    'Asia/Qatar' => 'Asya/Katar',
    'Asia/Riyadh' => 'Asya/Riyad',
    'Asia/Singapore' => 'Asya/Singapur',
    'Asia/Colombo' => 'Asya/Kolombo',
    'Asia/Damascus' => 'Asya/Şam',
    'Asia/Dushanbe' => 'Asya/Duşanbe',
    'Asia/Bangkok' => 'Asya/Bangkok',
    'Asia/Ashgabat' => 'Asya/Aşkabat',
    'Asia/Dubai' => 'Asya/Dubai',
    'Asia/Samarkand' => 'Asya/Semerkand',
    'Asia/Tashkent' => 'Asya/Taşkent',
    'Asia/Saigon' => 'Asya/Saygon',
    'Asia/Aden' => 'Asya/Aden',
    'Australia/Darwin' => 'Avustralya/Darwin',
    'Australia/Perth' => 'Avustralya/Perth',
    'Australia/Brisbane' => 'Avustralya/Brisbane',
    'Australia/Lindeman' => 'Avustralya/Lindeman',
    'Australia/Adelaide' => 'Avustralya/Adelaide',
    'Australia/Hobart' => 'Avustralya/Hobart',
    'Australia/Currie' => 'Avustralya/Currie',
    'Australia/Melbourne' => 'Avustralya/Melbourne',
    'Australia/Sydney' => 'Avustralya/Sidney',
    'Australia/Broken_Hill' => 'Avustralya/Broken Hill',
    'Indian/Christmas' => 'Hint/Christmas',
    'Pacific/Rarotonga' => 'Pasifik/Rarotonga',
    'Indian/Cocos' => 'Hint/Cocos',
    'Pacific/Fiji' => 'Pasifik/Fiji',
    'Pacific/Gambier' => 'Pasifik/Gambier',
    'Pacific/Marquesas' => 'Pasifik/Markiz',
    'Pacific/Tahiti' => 'Pasifik/Tahiti',
    'Pacific/Guam' => 'Pasifik/Guam',
    'Pacific/Tarawa' => 'Pasifik/Tarawa',
    'Pacific/Enderbury' => 'Pasifik/Enderbury',
    'Pacific/Kiritimati' => 'Pasifik/Kiritimati',
    'Pacific/Saipan' => 'Pasifik/Saipan',
    'Pacific/Majuro' => 'Pasifik/Majuro',
    'Pacific/Kwajalein' => 'Pasifik/Kwajalein',
    'Pacific/Truk' => 'Pasifik/Truk',
    'Pacific/Pohnpei' => 'Pasifik/Pohnpei',
    'Pacific/Kosrae' => 'Pasifik/Kosrae',
    'Pacific/Nauru' => 'Pasifik/Nauru',
    'Pacific/Noumea' => 'Pasifik/Noumea',
    'Pacific/Auckland' => 'Pasifik/Auckland',
    'Pacific/Chatham' => 'Pasifik/Chatham',
    'Pacific/Niue' => 'Pasifik/Niue',
    'Pacific/Norfolk' => 'Pasifik/Norfolk',
    'Pacific/Palau' => 'Pasifik/Palau',
    'Pacific/Port_Moresby' => 'Pasifik/Port Moresby',
    'Pacific/Pitcairn' => 'Pasifik/Pitcairn',
    'Pacific/Pago_Pago' => 'Pasifik/Pago Pago',
    'Pacific/Apia' => 'Pasifik/Apia',
    'Pacific/Guadalcanal' => 'Pasifik/Guadalcanal',
    'Pacific/Fakaofo' => 'Pasifik/Fakaofo',
    'Pacific/Tongatapu' => 'Pasifik/Tongatapu',
    'Pacific/Funafuti' => 'Pasifik/Funafuti',
    'Pacific/Johnston' => 'Pasifik/Johnston',
    'Pacific/Midway' => 'Pasifik/Midway',
    'Pacific/Wake' => 'Pasifik/Wake',
    'Pacific/Efate' => 'Pasifik/Efate',
    'Pacific/Wallis' => 'Pasifik/Wallis',
    'Europe/London' => 'Avrupa/Londra',
    'Europe/Dublin' => 'Avrupa/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Avrupa/Tiran',
    'Europe/Andorra' => 'Avrupa/Andorra',
    'Europe/Vienna' => 'Avrupa/Viyana',
    'Europe/Minsk' => 'Avrupa/Minsk',
    'Europe/Brussels' => 'Avrupa/Brüksel',
    'Europe/Sofia' => 'Avrupa/Sofya',
    'Europe/Prague' => 'Avrupa/Prag',
    'Europe/Copenhagen' => 'Avrupa/Kopenhag',
    'Atlantic/Faeroe' => 'Atlantik/Faroe',
    'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
    'America/Scoresbysund' => 'Amerika/Scoresbysund',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Thule' => 'Amerika/Thule',
    'Europe/Tallinn' => 'Avrupa/Tallinn',
    'Europe/Helsinki' => 'Avrupa/Helsinki',
    'Europe/Paris' => 'Avrupa/Paris',
    'Europe/Berlin' => 'Avrupa/Berlin',
    'Europe/Gibraltar' => 'Avrupa/Cebelitarık',
    'Europe/Athens' => 'Avrupa/Atina',
    'Europe/Budapest' => 'Avrupa/Budapeşte',
    'Atlantic/Reykjavik' => 'Atlantik/Rekyavik',
    'Europe/Rome' => 'Avrupa/Roma',
    'Europe/Riga' => 'Avrupa/Riga',
    'Europe/Vaduz' => 'Avrupa/Vaduz',
    'Europe/Vilnius' => 'Avrupa/Vilnius',
    'Europe/Luxembourg' => 'Avrupa/Lüksemburg',
    'Europe/Malta' => 'Avrupa/Malta',
    'Europe/Chisinau' => 'Avrupa/Chisinau',
    'Europe/Monaco' => 'Avrupa/Monako',
    'Europe/Amsterdam' => 'Avrupa/Amsterdam',
    'Europe/Oslo' => 'Avrupa/Oslo',
    'Europe/Warsaw' => 'Avrupa/Warşova',
    'Europe/Lisbon' => 'Avrupa/Lizbon',
    'Atlantic/Azores' => 'Atlantik/Azorlar',
    'Atlantic/Madeira' => 'Atlantik/Madeira',
    'Europe/Bucharest' => 'Avrupa/Bükreş',
    'Europe/Kaliningrad' => 'Avrupa/Kaliningrad',
    'Europe/Moscow' => 'Avrupa/Moskova',
    'Europe/Samara' => 'Avrupa/Samara',
    'Asia/Yekaterinburg' => 'Asya/Yekaterinburg',
    'Asia/Omsk' => 'Asya/Omsk',
    'Asia/Novosibirsk' => 'Asya/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asya/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asya/Irkutsk',
    'Asia/Yakutsk' => 'Asya/Yakutsk',
    'Asia/Vladivostok' => 'Asya/Vladivostok',
    'Asia/Sakhalin' => 'Asya/Sakhalin',
    'Asia/Magadan' => 'Asya/Magadan',
    'Asia/Kamchatka' => 'Asya/Kamçatka',
    'Asia/Anadyr' => 'Asya/Anadır',
    'Europe/Belgrade' => 'Avrupa/Belgrad',
    'Europe/Madrid' => 'Avrupa/Madrid',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlantik/Kanarya',
    'Europe/Stockholm' => 'Avrupa/Stokholm',
    'Europe/Zurich' => 'Avrupa/Zürih',
    'Europe/Istanbul' => 'Avrupa/İstanbul',
    'Europe/Kiev' => 'Avrupa/Kiev',
    'Europe/Uzhgorod' => 'Avrupa/Ujgorod',
    'Europe/Zaporozhye' => 'Avrupa/Zaporijya',
    'Europe/Simferopol' => 'Avrupa/Simferopol',
    'America/New_York' => 'Amerika/New_York',
    'America/Chicago' => 'Amerika/Şikago',
    'America/North_Dakota/Center' => 'Amerika/Kuzey Dakota/Merkez',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los Angeles',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Yakutat',
    'America/Anchorage' => 'Amerika/Ankraj',
    'America/Nome' => 'Amerika/Nome',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Pasifik/Honolulu',
    'America/Phoenix' => 'Amerika/Phoenix',
    'America/Boise' => 'Amerika/Boise',
    'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amerika/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amerika/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amerika/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amerika/Kentucky/Monticello',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Menominee' => 'Amerika/Menominee',
    'America/St_Johns' => 'Amerika/St. Johns',
    'America/Goose_Bay' => 'Amerika/Goose Bay',
    'America/Halifax' => 'Amerika/Halifax',
    'America/Glace_Bay' => 'Amerika/Glace Bay',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Thunder_Bay' => 'Amerika/Thunder Bay',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Rainy_River' => 'Amerika/Rainy River',
    'America/Winnipeg' => 'Amerika/Winnipeg',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Swift Current',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Vancouver' => 'Amerika/Vancouver',
    'America/Dawson_Creek' => 'Amerika/Dawson Creek',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Iqaluit' => 'Amerika/Iqaluit',
    'America/Coral_Harbour' => 'Amerika/Coral Harbour',
    'America/Rankin_Inlet' => 'Amerika/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amerika/Cambridge Körfezi',
    'America/Yellowknife' => 'Amerika/Yellowknife',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Whitehorse',
    'America/Dawson' => 'Amerika/Dawson',
    'America/Cancun' => 'Amerika/Cancun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterrey',
    'America/Mexico_City' => 'Amerika/Meksiko',
    'America/Chihuahua' => 'Amerika/Chihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tijuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nassau',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Atlantik/Bermuda',
    'America/Cayman' => 'Amerika/Kayman',
    'America/Costa_Rica' => 'Amerika/Kosta Rika',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Santo_Domingo' => 'Amerika/Santo Domingo',
    'America/El_Salvador' => 'Amerika/El Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Guadelup',
    'America/Guatemala' => 'Amerika/Guatemala',
    'America/Port-au-Prince' => 'Amerika/Port-au-Prince',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Jamaica' => 'Amerika/Jamaika',
    'America/Martinique' => 'Amerika/Martinik',
    'America/Montserrat' => 'Amerika/Montserrat',
    'America/Managua' => 'Amerika/Managua',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'America/Porto Riko',
    'America/St_Kitts' => 'Amerika/St. Kitts',
    'America/St_Lucia' => 'Amerika/St. Lucia',
    'America/Miquelon' => 'Amerika/Miquelon',
    'America/St_Vincent' => 'Amerika/St. Vincent',
    'America/Grand_Turk' => 'Amerika/Grand Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Arjantin/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amerika/Arjantin/Kordoba',
    'America/Argentina/Tucuman' => 'Amerika/Arjantin/Tucuman',
    'America/Argentina/La_Rioja' => 'Amerika/Arjantin/La Rioja',
    'America/Argentina/San_Juan' => 'Amerika/Arjantin/San Juan',
    'America/Argentina/Jujuy' => 'Amerika/Arjantin/Jujuy',
    'America/Argentina/Catamarca' => 'Amerika/Arjantin/Catamarca',
    'America/Argentina/Mendoza' => 'Amerika/Arjantin/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Arjantin/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amerika/Arjantin/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La Paz',
    'America/Noronha' => 'Amerika/Noronha',
    'America/Belem' => 'Amerika/Belem',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Recife',
    'America/Araguaina' => 'Amerika/Araguaina',
    'America/Maceio' => 'Amerika/Maceio',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Sao_Paulo' => 'Amerika/Sao Paulo',
    'America/Campo_Grande' => 'Amerika/Campo_Grande',
    'America/Cuiaba' => 'Amerika/Cuiaba',
    'America/Porto_Velho' => 'Amerika/Porto Velho',
    'America/Boa_Vista' => 'Amerika/Boa Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Eirunepe',
    'America/Rio_Branco' => 'Amerika/Rio Branco',
    'America/Santiago' => 'Amerika/Santiago',
    'Pacific/Easter' => 'Pasifik/Paskalya',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Curaçao',
    'America/Guayaquil' => 'Amerika/Guayaquil',
    'Pacific/Galapagos' => 'Pasifik/Galapagos',
    'Atlantic/Stanley' => 'Atlantik/Stanley',
    'America/Cayenne' => 'Amerika/Cayenne',
    'America/Guyana' => 'Amerika/Guyana',
    'America/Asuncion' => 'Amerika/Asuncion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantik/Güney Georgia',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/İspanya Limanı',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/Karakas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Kişiler',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'İstek',
    2 => 'Erişim',
    3 => 'Geçersiz',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanya',
    'email' => 'E-posta',
    'event' => 'Etkinlik',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanya',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanya',
    'email' => 'E-posta',
    'event' => 'Etkinlik',
    'system' => 'Sistem',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Bilgi Bankası'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'BB - Kategoriler'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Taslak';
$app_list_strings['aok_status_list']['Expired'] = 'Süresi Geçmiş';
$app_list_strings['aok_status_list']['In_Review'] = 'İnceleniyor';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Özel';
$app_list_strings['aok_status_list']['published_public'] = 'Herkese Açık';

$app_list_strings['moduleList']['FP_events'] = 'Etkinlikler';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Konumlar';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Çağrılmış';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Çağrılmamış';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Katıldı';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Katılmadı';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Onaylandı';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Reddedildi';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Yanıtlanmamış';

$app_strings['LBL_STATUS_EVENT'] = 'Çağrı Durumu';
$app_strings['LBL_ACCEPT_STATUS'] = 'Kabul Edilme Durumu';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Bu Sayfayı Seç';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Tümünü Seç';
$app_strings['LBL_LISTVIEW_NONE'] = 'Tümünü Bırak';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'İndeks İşlemi';
$app_list_strings['moduleList']['AOD_Index'] = 'Dizin';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Destek Kaydı İşlemleri';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Destek Kaydı Güncellemeleri';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Lütfen yanıtınızı bu çizginin altına yazın ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Aç';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Açıldı',
        'Closed' => 'Kapalı',
    );
$app_list_strings['case_status_default_key'] = 'Yeni_Aç';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Yeni',
        'Open_Assigned' => 'Atanmış',
        'Closed_Closed' => 'Kapalı',
        'Open_Pending Input' => 'Yanıt Bekleniyor',
        'Closed_Rejected' => 'Reddedildi',
        'Closed_Duplicate' => 'Çift',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Tek Kullanıcı',
        'Account' => 'Hesap kullanıcısı',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Varsayılan Olarak AOP Kullanılsın',
    'singleUser' => 'Tek Kullanıcı',
    'roundRobin' => 'Sırayla',
    'leastBusy' => 'En Az Meşgul',
    'random' => 'Rastgele',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Raporlar';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Rapor Koşulları';
$app_list_strings['moduleList']['AOR_Charts'] = 'Rapor Çizelgeleri';
$app_list_strings['moduleList']['AOR_Fields'] = 'Rapor Alanları';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Zamanlanmış Raporlar';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Şuna Eşit Olan';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Şuna Eşit Olmayan';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Şundan Büyük Olan';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Şundan Küçük Olan';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Şuna Eşit ya da Büyük Olan';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Şuna Eşit ya da Küçük Olan';
$app_list_strings['aor_operator_list']['Contains'] = 'Şunu İçeren';
$app_list_strings['aor_operator_list']['Not_Contains'] = 'Şunu İçermeyen';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Şununla Başlayan';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Şununla Biten';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-a-g';
$app_list_strings['aor_format_options']['Ymd'] = 'Yag';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-a';
$app_list_strings['aor_format_options']['d/m/Y'] = 'g/a/Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'Ve';
$app_list_strings['aor_condition_operator_list']['OR'] = 'YA DA';
$app_list_strings['aor_condition_type_list']['Value'] = 'Değer';
$app_list_strings['aor_condition_type_list']['Field'] = 'Alan';
$app_list_strings['aor_condition_type_list']['Date'] = 'Tarih';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Şunlardan biri';
$app_list_strings['aor_condition_type_list']['Period'] = 'Aralık';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Geçerli Kullanıcı';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Dakika';
$app_list_strings['aor_date_type_list']['hour'] = 'Saat';
$app_list_strings['aor_date_type_list']['day'] = 'Gün';
$app_list_strings['aor_date_type_list']['week'] = 'Hafta';
$app_list_strings['aor_date_type_list']['month'] = 'Ay';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Çalışma Saatleri';
$app_list_strings['aor_date_options']['now'] = 'Şimdi';
$app_list_strings['aor_date_options']['field'] = 'Bu Alan';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Artan';
$app_list_strings['aor_sort_operator']['DESC'] = 'Azalan';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Say';
$app_list_strings['aor_function_list']['MIN'] = 'En az';
$app_list_strings['aor_function_list']['MAX'] = 'En fazla';
$app_list_strings['aor_function_list']['SUM'] = 'Toplam';
$app_list_strings['aor_function_list']['AVG'] = 'Ortalama';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Say';
$app_list_strings['aor_total_options']['SUM'] = 'Toplam';
$app_list_strings['aor_total_options']['AVG'] = 'Ortalama';
$app_list_strings['aor_chart_types']['bar'] = 'Çubuk çizelge';
$app_list_strings['aor_chart_types']['line'] = 'Çizgisel çizelge';
$app_list_strings['aor_chart_types']['pie'] = 'Dairesel çizelge';
$app_list_strings['aor_chart_types']['radar'] = 'Radar çizelge';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Yığılmış çubuk';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Gruplanmış çubuk';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Aylık';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Haftalık';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Günlük';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Etkin';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Devre Dışı';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-posta';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Kullanıcı';
$app_list_strings['aor_email_type_list']['Users'] = 'Kullanıcılar';
$app_list_strings['aor_assign_options']['all'] = 'TÜM Kullanıcılar';
$app_list_strings['aor_assign_options']['role'] = 'Roldeki TÜM Kullanıcılar';
$app_list_strings['aor_assign_options']['security_group'] = 'Güvenlik Grubundaki TÜM Kullanıcılar';
$app_list_strings['date_time_period_list']['today'] = 'Bugün';
$app_list_strings['date_time_period_list']['yesterday'] = 'Dün';
$app_list_strings['date_time_period_list']['this_week'] = 'Bu Hafta';
$app_list_strings['date_time_period_list']['last_week'] = 'Geçen Hafta';
$app_list_strings['date_time_period_list']['last_month'] = 'Geçen Ay';
$app_list_strings['date_time_period_list']['this_month'] = 'Bu Ay';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Bu Çeyrek';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Geçen Çeyrek';
$app_list_strings['date_time_period_list']['this_year'] = 'Bu yıl';
$app_list_strings['date_time_period_list']['last_year'] = 'Önceki yıl';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'şu günde';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'şu günde';
$app_strings['LBL_CRON_AT'] = 'şu zamanda';
$app_strings['LBL_CRON_RAW'] = 'Gelişmiş';
$app_strings['LBL_CRON_MIN'] = 'Dak';
$app_strings['LBL_CRON_HOUR'] = 'Saat';
$app_strings['LBL_CRON_DAY'] = 'Gün';
$app_strings['LBL_CRON_MONTH'] = 'Ay';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Günlük';
$app_strings['LBL_CRON_WEEKLY'] = 'Haftalık';
$app_strings['LBL_CRON_MONTHLY'] = 'Aylık';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Sözleşmeler';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Faturalar';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Kalıplar';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Ürünler - Kategoriler';
$app_list_strings['moduleList']['AOS_Products'] = 'Ürünler';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Satır Ögeleri';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Satır Ögesi Grupları';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Teklifler';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Rakip';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Müşteri';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Birleştirici';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Yatırımcı';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'İş Ortağı';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Basın';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Aday';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Bayi';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Diğer';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Taslak';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Pazarlık';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Teslim Edildi';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Beklemede';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Onaylandı';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Kapandı Onaylandı';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Kapandı Kaybedildi';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Kapandı İptal Oldu';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Onaylanmış';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Onaylanmamış';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '%0';
$app_list_strings['vat_list']['5.0'] = '%5';
$app_list_strings['vat_list']['7.5'] = '%7.5';
$app_list_strings['vat_list']['17.5'] = '%17.5';
$app_list_strings['vat_list']['20.0'] = '%20';
$app_list_strings['discount_list']['Percentage'] = 'Oran';
$app_list_strings['discount_list']['Amount'] = 'Tutar';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Rakip';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Müşteri';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Birleştirici';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Yatırımcı';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'İş Ortağı';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Basın';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Aday';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Bayi';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Diğer';
$app_list_strings['invoice_status_dom']['Paid'] = 'Ödenmiş';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Ödenmemiş';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'İptal edildi';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Faturalanmamış';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Faturalanmış';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Taşınabilir';
$app_list_strings['product_category_dom']['Desktops'] = 'Masaüstü';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Mal';
$app_list_strings['product_type_dom']['Service'] = 'Hizmet';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Teklifler';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Faturalar';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Sözleşmeler';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Teklifler';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Faturalar';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Sözleşmeler';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Hesaplar';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'İlgili Kişiler';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potansiyeller';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Başlatılmadı';
$app_list_strings['contract_status_list']['In Progress'] = 'Sürüyor';
$app_list_strings['contract_status_list']['Signed'] = 'İmzalanmış';
$app_list_strings['contract_type_list']['Type'] = 'Tür';
$app_strings['LBL_PRINT_AS_PDF'] = 'PDF Olarak Yazdır';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Lütfen bir Kalıp Seçin';
$app_strings['LBL_NO_TEMPLATE'] = 'HATA\nHerhangi bir kalıp bulunamadı.\nLütfen PDF kalıpları modülüne giderek bir kalıp ekleyin';

//aow PR 5775
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'İş Akışı';
$app_list_strings['moduleList']['AOW_Conditions'] = 'İş Akışı Koşulları';
$app_list_strings['moduleList']['AOW_Processed'] = 'Süreç Denetimi';
$app_list_strings['moduleList']['AOW_Actions'] = 'İş Akışı İşlemleri';
$app_list_strings['aow_status_list']['Active'] = 'Etkin';
$app_list_strings['aow_status_list']['Inactive'] = 'Devre Dışı';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Şuna Eşit Olan';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Şuna Eşit Olmayan';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Şundan Büyük Olan';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Şundan Küçük Olan';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Şuna Eşit ya da Büyük Olan';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Şuna Eşit ya da Küçük Olan';
$app_list_strings['aow_operator_list']['Contains'] = 'Şunu İçeren';
$app_list_strings['aow_operator_list']['Not_Contains'] = 'Şunu İçermeyen';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Şununla Başlayan';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Şununla Biten';
$app_list_strings['aow_operator_list']['is_null'] = 'Boş Olan';
$app_list_strings['aow_operator_list']['is_not_null'] = 'Null Olmayan';
$app_list_strings['aow_operator_list']['Anniversary'] = 'Yıl Dönümü';
$app_list_strings['aow_process_status_list']['Complete'] = 'Tamamlandı';
$app_list_strings['aow_process_status_list']['Running'] = 'Çalışıyor';
$app_list_strings['aow_process_status_list']['Pending'] = 'Bekliyor';
$app_list_strings['aow_process_status_list']['Failed'] = 'Tamamlanamadı';
$app_list_strings['aow_condition_operator_list']['And'] = 'Ve';
$app_list_strings['aow_condition_operator_list']['OR'] = 'YA DA';
$app_list_strings['aow_condition_type_list']['Value'] = 'Değer';
$app_list_strings['aow_condition_type_list']['Field'] = 'Alan';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Herhangi Bir Değişiklik';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Güvenlik Grubunda';
$app_list_strings['aow_condition_type_list']['Date'] = 'Tarih';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Şunlardan biri';
$app_list_strings['aow_action_type_list']['Value'] = 'Değer';
$app_list_strings['aow_action_type_list']['Field'] = 'Alan';
$app_list_strings['aow_action_type_list']['Date'] = 'Tarih';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Sırayla';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'En Az Meşgul';
$app_list_strings['aow_action_type_list']['Random'] = 'Rastgele';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Değer';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Alan';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Dakika';
$app_list_strings['aow_date_type_list']['hour'] = 'Saat';
$app_list_strings['aow_date_type_list']['day'] = 'Gün';
$app_list_strings['aow_date_type_list']['week'] = 'Hafta';
$app_list_strings['aow_date_type_list']['month'] = 'Ay';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Çalışma Saatleri';
$app_list_strings['aow_date_options']['now'] = 'Şimdi';
$app_list_strings['aow_date_options']['today'] = 'Bugün';
$app_list_strings['aow_date_options']['field'] = 'Bu Alan';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TÜM Kullanıcılar';
$app_list_strings['aow_assign_options']['role'] = 'Bu Roldeki TÜM Kullanıcılar';
$app_list_strings['aow_assign_options']['security_group'] = 'Bu Güvenlik Grubundaki TÜM Kullanıcılar';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-posta';
$app_list_strings['aow_email_type_list']['Record Email'] = 'E-posta Kaydı';
$app_list_strings['aow_email_type_list']['Related Field'] = 'İlgili Alan';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Kullanıcı';
$app_list_strings['aow_email_type_list']['Users'] = 'Kullanıcılar';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Alan';
$app_list_strings['aow_email_to_list']['to'] = 'Kime';
$app_list_strings['aow_email_to_list']['cc'] = 'Bilgi';
$app_list_strings['aow_email_to_list']['bcc'] = 'Gizli Kopya';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tüm Kayıtlar';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Yeni Kayıtlar';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Değiştirilmiş Kayıtlar';
$app_list_strings['aow_run_when_list']['Always'] = 'Her Zaman';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Yalnız Kaydedilirken';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Yalnız Zamanlanmış Görevde';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projeler - Kalıplar';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Proje Görev Kalıpları';
$app_list_strings['relationship_type_list']['FS'] = 'Bitişten Başlangıca';
$app_list_strings['relationship_type_list']['SS'] = 'Başlangıçtan Başlangıca';
$app_list_strings['duration_unit_dom']['Days'] = 'Gün';
$app_list_strings['duration_unit_dom']['Hours'] = 'Saat';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Gantt Görünümü';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Ayrıntıları Görüntüle';
$app_strings['LBL_CREATE_PROJECT'] = 'Proje Ekle';

//gmaps
$app_strings['LBL_MAP'] = 'Harita';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Boylam';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Enlem';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Coğrafi Kod Durumu';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adres';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Haritalar';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Haritalar - işaretler';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Haritalar - Bölgeler';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Haritalar - Adres Ön Belleği';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP İş Ortakları';

$app_list_strings['map_unit_type_list']['mi'] = 'Mil';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometre';

$app_list_strings['map_module_type_list']['Accounts'] = 'Hesaplar';
$app_list_strings['map_module_type_list']['Contacts'] = 'İlgili Kişiler';
$app_list_strings['map_module_type_list']['Cases'] = 'Destek Kayıtları';
$app_list_strings['map_module_type_list']['Leads'] = 'Potansiyeller';
$app_list_strings['map_module_type_list']['Meetings'] = 'Toplantılar';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Fırsatlar';
$app_list_strings['map_module_type_list']['Project'] = 'Projeler';
$app_list_strings['map_module_type_list']['Prospects'] = 'Hedefler';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Hesap';
$app_list_strings['map_relate_type_list']['Contacts'] = 'İlgili';
$app_list_strings['map_relate_type_list']['Cases'] = 'Destek Kaydı';
$app_list_strings['map_relate_type_list']['Leads'] = 'Potansiyel';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Toplantı';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Fırsat';
$app_list_strings['map_relate_type_list']['Project'] = 'Proje';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Hedef';

$app_list_strings['marker_image_list']['accident'] = 'Kaza';
$app_list_strings['marker_image_list']['administration'] = 'Yönetim';
$app_list_strings['marker_image_list']['agriculture'] = 'Tarım';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Küçük Hava Taşımacılığı';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Uçak Turizmi';
$app_list_strings['marker_image_list']['airport'] = 'Havaalanı';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfi Tiyatro';
$app_list_strings['marker_image_list']['apartment'] = 'Daire';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvaryum';
$app_list_strings['marker_image_list']['arch'] = 'Kemer';
$app_list_strings['marker_image_list']['atm'] = 'ATM';
$app_list_strings['marker_image_list']['audio'] = 'Ses';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banka Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banka Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Kumsal';
$app_list_strings['marker_image_list']['beautiful'] = 'Güzel';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bisiklet Park Yeri';
$app_list_strings['marker_image_list']['big_city'] = 'Büyük Şehir';
$app_list_strings['marker_image_list']['bridge'] = 'Köprü';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Modern Köprü';
$app_list_strings['marker_image_list']['bus'] = 'Otobüs';
$app_list_strings['marker_image_list']['cable_car'] = 'Teleferik';
$app_list_strings['marker_image_list']['car'] = 'Araç';
$app_list_strings['marker_image_list']['car_rental'] = 'Araç Kiralama';
$app_list_strings['marker_image_list']['carrepair'] = 'Araç Onarımı';
$app_list_strings['marker_image_list']['castle'] = 'Kale';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedral';
$app_list_strings['marker_image_list']['chapel'] = 'Şapel';
$app_list_strings['marker_image_list']['church'] = 'Kilise';
$app_list_strings['marker_image_list']['city_square'] = 'Kent Meydanı';
$app_list_strings['marker_image_list']['cluster'] = 'Küme';
$app_list_strings['marker_image_list']['cluster_2'] = 'Küme 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Küme 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Küme 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Küme 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kahve';
$app_list_strings['marker_image_list']['community_centre'] = 'Topluluk Merkezi';
$app_list_strings['marker_image_list']['company'] = 'Kuruluş';
$app_list_strings['marker_image_list']['conference'] = 'Konferans';
$app_list_strings['marker_image_list']['construction'] = 'İnşaat';
$app_list_strings['marker_image_list']['convenience'] = 'Kamusal';
$app_list_strings['marker_image_list']['court'] = 'Mahkeme';
$app_list_strings['marker_image_list']['cruise'] = 'Gemi Yolculuğu';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Döviz Bürosu';
$app_list_strings['marker_image_list']['customs'] = 'Gümrük';
$app_list_strings['marker_image_list']['cycling'] = 'Bisiklet';
$app_list_strings['marker_image_list']['dam'] = 'Baraj';
$app_list_strings['marker_image_list']['dentist'] = 'Diş Hekimi';
$app_list_strings['marker_image_list']['deptartment_store'] = 'AVM';
$app_list_strings['marker_image_list']['disability'] = 'Engelli';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Engelli Park Yeri';
$app_list_strings['marker_image_list']['doctor'] = 'Doktor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Köpek Tasması';
$app_list_strings['marker_image_list']['down'] = 'Aşağı';
$app_list_strings['marker_image_list']['down_left'] = 'Aşağı Sola';
$app_list_strings['marker_image_list']['down_right'] = 'Aşağı Sağa';
$app_list_strings['marker_image_list']['down_then_left'] = 'Aşağı Sonra Sola';
$app_list_strings['marker_image_list']['down_then_right'] = 'Aşağı Sonra Sağa';
$app_list_strings['marker_image_list']['drugs'] = 'Eczane';
$app_list_strings['marker_image_list']['elevator'] = 'Asansör';
$app_list_strings['marker_image_list']['embassy'] = 'Büyükelçilik';
$app_list_strings['marker_image_list']['expert'] = 'Uzman';
$app_list_strings['marker_image_list']['factory'] = 'Fabrika';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Taş Düşebilir';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fiyord';
$app_list_strings['marker_image_list']['forest'] = 'Orman';
$app_list_strings['marker_image_list']['fountain'] = 'Kaynak';
$app_list_strings['marker_image_list']['friday'] = 'Cuma';
$app_list_strings['marker_image_list']['garden'] = 'Bahçe';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzin İstasyonu';
$app_list_strings['marker_image_list']['geyser'] = 'Gayzer';
$app_list_strings['marker_image_list']['gifts'] = 'Hediyelik';
$app_list_strings['marker_image_list']['gourmet'] = 'Gurme';
$app_list_strings['marker_image_list']['grocery'] = 'Bakkal';
$app_list_strings['marker_image_list']['hairsalon'] = 'Kuaför';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Otoyol';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Tarihi Meydan';
$app_list_strings['marker_image_list']['home'] = 'Ana Sayfa';
$app_list_strings['marker_image_list']['hospital'] = 'Hastane';
$app_list_strings['marker_image_list']['hostel'] = 'Konuk Evi';
$app_list_strings['marker_image_list']['hotel'] = 'Otel';
$app_list_strings['marker_image_list']['hotel_1_star'] = '1 Yıldızlı Otel';
$app_list_strings['marker_image_list']['hotel_2_stars'] = '2 Yıldızlı Otel';
$app_list_strings['marker_image_list']['hotel_3_stars'] = '3 Yıldızlı Otel';
$app_list_strings['marker_image_list']['hotel_4_stars'] = '4 Yıldızlı Otel';
$app_list_strings['marker_image_list']['hotel_5_stars'] = '5 Yıldızlı Otel';
$app_list_strings['marker_image_list']['info'] = 'Bilgiler';
$app_list_strings['marker_image_list']['justice'] = 'Adalet';
$app_list_strings['marker_image_list']['lake'] = 'Göl';
$app_list_strings['marker_image_list']['laundromat'] = 'Çamaşırhane';
$app_list_strings['marker_image_list']['left'] = 'Sol';
$app_list_strings['marker_image_list']['left_then_down'] = 'Sola Sonra Aşağıya';
$app_list_strings['marker_image_list']['left_then_up'] = 'Sola Sonra Yukarı';
$app_list_strings['marker_image_list']['library'] = 'Kitaplık';
$app_list_strings['marker_image_list']['lighthouse'] = 'Deniz Feneri';
$app_list_strings['marker_image_list']['liquor'] = 'Alkollü İçki';
$app_list_strings['marker_image_list']['lock'] = 'Kilitle';
$app_list_strings['marker_image_list']['main_road'] = 'Ana Yol';
$app_list_strings['marker_image_list']['massage'] = 'Masaj';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Gezici Telefon Kulesi';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Kule';
$app_list_strings['marker_image_list']['monastery'] = 'Manastır';
$app_list_strings['marker_image_list']['monday'] = 'Pazartesi';
$app_list_strings['marker_image_list']['monument'] = 'Anıt';
$app_list_strings['marker_image_list']['mosque'] = 'Camii';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorsiklet';
$app_list_strings['marker_image_list']['museum'] = 'Müze';
$app_list_strings['marker_image_list']['music_live'] = 'Canlı Müzik';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Yakıt Pompası';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Saray';
$app_list_strings['marker_image_list']['panoramic'] = 'Manzara';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parkedip Yürü';
$app_list_strings['marker_image_list']['parking'] = 'Otopark';
$app_list_strings['marker_image_list']['photo'] = 'Fotoğraf';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Ziyaret Edilmemiş Yerler';
$app_list_strings['marker_image_list']['places_visited'] = 'Ziyaret Edilmiş Yerler';
$app_list_strings['marker_image_list']['playground'] = 'Oyun Parkı';
$app_list_strings['marker_image_list']['police'] = 'Polis';
$app_list_strings['marker_image_list']['port'] = 'Liman';
$app_list_strings['marker_image_list']['postal'] = 'Postane';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Enerji Hattı Direği';
$app_list_strings['marker_image_list']['power_plant'] = 'Enerji Santrali';
$app_list_strings['marker_image_list']['power_substation'] = 'Enerji Trafo Merkezi';
$app_list_strings['marker_image_list']['public_art'] = 'Herkese Açık Sanat';
$app_list_strings['marker_image_list']['rain'] = 'Yağmur';
$app_list_strings['marker_image_list']['real_estate'] = 'Emlak';
$app_list_strings['marker_image_list']['regroup'] = 'Yeniden Grupla';
$app_list_strings['marker_image_list']['resort'] = 'Dinlenme Yeri';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoran';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restoran Afrika';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restoran Mangal';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restoran Açık Büfe';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restoran Çin';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restoran Balık';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Balık ve Cips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restoran Gurme';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restoran Yunan';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restoran Hint';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restoran İtalyan';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restoran Japon';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restoran Kebap';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restoran Kore';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restoran Akdeniz';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restoran Meksika';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restoran Romantik';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restoran Tayland';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restoran Türk';
$app_list_strings['marker_image_list']['right'] = 'Sağ';
$app_list_strings['marker_image_list']['right_then_down'] = 'Sağa Sonra Aşağıya';
$app_list_strings['marker_image_list']['right_then_up'] = 'Sağa Sonra Yukarıya';
$app_list_strings['marker_image_list']['saturday'] = 'Cumartesi';
$app_list_strings['marker_image_list']['school'] = 'Okul';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Alışveriş Merkezi';
$app_list_strings['marker_image_list']['shore'] = 'Sahil';
$app_list_strings['marker_image_list']['sight'] = 'Manzara';
$app_list_strings['marker_image_list']['small_city'] = 'Küçük Şehir';
$app_list_strings['marker_image_list']['snow'] = 'Kar';
$app_list_strings['marker_image_list']['spaceport'] = 'Uzaylimanı';
$app_list_strings['marker_image_list']['speed_100'] = 'Hız 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Hız 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Hız 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Hız 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Hız 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Hız 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Hız 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Hız 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Hız 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Hız 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Hız 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Hız 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Hız Tümseği';
$app_list_strings['marker_image_list']['stadium'] = 'Stadyum';
$app_list_strings['marker_image_list']['statue'] = 'Heykel';
$app_list_strings['marker_image_list']['steam_train'] = 'Buharlı Tren';
$app_list_strings['marker_image_list']['stop'] = 'Dur';
$app_list_strings['marker_image_list']['stoplight'] = 'Trafik Işığı';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Paz';
$app_list_strings['marker_image_list']['sunday'] = 'Pazar';
$app_list_strings['marker_image_list']['supermarket'] = 'Süpermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagog';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taksi Yolu';
$app_list_strings['marker_image_list']['teahouse'] = 'Çay Evi';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu Tapınağı';
$app_list_strings['marker_image_list']['terrace'] = 'Teras';
$app_list_strings['marker_image_list']['text'] = 'Metin';
$app_list_strings['marker_image_list']['theater'] = 'Tiyatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Tema Parkı';
$app_list_strings['marker_image_list']['thursday'] = 'Perşembe';
$app_list_strings['marker_image_list']['toilets'] = 'Tuvaletler';
$app_list_strings['marker_image_list']['toll_station'] = 'Ödeme Gişesi';
$app_list_strings['marker_image_list']['tower'] = 'Kule';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Trafik Kamerası';
$app_list_strings['marker_image_list']['train'] = 'Tren';
$app_list_strings['marker_image_list']['tram'] = 'Tramvay';
$app_list_strings['marker_image_list']['truck'] = 'Kamyon';
$app_list_strings['marker_image_list']['tuesday'] = 'Salı';
$app_list_strings['marker_image_list']['tunnel'] = 'Tünel';
$app_list_strings['marker_image_list']['turn_left'] = 'Sola Dön';
$app_list_strings['marker_image_list']['turn_right'] = 'Sağa Dön';
$app_list_strings['marker_image_list']['university'] = 'Üniversite';
$app_list_strings['marker_image_list']['up'] = 'Yukarı';
$app_list_strings['marker_image_list']['up_left'] = 'Yukarı Sola';
$app_list_strings['marker_image_list']['up_right'] = 'Yukarı Sağa';
$app_list_strings['marker_image_list']['up_then_left'] = 'Yukarı Sonra Sola';
$app_list_strings['marker_image_list']['up_then_right'] = 'Yukarı Sonra Sağa';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Görüntü';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Su';
$app_list_strings['marker_image_list']['waterfall'] = 'Şelale';
$app_list_strings['marker_image_list']['watermill'] = 'Su Değirmeni';
$app_list_strings['marker_image_list']['waterpark'] = 'Su Parkı';
$app_list_strings['marker_image_list']['watertower'] = 'Su Kulesi';
$app_list_strings['marker_image_list']['wednesday'] = 'Çarşamba';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Rüzgar Türbini';
$app_list_strings['marker_image_list']['windmill'] = 'Yel Değirmeni';
$app_list_strings['marker_image_list']['winery'] = 'Şarapcı';
$app_list_strings['marker_image_list']['work_office'] = 'İş Yeri';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Dünya Mirası';
$app_list_strings['marker_image_list']['zoo'] = 'Hayvanat Bahçesi';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Ofis Dışında';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Toplantıda';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Yeniden Zamanla';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Lütfen yeni zamanlama bilgilerini yazın';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Tarih:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Neden:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Lütfen geçerli bir tarih seçin';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Lütfen bir neden seçin';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Yeniden Zamanla';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Telefon araması girişimi geçmişi';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Telefon Araması Girişimleri';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Güvenlik Paketi Yönetimi';
$app_strings['LBL_SECURITYGROUP'] = 'Güvenlik Grubu';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Giden E-posta Hesapları';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Sosyal Ağ Akışı Ayrıntıları';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Süzgeç';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tür';

$app_strings['LBL_ADD_TAB'] = 'Sekme Ekle';
$app_strings['LBL_EDIT_TAB'] = 'Sekmeleri Düzenle';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRM Panosu'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Pano Adını Yazın:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Sütun Sayısı:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Panoyu';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'silmek istediğinize emin misiniz?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Pano Sayfası Ekle';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Geçerli Pano Sayfasını Sil';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Pano Sayfasını Yeniden Adlandır';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'İşlemler'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Görevler',
    'Meetings' => 'Toplantılar',
    'Calls' => 'Telefon Aramaları',
    'Notes' => 'Notlar',
    'Emails' => 'E-postalar'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Kalıp Parçası Düzenleyici';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Kaydetmeden, düzenlediğiniz alandan farklı bir alana tıkladınız. Değişiklikleri kaydetmek sorun olmayacak ise Tamam, düzenlemeye devam etmek için İptal üzerine tıklayın";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Alanı yüklenirken bir sorun çıktı. Oturum zaman aşımına uğramış olabilir. Bu durumu düzeltmek için yeniden oturum açın";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Satışlar',
    'getAccountsSpotsData' => 'Hesaplar',
    'getLeadsSpotsData' => 'Potansiyeller',
    'getServiceSpotsData' => 'Hizmet',
    'getMarketingSpotsData' => 'Pazarlama',
    'getMarketingActivitySpotsData' => 'Pazarlama İşlemleri',
    'getActivitiesSpotsData' => 'İşlemler',
    'getQuotesSpotsData' => 'Teklifler'
);

$app_list_strings['moduleList']['Spots'] = 'Spotlar';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Çalışma Saatleri';
$app_list_strings['business_hours_list']['0'] = '12 am';
$app_list_strings['business_hours_list']['1'] = '1 am';
$app_list_strings['business_hours_list']['2'] = '2 am';
$app_list_strings['business_hours_list']['3'] = '3 am';
$app_list_strings['business_hours_list']['4'] = '4 am';
$app_list_strings['business_hours_list']['5'] = '5 am';
$app_list_strings['business_hours_list']['6'] = '6 am';
$app_list_strings['business_hours_list']['7'] = '7 am';
$app_list_strings['business_hours_list']['8'] = '8 am';
$app_list_strings['business_hours_list']['9'] = '9 am';
$app_list_strings['business_hours_list']['10'] = '10 am';
$app_list_strings['business_hours_list']['11'] = '11 am';
$app_list_strings['business_hours_list']['12'] = '12 pm';
$app_list_strings['business_hours_list']['13'] = '1 pm';
$app_list_strings['business_hours_list']['14'] = '2 pm';
$app_list_strings['business_hours_list']['15'] = '3 pm';
$app_list_strings['business_hours_list']['16'] = '4 pm';
$app_list_strings['business_hours_list']['17'] = '5 pm';
$app_list_strings['business_hours_list']['18'] = '6 pm';
$app_list_strings['business_hours_list']['19'] = '7 pm';
$app_list_strings['business_hours_list']['20'] = '8 pm';
$app_list_strings['business_hours_list']['21'] = '9 pm';
$app_list_strings['business_hours_list']['22'] = '10 pm';
$app_list_strings['business_hours_list']['23'] = '11 pm';
$app_list_strings['day_list']['Monday'] = 'Pazartesi';
$app_list_strings['day_list']['Tuesday'] = 'Salı';
$app_list_strings['day_list']['Wednesday'] = 'Çarşamba';
$app_list_strings['day_list']['Thursday'] = 'Perşembe';
$app_list_strings['day_list']['Friday'] = 'Cuma';
$app_list_strings['day_list']['Saturday'] = 'Cumartesi';
$app_list_strings['day_list']['Sunday'] = 'Pazar';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Mektup';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Dikey';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Yatay';
$app_list_strings['run_when_dom']['When True'] = 'Kaydederken Değerlendir'; // PR 6143
$app_list_strings['run_when_dom']['Once True'] = 'Süresiz - (Alan denetlenmelidir)';
$app_list_strings['sa_status_list']['Complete'] = 'Tamamlandı';
$app_list_strings['sa_status_list']['In_Review'] = 'İnceleniyor';
$app_list_strings['sa_status_list']['Issue_Resolution'] = 'Sorun Çözümü';
$app_list_strings['sa_status_list']['Pending_Apttus_Submission'] = 'Bekleyen Apttus Gönderimi';
$app_list_strings['sharedGroupRule']['none'] = 'Erişim İzni Yok';
$app_list_strings['sharedGroupRule']['view'] = 'Yalnız Görüntüleme';
$app_list_strings['sharedGroupRule']['view_edit'] = 'Görüntüleme ve Düzenleme';
$app_list_strings['sharedGroupRule']['view_edit_delete'] = 'Görüntüleme, Düzenleme ve Silme';
$app_list_strings['moduleList']['SharedSecurityRulesFields'] = 'Paylaşılan Güvenlik Kuralları Alanları';
$app_list_strings['moduleList']['SharedSecurityRules'] = 'Paylaşılan Güvenlik Kuralları';
$app_list_strings['moduleList']['SharedSecurityRulesActions'] = 'Paylaşılan Güvenlik Kuralları İşlemleri';
$app_list_strings['shared_email_type_list'][''] = '';
$app_list_strings['shared_email_type_list']['Specify User'] = 'Kullanıcı';
$app_list_strings['shared_email_type_list']['Users'] = 'Kullanıcılar';
$app_list_strings['aow_condition_type_list']['Value'] = 'Değer';
$app_list_strings['aow_condition_type_list']['Field'] = 'Alan';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Herhangi Bir Değişiklik';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Güvenlik Grubunda';
$app_list_strings['aow_condition_type_list']['currentUser'] = 'Oturum Açmış Kullanıcı';
$app_list_strings['aow_condition_type_list']['Date'] = 'Tarih';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Şunlardan biri';


$app_list_strings['moduleList']['SurveyResponses'] = 'Anket Yanıtları';
$app_list_strings['moduleList']['Surveys'] = 'Anketler';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Anket Soru Yanıtları';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Anket Soruları';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Anket Soru Seçenekleri';
$app_list_strings['survey_status_list']['Draft'] = 'Taslak';
$app_list_strings['survey_status_list']['Public'] = 'Herkese Açık';
$app_list_strings['survey_status_list']['Closed'] = 'Kapalı';
$app_list_strings['surveys_question_type']['Text'] = 'Metin';
$app_list_strings['surveys_question_type']['Textbox'] = 'Metin Kutusu';
$app_list_strings['surveys_question_type']['Checkbox'] = 'İşaret Kutusu';
$app_list_strings['surveys_question_type']['Radio'] = 'Radyo Düğmesi';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Açılan Liste';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Çoklu Seçim';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matris';
$app_list_strings['surveys_question_type']['DateTime'] = 'TarihSaat';
$app_list_strings['surveys_question_type']['Date'] = 'Tarih';
$app_list_strings['surveys_question_type']['Scale'] = 'Ölçek';
$app_list_strings['surveys_question_type']['Rating'] = 'Değerlendirme';
$app_list_strings['surveys_matrix_options'][0] = 'Memnun';
$app_list_strings['surveys_matrix_options'][1] = 'Ne Memnun Ne Değil';
$app_list_strings['surveys_matrix_options'][2] = 'Memnun Değil';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Abone olma onayı bekleyen, Abone olma onayı gönderilmemiş';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Abone olma onayı e-postası gönderilemedi';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Abone olma onayı bekleyen, Abone olma onayı gönderilmiş';
$app_strings['LBL_OPT_IN'] = 'Abone olmuş';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Abone Olma Onaylandı';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Abonelikten Çıkan';
$app_strings['LBL_OPT_IN_INVALID'] = 'Geçersiz';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Devre dışı',
    'opt-in' => 'Abone Ol',
    'confirmed-opt-in' => 'Abone Olma Onaylandı'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Abone Olmamış',
    'opt-in' => 'Abone Ol',
    'confirmed-opt-in' => 'Abone Olma Onaylandı'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = '%s e-posta adresi için abone olma onayı e-postası kuyruğa eklendi. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = '%s e-posta adresine abone olmadıkları için e-posta gönderilemedi. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s e-posta adresinin geçerli bir kodu yok. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'İki Aşamalı Kimlik Doğrulaması yapılamadı';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'İki Aşamalı Kimlik Doğrulaması kodu gönderildi.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'İki aşamalı kimlik doğrulaması kodu gönderilemedi.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'İlginizi gönderdiğiniz için teşekkürler.';

$app_strings['ERR_IP_CHANGE'] = 'Oturumunuz IP adresinizdeki önemli bir değişiklik nedeniyle sonlandırıldı';
$app_strings['ERR_RETURN'] = 'Ana Sayfaya Dön';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Parola İzni',
    'client_credentials' => 'İstemci Kimlik Doğrulama Bilgileri',
    'implicit' => 'Gizli',
    'authorization_code' => 'Kimlik Doğrulama Kodu'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'dakika',
    'hour' => 'saat',
    'day' => 'gün',
    'week' => 'hafta',
    'month' => 'ay',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Arama (yeni)',
    'UnifiedSearch' => 'Genel Birleşik Arama (eski)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API Sorunu';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API sorunu çıktı.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'API sürümü: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Lütfen zorunlu alanları doldurduğunuza emin olun';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'JSON API isteğinin gövdesi JSON biçiminde olmalıdır';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Json API Yükleme İsteği doğrulanamadı';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Json API yükleme yanıtı doğrulanamadı';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API kaynağı bulunamadı';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API "Accept" üst bilgisi uygulama/vnd.api+json olmalıdır';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API "Content-Type" üst bilgisi uygulama/vnd.api+json olmalıdır';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Bu web tarayıcısı için masaüstü bildirimleri etkinleştirildi.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Bu web tarayıcısı için masaüstü bildirimleri devre dışı bırakıldı. Yeniden etkinleştirmek için tarayıcı ayarlarına bakabilirsiniz.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Bu web tarayıcısı masaüstü bildirimlerini desteklemiyor.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'SuiteCRM Google Eşitleme - HATA';
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Bir sorun çıktı: ';
$app_strings['LBL_CLICK_HERE'] = 'Buraya tıklayın';
$app_strings['LBL_TO_CONTINUE'] = ' devam edebilirsiniz.';

$app_strings['IMAP_HANDLER_ERROR'] = 'HATA: {error}; anahtar: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'TAMAM: Deneme ayarları "{key}" olarak değiştirildi';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'İstek geçersiz. "{var}" değerini kullanın.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Bilinmeyen bir sorun çıktı. "{key}" anahtarı kaydedilmedi.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Deneme ayarları bulunamadı.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Anahtar bulunamadı.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Anahtar kaydedilirken sorun çıktı.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Bilinmeyen bir sorun çıktı';
$app_strings['LBL_SEARCH_TITLE']                   = 'Arama';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Arama Ölçütünü Yazın';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Arama';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Arama';
$app_strings['LBL_SEARCH_QUERY']                   = 'Arama ifadesi: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Bir sayfadaki sonuç sayısı: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Yöntem: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Sonuç sayısı: ';
$app_strings['LBL_SEARCH_PREV'] = 'Önceki';
$app_strings['LBL_SEARCH_NEXT'] = 'Sonraki';
$app_strings['LBL_SEARCH_PAGE'] = 'Sayfa ';
$app_strings['LBL_SEARCH_OF'] = ' / '; // Usage: Page 1 of 5

$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'Seçtiğiniz bir rapor, erişim izniniz olmayan bir modülü hedefliyor. Lütfen erişme izniniz olan bir modülü hedefleyen bir rapor seçin.';
