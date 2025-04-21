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
    'ERR_NO_OPPS' => 'Lütfen, fırsat çizelgelerini görüntülemek için birkaç fırsat ekleyin.',
    'LBL_ALL_OPPORTUNITIES' => 'Tüm fırsatların toplam tutarı ',
    'LBL_CHART_TYPE' => 'Çizelge Türü:',
    'LBL_CREATED_ON' => 'Son çalışma',
    'LBL_CLOSE_DATE_START' => 'Öngörülen Tamamlanma Tarihi - Başlangıç:',
    'LBL_CLOSE_DATE_END' => 'Öngörülen Tamamlanma Tarihi - Bitiş:',
    'LBL_DATE_END' => 'Bitiş Tarihi:',
    'LBL_DATE_RANGE_TO' => 'bitiş',
    'LBL_DATE_RANGE' => 'Tarih aralığı',
    'LBL_DATE_START' => 'Başlangıç Tarihi:',
    'LBL_EDIT' => 'Düzenle',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Seçilmiş kullanıcılar için seçilmiş potansiyel kaynağına ve sonuçlara göre fırsat tutarlarının toplamını görüntüler. Sonuçlar Kapandı-Kazanıldı, Kapandı-Kaybedildi ya da herhangi başka bir değerdeki satış aşamasına göre görüntülenir.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Potansiyel Kaynağının Sonuçlarına Göre Tüm Fırsatlar',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Seçilmiş kullanıcılar için seçilmiş potansiyel kaynağına göre fırsat tutarlarının toplamını görüntüler.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Potansiyel Kaynağına Göre Tüm Fırsatlar',
    'LBL_LEAD_SOURCE_OTHER' => 'Diğer',
    'LBL_LEAD_SOURCES' => 'Potansiyel Kaynakları:',
    'LBL_MODULE_NAME' => 'Pano',
    'LBL_MODULE_TITLE' => 'Pano: Ana Sayfa',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Öngörülen kapanış tarihi belirtilen tarih aralığında kalan seçilmiş kullanıcılar için aylara ve sonuçlara göre fırsat tutarlarının toplamını görüntüler. Sonuçlar Kapandı-Kazanıldı, Kapandı-Kaybedildi gibi olabilecek tüm satış aşamalarına göre görüntülenir.',
    'LBL_OPP_SIZE' => 'Fırsat büyüklüğü',
    'LBL_OPP_THOUSANDS' => 'Bin',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'şu potansiyel kaynağının fırsatları',
    'LBL_OPPS_IN_STAGE' => ' satış aşaması şu olanlar',
    'LBL_OPPS_OUTCOME' => ' sonucu şu olanlar',
    'LBL_OPPS_WORTH' => 'fırsatların değeri',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Öngörülen kapanış tarihi belirtilen tarih aralığında kalan, seçilmiş satış aşamalarına göre fırsat tutarlarının toplamını görüntüler.',
    'LBL_REFRESH' => 'Yenile',
    'LBL_ROLLOVER_DETAILS' => 'Ayrıntıları görüntülemek için bir çubuğun üzerine gelin.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Ayrıntıları görüntülemek için bir bölgenin üzerine gelin.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Öngörülen kapanış tarihi belirtilen tarih aralığında kalan, seçilmiş kullanıcılar için seçilmiş satış aşamalarına göre fırsat tutarlarının toplamını görüntüler.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Satış Aşamalarına Göre Satış Olasılıkları',
    'LBL_SALES_STAGES' => 'Satış Aşamaları:',
    'LBL_TOTAL_PIPELINE' => 'Satış olasılıkları toplamı ',
    'LBL_USERS' => 'Kullanıcılar:',
    'LBL_YEAR_BY_OUTCOME' => 'Aylık Sonuçlara Göre Satış Olasılıkları',
    'LBL_YEAR' => 'Yıl:',
    'LNK_NEW_ACCOUNT' => 'Hesap Ekle',
    'LNK_NEW_CALL' => 'Telefon Aramasını Günlüğe Kaydet',
    'LNK_NEW_CASE' => 'Destek Kaydı Ekle',
    'LNK_NEW_CONTACT' => 'Kişi Ekle',
    'LNK_NEW_LEAD' => 'Potansiyel Ekle',
    'LNK_NEW_MEETING' => 'Toplantı Zamanla',
    'LNK_NEW_NOTE' => 'Not ya da Dosya Ekle',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Ekle',
    'LNK_NEW_TASK' => 'Görev Ekle',
    'NTC_NO_LEGENDS' => 'Yok',

    'LBL_TITLE' => 'Başlık: ',
    'LBL_MY_MODULES_USED_SIZE' => 'Erişim Sayısı',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Satış Aşamalarına Göre Satış Olasılıkları',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Sonuçlara Göre Potansiyel Kaynağı',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Aya Göre Sonuçlar',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Potansiyel Kaynağına Göre Satış Olasılıkları',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Satış Aşamasına Göre Satış Olasılıklarım',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Kullandığım Modüller (Son 30 gün)',
);
