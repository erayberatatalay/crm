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


    'LBL_RE' => 'YNT:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Kullanıcı adı ya da parola hatalı',
    'ERR_INI_ZLIB' => 'Zlib sıkıştırması geçici olarak kapatılamadı. "Ayarları Sınama" işlemi yapılamayabilir.',
    'ERR_NO_IMAP' => 'IMAP kitaplığı bulunamadı. Gelen E-posta işlemlerine devam etmeden önce bu sorunu çözmelisiniz',
    'ERR_NO_OPTS_SAVED' => 'Gelen e-posta hesabınız için herhangi bir uygun değer kaydedilmemiş. Lütfen ayarları gözden geçirin',
    'ERR_TEST_MAILBOX' => 'Lütfen ayarları denetleyin ve yeniden deneyin.',

    'LBL_ASSIGN_TO_USER' => 'Kullanıcıya Ata',
    'LBL_AUTOREPLY' => 'Otomatik Yanıt Kalıbı',
    'LBL_AUTOREPLY_HELP' => 'E-posta gönderen kişilerin iletilerinin alındığını bildirmek için kullanılacak bir otomatik yanıt seçin.',
    'LBL_BASIC' => 'E-posta Hesabı Bilgileri',
    'LBL_CASE_MACRO' => 'Destek Kaydı Makrosu',
    'LBL_CASE_MACRO_DESC' => 'İçe aktarılan e-postanın bir Destek Kaydı ile ilişkilendirilmesi için işlenecek ve kullanılacak makroyu belirtin.',
    'LBL_CASE_MACRO_DESC2' => 'Herhangi bir değer belirtebilirsiniz. Ancak <b>"%1"</b> değerini koruyun.',
    'LBL_CLOSE_POPUP' => 'Pencereyi Kapat',
    'LBL_CREATE_TEMPLATE' => 'Ekle',
    'LBL_DELETE_SEEN' => 'Okunmuş E-postalar İçe Aktarıldıktan Sonra Silinsin',
    'LBL_EDIT_TEMPLATE' => 'Düzenle',
    'LBL_EMAIL_OPTIONS' => 'E-posta İşleme Ayarları',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Geri Dönen İşleme Ayarları',
    'LBL_FILTER_DOMAIN_DESC' => 'Otomatik yanıtların gönderilmeyeceği bir etki alanı belirtin.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Bu seçenek etkinleştirildiğinde, gelen tüm e-postalar için otomatik olarak SuiteCRM üzerinde e-posta kayıtları eklenir.',
    'LBL_FILTER_DOMAIN' => 'Bu Etki Alanına Otomatik Yanıt Gönderilmesin',
    'LBL_FIND_SSL_WARN' => '<br>SSL sınaması uzun sürebilir. Lütfen sabırlı olun.<br>',
    'LBL_FROM_ADDR' => '"Kimden" Adresi',
    'LBL_FROM_ADDR_DESC' => 'E-posta hizmeti sağlayıcının kısıtlamaları nedeniyle buraya yazılan e-posta adresi gönderilen e-postaların &quot;Kimden&quot; adresinde görüntülenmeyebilir. Böyle bir durumda, giden e-posta sunucusunda tanımlanmış e-posta adresi kullanılır.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Kimden" Adı',
    'LBL_GROUP_QUEUE' => 'Gruba Ata',
    'LBL_HOME' => 'Ana Sayfa',
    'LBL_LIST_MAILBOX_TYPE' => 'E-posta Hesabı Kullanımı',
    'LBL_LIST_NAME' => 'Ad:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tür',
    'LBL_LIST_SERVER_URL' => 'E-posta Sunucusu',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LOGIN' => 'Kullanıcı Adı',
    'LBL_MAILBOX_DEFAULT' => 'Gelen Kutusu',
    'LBL_MAILBOX_SSL' => 'SSL Kullanılsın',
    'LBL_MAILBOX_TYPE' => 'Olası İşlemler',
    'LBL_DISTRIBUTION_METHOD' => 'Dağıtım Yöntemi',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Destek Kaydı Otomatik Yanıt Kalıbı Ekle',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'E-posta gönderen kişilere, bir destek kaydının eklendiğini bildirecek otomatik yanıtı seçin. E-postanın Konu bölümünde destek kaydının Makro ayarları ile ilişkili destek kaydı numarası bulunur. Bu yanıt yalnız ilk e-posta alıcıda geldiğinde gönderilir.',
    'LBL_MAILBOX' => 'İzlenen Klasörler',
    'LBL_TRASH_FOLDER' => 'Silinmişler Klasörü',
    'LBL_SENT_FOLDER' => 'Gönderilmişler Klasörü',
    'LBL_SELECT' => 'Seçin',
    'LBL_MARK_READ_NO' => 'E-posta içeri aktarıldıktan sonra silinmiş olarak işaretlendi',
    'LBL_MARK_READ_YES' => 'E-posta içeri aktarıldıktan sonra sunucuda bırakıldı',
    'LBL_MARK_READ' => 'İletiler Sunucuda Kalsın',
    'LBL_MAX_AUTO_REPLIES' => 'Otomatik Yanıt Sayısı',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Tek bir e-posta adresine 24 saat içinde gönderilecek en fazla otomatik yanıt sayısını belirtin.',
    'LBL_PERSONAL_MODULE_NAME' => 'Kişisel E-posta Hesabı',
    'LBL_CREATE_CASE' => 'E-posta ile Destek Kaydı Eklenebilsin',
    'LBL_CREATE_CASE_HELP' => 'Gelen epostalardan otomatik olarak SuiteCRM\'de durum kayıtları oluşturmak için seçin.',
    'LBL_MODULE_NAME' => 'Grup E-postası Hesabı',
    'LBL_BOUNCE_MODULE_NAME' => 'Geri Dönüş İşleme E-posta Kutusu',
    'LBL_MODULE_TITLE' => 'Gelen E-posta',
    'LBL_NAME' => 'Ad',
    'LBL_NONE' => 'Yok',
    'LBL_ONLY_SINCE_NO' => 'Hayır. Sunucudaki tüm e-postalar denetlensin.',
    'LBL_ONLY_SINCE_YES' => 'Evet.',
    'LBL_PASSWORD' => 'Parola',
    'LBL_POP3_SUCCESS' => 'POP3 bağlantısı çalışıyor.',
    'LBL_POPUP_TITLE' => 'Ayarları Sına',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Abone Olunacak Klasörleri Seçin',
    'LBL_SELECT_TRASH_FOLDERS' => 'Silinmişler Klasörünü Seçin',
    'LBL_SELECT_SENT_FOLDERS' => 'Gönderilmişler Klasörünü Seçin',
    'LBL_DELETED_FOLDERS_LIST' => 'Şu klasörler bulunamadı ya da sunucudan silinmiş: %s',
    'LBL_PORT' => 'E-posta Sunucu Kapı Numarası',
    'LBL_REPLY_TO_NAME' => '"Yanıt" Adı',
    'LBL_REPLY_TO_ADDR' => '"Yanıt" Adresi',
    'LBL_SAME_AS_ABOVE' => 'Ad/Adres Kullanarak',
    'LBL_SERVER_OPTIONS' => 'Gelişmiş Kurulum',
    'LBL_SERVER_TYPE' => 'E-posta Sunucu İletişim Kuralı',
    'LBL_SERVER_URL' => 'E-posta Sunucu Adresi',
    'LBL_SSL_DESC' => 'E-posta sunucusu güvenli soket bağlantısını destekliyorsa, bu seçenek etkinleştirildiğinde, e-postaların içe aktarılması için bağlantıda SSL kullanılması gerekir.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Seçilmiş takımın e-posta hesabına erişimi var.',
    'LBL_SSL' => 'SSL Kullanılsın',
    'LBL_STATUS' => 'Durum',
    'LBL_SYSTEM_DEFAULT' => 'Varsayılan Sistem Ayarı',
    'LBL_TEST_BUTTON_TITLE' => 'Sına',
    'LBL_TEST_SETTINGS' => 'Ayarları Sına',
    'LBL_TEST_SUCCESSFUL' => 'Bağlantı çalışıyor.',
    'LBL_TEST_WAIT_MESSAGE' => 'Lütfen biraz bekleyin...',
    'LBL_WARN_IMAP_TITLE' => 'Gelen E-posta Devre Dışı',
    'LBL_WARN_IMAP' => 'Uyarılar:',
    'LBL_WARN_NO_IMAP' => 'IMAP c-client kitaplıkları PHP modülü ile etkinleştirilmemiş ya da derlenmemiş ise Gelen E-posta düzgün <b>çalışamaz</b>. Lütfen bu sorunu çözmek için sistem yöneticiniz ile görüşün.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Yeni Grup E-posta Hesabı',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Yeni Geri Dönüş İşleme E-posta Hesabı',
    'LNK_LIST_MAILBOXES' => 'Tüm E-posta Hesapları',
    'LNK_LIST_SCHEDULER' => 'Zamanlanmış Görevler',
    'LNK_SEED_QUEUES' => 'Kuyruklar Takımlardan Beslensin',
    'LBL_GROUPFOLDER_ID' => 'Grup Klasörü Kodu',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Kullanıcılar, yanıt adresi olarak "Kimden" Adı ve Adresini kullanabilsin',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Bu seçenek etkinleştirildiğinde, grup e-posta hesabına erişebilen kullanıcılar tarafından yeni bir e-posta iletisi oluşturulurken, bu grup e-posta hesabının Kimden Adı ve Adresi Kime alanında bir seçenek olarak görüntülenir.',
    'LBL_STATUS_ACTIVE' => 'Etkin',
    'LBL_STATUS_INACTIVE' => 'Devre Dışı',
    'LBL_IS_PERSONAL' => 'Kişisel',
    'LBL_IS_GROUP' => 'grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'E-postalar Otomatik Olarak İçe Aktarılsın',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Uyarı: Otomatik içe aktarma ayarlarını değiştiriyorsunuz. Bu durum veri kaybına neden olabilir.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Uyarı: Destek kayıtları otomatik olarak oluşturulurken otomatik içe aktarma seçeneği etkinleştirilmiş olmalı.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Taslaklar',
    'LBL_LIST_TITLE_MY_INBOX' => 'Gelen Kutusu',
    'LBL_LIST_TITLE_MY_SENT' => 'Gönderilmiş E-postalar',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arşivlenmiş E-postalar',
    'LNK_MY_DRAFTS' => 'Taslaklar',
    'LNK_MY_INBOX' => 'E-posta',
    'LNK_VIEW_MY_INBOX' => 'E-postayı Görüntüle',
    'LNK_QUICK_REPLY' => 'Yanıtla',
    'LNK_SENT_EMAIL_LIST' => 'Gönderilmiş E-postalar',
    'LBL_EDIT_LAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Düzenleyen',
    'LBL_SERVICE' => 'Hizmet',
    'LBL_STORED_OPTIONS' => 'Kaydedilmiş Ayarlar',
    'LBL_GROUP_ID' => 'Grup Kodu',
);
