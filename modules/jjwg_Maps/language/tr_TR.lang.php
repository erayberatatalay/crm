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

$mod_strings['LBL_MAP'] = 'Harita';
$mod_strings['LBL_MODULE_NAME'] = 'Haritalar';
$mod_strings['LBL_MODULE_TITLE'] = 'Haritalar: Ana sayfa';
$mod_strings['LBL_MODULE_ID'] = 'Haritalar';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Harita Listesi';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Özel İşaretleyici';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Özel Bölge';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Haritalarım Listesi';

$mod_strings['LBL_FLEX_RELATE'] = 'İlgili (Merkez):';
$mod_strings['LBL_MODULE_TYPE'] = 'Görüntülenecek Modül Türü:';
$mod_strings['LBL_DISTANCE'] = 'Uzaklık (Yarıçap):';
$mod_strings['LBL_UNIT_TYPE'] = 'Birim Türü:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Harita Görünümü';
$mod_strings['LBL_MAP_LEGEND'] = 'İşaretler:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Gruplar:';
$mod_strings['LBL_MAP_GROUP'] = 'Grup';
$mod_strings['LBL_MAP_TYPE'] = 'Türü';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Atanmış Kişi:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Yol Tarifi Alın';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Haritalar Görünümü';

$mod_strings['LNK_NEW_MAP'] = 'Yeni Harita Ekle';
$mod_strings['LNK_NEW_RECORD'] = 'Yeni Harita Ekle';
$mod_strings['LNK_MAP_LIST'] = 'Haritaları Listele';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Coğrafi Kodlama Sınaması';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Hızlı Yarıçap Haritası';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Yok';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adres';
$mod_strings['LBL_MAP_PROCESS'] = 'İşle!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Son Coğrafi Kod Durumu';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Modül Coğrafi Kodlama Sayısı';
$mod_strings['LBL_CRON_URL'] = 'Zamanlanmış Görev Adresi:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modül';

$mod_strings['LBL_N/A'] = 'Kullanılamaz';
$mod_strings['LBL_ZERO_RESULTS'] = 'Sonuç Bulunamadı';
$mod_strings['LBL_OK'] = 'Tamam';
$mod_strings['LBL_INVALID_REQUEST'] = 'İstek Geçersiz';
$mod_strings['LBL_APPROXIMATE'] = 'Yaklaşık';
$mod_strings['LBL_EMPTY'] = 'Boş';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Toplam';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Sıfırla';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Aşağıdaki tabloda coğrafi kodlama yanıtına göre gruplanmış olarak coğrafi kodlaması yapılmış modül nesnelerinin sayısı görüntülenir. Standart Google Haritalar için günlük kullanım sınırının günde 2500 istek olduğunu unutmayın. Bu modül istek sayısını azaltmak için işlenen coğrafi kodlama bilgilerini ön belleğe alır.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Coğrafi kodlama isteklerini işlemek için, her gece çalışacak bir zamanlanmış görev ayarlanması önerilir. Bu amaçla kimlik doğrulaması olmadan erişilebilecek özel bir giriş noktası oluşturulur. Aşağıda görüntülenen adres Zamanlanmış Bir Yönetici Görevi ile kullanılır. Ayrıntılı bilgi almak için belgelere bakabilirsiniz.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Adresleri Dışa Aktar';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Coğrafi kodlamaya gerek duyan tüm adresleri dışa aktarmak için aşağıdaki bağlantıları kullanın. Ardından çevrimiçi ya da çevrimdışı bir toplu coğrafi kodlama aracı kullanarak adreslerin coğrafi kodlamasını yapın. Coğrafi kodlama işlemini tamamladıktan sonra adresleri haritalarınızla kullanabilmek için Adres Ön Bellek modülünde içe aktarın. Adres Ön Bellek modülünün isteğe bağlı olarak kurulduğunu unutmayın. Tüm coğrafi kodlama bilgileri görüntüleyecek modülde tutulur.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Adres Ön Belleği';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Hedef Listesine Ekle';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'İşleniyor...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Yapılandırma Ayarları';
$mod_strings['LBL_CONFIG_SAVED'] = 'Ayarlar Kaydedildi!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Fatura Adresi';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Kargo Adresi';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Birincil Adres';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Diğer Adres';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Esnek İlişki';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adres (Basit, Kullanıcılar)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Özel (Özel Denetim Mantığı)';
$mod_strings['LBL_ENABLED'] = 'Etkin';
$mod_strings['LBL_DISABLED'] = 'Devre dışı';
$mod_strings['LBL_DEFAULT'] = 'Varsayılan:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Varsayılan:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Geçerli Coğrafi Kodlama Modülleri:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Geçerli Coğrafi Kodlama Tabloları:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Adres Türü Ayarları: Bu ayarlar, adreslerin coğrafi kodlanması sırasında kullanılacak modüllerin adres türlerini belirler. Şu değerler kullanılabilir: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Şunun İçin Adres Türü ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Hesapların Adres Türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Kişilerin Adres Türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Potansiyellerin Adres Türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Fırsatların Adres Türü:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(İlgili Hesabın)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Destek Kayıtlarının Adres Türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Projelerin Adres Türü:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(İlgili Hesabın/Fırsatın)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Görüşmelerin Adres Türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Adayların/Hedeflerin Adres Türü:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Esnek İlişki Alanı ile İlişkili Nesne';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "İşaretleyici Grubu Alan Ayarları: Bu seçenek, işaretleyicilerin haritada görüntülenmesi için grup parametresi olarak kullanılacak 'alanı' tanımlar. Örnekler: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Şunun Grup Alanı ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Hesapların Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Kişilerin Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Potansiyellerin Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Fırsatların Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Destek Kayıtlarının Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Projelerin Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Toplantıların Grup Alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Adayların/Hedeflerin Grup Alanı:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Coğrafi Kodlama/Google Ayarları:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Coğrafi Kodlama API Adresi:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google Haritalar API V3 ya da Vekil Sunucunun adresi';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Vekil Sunucu için Gizli İfade:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Vekil sunucunun MD5 karşılaştırmasında kullanılacak gizli ifade.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Coğrafi Kodlama Sınırı:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' seçeneği, coğrafi olarak kodlanacak kayıtların seçildiği sorgunun kayıt sayısını belirler.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google Coğrafi Kodlama Sınırı:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' seçeneği, Google Haritalar API uygulaması üzerinden yapılabilecek coğrafi kodlama isteği sayısı sınırını belirler.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Adres Dışa Aktarma Sınırı:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' seçeneği, dışa aktarılacak kayıtların seçildiği sorgunun kayıt sayısını belirler.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "'YAKLAŞIK' Konum Türleri Kullanılabilsin:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approxiamte_location_type' seçeneği - coğrafi kodlama sonuçlarında 'YAKLAŞIK' konum türlerinin 'OK' olarak kabul edilmesini sağlar.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Adres Ön Belleği Ayarları:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Adres Ön Belleği Kullanılsın (Alma):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' seçeneği, adres ön bellek modülünün ön bellek tablosundan veri almasını sağlar.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Adres Ön Belleğine Kayıt Yapılabilsin (Kaydet):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' seçeneği, adres ön bellek modülünün ön bellek tablosuna veri kaydetmesini sağlar.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Mantıksal Bağlantı Ayarı:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Tüm Mantıksal Bağlantılar Etkinleştirilsin: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' seçeneği, ilgili nesnelere dayalı otomatik güncellenen mantık bağlantıları yapılmasını sağlar. SuiteCRM kopyanızı güncellerken bu seçeneği devre dışı bırakmanız önerilir.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'İşaretleyici/Eşleştirme Ayarları:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Harita İşaretleyicileri Sayısı:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' seçeneği, bir haritada görüntülenecek işaretleyicileri seçen sorgunun kayıt sayısını belirler.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Varsayılan Harita Merkezi Enlemi:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' seçeneği, haritalar için varsayılan merkez enlem konumunu belirler.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Varsayılan Harita Merkezi Boylamı:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' seçeneği, haritalar için varsayılan merkez boylam konumunu belirler.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Varsayılan Harita Birim Türü:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' seçeneği, uzaklık hesaplamaları için varsayılan olarak kullanılacak ölçü birimi türünü belirler. Değerler: 'mi' (mil) ya da 'km' (kilometre).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Varsayılan Harita Uzaklığı:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' seçeneği, uzaklığa dayalı haritalar için varsayılan olarak kullanılacak uzaklığı belirler.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Harita Çift İşaretleyici Ayarı:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker' seçeneği, işaretçi konumunun çift olmasını engellemek için boylam ve enleme eklenecek bir kayma değeri belirler.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Harita İşaretleri Kümeleyici Izgara Boyutu:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' seçeneği, harita kümeleyicilerini hesaplamak için kullanılacak ızgara boyutunu belirler.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Harita İşaretleri Kümeleyici En Fazla Yakınlaştırma:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' seçeneği, hangi kümelemenin uygulanmayacağını ayarlayan en fazla yakınlaştırma düzeyini belirler.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Önemli Not: Kaydedilen tüm ayarlar 'config' tablosunda 'jjwg' kategorisi altında bulunabilir. Ayarları değiştirmek için artık özel bir controller.php dosyası kullanılmaması gerektiğini unutmayın.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Bölgeler';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'İşaretleyiciler';
$mod_strings['LBL_PARENT_ID'] = 'Üst Öge Kodu';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP İş Ortakları';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Bir Anahtar Edinin';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google API Anahtarı';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Lütfen Google Haritalar Yönetim Panosundaki Google API Anahtarını ayarlayın.';
