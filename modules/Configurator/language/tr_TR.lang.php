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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Gelişmiş',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 para birimi kodu',
    'DEFAULT_CURRENCY_NAME' => 'Para birimi adı',
    'DEFAULT_CURRENCY_SYMBOL' => 'Para birimi simgesi',
    'DEFAULT_DATE_FORMAT' => 'Varsayılan tarih biçimi',
    'DEFAULT_DECIMAL_SEP' => 'Ondalık simgesi',
    'DEFAULT_LANGUAGE' => 'Varsayılan dil',
    'DEFAULT_SYSTEM_SETTINGS' => 'Kullanıcı Arayüzü',
    'DEFAULT_THEME' => 'Varsayılan tema',
    'DEFAULT_TIME_FORMAT' => 'Varsayılan saat biçimi',
    'DISPLAY_RESPONSE_TIME' => 'Sunucu yanıt verme zamanları görüntülensin',
    'IMAGES' => 'Logolar',
    'LBL_ALLOW_USER_TABS' => 'Kullanıcılar sekmeleri gizleyebilsin',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistem Ayarları',
    'LBL_LOGVIEW' => 'Günlüğü Görüntüle',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP kimlik doğrulaması kullanılsın',
    'LBL_MAIL_SMTPPASS' => 'SMTP Parolası:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Kapı Numarası:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı Adı:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Sunucu Özellikleri',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta hizmeti sağlayıcınızı seçin:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Parolası:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail Kullanıcı Adı:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Parolası:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Posta Adresi:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Parolası:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Kullanıcı Adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Sunucu Kapı Numarası:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Sunucusu:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Kullanıcılar giden e-postalar için bu hesabı kullanabilsin:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Bu seçenek etkinleştirildiğinde, tüm kullanıcılar sistem bildirim ve uyarılarını göndermek için kullanılan giden posta hesabını kullanarak e-posta gönderebilir. Devre dışı bırakıldığında, kullanıcıların giden posta sunucusunu kullanabilmesi için kendi hesap bilgilerini yazması gerekir.',
    'LBL_MAILMERGE' => 'Posta Birleştirme',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'En kısa pano bileşeni otomatik yenileme aralığı',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Kullanıcıların pano bileşenlerinin otomatik yenileme aralığı için seçebileceği en küçük değer. \'Asla\' olarak seçilirse pano bileşenlerinin otomatik yenilenmesi devre dışı bırakılır.',
    'LBL_MODULE_FAVICON' => 'Modül simgesi favicon olarak görüntülensin',
    'LBL_MODULE_FAVICON_HELP' => 'Simgesi bulunan bir modülü kullanırken, tarayıcı sekmesinde tema favicon görseli yerine modül faviconu görüntülenir.',
    'LBL_MODULE_NAME' => 'Sistem Ayarları',
    'LBL_MODULE_ID' => 'Yapılandırıcı',
    'LBL_MODULE_TITLE' => 'Kullanıcı Arayüzü',
    'LBL_NOTIFY_FROMADDRESS' => '"Kimden" Adresi:',
    'LBL_NOTIFY_SUBJECT' => 'E-Posta konusu:',
    'LBL_PROXY_AUTH' => 'Kimlik doğrulansın mı?',
    'LBL_PROXY_HOST' => 'Vekil Sunucu',
    'LBL_PROXY_ON_DESC' => 'Vekil sunucu adresini ve kimlik doğrulama ayarlarını yapılandırın',
    'LBL_PROXY_ON' => 'Vekil sunucu kullanılsın',
    'LBL_PROXY_PASSWORD' => 'Parola',
    'LBL_PROXY_PORT' => 'Kapı No',
    'LBL_PROXY_TITLE' => 'Vekil Sunucu Ayarları',
    'LBL_PROXY_USERNAME' => 'Kullanıcı Adı',
    'LBL_RESTORE_BUTTON_LABEL' => 'Geri Yükle',
    'LBL_SYSTEM_SETTINGS' => 'Sistem Ayarları',
    'LBL_USE_REAL_NAMES' => 'Ad ve soyad görüntülensin',
    'LBL_USE_REAL_NAMES_DESC' => 'Bu seçenek etkinleştirildiğinde, atama alanlarında Kullanıcı Adı yerine kullanıcıların ad ve soyadlarından oluşan tam adları görüntülenir.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Dönüştürülmüş potansiyeller için potansiyel dönüştürme işlemi yapılmasın',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Bu seçenek etkinleştirildiğinde, daha önce dönüştürülmüş potansiyeller için potansiyel dönüştürme işlemi yapılmaz.',
    'LBL_ENABLE_ACTION_MENU' => 'İşlemler menüler içinde görüntülensin',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Bu seçenek etkinleştirildiğinde, ayrıntı görünümü ve alt pano işlemleri bir açılan liste menüsünde görüntülenir. Devre dışı bırakıldığında işlemler ayrı düğmeler şeklinde görüntülenir.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Liste görünümünde satır içi düzenleme yapılabilsin',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Bu seçenek etkinleştirildiğinde, liste görünümündeki alanlarda satır içi düzenleme yapılabilir. Devre dışı bırakıldığında liste görünümünde satır içi düzenleme yapılamaz.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Ayrıntı görünümünde satır içi düzenleme yapılabilsin',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Bu seçenek etkinleştirildiğinde, ayrıntı görünümündeki alanlarda satır içi düzenleme yapılabilir. Devre dışı bırakıldığında ayrıntı görünümünde satır içi düzenleme yapılamaz.',
    'LBL_HIDE_SUBPANELS' => 'Alt panolar daraltılsın',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Bir sayfadaki liste görünümü ögesi sayısı',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Bir sayfadaki alt pano ögesi sayısı',
    'LOG_MEMORY_USAGE' => 'Bellek kullanımı günlüğe kaydedilsin',
    'LOG_SLOW_QUERIES' => 'Yavaş sorgular günlüğe kaydedilsin',
    'CURRENT_LOGO' => 'Geçerli logo:',
    'CURRENT_LOGO_HELP' => 'Bu logo SuiteCRM uygulaması oturum açma ekranının ortasında görüntülenir.',
    'NEW_LOGO' => 'Logo görseli seçin:',
    'NEW_LOGO_HELP' => 'Görsel dosyası .png ya da .jpg biçiminde olabilir. En fazla yükseklik 170 piksel, en fazla genişlik 450 piksel olmalıdır. Herhangi bir boyutu daha büyük olan görseller bu ölçülere göre yeniden boyutlandırılır.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Görsel dosyası .png ya da .jpg biçiminde olabilir. En fazla yükseklik 170 piksel, en fazla genişlik 450 piksel olmalıdır. Herhangi bir boyutu daha büyük olan görseller bu ölçülere göre yeniden boyutlandırılır.',
    'SLOW_QUERY_TIME_MSEC' => 'Yavaş sorgu zamanı eşiği (milisaniye)',
    'STACK_TRACE_ERRORS' => 'Hataların kümelendiği yerler görüntülensin',
    'UPLOAD_MAX_SIZE' => 'En büyük yükleme boyutu',
    'VERIFY_CLIENT_IP' => 'Kullanıcı IP adresi doğrulansın',
    'LOCK_HOMEPAGE' => 'Kullanıcılar ana sayfa görünümünü değiştiremesin',
    'LOCK_SUBPANELS' => 'Kullanıcılar alt pano görünümünü değiştiremesin',
    'MAX_DASHLETS' => 'Ana sayfadaki en fazla SuiteCRM pano bileşeni sayısı',
    'SYSTEM_NAME' => 'Sistem Adı:',
    'SYSTEM_NAME_WIZARD' => 'Ad:',
    'SYSTEM_NAME_HELP' => 'Web tarayıcısının başlık çubuğunda görüntülenecek ad.',
    'LBL_LDAP_TITLE' => 'LDAP Kimlik Doğrulama Desteği',
    'LBL_LDAP_ENABLE' => 'LDAP Kullanılsın',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Sunucu:',
    'LBL_LDAP_SERVER_PORT' => 'Kapı Numarası:',
    'LBL_LDAP_ADMIN_USER' => 'Kullanıcı Adı:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'LDAP kullanıcılarını aramak için kullanılır. Tam olarak belirtilmesi gerekebilir.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Parola:',
    'LBL_LDAP_AUTHENTICATION' => 'Kimlik Doğrulaması:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'LDAP sunucusuna bağlantı için kullanılacak kimlik doğrulama bilgileri. Kimlik doğrulama bilgileri yazılmaz ise bağlantı anonim olarak yapılır.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Kullanıcılar Otomatik Eklensin:',
    'LBL_LDAP_USER_DN' => 'Kullanıcı DN:',
    'LBL_LDAP_GROUP_DN' => 'Grup DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Örnek: <em>ou=groups, dc=websitem, dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Kullanıcı Süzgeci:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grup Üyeliği:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Kullanıcıların belirli bir gruba üye olması gereklidir',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Kullanıcı Özniteliği:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Bir kişinin grup üyesi olup olmadığını belirlemek için kullanılacak tekil belirteç. Örnek: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Kullanıcı Özniteliğine göre süzme için kullanılacak Grup özniteliği. Örnek: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Grup Özniteliği:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Kullanıcı kimliği doğrulanırken uygulanacak diğer ek süzgeç parametreleri. Örnek: <em>is_suitecrm_user=1 ya da (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Oturum Açma Özniteliği:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bağlama Özniteliği:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'LDAP Kullanıcısı Bağlama Örnekleri:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'LDAP Kullanıcısı Arama Örnekleri:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Örnek:<br>ldap://ldap.example.com:389 ya da<br>SSL için ldaps://ldap.example.com:636<br>Birden çok sunucuyu boşluk ile ayırarak yazabilirsiniz.',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Örnek:<em>389 ya da SSL kullanımı için 636</em>',
    'LBL_LDAP_GROUP_NAME' => 'Grup Adı:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Örnek <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Örnek: <em>ou=people, dc=websitem, dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Kimliği doğrulanan bir kullanıcının SuiteCRM üzerinde kaydı yoksa otomatik olarak eklenir.',
    'LBL_LDAP_ENC_KEY' => 'Şifreleme Anahtarı:',
    'DEVELOPER_MODE' => 'Geliştirici kipi',

    'SHOW_DOWNLOADS_TAB' => 'İndirmeler Sekmesi Görüntülensin',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Bu seçenek etkinleştirildiğinde, kullanıcı ayarları bölümünde kullanıcıların SuiteCRM uygulama ekleri ve kullanılabilecek diğer dosyalara erişebileceği indirmeler sekmesi görüntülenir',
    'LBL_LDAP_ENC_KEY_DESC' => 'LDAP kullanılırken SOAP kimlik doğrulaması için.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php.ini dosyasında php_mcrypt eklentisi etkinleştirilmiş olmalıdır.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'php.ini dosyasında OpenSSL eklentisi etkinleştirilmiş olmalıdır.',
    'LBL_ALL' => 'Tümü',
    'LBL_MARK_POINT' => 'İşaret Noktası',
    'LBL_NEXT_' => 'Sonraki>>',
    'LBL_REFRESH_FROM_MARK' => 'İşaretten Yenile',
    'LBL_SEARCH' => 'Arama:',
    'LBL_REG_EXP' => 'Kurallı İfade:',
    'LBL_IGNORE_SELF' => 'Kendini Yok Say:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Günlük Kayıtlarının Nereden Başlayacağı İşaretleniyor',
    'LBL_DISPLAYING_LOG' => 'Günlük Görüntüleniyor',
    'LBL_YOUR_PROCESS_ID' => 'İşlem Kodu',
    'LBL_YOUR_IP_ADDRESS' => 'IP adresiniz',
    'LBL_IT_WILL_BE_IGNORED' => 'yok sayılacak',
    'LBL_LOG_NOT_CHANGED' => 'Günlük değişmedi',
    'LBL_ALERT_JPG_IMAGE' => 'Görselin dosya biçimi JPEG olmalı. Uzantısı .jpg olan başka bir dosya yükleyin.',
    'LBL_ALERT_TYPE_IMAGE' => 'Görselin dosya biçimi JPEG ya da PNG olmalı. Uzantısı .jpg ya da .png olan başka bir dosya yükleyin.',
    'LBL_ALERT_SIZE_RATIO' => 'Görselin en boy oranı 1:1 ile 10:1. arasında olmalı. Görsel yeniden boyutlandırılacak.',
    'ERR_ALERT_FILE_UPLOAD' => 'Görsel yüklenirken sorun çıktı.',
    'LBL_LOGGER' => 'Günlük Kaydetme Ayarları',
    'LBL_LOGGER_FILENAME' => 'Günlük Dosyasının Adı',
    'LBL_LOGGER_FILE_EXTENSION' => 'Uzantı',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Günlük dosyası sınırı',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Varsayılan tarih biçimi',
    'LBL_LOGGER_LOG_LEVEL' => 'Günlükleme Düzeyi',
    'LBL_LEAD_CONV_OPTION' => 'Potansiyel dönüştürme seçenekleri',
    'LEAD_CONV_OPT_HELP' => "<b>Kopyala</b> - Dönüştürme sırasında kullanıcı tarafından seçilmiş tüm Potansiyel işlemleri için yeni kayıtlar oluşturulur ve ilişkilendirilir. Seçilmiş her kayıdın bir kopyası oluşturulur.<br><br> <b>Taşı</b> - Dönüştürme sırasında kullanıcı tarafından seçilmiş tüm Potansiyel işlemleri yeni bir kayıda taşınır.<br><br><b>Bir Şey Yapma</b> - Dönüştürme sırasında Potansiyel işlemleri ile ilgili herhangi bir işlem yapılmaz. İşlemler yalnız Potansiyel ile ilişkili kalır.",
    'LBL_CONFIG_AJAX' => 'AJAX Kullanıcı Arayüzünü Yapılandır',
    'LBL_CONFIG_AJAX_DESC' => 'Belirli modüller için AJAX kullanıcı arayüzü kullanımını etkinleştirin ya da devre dışı bırakın.',
    'LBL_LOGGER_MAX_LOGS' => 'En fazla günlük kaydı sayısı (dosya değiştirilmeden önce)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Dosya adına yapılacak ek',
    'LBL_VCAL_PERIOD' => 'vCal Güncelleme Zamanı Dönemi:',
    'LBL_IMPORT_MAX_RECORDS' => 'İçe Aktarma - En Fazla Satır Sayısı:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'İçe aktarılacak dosyalarda bulunabilecek en fazla satır sayısı.<br>İçe aktarılan dosyadaki satır sayısı bu değeri aşarsa, kullanıcı uyarılır.<br>Herhangi bir değer yazılmazsa, sınırsız sayıda satıra izin verilir.',
    'vCAL_HELP' => 'Bu ayarı telefon aramaları ve toplantılar için Uygun/Meşgul durumunun kaç ay önceden yayınlanacağını belirlemek için kullanın.<BR>Uygun/Meşgul durumunun yayınlanmaması için "0" yazın. En az 1 ay; En çok 12 ay.',
    'LBL_PDFMODULE_NAME' => 'PDF Ayarları',
    'SUITEPDF_BASIC_SETTINGS' => 'Belge Özellikleri',
    'SUITEPDF_ADVANCED_SETTINGS' => 'Gelişmiş Ayarlar',
    'SUITEPDF_LOGO_SETTINGS' => 'Görseller',

    'PDF_AUTHOR' => 'Sorumlu',
    'PDF_AUTHOR_INFO' => 'Belge özelliklerinde görüntülenecek sorumlu.',

    'PDF_HEADER_LOGO' => 'Teklif PDF Belgeleri İçin',
    'PDF_HEADER_LOGO_INFO' => 'Bu görsel Teklif PDF Belgelerinin varsayılan üst bilgisi olarak görüntülenir.',

    'PDF_NEW_HEADER_LOGO' => 'Teklifler İçin Yeni Bir Görsel Seçin',
    'PDF_NEW_HEADER_LOGO_INFO' => 'Dosya biçimi jpg ya da .png olabilir. (EZPDF için yalnız .jpg) <BR>Önerilen boyut 867x60 pikseldir.',

    'PDF_SMALL_HEADER_LOGO' => 'Rapor PDF Belgeleri İçin',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'Bu görsel Rapor PDF Belgelerinin varsayılan üst bilgisi olarak görüntülenir.<br>Bu görsel ayrıca SuiteCRM uygulamasının sol üst köşesinde görüntülenir.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Raporlar İçin Yeni Görsel Seçin',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Dosya biçimi jpg ya da .png olabilir. (EZPDF için yalnız .jpg) <BR>Önerilen boyut 212x40 pikseldir.',

    'PDF_FILENAME' => 'Varsayılan Dosya Adı',
    'PDF_FILENAME_INFO' => 'Oluşturulan PDF dosyaları için varsayılan dosya adı',

    'PDF_TITLE' => 'Başlık',
    'PDF_TITLE_INFO' => 'Belge özelliklerinde görüntülenecek başlık.',

    'PDF_SUBJECT' => 'Konu',
    'PDF_SUBJECT_INFO' => 'Belge özelliklerinde görüntülenecek konu.',

    'PDF_KEYWORDS' => 'Anahtar sözcükler',
    'PDF_KEYWORDS_INFO' => 'Belge ile ilgili anahtar sözcükler. Genellikle "sözcük1 sözcük2..." şeklindedir',

    'PDF_COMPRESSION' => 'Sıkıştırma',
    'PDF_COMPRESSION_INFO' => 'Sayfa sıkıştırmasını etkinleştirir ya da devre dışı bırakır.<br>Etkinleştirildiğinde her sayfanın iç görünümü sıkıştırılarak dosya boyutunun yarıya inmesi sağlanır.',

    'PDF_JPEG_QUALITY' => 'JPEG Kalitesi (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Varsayılan JPEG sıkıştırma kalitesini ayarlayın (1-100)',

    'PDF_PDF_VERSION' => 'PDF Sürümü',
    'PDF_PDF_VERSION_INFO' => 'PDF sürümünü ayarlayın (kullanılabilecek değerler için PDF belgelerine bakın).',

    'PDF_PROTECTION' => 'Belge Koruması',
    'PDF_PROTECTION_INFO' => 'Belge Koruma Ayarları<br>-copy: Metin ve görseller panoya kopyalanabilir<br>-print: Belge yazdırılabilir<br>-modify: Belge değiştirilebilir (dipnot ve formlar dışında)<br>-annot-forms: Dipnot ve form eklenebilir<br>Not: Değişiklik korumasını Acrobat ürününün tam lisansına sahip kişiler kullanabilir.',

    'PDF_USER_PASSWORD' => 'Kullanıcı Parolası',
    'PDF_USER_PASSWORD_INFO' => 'Herhangi bir parola yazılmadığında, belge normal şekilde açılır.<br>Bir kullanıcı parolası yazıldığında, PDF görüntüleyici belgeyi görüntülemeden önce parolanın yazılmasını ister.<br>Ana parola kullanıcı parolasından faklıdır ve belgeye tam erişim sağlamak için kullanılabilir.',

    'PDF_OWNER_PASSWORD' => 'Sahip Parolası',
    'PDF_OWNER_PASSWORD_INFO' => 'Herhangi bir parola yazılmadığında, belge normal şekilde açılır.<br>Bir kullanıcı parolası yazıldığında, PDF görüntüleyici belgeyi görüntülemeden önce parolanın yazılmasını ister.<br>Ana parola kullanıcı parolasından faklıdır ve belgeye tam erişim sağlamak için kullanılabilir.',

    'PDF_ACL_ACCESS' => 'Erişim Denetimi',
    'PDF_ACL_ACCESS_INFO' => 'PDF oluşturulurken kullanılacak Varsayılan Erişim Denetimi.',

    'K_CELL_HEIGHT_RATIO' => 'Hücre Yüksekliği Oranı',
    'K_CELL_HEIGHT_RATIO_INFO' => 'Hücre yüksekliği (Yazı Tipi Yüksekliği x Hücre Yüksekliği Oranı) değerinden küçük ise hücre yüksekliği olarak (Yazı Tipi Yüksekliği x Hücre Yüksekliği Oranı) değeri kullanılır.<br>Herhangi bir yükseklik belirtilmediğinde de (Yazı Tipi Yüksekliği x Hücre Yüksekliği Oranı) değeri kullanılır.',

    'K_SMALL_RATIO' => 'Küçük Yazı Tipi Çarpanı',
    'K_SMALL_RATIO_INFO' => 'Küçük yazı tipi için kullanılacak azaltma çarpanı.',

    'PDF_IMAGE_SCALE_RATIO' => 'Görsel Ölçek Oranı',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Görsellerin ölçeklendirilmesi için kullanılacak oran',

    'PDF_UNIT' => 'Birim',
    'PDF_UNIT_INFO' => 'Belgenin ölçü birimi',
    'PDF_GD_WARNING' => 'PHP için GD kitaplığı kurulmamış. GD kitaplığı kurulmadan, PDF belgelerinde yalnız JPEG logolar görüntülenebilir.',
    'ERR_EZPDF_DISABLE' => 'Uyarı: Yapılandırma tablosunda EZPDF sınıfı, PDF sınıfı olarak ayarlanmış olmasına rağmen devre dışı bırakılmış. Lütfen PDF Sınıfının TCPDF tarafından doğru şekilde ayarlanarak normal duruma dönmesi için bu formu "Kaydedin".',
    'LBL_IMG_RESIZED' => "(ekrana göre boyutlandırıldı)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF Yazı Tipi Yöneticisi',
    'LBL_FONTMANAGER_TITLE' => 'PDF Yazı Tipi Yöneticisi',
    'LBL_FONT_BOLD' => 'Kalın',
    'LBL_FONT_ITALIC' => 'Yatık',
    'LBL_FONT_BOLDITALIC' => 'Kalın/Yatık',
    'LBL_FONT_REGULAR' => 'Normal',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Çekirdek',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Tip1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Ad',
    'LBL_FONT_LIST_FILENAME' => 'Dosya adı',
    'LBL_FONT_LIST_TYPE' => 'Türü',
    'LBL_FONT_LIST_STYLE' => 'Biçem',
    'LBL_FONT_LIST_STYLE_INFO' => 'Yazı tipi biçemi',
    'LBL_FONT_LIST_ENC' => 'Şifreleme',
    'LBL_FONT_LIST_EMBEDDED' => 'Gömülü',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Yazı tipinin PDF dosyasına gömülmesi için işaretleyin',
    'LBL_FONT_LIST_CIDINFO' => 'CID Bilgileri',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'Örnekler ve daha fazla yardım için : www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Yazı Tipi Boyutu (KB)',
    'LBL_ADD_FONT' => 'Yazı tipi ekle',
    'LBL_BACK' => 'Önceki',
    'LBL_REMOVE' => 'Sil',
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Bu yazı tipini silmek istediğinize emin misiniz?',

    'LBL_ADDFONT_TITLE' => 'PDF Yazı Tipi Ekle',
    'LBL_PDF_ENCODING_TABLE' => 'Şifreleme Tablosu',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Şifreleme tablosunun adı.<br>Bu seçenek TrueType Unicode, OpenType Unicode ve sembolik yazı tipleri için yok sayılır.<br>Şifreleme, bir kod (0 ile 255 arasında) ile yazı tipinde bulunan bir karakter arasındaki ilişkiyi belirler.<br>İlk 128 sabittir ve ASCII kodlarına karşılık gelir.',
    'LBL_PDF_FONT_FILE' => 'Yazı Tipi Dosyası',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf, .otf ya da .pfb dosyası',
    'LBL_PDF_METRIC_FILE' => 'Ölçü Dosyası',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm ya da .ufm dosyası',
    'LBL_ADD_FONT_BUTTON' => 'Ekle',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'Bu dosyanın uzantısı uygun değil.',

    'ERR_MISSING_CIDINFO' => 'CID Bilgileri alanı boş bırakılamaz.',
    'LBL_ADDFONTRESULT_TITLE' => 'Yazı tipi ekleme işleminin sonucu',
    'LBL_STATUS_FONT_SUCCESS' => 'BAŞARILI: Yazı tipi SuiteCRM üzerine eklendi.',
    'LBL_STATUS_FONT_ERROR' => 'HATA: Yazı tipi eklenemedi. Aşağıdaki günlük kaydına bakın.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Yazı tipi ya da ölçü dosyası yüklenirken sorun çıktı.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Senaryolarınız',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Henüz bir senaryo yapılandırılmamış',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Kurulumunuz için uygun senaryoları seçin. Bu seçenekler kurulumdan sonra değiştirilebilir.',

    'LBL_WIZARD_TITLE' => 'Yönetici Yardımcısı',
    'LBL_WIZARD_WELCOME_TAB' => 'Hoş geldiniz',
    'LBL_WIZARD_WELCOME_TITLE' => 'SuiteCRM Uygulamasına Hoş geldiniz!',
    'LBL_WIZARD_WELCOME' => 'SuiteCRM uygulamasının marka ve yerelleştirme ayarlarını şimdi yapılandırmak için <b>Sonraki</b> üzerine tıklayın. SuiteCRM uygulamasını daha sonra yapılandırmak istiyorsanız <b>Atla</b> üzerine tıklayın.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Sonraki >',
    'LBL_WIZARD_BACK_BUTTON' => '< Önceki',
    'LBL_WIZARD_SKIP_BUTTON' => 'Atla',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Devam Et',
    'LBL_WIZARD_FINISH_TITLE' => 'Basit sistem yapılandırması tamamlandı',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Marka',
    'LBL_WIZARD_SYSTEM_DESC' => 'SuiteCRM uygulamasının marka ayarlarını yapmak için kuruluşunuzun adını ve logosunu belirtin.',
    'LBL_WIZARD_LOCALE_DESC' => 'SutieCRM verilerinin coğrafi konuma göre görüntülenme biçimini belirtin. Buradan yapılan ayarlar varsayılan ayarlar olur. Kullanıcılar daha sonra ayarlarını kendi istedikleri şekilde değiştirebilir.',
    'LBL_WIZARD_SMTP_DESC' => 'Atama bildirimleri ve yeni kullanıcı parolaları gibi bilgilerin gönderilmesi için kullanılacak e-posta hesabını yazın. Kullanıcılar SuiteCRM tarafından gönderilen e-postaların bu e-posta hesabından gönderildiğini görür.',
    'LBL_LOADING' => 'Yükleniyor...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Hoş geldiniz' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Modüllerin geçmiş alt panosunda ilgili kişilerin e-postaları görüntülensin',

    // Google auth PR 6146
    'LBL_GOOGLE_AUTH_TITLE' => 'Google Kimlik Doğrulaması',
    'LBL_GOOGLE_AUTH_JSON' => 'JSON Dosyası',
    'LBL_GOOGLE_AUTH_JSON_HELP' => 'Google Geliştirici Konsolundan indirdiğiniz JSON dosyasını yükleyin.',

);