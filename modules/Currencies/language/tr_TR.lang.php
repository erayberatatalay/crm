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
    'LBL_MODULE_NAME' => 'Para Birimleri',
    'LBL_LIST_FORM_TITLE' => 'Para Birimleri',
    'LBL_CURRENCY' => 'Para Birimi',
    'LBL_ADD' => 'Ekle',
    'LBL_MERGE' => 'Birleştir',
    'LBL_MERGE_TXT' => 'Lütfen seçili para birimi ile eşleştirmek istediğiniz para birimi seçin. Bu onay işaretlenmiş tüm para birimlerini siler ve seçilmiş para birimi için ilişkili değeri yeniden atar.',
    'LBL_US_DOLLAR' => 'ABD Doları',
    'LBL_DELETE' => 'Sil',
    'LBL_LIST_SYMBOL' => 'Para Birimi Simgesi',
    'LBL_LIST_NAME' => 'Para Birimi Adı',
    'LBL_LIST_ISO4217' => 'ISO 4217 Kodu',
    'LBL_LIST_ISO4217_HELP' => 'Para birimi simgesi ve para birimi adını belirleyen üç karakterlik ISO 4217 kodunu yazın.',
    'LBL_UPDATE' => 'Güncelle',
    'LBL_LIST_RATE' => 'Dönüştürme Oranı',
    'LBL_LIST_RATE_HELP' => 'Euro için 0,5 dönüştürme oranı 10 TL = 5 Euro anlamına gelir.',
    'LBL_LIST_STATUS' => 'Durum',
    'LNK_NEW_CONTACT' => 'Yeni Kişi',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_NEW_OPPORTUNITY' => 'Yeni Fırsat',
    'LNK_NEW_CASE' => 'Yeni Destek Kaydı',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NEW_CALL' => 'Yeni Telefon Araması',
    'LNK_NEW_EMAIL' => 'Yeni E-posta',
    'LNK_NEW_MEETING' => 'Yeni Toplantı',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz? Bu para birimini kullanan kayıtlar, erişildiğinde sistem varsayılan para birimine dönüştürülür. Durumu devre dışı olarak ayarlamak daha iyi olabilir.',
    'LBL_BELOW_MIN' => 'Dönüşüm oranı 0 değerinden büyük olmalıdır',
    'currency_status_dom' =>
        array(
            'Active' => 'Etkin',
            'Inactive' => 'Devre Dışı',
        ),
    'LBL_CREATED_BY' => 'Ekleyen',
    'LBL_EDIT_LAYOUT' => 'Görünümü Düzenle' /*for 508 compliance fix*/,
);
