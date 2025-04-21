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
    //module
    'LBL_MODULE_NAME' => 'Belgeler',
    'LBL_MODULE_TITLE' => 'Belgeler: Ana Sayfa',
    'LNK_NEW_DOCUMENT' => 'Belge Ekle',
    'LNK_DOCUMENT_LIST' => 'Belgeleri Görüntüle',
    'LBL_DOC_REV_HEADER' => 'Belge Sürümleri',
    'LBL_SEARCH_FORM_TITLE' => 'Belge Arama',
    //vardef labels
    'LBL_NAME' => 'Belge Adı',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY' => 'Alt Kategori',
    'LBL_STATUS' => 'Durum',
    'LBL_CREATED_BY' => 'Ekleyen',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_DELETED' => 'Silindi',
    'LBL_MODIFIED' => 'Değiştiren Kodu',
    'LBL_MODIFIED_USER' => 'Düzenleyen',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_REVISIONS' => 'Sürümler',
    'LBL_RELATED_DOCUMENT_ID' => 'İlgili Belge Kodu',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'İlgili Belge Sürümü Kodu',
    'LBL_IS_TEMPLATE' => 'Kalıp',
    'LBL_TEMPLATE_TYPE' => 'Belge Türü',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi:',
    'LBL_REVISION_NAME' => 'Sürüm No',
    'LBL_MIME' => 'MIME Türü',
    'LBL_REVISION' => 'Sürüm',
    'LBL_DOCUMENT' => 'İlgili Belge',
    'LBL_LATEST_REVISION' => 'En Son Sürüm',
    'LBL_CHANGE_LOG' => 'Değişiklik Günlüğü',
    'LBL_ACTIVE_DATE' => 'Yayınlanma Tarihi',
    'LBL_EXPIRATION_DATE' => 'Son Kullanma Tarihi',
    'LBL_FILE_EXTENSION' => 'Dosya Uzantısı',
    'LBL_LAST_REV_MIME_TYPE' => 'Son sürümün MIME türü',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Belirtilmemiş',
    'LBL_HOMEPAGE_TITLE' => 'Belgelerim',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Belge Ekle',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Belge Adı:',
    'LBL_FILENAME' => 'Dosya Adı:',
    'LBL_LIST_FILENAME' => 'Dosya:',
    'LBL_DOC_VERSION' => 'Sürüm:',
    'LBL_FILE_UPLOAD' => 'Dosya:',

    'LBL_CATEGORY_VALUE' => 'Kategori:',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY_VALUE' => 'Alt Kategori:',
    'LBL_DOC_STATUS' => 'Durum:',
    'LBL_LAST_REV_CREATOR' => 'Sürümü Ekleyen:',
    'LBL_LASTEST_REVISION_NAME' => 'En son sürüm adı:',
    'LBL_SELECTED_REVISION_NAME' => 'Seçilmiş sürümün adı:',
    'LBL_CONTRACT_STATUS' => 'Sözleşme durumu:',
    'LBL_CONTRACT_NAME' => 'Sözleşme adı:',
    'LBL_DET_RELATED_DOCUMENT' => 'İlgili Belge:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "İlgili Belge Sürümü:",
    'LBL_DET_IS_TEMPLATE' => 'Kalıp mı? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Belge Türü:',
    'LBL_DOC_DESCRIPTION' => 'Açıklama:',
    'LBL_DOC_ACTIVE_DATE' => 'Yayınlanma Tarihi:',
    'LBL_DOC_EXP_DATE' => 'Son Kullanma Tarihi:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Belge Listesi',
    'LBL_LIST_DOCUMENT' => 'Belge',
    'LBL_LIST_SUBCATEGORY' => 'Alt Kategori',
    'LBL_LIST_REVISION' => 'Sürüm',
    'LBL_LIST_LAST_REV_CREATOR' => 'Yayınlayan',
    'LBL_LIST_LAST_REV_DATE' => 'Sürüm Tarihi',
    'LBL_LIST_VIEW_DOCUMENT' => 'Görüntüle',
    'LBL_LIST_ACTIVE_DATE' => 'Yayınlanma Tarihi',
    'LBL_LIST_EXP_DATE' => 'Son Kullanma Tarihi',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LINKED_ID' => 'Bağlantı Kodu',
    'LBL_SELECTED_REVISION_ID' => 'Seçilmiş sürümün kodu',
    'LBL_LATEST_REVISION_ID' => 'En son sürüm kodu',
    'LBL_SELECTED_REVISION_FILENAME' => 'Seçilmiş sürümün dosya adı',
    'LBL_FILE_URL' => 'Dosya adresi',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategori:',
    'LBL_SF_SUBCATEGORY' => 'Alt Kategori:',

    'DEF_CREATE_LOG' => 'Belge Eklendi',

    //error messages
    'ERR_DOC_NAME' => 'Belge Adı',
    'ERR_DOC_ACTIVE_DATE' => 'Yayınlanma Tarihi',
    'ERR_FILENAME' => 'Dosya Adı',
    'ERR_DOC_VERSION' => 'Belge Sürümü',
    'ERR_DELETE_CONFIRM' => 'Bu sürümü silmek istediğinize emin misiniz?',
    'ERR_DELETE_LATEST_VERSION' => 'Bir belgenin en son sürümünü silme izniniz yok.',
    'LNK_NEW_MAIL_MERGE' => 'E-posta Birleştirme',
    'ERR_MISSING_FILE' => 'Belgenin bir dosyası yok. Büyük olasılıkla yükleme sırasında bir sorun çıktı. Dosyayı yeniden yüklemeyi deneyin ya da sistem yöneticinizle görüşün.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Ad',
    'LBL_LIST_IS_TEMPLATE' => 'Kalıp mı?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Belge Türü',
    'LBL_LAST_REV_CREATE_DATE' => 'En Son Sürümün Eklenme Tarihi',
    'LBL_CONTRACTS' => 'Sözleşmeler',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_DOCUMENT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Belge Kaynağı Kodu',
    'LBL_DOC_TYPE' => 'Kaynak',
    'LBL_DOC_TYPE_POPUP' => 'Bu belgenin yükleneceği ve görüntüleneceği<br>bir kaynak seçin.',
    'LBL_DOC_URL' => 'Belge Kaynağı Adresi',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Dosya Adı',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'En son değiştirilen ilk 20 dosyayı ters sıralama ile aşağıda görebilirsiniz. Başka dosyalar bulmak için Arama özelliğini kullanın.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Dosya Adı',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Kullanıcı geçersiz bir dış API uygulamasına ({0}) erişmeye çalıştı',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Dış API uygulamasında ({0}) oturum açılamadı',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_CASES_SUBPANEL_TITLE' => 'Destek Kayıtları',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
);
