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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Grup belirlenemedi',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Sahip belirlenemedi',
    'ERR_UW_CONFIG_WRITE' => 'config.php dosyası yeni sürüm bilgileri ile güncellenirken bir sorun çıktı.',
    'ERR_UW_CONFIG' => 'Lütfen config.php dosyasının izinlerini yazılabilir olarak ayarlayın ve bu sayfayı yeniden yükleyin.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Klasör yazılabilir değil',
    'ERR_UW_FILE_NOT_COPIED' => 'Dosya kopyalanmadı',
    'ERR_UW_FILE_NOT_DELETED' => 'Paket kaldırılırken bir sorun çıktı ',
    'ERR_UW_FILE_NOT_READABLE' => 'Dosya okunamadı.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Dosya taşınamadı ya da yazılamadı',
    'ERR_UW_FLAVOR_2' => 'Sürüm Türünü Güncelle: ',
    'ERR_UW_FLAVOR' => 'SuiteCRM Sistem Sürümü Türü: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log oluşturulamadı ya da yazılamadı. Lütfen SuiteCRM klasörünüzdeki izin ayarlarını düzeltin.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload 1 değerinden yüksek olarak atanmış. php.ini dosyasında bu değişikliği yapın ve Web sunucusunu yeniden başlatın.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Bir dosya belirtip yeniden deneyin!',
    'ERR_UW_NO_FILES' => 'Bir sorun çıktı. Denetlenecek herhangi bir dosya bulunamadı.',
    'ERR_UW_NO_MANIFEST' => 'Zip arşivi dosyasında manifest.php dosyası eksik. İşleme devam edilemiyor.',
    'ERR_UW_NO_VIEW' => 'Belirtilen görünüm geçersiz.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Yükleme geçersiz.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Temp dizini oluşturulamadı. Dosya izinlerini denetleyin.',
    'ERR_UW_ONLY_PATCHES' => 'Bu bölümden yalnız yamalar yüklenebilir.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Ön Denetim Sırasında Sorunlar Bulundu',
    'ERR_UW_UPLOAD_ERR' => 'Dosya yüklenirken bir sorun çıktı. Lütfen yeniden deneyin!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM Sistem Sürümü: ',
    'ERR_UW_PHP_VERSION' => 'PHP Sürümü: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM Sistem Sürümü: ',
    'ERR_UW_WRONG_TYPE' => 'Bu sayfa çalıştırmak için değil',
    'LBL_BUTTON_BACK' => '< Önceki',
    'LBL_BUTTON_CANCEL' => 'İptal',
    'LBL_BUTTON_DELETE' => 'Paketi Sil',
    'LBL_BUTTON_DONE' => 'Tamamlandı',
    'LBL_BUTTON_EXIT' => 'Çıkış',
    'LBL_BUTTON_NEXT' => 'Sonraki >',
    'LBL_BUTTON_RECHECK' => 'Yeniden Denetle',
    'LBL_BUTTON_RESTART' => 'Yeniden Başlat',

    'LBL_UPLOAD_UPGRADE' => 'Güncelleme Paketi Yükleme ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Dosya Yedekle',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Bu güncelleme işlemi sırasında yedeklenen dosyaları şurada bulabilirsiniz',
    'LBL_UW_BACKUP' => 'Dosya YEDEĞİ',
    'LBL_UW_CANCEL_DESC' => 'Güncelleme işlemi iptal edildi. Yüklenmiş güncelleme dosyaları ve kopyalanmış geçici dosyaların tümü silindi.',
    'LBL_UW_CHECK_ALL' => 'Tümünü Seç',
    'LBL_UW_CHECKLIST' => 'Güncelleme Adımları',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Üzerine Yazılmış Dosyaların Yedeklerini şu klasörde bulabilirsiniz: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Şu dosyaları el ile birleştirin: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Güncelleme İşlemi: Dosyaları El ile Birleştirin',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Bu dosyaları birleştirmek için en iyi bildiğiniz fark karşılaştırma yöntemini kullanın. Bu işlem tamamlanana kadar, SuiteCRM kurulumunuz belirsiz bir durumda kalır ve güncelleme işlemi tamamlanmış olmaz.',
    'LBL_UW_COMPLETE' => 'Tamamlandı',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Tüm Sistem Ayar Gereksinimleri Karşılandı',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Ayarı: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Modülü',
    'LBL_UW_COMPLIANCE_IMAP' => 'IMAP Modülü',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings Modülü',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parametresi',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP Ayarı: Bellek Sınırı',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Ayarı: Akış',
    'LBL_UW_COMPLIANCE_DB' => 'En Düşük Veritabanı Sürümü',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'php.ini dosyasının konumu',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'En Düşük PHP Sürümü',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Ayarı: Güvenli Kip',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Algılanan Ayarlar',
    'LBL_UW_COMPLIANCE_XML' => 'XML İşleme',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Arşivi Desteği',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Sürümü',
    'LBL_UW_COPIED_FILES_TITLE' => 'Dosyalar Kopyalandı',

    'LBL_UW_DB_CHOICE1' => 'SQL Sorguları Güncelleme Yardımcısı Tarafından Yürütülsün',
    'LBL_UW_DB_CHOICE2' => 'SQL Sorguları El ile Yürütülsün',
    'LBL_UW_DB_ISSUES_PERMS' => 'Veritabanı İzinleri',
    'LBL_UW_DB_METHOD' => 'Veritabanı Güncelleme Yöntemi',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Tüm İzinler Kullanılabilir',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Gerekli İzin',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Şu güncelleme paketleri kurulmuş:',
    'LBL_UW_END_LOGOUT_PRE' => 'Güncelleme tamamlandı.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Güncelleme Yardımcısından çıkmak için Tamam üzerine tıklayın.',
    'LBL_UW_END_LOGOUT' => 'Güncelleme Yardımcısını kullanarak başka bir güncelleme paketi daha uygulamak istiyorsanız, oturumunuzu kapatın, yeniden oturum açın ve sonra devam edin.',

    'LBL_UW_FILE_DELETED' => ' kaldırıldı.<br>',
    'LBL_UW_FILE_GROUP' => 'Grup',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Dosya İzinleri',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Tüm Dosyalar Yazılabilir</b>',
    'LBL_UW_FILE_OWNER' => 'Sahibi',
    'LBL_UW_FILE_PERMS' => 'İzinler',
    'LBL_UW_FILE_UPLOADED' => ' yüklendi',
    'LBL_UW_FILE' => 'Dosya Adı',
    'LBL_UW_FILES_QUEUED' => 'Şu güncelleme paketleri kurulmaya hazır:',
    'LBL_UW_FILES_REMOVED' => 'Şu dosyalar sistemden kaldırılacak:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Güncelleme paketlerini yüklemek için Sonraki üzerine tıklayın.</b>',
    'LBL_UW_FROZEN' => 'Devam etmeden önce bir paket yükleyin.',
    'LBL_UW_HIDE_DETAILS' => 'Ayrıntıları Gizle',
    'LBL_UW_IN_PROGRESS' => 'İşleniyor',
    'LBL_UW_INCLUDING' => 'Şunu İçeren',
    'LBL_UW_INCOMPLETE' => 'Tamamlanmamış',
    'LBL_UW_MANUAL_MERGE' => 'Dosya Birleştirme',
    'LBL_UW_MODULE_READY' => 'Modül kurulmaya hazır. Kuruluma devam etmek için \'\'Onayla\'\' üzerine tıklayın.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Kaydedilmiş bir güncelleme bulunamadı.',
    'LBL_UW_NONE' => 'Yok',
    'LBL_UW_OVERWRITE_DESC' => 'Dosyalarda yaptığınız kod özelleştirmesi ve kalıp değişikliği gibi tüm değişikliklerin üzerine yazılacak. Devam etmek istediğinize emin misiniz?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'El ile Birleştirme Görevi oluşturulsun mu?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'El ile Birleştirme için kendinize bir anımsatma e-postası göndermek ister misiniz?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Aşağıdaki dosyalar değiştirilmiş. El ile birleştirilmesi gereken ögelerin işaretini kaldırın. <i>Algılanan görünüm değişikliklerinin işaretleri otomatik olarak kaldırılır. Üzerine yazılması gerekenleri yeniden işaretleyin.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'El ile Birleştirilmesi Gereken Bir Dosya Yok.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Gerekli değil.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Otomatik Kaydedilmiş Dosyalar:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Tüm ön sınamalar sorunsuz tamamlandı.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Güncellenmiş dosyaları sisteme kopyalamak için Sonraki üzerine tıklayın.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Not:</b> Güncelleme işleminin geri kalan bölümünün tamamlanması zorunludur, Sonraki üzerine tıklarsanız işlemi tamamlamanız gerekir. Devam etmek istemiyorsanız İptal üzerine tıklayın.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Tüm Dosyaları Tersine Çevir',

    'LBL_UW_REBUILD_TITLE' => 'Sonuçları Yeniden Oluştur',
    'LBL_UW_SCHEMA_CHANGE' => 'Şema Değişiklikleri',

    'LBL_UW_SHOW_COMPLIANCE' => 'Algılanan Ayarları Görüntüle',
    'LBL_UW_SHOW_DB_PERMS' => 'Eksik Veritabanı İzinlerini Görüntüle',
    'LBL_UW_SHOW_DETAILS' => 'Ayrıntıları Görüntüle',
    'LBL_UW_SHOW_DIFFS' => 'El ile Birleştirilmesi Gereken Dosyaları Görüntüle',
    'LBL_UW_SHOW_NW_FILES' => 'İzinleri Hatalı Olan Dosyaları Görüntüle',
    'LBL_UW_SHOW_SCHEMA' => 'Şema Değiştirme Betiğini Görüntüle',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Hatalı Sorguları Görüntüle',
    'LBL_UW_SHOW' => 'Görüntüle',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Atlanan Dosyalar',
    'LBL_UW_SQL_RUN' => 'SQL el ile çalıştırıldığında denetle',
    'LBL_UW_START_DESC' => 'Bu yardımcı SuiteCRM güncelleme işleminde size yol gösterir.',
    'LBL_UW_START_DESC2' => 'Not: Canlı yayın için kullandığınız SuitCRM uygulamasının bir kopyasını alarak yeni sürümü dağıtmadan önce güncelleme paketini denemeniz önemle önerilir. "composer.json" dosyasını değiştirdiyseniz, güncelleme işlemi tamamlandıktan sonra şu komutu yürütün:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Sistemin güncellenmeye hazır olduğundan emin olmak için Sonraki üzerine tıklayın. Bu işlem sırasında dosya izinleri, veritabanı izinleri ve sunucu ayarları denetlenir.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Yeni Güncelleme Yardımcısı şimdi güncelleme işlemini sürdürecek. Lütfen güncelleme işlemine devam edin.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Yeni Güncelleme Yardımcısına Hoş Geldiniz',

    'LBL_UW_TITLE_CANCEL' => 'İptal',
    'LBL_UW_TITLE_COMMIT' => 'Güncellemeyi Yükleme',
    'LBL_UW_TITLE_END' => 'Açıklama',
    'LBL_UW_TITLE_PREFLIGHT' => 'Ön Denetim',
    'LBL_UW_TITLE_START' => 'Hoş Geldiniz',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Sistem Denetimi',
    'LBL_UW_TITLE_UPLOAD' => 'Paketi Yükle',
    'LBL_UW_TITLE' => 'Güncelleme Yardımcısı',
    'LBL_UW_UNINSTALL' => 'Kaldır',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Lisansı Kabul Et',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Lisansı Dönüştür',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Başlatılıyor',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Sistem denetleniyor',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Lisans denetleniyor',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Ön denetim yapılıyor',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Dosyalar kopyalanıyor',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Güncelleme yükleniyor',
    'LBL_UW_COMMIT_DESC' => 'Ek güncelleme betiklerini yürütmek için Sonraki üzerine tıklayın.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Güncelleme betikleri yürütülüyor',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Güncelleme özeti hazırlanıyor',
    'LBL_UPGRADE_IN_PROGRESS' => 'sürüyor     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Geçen zaman',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Güncelleme iptal edilerek temizlik yapılıyor',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Güncelleme işlemi biraz zaman alabilir',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Yükleme denetimleri yapılıyor',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Güncelleme paketi yükleniyor ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Güncelleme yardımcısı eski 451 şemasını kaldırır',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Güncelleme sonrası el ile silme şeması',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Eski Şemayı Silme Yöntemi',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Silinebilecek eski şema görüntülensin',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Atlanan Sorgular',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP 5 ya da üzerindeki bir sürüm gerekli.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'PHP sürümünüz SuiteCRM tarafından desteklenmiyor. SuiteCRM uygulaması ile uyumlu bir PHP sürümü kurmalısınız. Lütfen Yayın Notlarındaki Uyumluluk Matrisinden desteklenen PHP sürümlerine bakın. Kullandığınız PHP sürümü ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP Geriye Uyumluluk kipi etkinleştirilmiş. Devam etmek için zend.ze1_compatibility_mod ayarını Off olarak yapın',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'İşlem',
    'LBL_ML_CANCEL' => 'İptal',
    'LBL_ML_COMMIT' => 'Onayla',
    'LBL_ML_DESCRIPTION' => 'Açıklama',
    'LBL_ML_INSTALLED' => 'Kurulma Tarihi',
    'LBL_ML_NAME' => 'Ad',
    'LBL_ML_PUBLISHED' => 'Yayınlanma Tarihi',
    'LBL_ML_TYPE' => 'Tür',
    'LBL_ML_UNINSTALLABLE' => 'Kaldırılamaz',
    'LBL_ML_VERSION' => 'Sürüm',
    'LBL_ML_INSTALL' => 'Kur',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Geçerli PHP sürümü: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'Önerilen PHP sürümü ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' ya da üzeri.', // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'GüncellemeYardımcısı',
    'LBL_UPLOAD_SUCCESS' => 'Güncelleme paketi yüklendi. Son denetimlerin yapılması için Sonraki üzerine tıklayın.',
    'LBL_UW_TITLE_LAYOUTS' => 'Görünümleri Onaylama',
    'LBL_LAYOUT_MODULE_TITLE' => 'Görünümler',
    'LBL_LAYOUT_MERGE_DESC' => 'Bu güncellemenin bir parçası olarak eklenmiş yeni alanlar var. Bu alanlar var olan modül görünümlerine otomatik olarak eklenebilir. Yeni alanlar hakkında ayrıntılı bilgi almak için güncelleyeceğiniz sürümün Yayın Notlarına bakabilirsiniz.<br><br>Yeni alanların eklenmesini istemiyorsanız modülün işaretini kaldırın. Böylece özelleştirilmiş görünümler üzerinde herhangi bir değişiklik yapılmaz. Güncelleme sonrası bu alanlar Studio üzerinden kullanılabilir.<br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Değişiklikleri onaylamak ve güncelleme işlemini tamamlamak için Sonraki üzerine tıklayın.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Güncellemeyi tamamlamak için Sonraki üzerine tıklayın.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Görünümleri Onaylama',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Görünüm Sonuçlarını Onayla',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Şu görünümler birleştirildi:',
    'LBL_SELECT_FILE' => 'Dosya Seçin:',
    'ERROR_VERSION_INCOMPATIBLE' => 'Yüklenen dosya bu SuiteCRM sürümü ile uyumlu değil: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'Yüklenen dosya bu PHP sürümü ile uyumlu değil: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Yüklenen dosya bu SuiteCRM sürümü ile uyumlu değil: ',
    'LBL_LANGPACKS' => 'Dil Paketleri' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Modül Yükleyici' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Yama Güncellemeleri' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Temalar' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'İş Akışı' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Güncelle' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'İşleniyor' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'manifest dosyasında uyumlu sürüm ayarlanmamış',
    'LBL_UPGRD_CSTM_CHK' => 'Güncelleme işlemi bazı dosyaları günceller ancak bu dosyalar ayrıca custom/ klasöründe de bulunur. Lütfen devam etmeden önce değişiklikleri inceleyin:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'Yüklenen dosyanın boyutu php.ini yapılandırma dosyasında belirtilen upload_max_filesize değerinden büyük.',
        2 => 'Yüklenen dosyanın boyutu HTML formunda belirtilen MAX_FILE_SIZE değerinden büyük.',
        3 => 'Dosyanın yalnız bir bölümü yüklenebildi.',
        4 => 'Herhangi bir dosya yüklenmedi.',
        5 => 'Bilinmeyen bir hata oluştu.',
        6 => 'Bir geçici klasör bulunamadı.',
        7 => 'Dosya diske yazılamadı.',
        8 => 'Dosya yüklemesi bir eklenti tarafından durduruldu.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Uyarı: parola son kullanma tarihi yok olarak ayarlandı!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Lütfen ayarlarınızı buradan güncelleyin',
);
