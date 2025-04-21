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

    'LBL_ADMINISTRATION_MAIN' => 'Bağlayıcı Ayarları',
    'LBL_AVAILABLE' => 'Kullanılabilir',
    'LBL_BACK' => '< Önceki',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Bazı zorunlu alanlar doldurulmamış. Değişiklikler kaydedilsin mi?',
    'LBL_CONNECTOR_FIELDS' => 'Bağlayıcı Alanları',
    'LBL_DATA' => 'Veri',
    'LBL_DEFAULT' => 'Varsayılan',
    'LBL_DISABLED' => 'Devre dışı',
    'LBL_ENABLED' => 'Etkin',
    'LBL_EXTERNAL' => 'Bu seçenek etkinleştirildiğinde, kullanıcılar bu bağlayıcı için dış hesap kayıtları ekleyebilir.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Bu bağlayıcıyı kullanmak için, Bağlayıcı Özellikleri ayarları bölümündeki özellikler de ayarlanmalıdır.',
    'LBL_MERGE' => 'Birleştir',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Bağlayıcıları Etkinleştir',
    'LBL_MODIFY_DISPLAY_DESC' => 'Her bir bağlayıcı için hangi modüllerin etkinleştirileceğini seçin.',
    'LBL_MODULE_FIELDS' => 'Modül Alanları',
    'LBL_MODIFY_MAPPING_TITLE' => 'Bağlayıcı Alanlarını Eşleştir',
    'LBL_MODIFY_MAPPING_DESC' => 'Modül kayıtları içinde hangi bağlayıcı verilerinin görüntüleneceğini belirlemek için bağlayıcı alanları ile modül alanlarını eşleştirin.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Bağlayıcı Özelliklerini Ayarla',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Her bir bağlayıcının adres ve API anahtarları gibi özelliklerini yapılandırın.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Bağlayıcı Arama Yönetimi',
    'LBL_MODIFY_SEARCH' => 'Arama',
    'LBL_MODIFY_SEARCH_DESC' => 'Her bir modülde veri araması için kullanılacak bağlayıcı alanlarını seçin.',
    'LBL_MODULE_NAME' => 'Bağlayıcılar',
    'LBL_NO_PROPERTIES' => 'Bu bağlayıcı için yapılandırılabilecek bir özellik yok.',
    'LBL_SAVE' => 'Kaydet',
    'LBL_SUMMARY' => 'Özet',
    'LBL_STEP1' => 'Ara ve Veriyi Görüntüle',
    'LBL_STEP2' => 'Kayıtları şuraya aktar',
    'LBL_TEST_SOURCE' => 'Bağlayıcıyı Sına',
    'LBL_TEST_SOURCE_FAILED' => 'Sınama Başarısız Oldu',
    'LBL_TEST_SOURCE_SUCCESS' => 'Sınama Başarılı',
    'LBL_TITLE' => 'Veri Aktarımı',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Hata: Kayıt için herhangi bir ek ayrıntı bulunamadı.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Bu bağlayıcı için herhangi bir modül etkinleştirilmemiş. Bağlayıcıları Etkinleştirme bölümünden bu bağlayıcı için modül seçin.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Hata: Arama alanlarının tanımlanabileceği herhangi bir etkin bağlayıcı bulunamadı.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Hata: Modül ve bağlayıcı için herhangi bir arama alanı tanımlanmamış. Lütfen sistem yöneticinizle görüşün.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Hata: Sonuçlarda görüntülenmesi için eşleştirilmiş herhangi bir modül alanı yok. Lütfen sistem yöneticinizle görüşün.',
    'LBL_INFO_INLINE' => 'Bilgiler' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Kapat' /*for 508 compliance fix*/,

);
