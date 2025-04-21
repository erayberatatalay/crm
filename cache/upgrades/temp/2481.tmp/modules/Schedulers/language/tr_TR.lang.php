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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'İş Akışı Görevlerini İşle',
    'LBL_OOTB_REPORTS' => 'Zamanlanmış Rapor Üretme Görevlerini Çalıştır',
    'LBL_OOTB_IE' => 'Gelen E-posta Kutularını Denetle',
    'LBL_OOTB_BOUNCE' => 'Gecelik Geri Dönen Kampanya E-postası İşleme Görevini Çalıştır',
    'LBL_OOTB_CAMPAIGN' => 'Gecelik Toplu E-posta Kampanyaları Görevini Çalıştır',
    'LBL_OOTB_PRUNE' => 'Ayın 1. Gününde Veritabanını Temizle',
    'LBL_OOTB_TRACKER' => 'İzleyici Tablolarını Temizle',
    'LBL_OOTB_SUITEFEEDS' => 'SuiteCRM Akış Tablolarını Temizle',
    'LBL_OOTB_LUCENE_INDEX' => 'Lucene Dizinini Oluştur',
    'LBL_OOTB_OPTIMISE_INDEX' => 'AOD Dizinini İyileştir',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-posta Anımsatıcı Bildirimlerini Çalıştır',
    'LBL_OOTB_CLEANUP_QUEUE' => 'İş Kuyruğunu Temizle',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Belgelerin dosya sisteminden kaldırılması',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Takvim Eşitleme',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Aralık:',
    'LBL_LIST_LIST_ORDER' => 'Zamanlanmış Görevler:',
    'LBL_LIST_NAME' => 'Zamanlanmış Görev:',
    'LBL_LIST_RANGE' => 'Aralık:',
    'LBL_LIST_STATUS' => 'Durum:',
    'LBL_LIST_TITLE' => 'Zamanlanmış Görev Listesi:',
// human readable:
    'LBL_SUN' => 'Pazar',
    'LBL_MON' => 'Pazartesi',
    'LBL_TUE' => 'Salı',
    'LBL_WED' => 'Çarşamba',
    'LBL_THU' => 'Perşembe',
    'LBL_FRI' => 'Cuma',
    'LBL_SAT' => 'Cumartesi',
    'LBL_ALL' => 'Her Gün',
    'LBL_EVERY' => 'Her',
    'LBL_FROM' => 'Başlangıç',
    'LBL_ON_THE' => 'Şu tarihte',
    'LBL_RANGE' => 'bitiş',
    'LBL_AND' => 've',
    'LBL_MINUTES' => 'dakika',
    'LBL_HOUR' => 'saat',
    'LBL_HOUR_SING' => 'saat',
    'LBL_OFTEN' => 'Olabildiğince sık.',
    'LBL_MIN_MARK' => 'dakika işareti',


// crontabs
    'LBL_MINS' => 'dak',
    'LBL_HOURS' => 'sa',
    'LBL_DAY_OF_MONTH' => 'tarih',
    'LBL_MONTHS' => 'ay',
    'LBL_DAY_OF_WEEK' => 'gün',
    'LBL_CRONTAB_EXAMPLES' => 'Yukarıda standart zamanlanmış görev gösterimi kullanılır.',
// Labels
    'LBL_ALWAYS' => 'Her Zaman',
    'LBL_CATCH_UP' => 'Atlanmış ise Çalıştır',
    'LBL_CATCH_UP_WARNING' => 'Bu iş bir saniyeden daha uzun sürecek ise işareti kaldırın.',
    'LBL_DATE_TIME_END' => 'Bitiş Tarihi ve Saati',
    'LBL_DATE_TIME_START' => 'Başlangıç Tarihi ve Saati',
    'LBL_INTERVAL' => 'Aralık',
    'LBL_JOB' => 'İş',
    'LBL_JOB_URL' => 'İş Adresi',
    'LBL_LAST_RUN' => 'Son Başarılı Çalışma',
    'LBL_MODULE_NAME' => 'SuiteCRM Zamanlanmış Görevler',
    'LBL_MODULE_TITLE' => 'Zamanlanmış Görevler',
    'LBL_NAME' => 'İş Adı',
    'LBL_NEVER' => 'Asla',
    'LBL_NEW_FORM_TITLE' => 'Yeni Zamanlama',
    'LBL_PERENNIAL' => 'sürekli',
    'LBL_SEARCH_FORM_TITLE' => 'Zamanlanmış Görev Arama',
    'LBL_SCHEDULER' => 'Zamanlanmış Görev:',
    'LBL_STATUS' => 'Durum',
    'LBL_TIME_FROM' => 'Etkinleştirme Başlangıcı',
    'LBL_TIME_TO' => 'Etkinleştirme Bitişi',
    'LBL_WARN_CURL_TITLE' => 'cURL Uyarısı:',
    'LBL_WARN_CURL' => 'Uyarı:',
    'LBL_WARN_NO_CURL' => 'Bu sistemdeki PHP modülünde cURL kitaplıkları etkinleştirilmemiş ya da derlenmemiş (--with-curl=/path/to/curl_library). Bu sorunun çözümü için sistem yöneticisi ile görüşün. Zamanlanmış görevler cURL işlevi olmadan çalıştırılamaz.',
    'LBL_BASIC_OPTIONS' => 'Temel Kurulum',
    'LBL_ADV_OPTIONS' => 'Gelişmiş Ayarlar',
    'LBL_TOGGLE_ADV' => 'Gelişmiş Ayarları Görüntüle',
    'LBL_TOGGLE_BASIC' => 'Temel Ayarları Görüntüle',
// Links
    'LNK_LIST_SCHEDULER' => 'Zamanlanmış Görevler',
    'LNK_NEW_SCHEDULER' => 'Zamanlanmış Görev Ekle',
// Messages
    'ERR_CRON_SYNTAX' => 'Zamanlanmım Görev Söz Dizimi Geçersiz',
    'NTC_LIST_ORDER' => 'Bu zamanlanmış Görevin, zamanlanmış görevler açılan kutusu listesinde görüntülenmesini istediğiniz sırayı belirtin',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Windows Zamanlanmış Görevi Kurmak İçin',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Zamanlanmış Görev Kurulumu İçin',
    'LBL_CRON_LINUX_DESC1' => 'SuiteCRM zamanlanmış görevlerini çalıştırmak için, şu komutu kullanarak web sunucunuzun kullanıcı crontab dosyasını düzenlemek üzere açın:',
    'LBL_CRON_LINUX_DESC2' => '... ve crontab dosyasına şu satırı ekleyin:',
    'LBL_CRON_LINUX_DESC3' => 'Bu işlemi yalnız kurulum tamamlandıktan sonra yapmalısınız.',
    'LBL_CRON_WINDOWS_DESC' => 'SuiteCRM zamanlanmış görevlerini çalıştırmak için Windows Zamanlanmış Görevlerini kullanarak çalıştırılacak bir toplu işlem dosyası oluşturun. Toplu işlem dosyasında şu komutlar bulunmalıdır:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'İş Günlüğü',
    'LBL_EXECUTE_TIME' => 'Çalıştırılma Zamanı',

//jobstrings
    'LBL_REFRESHJOBS' => 'İşleri Yenile',
    'LBL_POLLMONITOREDINBOXES' => 'Gelen E-posta Hesaplarını Denetle',
    'LBL_PERFORMFULLFTSINDEX' => 'Tam Metin Arama Dizin Sistemi',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Gecelik Toplu E-posta Kampanyalarını Çalıştır',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Gecelik Geri Dönen Kampanya E-postası İşleme Görevini Çalıştır',
    'LBL_PRUNEDATABASE' => 'Ayın 1. Gününde Veritabanını Temizle',
    'LBL_TRIMTRACKER' => 'İzleyici Tablolarını Temizle',
    'LBL_TRIMSUGARFEEDS' => 'SuiteCRM Akış Tablolarını Temizle',
    'LBL_SENDEMAILREMINDERS' => 'E-posta Anımsatıcılarını Gönder',
    'LBL_CLEANJOBQUEUE' => 'İş Kuyruğunu Temizle',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Belgelerin dosya sisteminden kaldırılması',

    'LBL_AODOPTIMISEINDEX' => 'Advanced OpenDiscovery Dizinini İyileştir',
    'LBL_AODINDEXUNINDEXED' => 'Dizine eklenmemiş belgeleri dizine ekle',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Anket İzleme Gelen Kutuları',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Zamanlanmış raporları çalıştır',
    'LBL_PROCESSAOW_WORKFLOW' => 'AOW İş Akışını İşle',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch dizin oluşturucu',

    'LBL_SCHEDULER_TIMES' => 'Zamanlanmış Görev Zamanları',
    'LBL_SYNCGOOGLECALENDAR' => 'Google Takvimlerini Eşitle',
);

global $sugar_config;
