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
    'LBL_ALL_MODULES' => 'Tümü',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Atanmış Kullanıcı Kodu',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış Kişi',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme Tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme Tarihi',
    'LBL_MODIFIED' => 'Düzenleyen',
    'LBL_MODIFIED_NAME' => 'Değiştiren Adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NONINHERITABLE' => 'Devredilemez',
    'LBL_LIST_NONINHERITABLE' => 'Devredilemez',
    'LBL_NAME' => 'Ad',
    'LBL_CREATED_USER' => 'Ekleyen Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_LIST_FORM_TITLE' => 'Güvenlik Grupları',
    'LBL_MODULE_NAME' => 'Güvenlik Paketi Yönetimi',
    'LBL_MODULE_TITLE' => 'Güvenlik Paketi Yönetimi',
    'LNK_NEW_RECORD' => 'Güvenlik Grubu Ekle',
    'LNK_LIST' => 'Liste Görünümü',
    'LBL_SEARCH_FORM_TITLE' => 'Güvenlik Grubu Yönetimi Arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Güvenlik Grubu Yönetimi',
    'LBL_USERS' => 'Kullanıcılar',
    'LBL_USERS_SUBPANEL_TITLE' => 'Kullanıcılar',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
    'LBL_ROLES' => 'Roller',

    'LBL_CONFIGURE_SETTINGS' => 'Yapılandır',
    'LBL_ADDITIVE' => 'Genişletilmiş İzinler',
    'LBL_ADDITIVE_DESC' => "Kullanıcı kendisine ya da kullanıcı gruplarına atanmış tüm rollerdeki en üst düzey izinleri alır",
    'LBL_STRICT_RIGHTS' => 'Kısıtlanmış İzinler',
    'LBL_STRICT_RIGHTS_DESC' => "Bir kullanıcı birkaç gruba üye ise yalnız geçerli kaydın atanmış olduğu grubun ilgili izinlerini alır.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Kullanıcı Rolü Önceliği',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Bir kullanıcıya doğrudan bir rol atanmışsa bu rol diğer tüm grup rollerine göre öncelikli olur.',
    'LBL_INHERIT_TITLE' => 'Grup İzinlerini Devir Alma Kuralları',
    'LBL_INHERIT_CREATOR' => 'Ekleyen Kullanıcıdan Devir Alınsın',
    'LBL_INHERIT_CREATOR_DESC' => 'Bu seçenek etkinleştirildiğinde, bu kayıt için ekleyen kullanıcıya atanmış tüm gruplar devir alınır.',
    'LBL_INHERIT_PARENT' => 'Üst Kayıttan Devir Alınsın',
    'LBL_INHERIT_PARENT_DESC' => 'Bu seçenek etkinleştirildiğinde, örneğin bir kişi için bir destek kaydı eklenirse, ilgili kişi ile ilişkili gruplar devir alınır.',
    'LBL_USER_POPUP' => 'Yeni Kullanıcı Grubu Açılır Penceresi',
    'LBL_USER_POPUP_DESC' => 'Bu seçenek etkinleştirildiğinde, yeni bir kullanıcı eklenirken, kullanıcıyı gruplara atamak için GüvenlikGrupları açılır penceresi görüntülenir.',
    'LBL_INHERIT_ASSIGNED' => 'Atanmış Kullanıcıdan Devir Alınsın',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Bu seçenek etkinleştirildiğinde, kayıda atanmış kullanıcının tüm kullanıcı grupları devir alınır. Kayıda atanmış diğer gruplar KALDIRILMAZ.',
    'LBL_POPUP_SELECT' => 'Ekleyenin Grup Seçimi Kullanılsın',
    'LBL_POPUP_SELECT_DESC' => 'Bu seçenek etkinleştirildiğinde, birden fazla grupta bulunan bir kullanıcı tarafından bir kayıt eklendiğinde, ekleme sayfasında bir grup seçim panosu görüntülenir. Devre dışı bırakıldığında o bir grup devir alınır.',
    'LBL_FILTER_USER_LIST' => 'Kullanıcı Listesi Süzgeci',
    'LBL_FILTER_USER_LIST_DESC' => "Yönetici olmayan kullanıcılar yalnızca aynı grup(lar) içinde kullanıcı atayabilir",

    'LBL_DEFAULT_GROUP_TITLE' => 'Yeni Kayıtlar için Varsayılan Gruplar',
    'LBL_ADD_BUTTON_LABEL' => 'Ekle',
    'LBL_REMOVE_BUTTON_LABEL' => 'Sil',
    'LBL_GROUP' => 'Grup:',
    'LBL_MODULE' => 'Modül:',

    'LBL_MASS_ASSIGN' => 'Güvenlik Grupları: Toplu Atama',
    'LBL_ASSIGN' => 'Ata',
    'LBL_REMOVE' => 'Sil',
    'LBL_ASSIGN_CONFIRM' => 'Bu grubu şuraya eklemek istediğinize emin misiniz ',
    'LBL_REMOVE_CONFIRM' => 'Bu grubu şuradan kaldırmak istediğinize emin misiniz ',
    'LBL_CONFIRM_END' => ' seçilmiş kayıt(lar)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'GüvenlikGrubu/Kullanıcı',
    'LBL_USER_NAME' => 'Kullanıcı Adı',
    'LBL_SECURITYGROUP_NAME' => 'GüvenlikGrubu Adı',
    'LBL_HOMEPAGE_TITLE' => 'Grup İletileri',
    'LBL_TITLE' => 'Başlık',
    'LBL_ROWS' => 'Satırlar',
    'LBL_POST' => 'Gönder',
    'LBL_SELECT_GROUP_ERROR' => 'Lütfen bir grup seçip yeniden deneyin.',

    'LBL_GROUP_SELECT' => 'Bu kayıda erişebilecek grupları seçin',
    'LBL_ERROR_DUPLICATE' => 'SuiteCRM tarafından algılanan olası bir çift kayıt nedeniyle yeni eklenen kaydın güvenlik gruplarını el ile eklemeniz gerekiyor.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Arama süzgeci değiştirildiğinden güncelleme yapılamadı. Lütfen yeniden deneyin.',

    'LBL_INBOUND_EMAIL' => 'Gelen e-posta hesabı',
    'LBL_INBOUND_EMAIL_DESC' => 'Bir e-posta hesabına erişim izni, kullanıcı yalnız e-posta hesabına atanmış bir grupta ise verilsin.',
    'LBL_PRIMARY_GROUP' => 'Birincil Grup',
    'LBL_CHECKMARK' => 'Seçim İşareti',

);
