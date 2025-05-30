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
    'LBL_EMAIL_INFORMATION' => 'E-POSTA',
    'LBL_FW' => 'İLT:',
    'LBL_RE' => 'YNT:',

    'LBL_BUTTON_CREATE' => 'Ekle',
    'LBL_BUTTON_EDIT' => 'Düzenle',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Taslağı Düzenle',
    'LBL_QS_DISABLED' => '(Bu modül için Hızlı Arama kullanılamaz. Lütfen Seçin üzerine tıklayın.)',
    'LBL_SIGNATURE_PREPEND' => 'İmza yanıtın üzerinde olsun',
    'LBL_IMPORT' => 'İçe Aktar',
    'LBL_LOADING' => 'Yükleniyor',
    'LBL_MARKING' => 'İşaretleme',
    'LBL_DELETING' => 'Siliniyor',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Bu e-postayı silmek istediğinize emin misiniz?',
    'LBL_ENTER_FOLDER_NAME' => 'Lütfen bir klasör adı yazın',

    'LBL_ERROR_SELECT_MODULE' => 'Lütfen İlişkilendirilecek alanından bir modül seçin',

    'ERR_ARCHIVE_EMAIL' => 'Hata: Arşivlenecek bir e-posta seçmemişsiniz.',
    'ERR_DELETE_RECORD' => 'Hata: Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_ADD_DASHLETS' => 'SuiteCRM Pano Bileşenleri Ekle',
    'LBL_ADD_DOCUMENT' => 'Belge Ekle',
    'LBL_ADD_ENTRIES' => 'Kayıt Ekle',
    'LBL_ADD_FILE' => 'Dosya Ekle',
    'LBL_ATTACHMENTS' => 'Ek Dosyalar:',
    'LBL_ATTACH_FILES' => 'Dosya Ekle',
    'LBL_ATTACH_DOCUMENTS' => 'Belge Ekle',
    'LBL_HAS_ATTACHMENT' => 'Ek dosyası var mı?:',
    'LBL_BCC' => 'Gizli Kopya:',
    'LBL_BODY' => 'İçerik Metni:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_CC' => 'Kopya:',
    'LBL_COMPOSE_MODULE_NAME' => 'Yeni E-posta',
    'LBL_CONTACT_NAME' => 'İlgili Kişi:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'İlgili Kişiler',
    'LBL_CREATED_BY' => 'Ekleyen',
    'LBL_DATE_SENT_RECEIVED' => 'Gönderildiği/Alındığı Tarih:',
    'LBL_DATE' => 'Gönderilme Tarihi:',
    'LBL_DELETE_FROM_SERVER' => 'İletiyi sunucudan sil',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_EDIT_ALT_TEXT' => 'Düz Metin Biçimini Düzenle',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Düz Metin Olarak Gönder',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Abone Olma E-postası Gönder',
    'LBL_EMAIL_ATTACHMENT' => 'E-posta Ek Dosyası',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Seçin',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Temizle',
    'LBL_EMAIL' => 'E-posta Adresi:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'E-postalar:Hesaplar',
    'LBL_EMAILS_BUGS_REL' => 'E-postalar:Hatalar',
    'LBL_EMAILS_CASES_REL' => 'E-postalar:DestekKayıtları',
    'LBL_EMAILS_CONTACTS_REL' => 'E-postalar:İlgiliKişiler',
    'LBL_EMAILS_LEADS_REL' => 'E-postalar:Potansiyeller',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-postalar:Fırsatlar',
    'LBL_EMAILS_NOTES_REL' => 'E-postalar:Notlar',
    'LBL_EMAILS_PROJECT_REL' => 'E-postalar:Proje',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'E-postalar:ProjeGörevi',
    'LBL_EMAILS_PROSPECT_REL' => 'E-postalar:Aday',
    'LBL_EMAILS_CONTRACTS_REL' => 'E-postalar:Sözleşme',
    'LBL_EMAILS_TASKS_REL' => 'E-postalar:Görevler',
    'LBL_EMAILS_USERS_REL' => 'E-postalar:Kullanıcılar',
    'LBL_EMPTY_FOLDER' => 'Görüntülenecek bir e-posta yok',
    'LBL_SELECT_FOLDER' => 'Klasör Seçin',
    'LBL_ERROR_SENDING_EMAIL' => 'E-posta Gönderilirken Sorun Çıktı',
    'LBL_ERROR_SAVING_DRAFT' => 'Taslak Kaydedilirken Sorun Çıktı',
    'LBL_FROM_NAME' => 'Kimden Adı',
    'LBL_FROM' => 'Kimden:',
    'LBL_REPLY_TO' => 'Yanıt:',
    'LBL_HTML_BODY' => 'HTML İçerik Metni',
    'LBL_INVITEE' => 'Alıcılar',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_MESSAGE_SENT' => 'İleti Gönderildi',
    'LBL_MODIFIED_BY' => 'Düzenleyen',
    'LBL_MODULE_NAME' => 'Tüm E-postalar',
    'LBL_MODULE_TITLE' => 'E-postalar: ',
    'LBL_MY_EMAILS' => 'E-postalar',
    'LBL_NEW_FORM_TITLE' => 'E-postayı Arşivle',
    'LBL_NONE' => 'Yok',
    'LBL_NOT_SENT' => 'Gönderim Hatası',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Ekli Dosyalar',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Proje Görevleri',
    'LBL_RAW' => 'İşlenmemiş E-posta',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Taslak Kaydet',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Taslağı Sil',
    'LBL_SEARCH_FORM_TITLE' => 'E-posta Arama',
    'LBL_SEND_ANYWAYS' => 'Bu e-postanın konusu yok. Yine de gönderilsin mi?',
    'LBL_SEND_BUTTON_LABEL' => 'Gönder',
    'LBL_SEND_BUTTON_TITLE' => 'Gönder',
    'LBL_SEND' => 'GÖNDER',
    'LBL_SENT_MODULE_NAME' => 'Gönderilmiş E-postalar',
    'LBL_SHOW_ALT_TEXT' => 'Düz Metin Olarak Görüntüle',
    'LBL_SIGNATURE' => 'İmza',
    'LBL_SUBJECT' => 'Konu:',
    'LBL_TEXT_BODY' => 'İçerik Metni',
    'LBL_TIME' => 'Gönderilme Saati:',
    'LBL_TO_ADDRS' => 'Kime',
    'LBL_USERS_SUBPANEL_TITLE' => 'Kullanıcılar',
    'LBL_USERS' => 'Kullanıcılar',

    'LNK_CALL_LIST' => 'Telefon Aramaları',
    'LBL_EMAIL_RELATE' => 'İlişkili',
    'LNK_EMAIL_TEMPLATE_LIST' => 'E-posta Kalıplarını Görüntüle',
    'LNK_MEETING_LIST' => 'Toplantılar',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_EMAIL_TEMPLATE' => 'E-posta Kalıbı Ekle',
    'LNK_NEW_EMAIL' => 'E-posta Gönder',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NEW_SEND_EMAIL' => 'Yeni',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_NOTE_LIST' => 'Notlar',
    'LNK_SENT_EMAIL_LIST' => 'Gönderilmiş E-postalar',
    'LNK_TASK_LIST' => 'Görevler',
    'LNK_VIEW_CALENDAR' => 'Bugün',

    'LBL_LIST_ASSIGNED' => 'Atanmış',
    'LBL_LIST_CONTACT_NAME' => 'İlgili Kişi Adı',
    'LBL_LIST_DATE' => 'Gönderilme Tarihi',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'Gönderildiği/Alındığı Tarih',
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Taslak',
    'LBL_LIST_FORM_SENT_TITLE' => 'Gönderilmiş E-postalar',
    'LBL_LIST_FORM_TITLE' => 'E-posta Listesi',
    'LBL_LIST_FROM_ADDR' => 'Kimden',
    'LBL_LIST_RELATED_TO' => 'Alıcı Türü',
    'LBL_LIST_SUBJECT' => 'Konu',
    'LBL_LIST_TO_ADDR' => 'Kime',
    'LBL_LIST_TYPE' => 'Türü',

    'WARNING_SETTINGS_NOT_CONF' => 'Uyarı: E-posta ayarlarınız e-posta gönderebilecek şekilde yapılmamış.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'İşlenmemiş İletiyi Görüntüle',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'İşlenmemiş İletiyi Gizle',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'E-postaları Denetle',
    'LBL_BUTTON_CHECK_TITLE' => 'Yeni E-postaları Denetle',
    'LBL_BUTTON_FORWARD' => 'İlet',
    'LBL_BUTTON_REPLY_TITLE' => 'Yanıtla',
    'LBL_BUTTON_REPLY_ALL' => 'Tümünü Yanıtla',
    'LBL_BUTTON_DELETE_IMAP' => 'IMAP üzerinden sil',
    'LBL_CASES_SUBPANEL_TITLE' => 'Destek Kayıtları',
    'LBL_INBOUND_TITLE' => 'Gelen E-posta',
    'LBL_INTENT' => 'Amaç',
    'LBL_MESSAGE_ID' => 'İleti Kodu',
    'LBL_REPLY_HEADER_1' => 'Zaman ',
    'LBL_REPLY_HEADER_2' => 'yazdığı:',
    'LBL_REPLY_TO_ADDRESS' => 'Yanıt Adresi',
    'LBL_REPLY_TO_NAME' => 'Yanıt Adı',

    'LBL_LIST_BUG' => 'Hatalar',
    'LBL_LIST_CASE' => 'Destek Kayıtları',
    'LBL_LIST_CONTACT' => 'İlgili Kişiler',
    'LBL_LIST_LEAD' => 'Potansiyeller',
    'LBL_LIST_TASK' => 'Görevler',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış Kullanıcı',

    // for Inbox
    'LBL_ALL' => 'Tümü',
    'LBL_ASSIGN_WARN' => '2 seçeneğin de seçildiğinden emin olun.',
    'LBL_BACK_TO_GROUP' => 'Grup Gelen Kutusuna Dön',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Ata',
    'LBL_BUTTON_DISTRIBUTE' => 'Ata',
    'LBL_BUTTON_GRAB_TITLE' => 'Gruptan Alınsın',
    'LBL_BUTTON_GRAB' => 'Gruptan Alınsın',
    'LBL_CREATE_BUG' => 'Hata Ekle',
    'LBL_CREATE_CASE' => 'Destek Kaydı Ekle',
    'LBL_CREATE_CONTACT' => 'Kişi Ekle',
    'LBL_CREATE_LEAD' => 'Potansiyel Ekle',
    'LBL_CREATE_TASK' => 'Görev Ekle',
    'LBL_DIST_TITLE' => 'Atama',
    'LBL_LOCK_FAIL_DESC' => 'Seçilmiş öge şu anda kullanılamıyor.',
    'LBL_LOCK_FAIL_USER' => ' sahipliğini aldı.',
    'LBL_MASS_DELETE_ERROR' => 'Silinmek üzere işaretlenmiş herhangi bir öge yok.',
    'LBL_NEW' => 'Yeni',
    'LBL_NEXT_EMAIL' => 'Sonraki Uygun Öge',
    'LBL_REPLIED' => 'Yanıtlandı',
    'LBL_TO' => 'Kime:',
    'LBL_TOGGLE_ALL' => 'Tümünü Tersine Çevir',
    'LBL_UNKNOWN' => 'Bilinmiyor',
    'LBL_USE' => 'Ata:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Seçilmiş Sonuçları Şu Kişiye Ata: ',
    'LBL_USER_SELECT' => 'Kullanıcıları Seçin',
    'LBL_USING_RULES' => 'Kullanılacak Kurallar:',
    'LBL_WARN_NO_DIST' => 'Herhangi Bir Dağıtım Yöntemi Seçilmemiş',
    'LBL_WARN_NO_USERS' => 'Herhangi bir kullanıcı seçilmemiş',
    'LBL_IMPORT_STATUS_TITLE' => 'Durum',
    'LBL_INDICATOR' => 'Gösterge',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Grup Gelen Kutusu',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Taslaklar',
    'LBL_LIST_TITLE_MY_INBOX' => 'Gelen Kutusu',
    'LBL_LIST_TITLE_MY_SENT' => 'Gönderilmiş E-postalar',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arşivlenmiş E-postalar',

    'LNK_MY_DRAFTS' => 'Taslaklar',
    'LNK_MY_INBOX' => 'E-posta',
    'LNK_VIEW_MY_INBOX' => 'E-postayı Görüntüle',
    'LNK_QUICK_REPLY' => 'Yanıtla',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Birincil Takım belirtilmemiş',
    'LBL_INSERT_CONTACT_EMAIL' => 'E-posta Adresini Bir Kişiden Ekle',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'E-posta Adresini Bir Hesaptan Ekle',
    'LBL_INSERT_TARGET_EMAIL' => 'E-posta Adresini Bir Hedeften Ekle',
    'LBL_INSERT_USER_EMAIL' => 'E-posta Adresini Bir Kullanıcıdan Ekle',
    'LBL_INSERT_LEAD_EMAIL' => 'E-posta Adresini Bir Potansiyelden Ekle',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'E-posta adresi geçersiz',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Atanmış Kişi:',
    'LBL_MEMBER_OF' => 'Üst Öge',
    'LBL_QUICK_CREATE' => 'Hızlı Ekle',
    'LBL_CREATE' => 'Ekle',
    'LBL_STATUS' => 'E-posta Durumu:',
    'LBL_EMAIL_FLAGGED' => 'İşaretlenmiş:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Yanıt Durumu:',
    'LBL_TYPE' => 'Tür:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Lütfen denetleyin!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Bu kalıbın seçilmesi yazılmış e-posta içerik metninin silinmesine neden olacak. Devam etmek istiyor musunuz?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '"--Hiçbiri--" olarak seçerseniz e-posta içerik metni silinecek. Devam etmek istiyor musunuz?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Uyarı',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Birden fazla alıcıya e-posta gönderirken kişi adı gibi kişi değişkenleri içeren bir e-posta kalıbının kullanılması beklenmedik sonuçlara neden olabilir. Toplu e-posta göndermek için bir e-posta kampanyası kullanmanız önerilir.',
    'LBL_CHECK_ATTACHMENTS' => 'Lütfen Ek Dosyalarını Denetleyin!',
    'LBL_HAS_ATTACHMENTS' => 'Bu e-posta içinde zaten ek dosyaları var. Bu ek dosyaların korunmasını ister misiniz?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Ek Dosyaları Var',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Zorunlu bir alan doldurulmamış',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Zorunlu alandaki değer geçersiz',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Yalnız ilgili alıcılar görüntülensin',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Ekle',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Ekle',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'E-posta Hesabı Özellikleri',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'SMTP Giden E-posta Sunucusu',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'SMTP Giden E-posta Sunucuları',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'E-posta Hesapları',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Gelen E-posta',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Giden E-posta',
    'LBL_ADD_CC' => 'Kopya Ekle',
    'LBL_ADD_BCC' => 'Gizli Kopya Ekle',
    'LBL_MOVE_TO_BCC' => 'Gizli Kopyaya Taşı',
    'LBL_ADD_TO_ADDR' => 'Kime Ekle',
    'LBL_SELECTED_ADDR' => 'Seçilmiş',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'E-posta Gönderilirken Sorun Çıktı',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'görüntüle',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' daha fazla',
    'LBL_MORE_OPTIONS' => 'Daha Fazla',
    'LBL_LESS_OPTIONS' => 'Daha Az',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Kişisel',
    'LBL_MAILBOX_TYPE_GROUP' => 'Grup',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Grup - Otomatik İçe Aktarma',
    'LBL_SEARCH_FOR' => 'Aranacak İfade',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Kişise</b>l: E-posta hesabına yalnız siz erişebilirsiniz. Bu hesabı yönetme ve hesaptaki e-postaları içe aktarma işlemlerini yalnız siz yapabilirsiniz.<br><b>Grup</b>: E-posta hesabına belirlenmiş takım üyeleri erişebilir. Bu hesabı yönetme ve hesaptaki e-postaları içe aktarma işlemlerini gruptaki tüm kullanıcılar yapabilir.<br><b>Grup - Otomatik İçe Aktarma</b>: E-Posta hesabına belirlenmiş takım üyeleri erişebilir. E-postalar otomatik olarak kayıtlar olarak içe aktarılır.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Alıcıları bulmak için E-posta adresini, Adını, Soyadını ya da Hesap Adını yazarak arayabilirsiniz.',
    'LBL_TEST_SETTINGS' => 'Ayarları Sına',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Bu İletinin Bir İçerik Metni Yok</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Lütfen konuyu yazın',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Lütfen iletinin içerik metnini yazın',
    'LBL_HAS_INVALID_EMAIL_CC' => 'Kopya alanındaki e-posta adresleri geçersiz',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'Gizli Kopya alanındaki e-posta adresleri geçersiz',
    'LBL_HAS_INVALID_EMAIL_TO' => 'Kime alanındaki e-posta adresleri geçersiz',
    'LBL_TEST_EMAIL_SUBJECT' => 'SuiteCRM deneme e-postası',
    'LBL_NO_SUBJECT' => '(konu yok)',
    'LBL_CHECKING_ACCOUNT' => 'Hesap Denetleniyor',
    'LBL_OF' => '/',
    'LBL_TEST_EMAIL_BODY' => 'Bu e-posta, SuiteCRM uygulamasındaki e-posta sunucu ayarlarının doğruluğunu sınamak için gönderilmiştir. Bu e-postayı aldıysanız, giden e-posta sunucusu ayarları doğru yapılmıştır.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Sistem yöneticisi henüz varsayılan giden e-posta hesabını yapılandırmamış olduğundan deneme e-postası gönderemezsiniz.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP kimlik doğrulaması kullanılsın mı?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Parolası:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Kapı Numarası:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Sunucusu:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Kullanıcı Adı:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Sunucu Özellikleri',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta hizmeti sağlayıcınızı seçin:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Parolası:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail Kimliği:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Parolası:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Posta Adresi:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Parolası:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Kullanıcı Adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Sunucu Kapı Numarası:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Sunucusu:',

    'LBL_EDIT_LAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Ek Dosya' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Destek Kaydı Ekle' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Potansiyel Ekle' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Kişi Ekle' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Hata Ekle' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Görev Ekle' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Doğru' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Kapat' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Yardım' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Bekleyin' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'E-postaları Denetle' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Yeni E-posta' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'E-posta Ayarları' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'E-postalar:Toplantılar',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',

    'LBL_CATEGORY' => 'Kategori',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'LBL_EMAIL_TEMPLATE' => 'E-posta Kalıbı',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Taslağı Sil',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Bu işlem bu e-postayı silecek. Devam etmek istiyor musunuz?',
    'LBL_EMAIL_DRAFT_DELETED' => 'Taslak silindi',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'Taslak silinmeye çalışılırken bir sorun çıktı.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'Kayıt eklendi.',
    'LBL_QUICK_CREATE_SUCCESS2' => 'Yeni kaydı görüntülemek için Tamam üzerine tıklayın.',
    'LBL_QUICK_CREATE_SUCCESS3' => 'E-postaya dönmek için İptal üzerine tıklayın.',

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Bir E-posta Kalıbı Uygula',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Bu işlem e-postanın İçerik Metni ve Konu bölümlerini değiştirecek. Devam etmek istiyor musunuz?',

    'LBL_MAILBOX_ID' => 'Posta Kutusu Kodu',
    'LBL_PARENT_ID' => 'Üst Öge Kodu',
    'LBL_LAST_SYNCED' => 'Son Eşitleme',
    'LBL_ORPHANED' => 'Yetim',
    'LBL_IMAP_KEYWORDS' => 'IMAP Anahtar Sözcükleri',
    'LBL_ERROR_NO_FOLDERS' => 'Hata: Kullanılabilecek bir klasör yok. Lütfen e-posta ayarlarınızı denetleyin.',
    'LBL_ORIGINAL_MESSAGE_SEPARATOR' => '---',


    'LBL_MARK_UNREAD' => 'Okunmamış Olarak İşaretle',
    'LBL_MARK_READ' => 'Okunmuş Olarak İşaretle',
    'LBL_MARK_FLAGGED' => 'İşaretlenmiş Olarak İşaretle',
    'LBL_MARK_UNFLAGGED' => 'İşaretlenmemiş Olarak İşaretle',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Abone Olma E-postası Gönderildi',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Abone Olma E-postası Gönderilemedi',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Abone Olma Kodunu Onayla',

    'ERR_NO_RETURN_ID' => 'Ek dosya bulunamadı.',

    'LBL_LIST_DATE_MODIFIED' => 'Son Değişiklik',
    'LNK_IMPORT_CAMPAIGNS' => 'Kampanyayı İçe Aktar',
    
    // Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'Kimden alanı ayarlanmamış.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'Kimden alanı doldurulmamış.',
    'ERR_FIELD_FROM_IS_INVALID' => 'Kimden alanı geçersiz.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'Kimden adresi ayarlanmamış.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'Kimden adresi doldurulmamış.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'Kimden adresi geçersiz.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'Kimden-adı ayarlanmamış.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'Kimden-adı doldurulmamış.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'Kimden-adı geçersiz.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'Kimden adı ayarlanmamış.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'Kimden adı doldurulmamış.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'Kimden adı geçersiz.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'Kimden adres ve ad çifti ayarlanmamış.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'Kimden adres ve ad çifti doldurulmamış.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'Kimden adres ve ad çifti geçersiz.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'Kimden adres ve ad çiftinin biçimi hatalı. "kimden@websitem.org <Kimden Adı>" biçimini kullanın.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'Kimden adres ve ad çiftinin ad bölümü geçersiz.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'Kimden adres ve ad çiftinin e-posta adresi bölümü hatalı.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'Kimden adres ve ad çifti kimden adresi ya da kimden adı ile eşleşmiyor.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'Kimden adres ve ad çifti kimden adresi ile eşleşmiyor.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'Kimden adres ve ad çifti kimden-adı ile eşleşmiyor.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'Kimden adres ve ad çifti kimden adı ile eşleşmiyor.',
);
