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
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NEW_EMAIL' => 'E-posta Arşivle',
    'LNK_CALL_LIST' => 'Telefon Aramaları',
    'LNK_MEETING_LIST' => 'Toplantılar',
    'LNK_TASK_LIST' => 'Görevler',
    'LNK_NOTE_LIST' => 'Notlar',
    'LBL_ADD_FIELD' => 'Alan Ekle:',
    'LBL_SEARCH_FORM_TITLE' => 'Modül Arama',
    'COLUMN_TITLE_NAME' => 'Alan Adı',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Etiketi Görüntüle',
    'COLUMN_TITLE_LABEL_VALUE' => 'Etiket Değeri',
    'COLUMN_TITLE_LABEL' => 'Sistem Etiketi',
    'COLUMN_TITLE_DATA_TYPE' => 'Veri Türü',
    'COLUMN_TITLE_MAX_SIZE' => 'En Büyük Boyut',
    'COLUMN_TITLE_HELP_TEXT' => 'Yardım Metni',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Yorum Metni',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Zorunlu Alan',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Varsayılan Değer',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'IFrame Yüksekliği',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Varsayılan Adres',
    'COLUMN_TITLE_AUDIT' => 'Denetim',
    'COLUMN_TITLE_MIN_VALUE' => 'En Küçük Değer',
    'COLUMN_TITLE_MAX_VALUE' => 'En Büyük Değer',
    'COLUMN_TITLE_LABEL_ROWS' => 'Satırlar',
    'COLUMN_TITLE_LABEL_COLS' => 'Sütunlar',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# öge görüntülendi',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Sonraki Otomatik Arttırma Değeri',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Biçimi Devre Dışı Bırak',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Aralık Araması Yapılabilsin',
    'LBL_DROP_DOWN_LIST' => 'Açılan Liste',
    'LBL_RADIO_FIELDS' => 'Radyo Düğmeleri',
    'LBL_MULTI_SELECT_LIST' => 'Çoklu Seçim Listesi',
    'COLUMN_TITLE_PRECISION' => 'Doğruluk',
    'LBL_MODULE' => 'Modül',
    'COLUMN_TITLE_MASS_UPDATE' => 'Toplu Güncelleme',
    'COLUMN_TITLE_IMPORTABLE' => 'İçe Aktarılabilir',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Aynı Kayıtları Birleştir',
    'LBL_LABEL' => 'Etiket',
    'LBL_DATA_TYPE' => 'Veri Türü',
    'LBL_DEFAULT_VALUE' => 'Varsayılan Değer',
    'ERR_RESERVED_FIELD_NAME' => "Ayrılmış Anahtar Sözcük",
    'ERR_SELECT_FIELD_TYPE' => 'Lütfen Bir Alan Türü Seçin',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Aynı adlı bir alan zaten var',
    'LBL_BTN_ADD' => 'Ekle',
    'LBL_BTN_EDIT' => 'Düzenle',
    'LBL_GENERATE_URL' => 'Adres Oluştur',
    'LBL_CALCULATED' => 'Hesaplanan Değer',
    'LBL_LINK_TARGET' => 'Linkin açıldığı yer',
    'LBL_IMAGE_WIDTH' => 'Genişlik',
    'LBL_IMAGE_HEIGHT' => 'Yükseklik',
    'LBL_IMAGE_BORDER' => 'Sınır',
    'LBL_HELP' => 'Yardım' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Satır içi Düzeltme',
    'COLUMN_TITLE_PARENT_ENUM' => 'Üst Açılan Liste',
);
