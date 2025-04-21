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
    'LBL_EDIT_LAYOUT' => 'Görünümü Düzenle',
    'LBL_EDIT_FIELDS' => 'Özel Alanları Düzenle',
    'LBL_SELECT_FILE' => 'Dosya Seçin',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_TOOLBOX' => 'Araç Kutusu',
    'LBL_SUITE_FIELDS_STAGE' => 'SuiteCRM Alanları (hazırlanma alanına eklemek için ögelere tıklayın)',
    'LBL_VIEW_SUITE_FIELDS' => 'SuiteCRM Alanlarını Görüntüle',
    'LBL_FAILED_TO_SAVE' => 'Kaydedilemedi',
    'LBL_CONFIRM_UNSAVE' => 'Yaptığınız hiçbir değişiklik kaydedilmeyecek. Devam etmek istediğinize emin misiniz?',
    'LBL_PUBLISHING' => 'Yayınlanıyor...',
    'LBL_PUBLISHED' => 'Yayınlandı',
    'LBL_FAILED_PUBLISHED' => 'Yayınlanamadı',
    'LBL_DROP_HERE' => '[Buraya Bırakın]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Ad',
    'LBL_LABEL' => 'Etiket',
    'LBL_MASS_UPDATE' => 'Toplu Güncelleme',
    'LBL_DEFAULT_VALUE' => 'Varsayılan Değer',
    'LBL_REQUIRED' => 'Zorunlu',
    'LBL_DATA_TYPE' => 'Tür',


    'LBL_HISTORY' => 'Geçmiş',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Studio Aracına Hoş Geldiniz!</h2><br>Bugün ne yapmak istersiniz?<br><b>Lütfen aşağıdan bir seçim yapın.</b>',
    'LBL_SW_EDIT_MODULE' => 'Bir Modülü Düzenle',
    'LBL_SW_EDIT_DROPDOWNS' => 'Açılan Listeleri Düzenle',
    'LBL_SW_EDIT_TABS' => 'Sekmeleri Yapılandır',
    'LBL_SW_RENAME_TABS' => 'Sekmeleri Yeniden Adlandır',
    'LBL_SW_EDIT_GROUPTABS' => 'Grup Sekmelerini Yapılandır',
    'LBL_SW_EDIT_PORTAL' => 'Portalı Düzenle',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Özel Alanları Onar',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Özel Alanları Aktar',

//Manager Backups History
    'LBL_MB_DELETE' => 'Sil',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Açılan Liste Ekle',
    'LBL_DROPDOWN_NAME' => 'Açılan Liste Adı:',
    'LBL_DROPDOWN_LANGUAGE' => 'Açılan Liste Dili:',
    'LBL_TABGROUP_LANGUAGE' => 'Dil:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Değeri Görüntüle',
    'LBL_DD_DATABASEVALUE' => 'Veritabanı Değeri',
    'LBL_DD_ALL' => 'Tümü',

//BUTTONS
    'LBL_BTN_SAVE' => 'Kaydet',
    'LBL_BTN_CANCEL' => 'İptal',
    'LBL_BTN_SAVEPUBLISH' => 'Kaydedip Dağıt',
    'LBL_BTN_HISTORY' => 'Geçmiş',
    'LBL_BTN_ADDROWS' => 'Satırlar Ekle',
    'LBL_BTN_UNDO' => 'Geri Al',
    'LBL_BTN_REDO' => 'Yinele',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Özel Alan Ekle',
    'LBL_BTN_TABINDEX' => 'Sekme Sıralamasını Düzenle',

//TABS
    'LBL_MODULES' => 'Modüller',
    'LBL_MODULE_NAME' => 'Yönetim',
    'LBL_CONFIGURE_GROUP_TABS' => 'Modül Menü Süzgeçlerini Yapılandır',
    'LBL_GROUP_TAB_WELCOME' => 'Aşağıdaki süzgeçler, modül gruplarını menüde görüntülemeyi seçen kullanıcılar için modül menüsündeki diğer listesinde görüntülenir. Modülleri sürükleyip bırakarak süzgeçler altına yerleştirebilirsiniz. Not: Boş süzgeçler menüde görüntülenmez.',
    'LBL_RENAME_TAB_WELCOME' => 'Sekmeyi yeniden adlandırmak için aşağıdaki tablodan herhangi bir sekmenin Görüntülenecek Değerine tıklayın.',
    'LBL_DELETE_MODULE' => 'Modülü&nbsp;süzgeçten<br />kaldır',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Kullanılabilecek bir dil seçin. Grup etiketlerini düzenledikten sonra etiketleri seçilmiş dile uygulamak için Kaydedip Dağıt üzerine tıklayın.',
    'LBL_ADD_GROUP' => 'Süzgeç Ekle',
    'LBL_NEW_GROUP' => 'Yeni Grup',
    'LBL_RENAME_TABS' => 'Modül Adı Değiştirme',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Hata: Anahtar Değeri Geçersiz: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'Kaydet' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Geri Al' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Yinele' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Satır içi' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Alan Ekle' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Ekranı Kapla' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Küçült' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Yayınla' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Satırlar Ekle' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Alan Ekle' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Düzenle' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Düzenlenecek dili seçin.',
    'LBL_SINGULAR' => 'Tekil Etiket',
    'LBL_PLURAL' => 'Çoğul Etiket',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Değişiklikleri uygulamak için <b>Kaydet</b> üzerine tıklayın.'

);
