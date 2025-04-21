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
    'LBL_LOADING' => 'Yükleniyor' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Seçenekleri Gizle' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Paket için bir <b>Ad</b> yazın. Yazacağınız ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır (Örnek: İK_Yönetimi)<br/><br/>Paket için <b>Sorumlu</b> ve <b>Açıklama</b> bilgilerini kullanabilirsiniz.<br/><br/>Paketi oluşturmak için <b>Kaydet</b> üzerine tıklayın.',
            'modify' => '<b>Paket</b> için özellikler ve yapılabilecek işlemler burada görüntülenir. <br><br>Paketin <b>Adını</b>, <b>Sorumlusunu</b> ve <b>Açıklamasını</b> düzenleyebilirsiniz. Bunun yanında paket içinde yer alan tüm modülleri görüntüleyebilir ve özelleştirebilirsiniz.<br><br>Pakete bir modül eklemek için <b>Yeni Modül</b> üzerine tıklayın.<br><br>Pakette en az bir modül bulunuyorsa, paketi <b>Yayınlanabilir</b>, <b>Dağıtabilir</b> ve paket içindeki yapılan özelleştirmeleri <b>Dışa Aktarabilirsiniz</b>.',
            'name' => 'Geçerli paketin <b>Adı</b>.<br/><br/>Yazılan ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır (Örnek: İK_Yönetim)',
            'author' => 'Kurulum sırasında paketi oluşturan varlığın adı olarak görüntülenecek <b>Sorumlu</b> bilgisi.<br><br>Sorumlu bir kişi ya da kuruluş olabilir.',
            'description' => 'Kurulum sırasında görüntülenecek pakete ait <b>Açıklama</b>.',
            'publishbtn' => 'Yazılmış tüm verileri kaydetmek ve paketin kurulabilir sürümünün .zip arşivi dosyasını oluşturmak için <b>Yayınla</b>üzerine tıklayın.<br><br>.zip dosyasını yüklemek ve paketi kurmak için <b>Modül Yükleyiciyi</b> kullanın.',
            'deploybtn' => 'Yazılmış tüm verileri kaydetmek ve paketi tüm modülleri ile kurmak için <b>Dağıt</b> üzerine tıklayın.',
            'duplicatebtn' => 'Paketin içeriğini yeni bir pakete kopyalamak ve yeni paketi görüntülemek için <b>Kopyala</b> üzerine tıklayın.<br/><br/>Yeni paketin adı, yeni paketin kopyalandığı paketin adının sonuna otomatik olarak bir numara eklenerek oluşturulur. Yeni paketin adını bir <b>Ad</b> yazarak ve <b>Kaydet</b> üzerine tıklayarak değiştirebilirsiniz.',
            'exportbtn' => 'Paket içinde yapılan özelleştirmeleri bir zip arşivi dosyasına kaydetmek için <b>Dışa Aktar</b> üzerine tıklayın.<br><br> Oluşturulan dosya paketin kurulabilir bir sürümü değildir.<br><br>.zip dosyasının içe aktarılması ve paketin özelleştirmeler ile Modül Oluşturucuda görüntülenmesi için <b>Modül Yükleyici</b> uygulamasını kullanın.',
            'deletebtn' => 'Bu paketi ve bu paket ile ilgili tüm dosyaları silmek için <b>Sil</b> üzerine tıklayın.',
            'savebtn' => 'Paket ile ilgili yazılan tüm verileri kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'existing_module' => 'Özellikleri düzenlemek ve modül ile ilgili alanları, ilişkileri ve görünümü özelleştirmek için <b>Modül</b> simgesine tıklayın.',
            'new_module' => 'Bu paketin yeni bir modülünü oluşturmak için <b>Yeni Modül</b> üzerine tıklayın.',
            'key' => '5 harfli, alfa-sayısal <b>Anahtar</b>, geçerli paketteki tüm modüller için tüm klasörlerin, sınıf adlarının ve veritabanı tablolarının önüne eklenir. <br><br> Anahtar, tablo adlarını eşsiz kılmak için kullanılır.',
            'readme' => 'Bu pakete bir <b>Beni oku</b> metni eklemek için tıklayın.<br><br> Beni oku metni kurulum sırasında görüntülenir.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Modül için bir <b>Ad</b> belirtin. Belirttiğiniz <b>Etiket</b> gezinme sekmesinde görüntülenir.<br/><br/><b>Gezinme Sekmesi</b> kutusunu işaretleyerek modül için bir gezinme sekmesinin görüntülenmesini sağlayabilirsiniz.<br/><br/>Ardından eklemek istediğiniz modül türünü seçin.<br/><br/>Bir kalıp türü seçin. Her kalıpta belirli bir alan kümesinin yanında, modülün temelini oluşturmak için kullanabileceğiniz önceden tanımlanmış görünümler bulunur.<br/><br/>Modülü eklemek için <b>Kaydet</b> üzerine tıklayın.',
            'modify' => 'Modül özelliklerini düzenleyebilir ya da bu modül ile ilgili <b>Alanları</b>, <b>İlişkileri</b> ve <b>Görünümleri</b> özelleştirebilirsiniz.',
            'importable' => '<b>İçe Aktarılabilir</b> seçeneği etkinleştirildiğinde, bu modülde verileri içe aktarma özelliği kullanılabilir.<br><br>Modülün kısayollar panosuna bir İçe Aktarma Yardımcısı bağlantısı eklenir. İçe Aktarma Yardımcısı kullanılarak dış kaynaklardan alınan veriler özel modüle aktarılabilir.',
            'team_security' => '<b>Takım Güvenliği</b> seçeneği etkinleştirildiğinde modülde takım güvenliği özellikleri kullanılabilir.<br/><br/>Modüldeki kayıtlarda bir Takım Seçimi alanı görüntülenir ',
            'reportable' => 'Bu seçenek etkinleştirildiğinde, modülde raporlama özellikleri kullanılabilir.',
            'assignable' => 'Bu seçenek etkinleştirildiğinde, modülde bulunan bir kayıt seçilecek bir kullanıcıya atanabilir.',
            'has_tab' => '<b>Gezinme Sekmesi</b> seçeneği etkinleştirildiğinde, modül için bir gezinme sekmesi görüntülenir.',
            'acl' => 'Bu seçenek etkinleştirildiğinde, modülde Alan Düzeyinde Güvenlik sağlayan Erişim Denetimi özellikleri kullanılabilir.',
            'studio' => 'Bu seçenek etkinleştirildiğinde, yöneticiler bu modülü Studio kullanarak özelleştirebilir.',
            'audit' => 'Bu seçenek etkinleştirildiğinde, bu modül için Denetim özelliği etkinleştirilir. Belirli alanlarda yapılan değişiklikler kayıt edilir ve gerektiğinde değişiklik geçmişi yöneticiler tarafından incelenebilir.',
            'viewfieldsbtn' => 'Modülle ilişkili alanları görüntülemek, özel alanlar eklemek ve düzenlemek için <b>Alanları Görüntüle</b> üzerine tıklayın.',
            'viewrelsbtn' => 'Modülle ilgili ilişkileri görüntülemek ve yeni ilişkiler eklemek için <b>İlişkileri Görüntüle</b> üzerine tıklayın.',
            'viewlayoutsbtn' => 'Modül görünümlerini görüntülemek ve alanların düzenini özelleştirmek için <b>Görünümleri Görüntüle</b> üzerine tıklayın.',
            'duplicatebtn' => 'Modülün içeriğini yeni bir modüle kopyalamak ve yeni paketi görüntülemek için <b>Kopyala</b> üzerine tıklayın.<br/><br/>Yeni modülün adı, yeni modülün kopyalandığı modülün adının sonuna otomatik olarak bir numara eklenerek oluşturulur.',
            'deletebtn' => 'Bu modülü silmek için <b>Sil</b> üzerine tıklayın.',
            'name' => 'Geçerli modülün <b>Adı</b>.<br/><br/>Yazılan ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır (Örnek: İK_Yönetim)',
            'label' => 'Gezinme sekmesinde modül için görüntülenecek <b>Etiket</b>. ',
            'savebtn' => 'Modül ile ilgili yazılan tüm verileri kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'type_basic' => '<b>Temel</b> kalıp türünde Ad, Atanan Kişi, Takım, Oluşturulma Tarihi ve Açıklama gibi temel alanlar bulunur.',
            'type_company' => '<b>Firma</b> kalıp türünde Firma Adı, Endüstri ve Fatura Adresi gibi kuruluşlara özgü alanlar bulunur.<br/><br/>Standart Hesaplar modülüne benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_issue' => '<b>Sorun</b> kalıp türünde Numara, Durum, Öncelik ve Açıklama gibi destek kaydı ve hata ayıklama işlemlerine özgü alanlar bulunur.<br/><br/>Standart Destek Kaydı ve Hata Ayıklama modüllerine benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_person' => '<b>Kişi</b> kalıp türünde Hitap, Unvan, Ad, Adres ve Telefon Numarası gibi kişiye özgü alanlar bulunur.<br/><br/>Standart İlgili Kişi ve Potansiyel modüllerine benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_sale' => '<b>Satış</b> kalıp türünde Potansiyel Kaynağı, Aşama, Tutar ve Olasılık gibi fırsata özgü alanlar bulunur.<br/><br/>Standart Fırsat modülüne benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',
            'type_file' => '<b>Dosya</b> kalıp türünde Dosya Adı, Belge Türü ve Yayınlanma Tarihi gibi belgeye özgü alanlar bulunur.<br><br>Standart Belgeler modülüne benzer modüller eklemek için bu kalıbı kullanabilirsiniz.',

        ),
        'dropdowns' => array(
            'default' => 'Uygulamadaki tüm <b>Açılan Listeler</b> burada görüntülenir.<br><br>Açılan listeler, herhangi bir modüldeki açılan liste alanlarında kullanılabilir.<br><br>Var olan bir açılan listedeyi düzenlemek için açılan listenin adına tıklayın.<br><br>Yeni bir açılan liste eklemek için <b>Açılan Liste Ekle</b> üzerine tıklayın.',
            'editdropdown' => 'Açılan Listeler herhangi bir modülde standart ya da özelleştirilmiş açılan liste alanlarında kullanılabilir.<br><br>Açılan Liste için bir <b>Ad</b> yazın.<br><br>Uygulamaya herhangi bir dil paketi kurulmuş ise liste ögeleri için kullanılacak bir <b>Dil</b> seçebilirsiniz.<br><br><b>Öge Adı</b> alanında, açılan liste için bir ad yazın. Bu ad kullanıcılara görüntülenmez.<br><br><b>Görüntülenecek Etiket</b> alanına kullanıcılar tarafından görülebilecek bir etiket yazın.<br><br>Öge adını ve Etiketi yazdıktan sonra açılan listeye ögeleri eklemek için <b>Ekle</b> üzerine tıklayın.<br><br>Listedeki ögelerin sıralamasını düzenlemek için ögeleri sürükleyip görüntülenmesini istediğiniz konuma bırakın.<br><br>Bir açılan liste ögesinin görüntülenen etiketini düzenlemek için <b>Düzenle Simgesi</b> üzerine tıklayıp yeni etiketi yazın. Açılan listeden bir öge silmek için, <b>Sil Simgesi</b> üzerine tıklayın.<br><br>Görüntülenecek bir etiket üzerinde yapılmış değişiklikleri geri almak için,<b>Geri Al</b> üzerine, yapılmış bir değişikliği yinelemek için <b>Yinele</b> üzerine tıklayın.<br><br>Açılan listeyi kaydetmek için <b>Kaydet</b> üzerine tıklayın.',

        ),
        'subPanelEditor' => array(
            'modify' => '<b>Alt Panoda</b> görüntülenecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda Alt Panoda görüntülenen alanlar bulunur.<br/><br/><b>Gizli</b> sütununda varsayılan sütununa eklenebilecek alanlar bulunur.'
        ,
            'savebtn' => 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.',
            'historyBtn' => 'Geçmişte kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi Görüntüle</b> üzerine tıklayın.',
            'historyDefault' => 'Bir görünümün özgün şeklini geri yüklemek için <b>Varsayılanları Geri Yükle</b> üzerine tıklayın.',
            'Hidden' => '<b>Gizli</b> alanlar alt panoda görüntülenmez.',
            'Default' => '<b>Varsayılan</b> alanlar alt panoda görüntülenir.',

        ),
        'listViewEditor' => array(
            'modify' => '<b>Liste Görünümünde</b> görüntülenebilecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda Liste Görünümünde görüntülenen alanlar bulunur.<br/><br/><b>Kullanılabilir</b> sütununda kullanıcının Arama içinden Liste Görünümünü özelleştirmek için seçebileceği alanlar bulunur.<br/><br/><b>Gizli</b> sütununda Varsayılan ya da Kullanılabilir sütunlarına eklenebilecek alanlar bulunur.'
        ,
            'savebtn' => 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi Görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi Görüntüle</b> içindeki <b>Geri Yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları Geri Yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları Geri Yükle</b> seçeneği yalnız özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'Hidden' => '<b>Gizli</b> alanlar Liste Görünümlerinde kullanıcılara görüntülenmez.',
            'Available' => '<b>Kullanılabilecek</b> alanlar varsayılan olarak Liste Görünümlerinde görüntülenmez ancak daha sonra kullanıcılar tarafından bu görünümlere eklenebilir.',
            'Default' => '<b>Varsayılan</b> alanlar kullanıcılar tarafından özelleştirilmemiş Liste Görünümlerinde görüntülenir.'
        ),
        'popupListViewEditor' => array(
            'modify' => '<b>Liste Görünümünde</b> görüntülenebilecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda Liste Görünümünde varsayılan olarak görüntülenen alanlar bulunur.<br/><br/><b>Gizli</b> sütununda Varsayılan ya da Kullanılabilir sütunlarına taşınabilecek alanlar bulunur.'
        ,
            'savebtn' => 'Yaptığınız değişiklikleri kaydetmek ve modül içinde etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi Görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi Görüntüle</b> içindeki <b>Geri Yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları Geri Yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları Geri Yükle</b> seçeneği yalnız özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'Hidden' => '<b>Gizli</b> alanlar Liste Görünümlerinde kullanıcılara görüntülenmez.',
            'Default' => '<b>Varsayılan</b> alanlar kullanıcılar tarafından özelleştirilmemiş Liste Görünümlerinde görüntülenir.'
        ),
        'searchViewEditor' => array(
            'modify' => '<b>Süzgeç</b> formunda görüntülenebilecek tüm alanlar burada görüntülenir.<br><br><b>Varsayılan</b> sütununda Arama formunda görüntülenecek alanlar bulunur.<br/><br/><b>Gizli</b> sütununda yönetici olarak Arama formuna eklenebilecek alanlar bulunur.'
        ,
            'savebtn' => '<b>Kaydedip Dağıt</b> üzerine tıklandığında tüm değişiklikleri kaydedilir ve etkinleştirilir',
            'Hidden' => '<b>Gizli</b> alanlar Aramada görüntülenmez.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi Görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi Görüntüle</b> içindeki <b>Geri Yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları Geri Yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları Geri Yükle</b> seçeneği yalnız özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'Default' => 'Aramada görüntülenecek <b>Varsayılan</b> alanlar.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => '<b>Görünüm</b> bölgesinde şu anda <b>Ayrıntı Görünümünde</b> görüntülenen alanlar bulunur.<br/><br/><b>Araç Kutusunda</b> <b>Çöp Kutusu</b> ile görünüme eklenebilecek alanlar ve görünüm bileşenleri bulunur.<br><br>Alanları ve görünüm bileşenlerini <b>Araç Kutusu</b> ile <b>Görünüm</b> arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Herhangi bir alanı görünümden kaldırmak için alanı sürükleyip <b>Çöp Kutusuna</b> bırakın. Çöpe Atılan alanlar Araç Kutusunda yeniden görünüme eklenebilecek şekilde görüntülenir.',
            'defaultquickcreate' => '<b>Görünüm</b> bölgesinde şu anda <b>Hızlı Ekle</b> formunda görüntülenen alanlar bulunur.<br><br>Ekle düğmesine tıklandığında, modülün alt panolarında Hızlı Ekle formu görüntülenir.<br/><br/><b>Araç Kutusunda</b> <b>Çöp Kutusu</b> ile görünüme eklenebilecek alanlar ve görünüm bileşenleri bulunur.<br><br>Alanları ve görünüm bileşenlerini <b>Araç Kutusu</b> ile <b>Görünüm</b> arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Herhangi bir alanı görünümden kaldırmak için alanı sürükleyip <b>Çöp Kutusuna</b> bırakın. Çöpe Atılan alanlar Araç Kutusunda yeniden görünüme eklenebilecek şekilde görüntülenir.',
            //this default will be used for edit view
            'default' => '<b>Görünüm</b> bölgesinde şu anda <b>Düzenleme Görünümünde</b> görüntülenen alanlar bulunur.<br/><br/><b>Araç Kutusunda</b> <b>Çöp Kutusu</b> ile görünüme eklenebilecek alanlar ve görünüm bileşenleri bulunur.<br><br>Alanları ve görünüm bileşenlerini <b>Araç Kutusu</b> ile <b>Görünüm</b> arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Herhangi bir alanı görünümden kaldırmak için alanı sürükleyip <b>Çöp Kutusuna</b> bırakın. Çöpe Atılan alanlar Araç Kutusunda yeniden görünüme eklenebilecek şekilde görüntülenir.',
            'saveBtn' => 'Görünüm üzerinde, son kayıt işleminden sonra yapılan değişiklikleri korumak için <b>Kaydet</b> üzerine tıklayın.<br><br>Kaydedilen değişiklikler Dağıtılana kadar modülde görüntülenmez.',
            'historyBtn' => 'Daha önce kaydedilmiş görünümleri görüntülemek ve geri yüklemek için <b>Geçmişi Görüntüle</b> üzerine tıklayın.<br><br><b>Geçmişi Görüntüle</b> içindeki <b>Geri Yükle</b> üzerine tıklayarak önceden kaydedilmiş görünümleri geri yükleyebilirsiniz. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'historyDefault' => 'Bir görünümü özgün şekline geri döndürmek için <b>Varsayılanları Geri Yükle</b> üzerine tıklayın.<br><br> <b>Varsayılanları Geri Yükle</b> seçeneği yalnız özgün görünümdeki alan düzenini yükler. Alan etiketlerini düzenlemek için her alanın yanındaki Düzenle simgesine tıklayın.',
            'publishBtn' => 'Görünüm üzerinde, son kayıt işleminden sonra yapılan değişiklikleri korumak ve bu değişiklikleri modül üzerinde etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.<br><br>Kaydedilen değişiklikler anında modülde görüntülenir.',
            'toolbox' => '<b>Araç Kutusunda</b> <b>Çöp Kutusu</b> ve görünüme eklenebilecek alan ve görünüm bileşenleri bulunur.<br/><br/>Alanları ve bileşenleri Araç Kutusu ile Görünüm arasında sürükleyip bırakarak görünümü düzenleyebilirsiniz.<br><br>Görünüm bileşenleri <b>Panolar</b> ve <b>Satırlardır</b>. Görünüme yeni bir satır ya da pano ekleyerek alanların eklenebileceği yeni bölgeler oluşturulabilir.<br/><br/>.Bir alanı başka bir alanla değişmek istediğinizde yeni alanı sürükleyip değiştirmek istediğiniz alanın üzerine bırakın.<br/><br/><b>Doldurucu</b> alanı sürüklendiği görünümde boş bir alan oluşturmak için kullanılır.',
            'panels' => '<b>Görünüm</b> bölgesi, görünümde yapılan değişikliklerin uygulanmasından sonra, görünümün modülde nasıl olacağının görülmesini sağlar.<br/><br/>Alanları, satırları ve panoları istediğiniz konuma sürükleyip bırakarak taşıyabilirsiniz.<br/><br/>Görünüm bileşenlerini Araç Kutusu üzerindeki <b>Çöp Kutusuna</b> sürükleyip bırakarak silebilir ya da <b>Araç Kutusundan</b> görünüm alanında görüntülenmesini istediğiniz konuma sürükleyip bırakarak ekleyebilirsiniz.',
            'delete' => 'Herhangi bir bileşeni görünümden kaldırmak için sürükleyip buraya bırakın',
            'property' => 'Bu alan için görüntülenecek etiketi düzenleyin.<br/><b>Sekme Sıralaması</b> sekme anahtarının alanlar arasındaki geçiş sıralamasını belirler.',
        ),
        'fieldsEditor' => array(
            'default' => 'Modül için kullanılabilecek <b>Alanlar</b> burada adlarına göre sıralanmış olarak görüntülenir.<br><br>Modül için daha sonra eklenen özel alanlar varsayılan olarak kullanılabilecek alanların üzerinde görüntülenir.<br><br>Bir alanı düzenlemek için <b>Alan Adına</b> tıklayın.<br/><br/>Yeni bir alan eklemek için <b>Alan Ekle</b> üzerine tıklayın.',
            'mbDefault' => 'Modül için kullanılabilecek <b>Alanlar</b> burada adlarına göre sıralanmış olarak görüntülenir.<br><br>Bir alanın özelliklerini ayarlamak için Alan Adı üzerine tıklayın.<br><br>Yeni bir alan eklemek için <b>Alan Ekle</b> üzerine tıklayın. Yeni alanın etiketi, diğer özellikleri gibi alanın eklenmesinden sonra Alan Adına tıklanarak düzenlenebilir.<br><br>Modül dağıtıldıktan sonra Modül Oluşturucu içinde eklenmiş yeni alanlar Studio içinde eklenmiş standart alanlar olarak değerlendirilir.',
            'addField' => 'Yeni alanın <b>Veri Türünü</b> seçin. Seçtiğiniz veri türü bu alana yazılabilecek karakterlerin türünü belirler. Örneğin, Tam Sayı türündeki bir alana yalnız tam sayı değerleri yazılabilir.<br><br>Alan için bir <b>Ad</b> yazın. Ad alfa-sayısal karakterlerden oluşmalı ve içinde boşluk karakteri bulunmamalıdır. Yalnız alt çizgi karakteri kullanılabilir.<br><br><b>Görüntülenecek Etiket</b>, alanın modül görünümlerinde görüntülenecek etiketidir.<b>Sistem Etiketi</b> alanı yazılım kodu içinde belirtmek için kullanılır.<br><br>Alan için seçtiğiniz veri türüne bağlı olarak, alan için aşağıdaki özelliklerin bazıları ya da tümü ayarlanabilir:<br><br><b>Yardım Metni</b>, kullanıcı fare ile alanın üzerine geldiğinde geçici olarak görüntülenir ve ilgili alana nasıl bir değer yazılacağı hakkında kullanıcıya bilgi verir.<br><br><b>Yorum Metni</b> yalnız Studio ya da Modül Oluşturucu araçlarında görüntülenir ve yöneticilere alan hakkında bilgi vermek için kullanılabilir.<br><br><b>Varsayılan Değer</b>, veri yazılmadan önce alanda görüntülenir. Kullanıcılar bu varsayılan değeri kullanabilir ya da yeni bir değer yazabilir.<br><br><b>Toplu Güncelleme</b> seçeneği alanın Toplu Güncelleştirme özelliğini kullanıp kullanmayacağını belirler.<br><br><b>En Büyük Boyut</b>, alana yazılabilecek en fazla karakter sayısını belirler.<br><br><b>Zorunlu Alan</b> seçeneği etkinleştirildiğinde alana veri yazılması zorunlu olur. Alanın bulunduğu bir kaydın kaydedilebilmesi için zorunlu alanların doldurulması gerekir.<br><br><b>Raporlanabilir</b> seçeneği etkinleştirildiğinde, alan süzgeçlerde Raporlarda görüntülenir.<br><br><b>Denetim</b> seçeneği etkinleştirildiğinde, alan üzerinde yapılan değişiklikler değişiklik günlüğüne kaydedilir.<br><br><b>İçe Aktarılabilir</b> seçeneği, alanın İçe Aktarma Yardımcısı ile içe aktarılıp aktarılmayacağını ya da zorunlu olup olacağını belirler.<br><br><b>Çift Kayıtları Birleştir</b> seçeneği Çift Kayıtları Birleştirme ya da Çift Kayıtları Bulma özelliklerinin kullanılıp kullanılmayacağını belirler.<br><br>Bazı veri türleri ayarlanabilecek başka özellikler bulunabilir.',
            'editField' => 'Bu alanın özellikleri özelleştirilebilir.<br><br>Aynı özelliklere sahip yeni bir alan eklemek için <b>Kopyala</b> üzerine tıklayın.',
            'mbeditField' => 'Bir kalıp alanının <b>Görüntülenecek Etiketi</b> özelleştirilebilir. Alanın diğer özellikleri özelleştirilemez.<br><br>.Aynı özelliklerde yeni bir alan eklemek için <b>Kopyala</b> üzerine tıklayın.<br><br>Modülde görüntülenmemesi için bir alanı kaldırmak istiyorsanız, alanı ilgili <b>Görünümden</b> kaldırın.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Studio aracı üzerinde yapılan özelleştirmeler dışa aktarılarak, başka bir sisteme <b>Modül Yükleyici</b> üzerinden yüklenebilir.<br><br>Öncelikle bir <b>Paket Adı</b> yazın. Ayrıca paket için <b>Sorumlu</b> ve <b>Açıklama</b> bilgilerini de yazabilirsiniz.<br><br>Dışarı aktarmak istediğiniz, özelleştirilmiş modülleri seçin. Yalnız özelleştirilmiş modüller seçilmek üzere görüntülenir.<br><br>Ardından <b>Dışa Aktar</b> üzerine tıklayarak özelleştirmelerin bulunduğu .zip arşivi dosyasını oluşturabilirsiniz.',
            'exportCustomBtn' => 'Dışa aktarmak istediğiniz özelleştirmeleri bir .zip arşivi dosyasına kaydetmek için <b>Dışa Aktar</b> üzerine tıklayın.',
            'name' => 'Kurulum sırasında görüntülenecek pakete ait <b>Ad</b>.',
            'author' => 'Kurulum sırasında paketi oluşturan varlığın adı olarak görüntülenecek <b>Sorumlu</b> bilgisi. Sorumlu bir kişi ya da kuruluş olabilir.',
            'description' => 'Kurulum sırasında görüntülenecek pakete ait <b>Açıklama</b>.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Geliştirici Araçları</b> bölümüne hoş geldiniz.<br/><br/>Bu bölümdeki araçları kullanarak, standart ve özelleştirilmiş modüller ile özel alanlar eklenip yönetilebilir.',
            'studioBtn' => 'Dağıtılmış modülleri özelleştirmek için <b>Studio</b> aracını kullanabilirsiniz.',
            'mbBtn' => 'Yeni modüller oluşturmak için <b>Modül Oluşturucu</b> aracını kullanın.',
            'sugarPortalBtn' => 'SuiteCRM Portal bölümünü yönetmek ve özelleştirmek için <b>SuiteCRM Portal Düzenleyici</b> aracını kullanabilirsiniz.',
            'dropDownEditorBtn' => 'Açılan liste alanlarında kullanılabilecek genel açılan listeleri eklemek ve düzenlemek için <b>Açılan Liste Düzenleyici</b> aracını kullanabilirsiniz.',
            'appBtn' => 'Uygulama kipinde, ana sayfada kaç tane TPS raporu görüntüleneceği gibi program özellikleri özelleştirilebilir',
            'backBtn' => 'Önceki adıma dön.',
            'studioHelp' => 'Hangi bilgilerin nasıl görüntüleneceğini belirlemek için <b>Studio</b> aracını kullanabilirsiniz.',
            'moduleBtn' => 'Bu modülü düzenlemek için tıklayın.',
            'moduleHelp' => 'Modül için özelleştirilebilecek bileşenler burada görüntülenir.<br><br>Düzenlemek istediğiniz bileşeni seçmek için bir simgeye tıklayın.',
            'fieldsBtn' => 'Modül içinde bilgilerin tutulacağı <b>Alanları</b> ekler ve özelleştirir.',
            'labelsBtn' => 'Modüldeki alanlar ve diğer başlıklar için görüntülenen <b>Etiketleri</b> düzenler.',
            'relationshipsBtn' => 'Modül <b>İlişkilerini</b> ekler ya da görüntüler.',
            'layoutsBtn' => 'Modül <b>Görünümlerini</b> özelleştirir. Modüldeki alanların farklı şekillerde görüntülenmesini sağlar.<br><br>Hangi alanların görüntüleneceğini ve hangi düzende görüntüleneceği belirlenebilir.',
            'subpanelBtn' => 'Modülde <b>Alt Panolarda</b> hangi alanların görüntüleneceğini belirler.',
            'portalBtn' => '<b>SuiteCRM Portal</b> içinde görüntülenecek modül <b>Görünümlerini</b> özelleştirir.',
            'layoutsHelp' => 'Özelleştirilebilecek modül <b>Görünümleri</b> burada görüntülenir.<br><br> Görünümler alanları ve alan verilerini görüntüler.<br><br>Düzenlemek istediğiniz görünümü seçmek için bir simgeye tıklayın.',
            'subpanelHelp' => 'Modülün özelleştirilebilecek <b>Alt Panoları</b> burada görüntülenir.<br><br>Düzenlemek istediğiniz modülü seçmek için bir simgeye tıklayın.',
            'newPackage' => 'Yeni bir paket eklemek için <b>Yeni Paket</b> üzerine tıklayın.',
            'exportBtn' => 'Studio aracı üzerinde belirli modüller için yapılan özelleştirmelerin bulunduğu bir paket oluşturmak ve indirmek için <b>Özelleştirmeleri Dışa Aktar</b> üzerine tıklayın.',
            'mbHelp' => 'Standart ya da özel nesnelere dayalı özel modüllerin bulunduğu paketler oluşturmak için <b>Modül Oluşturucu</b> aracını kullanabilirsiniz.',
            'viewBtnEditView' => 'Modülün <b>Düzenleme Görünümünü</b> özelleştirir.<br><br>Düzenleme Görünümü formunda kullanıcının yazdığı verilerin kaydedileceği alanlar bulunur.',
            'viewBtnDetailView' => 'Modülün <b>Ayrıntı Görünümünü</b> özelleştirir.<br><br> Ayrıntı Görünümünde kullanıcı tarafından yazılmış veriler görüntülenir.',
            'viewBtnDashlet' => 'Modülün <b>SuiteCRM Pano Bileşeni</b> ile SuiteCRM Pano Bileşenleri Liste ve Arama Görünümlerini özelleştirir.<br><br>SuiteCRM Pano Bileşeni, Ana Sayfa modülünde sayfalara eklenmek için görüntülenir.',
            'viewBtnListView' => 'Modülün <b>Liste Görünümünü</b> özelleştirir.<br><br> Arama sonuçları Liste Görünümünde görüntülenir.',
            'searchBtn' => 'Modülün <b>Arama</b> görünümlerini özelleştirir.<br><br>Liste Görünümünde kayıtları süzmek için görüntülenecek alanları belirleyebilirsiniz.',
            'viewBtnQuickCreate' => 'Modülün <b>Hızlı Ekle</b> görünümünü özelleştirir.<br><br> Hızlı Ekle formu E-posta modülünde ve alt panolarda görüntülenir.',
            'addLayoutHelp' => "Bir Güvenlik Grubuna özel bir görünüm eklemek için ilgili Güvenlik Grubunu ve başlangıç noktası olarak kopyası kullanılacak görünümü seçin.",
            'searchHelp' => 'Özelleştirilebilecek <b>Arama</b> formları burada görüntülenir.<br><br>Arama formlarında kayıtları süzmek için alanlar bulunur.<br><br>Düzenlemek istediğiniz arama görünümünü seçmek için bir simgeye tıklayın.',
            'dashletHelp' => 'Özelleştirilebilecek <b>SuiteCRM Pano Bileşeni</b> görünümleri burada görüntülenir.<br><br>SuiteCRM Pano Bileşeni, Ana Sayfa modülüne eklenmek üzere görüntülenir.',
            'DashletListViewBtn' => '<b>SuiteCRM Pano Bileşeni Liste Görünümü</b> SuiteCRM Pano Bileşeni arama süzgeçlerine uygun kayıtları görüntüler.',
            'DashletSearchViewBtn' => '<b>SuiteCRM Pano Bileşeni Arama</b> SuiteCRM Pano Bileşeni Liste Görünümünde görüntülenecek kayıtları süzer.',
            'popupHelp' => 'Özelleştirilebilecek <b>Açılan Pencere</b> görünümleri burada görüntülenir.<br>',
            'PopupListViewBtn' => '<b>Açılan Pencere Liste Görünümünde</b> Açılan Pencere Arama Görünümlerine göre kayıtlar görüntülenir.',
            'PopupSearchViewBtn' => '<b>Açılan Pencere Aramasında</b> Açılan Pencere Liste Görünümü için kayıtlar görüntülenir.',
            'BasicSearchBtn' => 'Modülün arama bölümünde Hızlı Süzme sekmesinde görüntülenecek <b>Hızlı Süzme</b> formunu özelleştirir.',
            'AdvancedSearchBtn' => 'Modülün arama bölümünde Gelişmiş Arama sekmesinde görüntülenecek <b>Gelişmiş Süzme</b> formunu özelleştirir.',
            'portalHelp' => '<b>SuiteCRM Portal</b> özelliklerini yönetir ve özelleştirir.',
            'SPUploadCSS' => 'SuiteCRM Portal için <b>Biçem Sayfası</b> yükler.',
            'SPSync' => 'SuiteCRM Portal kopyasındaki özelleştirmeleri <b>Eşitler</b>.',
            'Layouts' => 'SuiteCRM Portal modüllerinin <b>Görünümlerini</b> özelleştirir.',
            'portalLayoutHelp' => 'Modüller SuiteCRM Portal içinde bu alanda görüntülenir.<br><br><b>Görünümünü</b> düzenlemek istediğiniz bir modül seçin.',
            'relationshipsHelp' => 'Modül ve diğer dağıtılmış modüller arasındaki <b>İlişkiler</b> burada görüntülenir.<br><br>İlişkinin <b>Adı</b> sistem tarafından otomatik olarak oluşturulur.<br><br>İlişkinin sahibi olan modül <b>Birincil Modül</b> olarak tanımlanır. Örneğin Hesap modülünün birincil modül olduğu tüm ilişkilerin özellikleri Hesaplar veritabanı tablosunda tutulur.<br><br><b>Tür</b>, Birincil modül ile <b>İlişkili Modül</b> arasında kurulan ilişkinin türüdür.<br><br>Herhangi bir sütuna göre sıralama yapmak için sütun başlığına tıklayın.<br><br>Herhangi bir satırdaki ilişkinin özelliklerini görüntülemek için ilgili satıra tıklayın.<br><br>Yeni bir ilişki eklemek için <b>İlişki Ekle</b> üzerine tıklayın.<br><br>Dağıtılmış herhangi iki modül arasında bir ilişki eklenebilir.',
            'relationshipHelp' => 'Modül ile diğer dağıtılmış modüller arasında <b>İlişkiler</b> kurulabilir.<br><br>İlişkiler Alt Panolar üzerinde modül kayıtlarındaki ilişkiler kullanılarak görselleştirilir.<br><br>Modül için aşağıdaki ilişki <b>Türlerinden</b> birini seçin:<br><br><b>Tek - Tek</b> - Her iki modülün kayıtlarında ilişki alanları bulunur.<br><br><b>Tek - Çok</b> - Birincil modülün kaydında bir alt pano görüntülenir ve ilişkili modülün kaydında ilişki alanı bulunur.<br><br><b>Çok - Çok</b> - İki modülün kayıtlarında da alt panolar görüntülenir.<br><br>İlişkili kurmak için <b>İlişkili Modül</b> seçin.<br><br>İlişki türünde alt panolar bulunuyorsa, ilgili modüller için alt pano görünümünü seçin.<br><br>İlişkiyi kurmak için <b>Kaydet</b> üzerine tıklayın.',
            'convertLeadHelp' => 'Bu bölümden dönüştürme görünümüne yeni modüller ekleyebilir ya da var olan modülleri düzenleyebilirsiniz.<br/>		İlgili satırı sürükleyip bırakarak tablodaki modül sıralamasını değiştirebilirsiniz.<br/><br/>		<b>Modül:</b> Modülün adı.<br/><br/>		<b>Zorunlu:</b> Potansiyel dönüştürülmeden önce eklenmesi ya da seçilmesi zorunlu olan modüller.<br/><br/>		<b>Verileri Kopyala:</b> Bu seçenek işaretlendiğinde, potansiyel kaydındaki alanlar, yeni eklenen kayıtlardaki aynı adlı alanlara kopyalanır.<br/><br/>		<b>Seçilebilsin:</b>Potansiyel dönüştürme işlemi sırasında İlgili Kişi kayıtlarında ilişkili alanı olan modüller eklenmek yerine seçilebilir.<br/><br/>		<b>Düzenle:</b> Bu modülün dönüştürme görünümünü düzenler.<br/><br/>		<b>Sil:</b>Bu modülü dönüştürme görünümünden kaldırır.<br/><br/>',


            'editDropDownBtn' => 'Bir Genel Açılan Listeyi Düzenle',
            'addDropDownBtn' => 'Yeni Bir Genel Açılan Liste Ekle',
        ),
        'fieldsHelp' => array(
            'default' => 'Bu bölümde modüldeki <b>Alanlar</b> Alan Adına göre sıralanmış listesi bulunur.<br><br>Modül kalıbında önceden ayarlanmış alanlar bulunur.<br><br>Yeni bir alan eklemek için <b>Alan Ekle</b> üzerine tıklayın.<br><br>Var olan bir alanı düzenlemek için <b>Alan Adı</b> üzerine tıklayın.<br/><br/>Modül dağıtıldıktan sonra Modül Oluşturucu içinde eklenmiş yeni alanlar Studio içinde eklenmiş standart alanlar olarak değerlendirilir.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Modül ve diğer dağıtılmış modüller arasındaki <b>İlişkiler</b> burada görüntülenir.<br><br>İlişkinin <b>Adı</b> sistem tarafından otomatik olarak oluşturulur.<br><br>İlişkinin sahibi olan modül <b>Birincil Modül</b> olarak tanımlanır. İlişki özellikleri birincil modülün veritabanı tablolarına kaydedilir.<br><br><b>Tür</b>, Birincil modül ile <b>İlişkili Modül</b> arasında kurulan ilişkinin türüdür.<br><br>Herhangi bir sütuna göre sıralama yapmak için sütun başlığına tıklayın.<br><br>Herhangi bir satırdaki ilişkinin özelliklerini görüntülemek için ilgili satıra tıklayın.<br><br>Yeni bir ilişki eklemek için <b>İlişki Ekle</b> üzerine tıklayın.',
            'addrelbtn' => 'ilişki ekleme yardımı için fare ile üzerine gelin...',
            'addRelationship' => 'Modül ile diğer özel modüller ya da dağıtılmış modüller arasında <b>İlişkiler</b> kurulabilir.<br><br>İlişkiler Alt Panolar üzerinde modül kayıtlarındaki ilişkiler kullanılarak görselleştirilir.<br><br>Modül için aşağıdaki ilişki <b>Türlerinden</b> birini seçin:<br><br><b>Tek - Tek</b> - Her iki modülün kayıtlarında ilişki alanları bulunur.<br><br><b>Tek - Çok</b> - Birincil modülün kaydında bir alt pano görüntülenir ve ilişkili modülün kaydında ilişki alanı bulunur.<br><br><b>Çok - Çok</b> - İki modülün kayıtlarında da alt panolar görüntülenir.<br><br>İlişkili kurmak için <b>İlişkili Modül</b> seçin.<br><br>İlişki türünde alt panolar bulunuyorsa, ilgili modüller için alt pano görünümünü seçin.<br><br>İlişkiyi kurmak için <b>Kaydet</b> üzerine tıklayın.',
        ),
        'labelsHelp' => array(
            'default' => 'Modüldeki alanlar ve başlıkların <b>Etiketleri</b> değiştirilebilir.<br><br>Alan içine tıklayarak etiketi düzenledikten sonra <b>Kaydet</b> üzerine tıklayın.<br><br>Uygulamaya bir dil paketi kurulmuş ise, etiketler için kullanılacak <b>Dil</b> seçimini de yapabilirsiniz.',
            'saveBtn' => 'Tüm değişiklikleri kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'publishBtn' => 'Tüm değişiklikleri kaydedip etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.',
        ),
        'portalSync' => array(
            'default' => 'Güncellemek için <b>SuiteCRM Portal Adresine</b> giderek <b>Git</b> üzerine tıklayın.<br><br>Geçerli bir SuiteCRM kullanıcı adı ve parolası yazıp <b>Eşitlemeyi Başlat</b> üzerine tıklayın.<br><br>Böylece SuiteCRM Portal <b>Görünümlerindeki</b> özelleştirmeler ve yüklenmiş ise, <b>Biçem Dosyası</b> belirtilen portal kopyasına aktarılır.',
        ),
        'portalStyle' => array(
            'default' => 'Biçem sayfaları kullanarak SuiteCRM Portal görünümünü özelleştirebilirsiniz.<br><br>Yüklenecek bir <b>Biçem Dosyası</b> seçin.<br><br>Yüklenen biçem dosyası bir sonraki eşitleme işlemi sırasında SuiteCRM Portal üzerine uygulanır.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Yeni bir proje başlatmak için, <b>Yeni Paket</b> üzerine tıklayarak özel modülerinizin bulunacağı paketi oluşturun.<br/><br/>Bir paket bir ya da daha fazla modülden oluşabilir.<br/><br/>Örneğin, standart Hesaplar modülü ile ilişkili bir özel modül bulunan bir paket oluşturmak isteyebilirsiniz. Ya da, bir proje olarak birbiri ile ve uygulamada var olan diğer modüller ile birlikte çalışacak bir kaç yeni modül bulunan bir bir paket de oluşturmak isteyebilirsiniz.',
            'somepackages' => 'Bir <b>paket</b>, bir projenin parçası olan özel modülleri bir araya toplar. Bir pakette, bir ya da birbiriyle ya da uygulamadaki diğer modüller ile ilişkili bir kaç <b>modül</b> bulunur.<br/><br/>Projeniz için bir paket oluşturduktan sonra, hemen paket içine modüller ekleyebileceğiniz gibi projeyi daha sonra tamamlamak üzere Modül Oluşturucu aracına dönebilirsiniz.<br><br>Proje tamamlandığında, özel modülleri uygulama üzerine kurmak için paketi <b>Dağıtabilirsiniz</b>.',
            'afterSave' => 'Oluşturacağınız pakette en az bir modül bulunmalıdır. Bir paket içine bir ya da birden fazla özel modül ekleyebilirsiniz.<br/><br/>Bu pakete yeni bir modül eklemek için <b>Yeni Modül</b> üzerine tıklayın.<br/><br/>En az bir modül ekledikten paketi yayınlayarak ya da dağıtarak kendi kopyanızda ya da başka bir kullanıcının kopyasında kullanılmasını sağlayabilirsiniz.<br/><br/>Modülü SuiteCRM kopyanız üzerinde tek bir adımda hemen dağıtmak için <b>Dağıt</b> üzerine tıklayın.<br><br>Paketi .bir zip arşivi dosyasına kaydetmek için <b>Yayınla</b> üzerine tıklayın. .zip arşivi dosyası, sisteminize kaydedildikten sonra, <b>Modül Yükleyici</b> aracını kullanarak paketi kendi SuiteCRM kopyanıza yükleyip kurabilirsiniz.<br/><br/>Dosyayı diğer kullanıcılar ile paylaşarak paketi kendi SuiteCRM kopyalarına yükleyip kurmalarını sağlayabilirsiniz.',
            'create' => 'Bir <b>paket</b>, bir projenin parçası olan özel modülleri bir araya toplar. Bir pakette, bir ya da birbiriyle ya da uygulamadaki diğer modüller ile ilişkili bir kaç <b>modül</b> bulunur.<br/><br/>Projeniz için bir paket oluşturduktan sonra, hemen paket içine modüller ekleyebileceğiniz gibi projeyi daha sonra tamamlamak üzere Modül Oluşturucu aracına dönebilirsiniz.',
        ),
        'main' => array(
            'welcome' => 'Standart ve özelleştirilmiş modüller ve alanlar eklemek ve yönetmek için <b>Geliştirici Araçlarını</b> kullanabilirsiniz.<br/><br/> Uygulamadaki modülleri yönetmek için <b>Studio</b> aracına tıklayın.<br/><br/>Özelleştirilmiş modüller oluşturmak için <b>Modül Oluşturucu</b> aracına tıklayın.',
            'studioWelcome' => 'Şu anda kurulu olan, standart ve modül ile yüklenmiş nesneler bulunduran tüm modüller Studio aracı ile özelleştirilebilir.'
        ),
        'module' => array(
            'somemodules' => "Geçerli pakette en az bir modül bulunduğundan, paketi kendi SuiteCRM kopyanıza <b>Dağıtabilir</b> ya da <b>Yayınlayarak</b>paketin geçerli SuiteCRM kopyasına ya da <b>Modül Yükleyici</b> aracı ile başka bir SuiteCRM kopyasına kurabilirsiniz.<br/><br/>Paketi doğrudan SuiteCRM kopyanıza kurmak için <b>Dağıt</b> üzerine tıklayın.<br><br>Paketi .zip arşivi dosyası biçiminde kaydedip <b>Modül Yükleyici</b> aracı ile başka SuiteCRM kopyalarına yüklenip kurulacak hale getirmek için <b>Yayınla</b> üzerine tıklayın.<br/><br/>Bu paketteki Modülleri aşamalı olarak oluşturabilir ve uygun olduğunda dağıtabilir ya da yayınlayabilirsiniz.<br/><br/>Bir paketi yayınladıktan ya da dağıttıktan sonra da paket özelliklerinde değişiklik yapabilir ve modülleri özelleştirebilirsiniz. Yaptığınız değişiklikleri uygulamak için yeniden yayınlayın ya da yeniden dağıtın.",
            'editView' => 'Bu bölümden var olan alanları düzenleyebilir, var olan herhangi bir alanı kaldırabilir ya da sol panodan yeni alanlar ekleyebilirsiniz.',
            'create' => 'Eklemek istediğiniz modülün <b>Türünü</b> modülde bulunmasını istediğiniz alanların türlerine göre seçin.<br/><br/>Her modül kalıbında, başlığında belirtilen alan türleri bulunur.<br/><br/><b>Temel</b> - Ad, Atanan Kişi, Takım, Oluşturulma Tarihi, ve Açıklama gibi standart modüllere özgü alan türleri bulunur.<br/><br/><b>Kuruluş</b> - Kuruluş Adı, İş ve Fatura Adresi gibi kuruluşa özgü alanlar bulunur. Bu kalıbı standart Hesap modülüne benzer modüller oluşturmak için kullanabilirsiniz.<br/><br/><b>Kişi</b> - Hitap, Başlık, Ad, Adres, ve Telefon Numarası gibi kişiye özgü alanlar bulunur. Bu kalıbı standart İlgili Kişiler ve Potansiyeller modüllerine benzer modüller oluşturmak için kullanabilirsiniz.<br/><br/><b>Sorun</b> - Numara, Durum, Öncelik, Açıklama gibi Destek kaydı ve hata bildirimine özgü alanlar bulunur. Bu kalıbı standart Destek Kayıtları ve Hata Bildirimleri modüllerine benzer modüller oluşturmak için kullanabilirsiniz.<br/><br/>Not: Modülü oluşturduktan sonra kalıp tarafından sağlanan alan etiketlerini düzenleyebilir ve modül görünümüne özel alanlar ekleyebilirsiniz.',
            'afterSave' => 'Yeni alanlar ekleyerek, var olan alanları düzenleyerek, modüller arasında ilişkiler kurarak ve görünümlerdeki alanları düzenleyerek bir modülü özelleştirebilirsiniz.<br/><br/>Kalıp alanlarını görüntülemek ve modüldeki özel alanları yönetmek için <b>Alanları Görüntüle</b> üzerine tıklayın.<br/><br/>Modül ile diğer modüller arasında ilişkiler eklemek ya da düzenlemek için <b>İlişkileri Görüntüle</b> üzerine tıklayın.<br/><br/>Modül görünümlerini düzenlemek için <b>Görünümleri Görüntüle</b> üzerine tıklayın. Modülün Ayrıntı, Düzenleme ve Liste Görünümlerini uygulamada var olan diğer modüller gibi Studio aracını kullanarak düzenleyebilirsiniz.<br/><br/>Var olan modüllere benzer özelliklerde yeni bir modül oluşturmak için <b>Kopyala</b> üzerine tıklayın. Ardından yeni modülü özelleştirebilirsiniz.',
            'viewfields' => 'Modüldeki alanlar isteklerinize göre özelleştirilebilir.<br/><br/>Standart alanlar silinemez ancak Görünüm sayfalarından kaldırılabilir.<br/><br/>Var olan alanlara benzer özelliklerde alanlar eklemek için <b>Özellikler</b> formunda <b>Kopyala</b> üzerine tıklayabilirsiniz. Yeni özellikleri ekledikten sonra <b>Kaydet</b> üzerine tıklayın.<br/><br/>Özel modülün bulunduğu paketi yayınlamadan ya da kurmadan önce tüm standart ve özel alanların özelliklerini ayarlamış olmanız önerilir.',
            'viewrelationships' => 'Geçerli modül ile paketteki diğer modüller ya da uygulamada kurulu bulunan modüller arasında Çok - Çok ilişkisi kurulabilir.<br><br>Bir - Çok ve Bir - Bir ilişkileri kurmak için modüllere <b>İlişki</b> ve <b>Esnek İlişki</b> alanları ekleyin.',
            'viewlayouts' => '<b>Düzenleme Görünümünde</b> veri girişi için kullanılacak alanları yönetebilirsiniz. <b>Ayrıntı Görünümünde</b> hangi bilgilerin görüntüleneceğini yönetebilirsiniz. Bu iki görünümün aynı olması şart değildir.<br/><br/>Bir modül alt panosunda <b>Ekle</b> üzerine tıklandığında Hızlı Ekleme formu görüntülenir. Varsayılan olarak <b>Hızlı Ekleme</b> formu görünümü ile <b>Düzenleme Görünümü</b> aynıdır. Hızlı Ekleme formunu Düzenleme Görünümünden farklı alanlar bulunacak şekilde özelleştirebilirsiniz.<br><br>Modül güvenliğini <b>Rol Yönetimi</b> ile görüntü özelleştirmesini kullanarak sağlayabilirsiniz.<br><br>',
            'existingModule' => 'Bu modülü ekleyip özelleştirdikten sonra, ek modüller oluşturabilir ya da pakete dönerek paketi <b>Yayınlayabilir</b> ya da <b>Dağıtabilirsiniz</b>.<br><br>Ek modüller oluşturmak için, <b>Kopyala</b> üzerine tıklayarak var olan modül ile benzer özelliklerde yeni bir modül oluşturabilir ya da pakete geri dönerek <b>Yeni Modül</b> üzerine tıklayabilirsiniz.<br><br>Bu modülün bulunduğu paketi <b>Yayınlamak</b> ya da <b>Dağıtmak</b> için pakete geri dönerek bu işlemleri yapabilirsiniz. En az bir modülü bulunan paketler yayınlanabilir ya da dağıtılabilir.',
            'labels' => 'Standart ve özel alanların etiketleri düzenlenebilir. Alan etiketlerinin değiştirilmesi alanlarda kayıtlı verileri etkilemez.',
        ),
        'listViewEditor' => array(
            'modify' => 'Sol tarafta üç sütun görüntülenir. "Varsayılan" sütununda liste görünümünde varsayılan olarak görüntülenen alanlar bulunur, "Kullanılabilir" sütununda özel liste görünümü oluşturmak için kullanıcının seçebileceği alanlar bulunur. "Gizli" sütununda şu anda kullanıcılar için devre dışı olan, ancak yönetici olarak kullanıcıların kullanabilmesi için Varsayılan ya da Kullanılabilir sütunlarına ekleyebileceğiniz alanlar bulunur.',
            'savebtn' => 'Tüm değişiklikleri kaydetmek ve etkinleştirmek için <b>Kaydet</b> üzerine tıklayın.',
            'Hidden' => 'Gizli alanlar Liste Görünümlerinde kullanıcılara görüntülenmez.',
            'Available' => 'Kullanılabilir alanlar ilk varsayılan olarak görüntülenmez ancak kullanıcılar tarafından etkinleştirilebilir.',
            'Default' => 'Varsayılan alanlar özel liste görünümü ayarları yapmamış kullanıcılara görüntülenir.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Sol tarafta iki sütün görüntülenir. "Varsayılan" sütununda arama görünümünde görüntülenecek alanlar bulunur. "Gizli" sütununda yönetici olarak görünüme ekleyebileceğiniz alanlar bulunur.',
            'savebtn' => 'Tüm değişiklikleri kaydedip etkinleştirmek için <b>Kaydedip Dağıt</b> üzerine tıklayın.',
            'Hidden' => 'Gizli alanlar Arama görünümünde görüntülenmez.',
            'Default' => 'Arama görünümünde varsayılan olarak görüntülenecek alanlar.'
        ),
        'layoutEditor' => array(
            'default' => 'Solda iki sütun görüntülenir. Sağdaki sütunda Geçerli Görünüm ya da Görünüm Önizlemesi görüntülenir ve modül görünümü buradan değiştirilebilir. Soldaki sütunda Araç Kutusu bulunur ve görünümü düzenlemek için gerekli bileşen ve araçları içerir.<br/><br/>Görünüm bölgesinin adı Geçerli Görünüm ise, şu anda modül tarafından kullanılan görünümün bir kopyası üzerinde çalışıyorsunuz demektir.<br/><br/>Görünüm bölgesinin adı Görünüm Önizlemesi ise, daha önce Kaydet düğmesine tıklanarak oluşturulmuş ve bu modülün kullanıcılarına görüntülenenden farklı olabilecek bir görünüm sürümü üzerinde çalışıyorsunuz demektir.',
            'saveBtn' => 'Bu düğmeye tıklandığında, görünüm kaydedilerek değişiklikler korunur. Bu modüle geri geldiğinizde bu kaydedilmiş görünümden başlarsınız. Bununla birlikte Kaydedip Yayınla düğmesine tıklanmadan bu görünüm modül kullanıcılarına görüntülenmez.',
            'publishBtn' => 'Görünümü dağıtmak için bu düğmeye tıklayın. Böylece bu görünüm bu modülün kullanıcılarına anında görüntülenir.',
            'toolbox' => 'Araç Kutusunda, kullanılabilecek alanlar, ek bileşenler ve çöp kutusu gibi görünümleri düzenlemek için kullanılan çeşitli araçlar bulunur. Bu araçlar sürüklenip bırakılarak görünüm düzenlenebilir.',
            'panels' => 'Bu modülün Dağıtıldıktan sonra kullanıcılara nasıl görüntüleneceği burada görüntülenir.<br/><br/>Alanları, satırları ve panoları istediğiniz konuma sürükleyip bırakarak taşıyabilirsiniz. Görünüm bileşenlerini Araç Kutusu üzerindeki Çöp Kutusuna sürükleyip bırakarak silebilir ya da Araç Kutusundan görünüm alanında görüntülenmesini istediğiniz konuma sürükleyip bırakarak ekleyebilirsiniz.'
        ),
        'dropdownEditor' => array(
            'default' => 'Solda iki sütun görüntülenir. Sağdaki sütunda Geçerli Görünüm ya da Görünüm Önizlemesi görüntülenir ve modül görünümü buradan değiştirilebilir. Soldaki sütunda Araç Kutusu bulunur ve görünümü düzenlemek için gerekli bileşen ve araçları içerir.<br/><br/>Görünüm bölgesinin adı Geçerli Görünüm ise, şu anda modül tarafından kullanılan görünümün bir kopyası üzerinde çalışıyorsunuz demektir.<br/><br/>Görünüm bölgesinin adı Görünüm Önizlemesi ise, daha önce Kaydet düğmesine tıklanarak oluşturulmuş ve bu modülün kullanıcılarına görüntülenenden farklı olabilecek bir görünüm sürümü üzerinde çalışıyorsunuz demektir.',
            'dropdownaddbtn' => 'Bu düğmeye tıklanarak açılan listeye yeni bir öge eklenebilir.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'Studio aracı ile bu kopya üzerinde yapılan özelleştirmeler paketlenip başka bir kopya üzerinde dağıtılabilir.<br><br>Öncelikle bir <b>Paket Adı</b> yazın. Ayrıca paket için <b>Sorumlu</b> ve <b>Açıklama</b> bilgilerini de yazabilirsiniz.<br><br>Dışarı aktarmak istediğiniz, özelleştirilmiş modülleri seçin. Yalnız özelleştirilmiş modüller seçilmek üzere görüntülenir.<br><br>Ardından <b>Dışa Aktar</b> üzerine tıklayarak özelleştirmelerin bulunduğu .zip arşivi dosyasını oluşturabilirsiniz. Dışa aktarılan dosya başka bir sisteme <b>Modül Yükleyici</b> kullanılarak yüklenebilir.',
            'exportCustomBtn' => 'Dışa aktarmak istediğiniz özelleştirmeleri bir .zip arşivi dosyasına kaydetmek için <b>Dışa Aktar</b> üzerine tıklayın.',
            'name' => 'Paketin <b>Ad</b> bilgisi. Ad bilgisi paketin kurulmak üzere Studio aracına yüklenmesinden sonra Modül Yükleyicide görüntülenir.',
            'author' => 'Paketi oluşturan varlığın adı olan <b>Sorumlu</b> bilgisi. Sorumlu bir kişi ya da kuruluş olabilir.<br><br>Sorumlu bilgisi paketin kurulum için Studio aracına yüklenmesinden sonra Modül Yükleyicide görüntülenir.',
            'description' => 'Paketin <b>Açıklama</b> bilgisi. Açıklama bilgisi paketin kurulum için Studio aracına yüklenmesinden sonra Modül Yükleyicide görüntülenir.',
        ),
        'studioWizard' => array(
            'mainHelp' => '<b>Geliştirici Araçları</b> bölümüne hoş geldiniz.<br/><br/>Bu bölümdeki araçları kullanarak, standart ve özelleştirilmiş modüller ile özel alanlar eklenip yönetilebilir.',
            'studioBtn' => 'Kurulmuş modülleri özelleştirmek için, alan düzenini değiştirmek, kullanılacak alanları seçmek ve özel veri alanları eklemek için <b>Studio</b> aracını kullanabilirsiniz.',
            'mbBtn' => 'Yeni modüller oluşturmak için <b>Modül Oluşturucu</b> aracını kullanın.',
            'appBtn' => 'Uygulama kipinde, ana sayfada kaç tane TPS raporu görüntüleneceği gibi program özellikleri özelleştirilebilir',
            'backBtn' => 'Önceki adıma dön.',
            'studioHelp' => 'Kurulmuş modülleri özelleştirmek için <b>Studio</b> aracını kullanabilirsiniz.',
            'moduleBtn' => 'Bu modülü düzenlemek için tıklayın.',
            'moduleHelp' => 'Düzenlemek istediğiniz modül bileşenini seçin',
            'fieldsBtn' => 'Modül <b>Alanlarını</b> yöneterek kaydedilecek bilgileri düzenleyebilirsiniz.<br/><br/>Bu bölümden özel alanlar ekleyip düzenleyebilirsiniz.',
            'labelsBtn' => 'Özel etiketlerinizi kaydetmek için <b>Kaydet</b> üzerine tıklayın.',
            'layoutsBtn' => 'Düzenleme, Ayrıntı, Liste ve Arama görünümlerinin <b>Görünümünü</b> özelleştirin.',
            'subpanelBtn' => 'Bu modülün alt panolarında görüntülenecek bilgileri düzenleyebilirsiniz.',
            'layoutsHelp' => '<b>Düzenlenecek Bir Görünüm</b> seçin.<br/><br/>Veri girişi için kullanılacak veri alanlarının bulunduğu görünümü değiştirmek için <b>Düzenleme Görünümü</b> üzerine tıklayın.<br/><br/>Düzenleme Görünümünde alanlara yazılan verilerin görüntülendiği görünümünü düzenlemek için <b>Ayrıntı Görünümü</b> üzerine tıklayın.<br/><br/>Varsayılan listedeki sütunları düzenlemek için, <b>Liste Görünümü</b> üzerine tıklayın.<br/><br/>Temel ve Gelişmiş arama formlarının görünümlerini düzenlemek için <b>Arama</b> üzerine tıklayın.',
            'subpanelHelp' => 'Düzenlenecek bir <b>Alt Pano</b> seçin.',
            'searchHelp' => 'Düzenlenecek bir <b>Arama</b> görünümü seçin.',
            'newPackage' => 'Yeni bir paket eklemek için <b>Yeni Paket</b> üzerine tıklayın.',
            'mbHelp' => '<b>Modül Oluşturucuya Hoş Geldiniz.</b><br/><br/> Standart ve özelleştirilmiş nesnelere dayalı özel modüllerin bulunduğu paketler oluşturmak için <b>Modül Oluşturucu</b> aracını kullanın.<br/><br/>Başlamak ve yeni bir paket oluşturmak için <b>Yeni Paket</b> üzerine tıklayın ya da düzenlenecek bir paket seçin.<br/><br/>Bir <b>paket</b> bir projenin parçası olan özel modülleri gruplamak için kullanılır. Bir pakette birbiri ya da uygulama modülleri ile ilişkili bir ya da birkaç modül bulunabilir.<br/><br/>Örnek: Standart Hesaplar modülü ile ilişkili yeni bir modül bulunduran bir paket oluşturmak isteyebilirsiniz. Ya da birbirleriyle ya da uygulamadaki diğer modüllerle ilişkili birkaç yeni modülün bulunduğu bir paket de oluşturmak isteyebilirsiniz.',
            'exportBtn' => 'Studio aracı üzerinde belirli modüller için yapılan özelleştirmelerin bulunduğu bir paket oluşturmak için <b>Özelleştirmeleri Dışa Aktar</b> üzerine tıklayın.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Açılan Liste Düzenleyici',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Modül Oluşturucu',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Açılan Liste Düzenleyici',
    'LBL_DEVELOPER_TOOLS' => 'Geliştirici Araçları',
    'LBL_SUITEPORTAL' => 'SuiteCRM Portal Düzenleyici',
    'LBL_PACKAGE_LIST' => 'Paket Listesi',
    'LBL_HOME' => 'Ana Sayfa',
    'LBL_NONE' => '-Yok-',
    'LBL_DEPLOYE_COMPLETE' => 'Dağıtım Tamamlandı',
    'LBL_DEPLOY_FAILED' => 'Dağıtım sırasında bir sorun çıktı. Paketiniz düzgün kurulamamış olabilir',
    'LBL_AVAILABLE_SUBPANELS' => 'Kullanılabilecek Alt Panolar',
    'LBL_ADVANCED' => 'Gelişmiş',
    'LBL_ADVANCED_SEARCH' => 'Gelişmiş Süzgeç',
    'LBL_BASIC' => 'Temel',
    'LBL_BASIC_SEARCH' => 'Hızlı Süzgeç',
    'LBL_CURRENT_LAYOUT' => 'Görünüm',
    'LBL_CURRENCY' => 'Para Birimi',
    'LBL_DASHLET' => 'SuiteCRM Pano Bileşeni',
    'LBL_DASHLETLISTVIEW' => 'SuiteCRM Pano Bileşeni Liste Görünümü',
    'LBL_POPUP' => 'Açılan Pencere Görünümü',
    'LBL_POPUPLISTVIEW' => 'Açılan Pencere Liste Görünümü',
    'LBL_POPUPSEARCH' => 'Açılan Pencere Arama',
    'LBL_DASHLETSEARCHVIEW' => 'SuiteCRM Pano Bileşeni Arama',
    'LBL_DETAILVIEW' => 'Ayrıntı Görünümü',
    'LBL_DROP_HERE' => '[Buraya Bırakın]',
    'LBL_EDIT' => 'Düzenle',
    'LBL_EDIT_LAYOUT' => 'Görünümü Düzenle',
    'LBL_EDIT_FIELDS' => 'Alanları Düzenle',
    'LBL_EDITVIEW' => 'Görünümü Düzenle',
    'LBL_FILLER' => '(doldurucu)',
    'LBL_FIELDS' => 'Alanlar',
    'LBL_FAILED_TO_SAVE' => 'Kaydedilemedi',
    'LBL_FAILED_PUBLISHED' => 'Yayınlanamadı',
    'LBL_HOMEPAGE_PREFIX' => 'Benim',
    'LBL_LAYOUT_PREVIEW' => 'Görünüm Ön İzlemesi',
    'LBL_LAYOUTS' => 'Görünümler',
    'LBL_LISTVIEW' => 'Liste Görünümü',
    'LBL_MODULES' => 'Modüller',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Yeni Paket',
    'LBL_NEW_PANEL' => 'Yeni Pano',
    'LBL_NEW_ROW' => 'Yeni Satır',
    'LBL_PACKAGE_DELETED' => 'Paket Silindi',
    'LBL_PUBLISHING' => 'Yayınlanıyor...',
    'LBL_PUBLISHED' => 'Yayınlandı',
    'LBL_SELECT_FILE' => 'Dosya Seçin',
    'LBL_SUBPANELS' => 'Alt Panolar',
    'LBL_SUBPANEL' => 'Alt Pano',
    'LBL_SUBPANEL_TITLE' => 'Başlık:',
    'LBL_SEARCH_FORMS' => 'Süzgeç',
    'LBL_SEARCH' => 'Arama',
    'LBL_SEARCH_BUTTON' => 'Arama',
    'LBL_FILTER' => 'Süzgeç',
    'LBL_TOOLBOX' => 'Araç Kutusu',
    'LBL_QUICKCREATE' => 'Hızlı Ekle',
    'LBL_EDIT_DROPDOWNS' => 'Bir Genel Açılan Listeyi Düzenle',
    'LBL_ADD_DROPDOWN' => 'Yeni Bir Genel Açılan Liste Ekle',
    'LBL_BLANK' => '-boş-',
    'LBL_TAB_ORDER' => 'Sekme Sıralaması',
    'LBL_TABDEF_TYPE' => 'Ekran Türü',
    'LBL_TABDEF_TYPE_HELP' => 'Bu bölümün nasıl görüntüleneceğini seçin. Bu seçenek yalnızca bu görünüm için sekmeler etkinleştirilmiş ise etkili olur.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Sekme',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Pano',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Bu panonun görünüm içinde görüntülenmesi için Pano olarak seçin. Bu panonun görünüm içinde ayrı bir sekmede görüntülenmesi için Sekme olarak seçin. Bir pano Sekme olarak ayarlandığında, Pano olarak ayarlanmış diğer panolar sekme içinde görüntülenir.<br/>Sekme olarak seçilmiş sonraki pano için yeni bir Sekme başlatılır. İlk panonun altındaki bir pano Sekme olarak ayarlanmış ise ilk panonun Sekme olması gerekir.',
    'LBL_TABDEF_COLLAPSE' => 'Daralt',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Bu seçenek etkinleştirildiğinde, bu panonun varsayılan durumu daraltılmış olarak ayarlanır.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Ad',
    'LBL_DROPDOWN_LANGUAGE' => 'Dil',
    'LBL_DROPDOWN_ITEMS' => 'Liste Ögeleri',
    'LBL_DROPDOWN_ITEM_NAME' => 'Öge Adı',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Etiketi Görüntüle',
    'LBL_SYNC_TO_DETAILVIEW' => 'Ayrıntı Görünümü ile Eşitle',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Bu seçenek etkinleştirildiğinde, bu Düzenleme Görünümü, ilgili Ayrıntı Görünümü ile eşitlenir. Düzenleme Görünümündeki alanlar ve alan konumları<br>Düzenleme Görünümünde Kaydet ya da Kaydedip Dağıt üzerine tıklandığında otomatik olarak Ayrıntı Görünümü ile eşitlenir ve kaydedilir.<br>Bu durumda Ayrıntı Görünümü üzerinde değişiklik yapılamaz.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ayrıntı Görünümü ilgili Düzenleme Görünümü ile eşitlenmiş.<br>Bu Ayrıntı Görünümündeki alanlar ve alan konumları Düzenleme Görünümündeki alan ve alan konumlarını yansıtır.<br>Ayrıntı Görünümündeki değişiklikler bu bölümden kaydedilemez ya da dağıtılamaz. Değişiklikleri Düzenleme Görünümü üzerinde yapın ya da görünümler arasındaki eşitlemeyi kaldırın. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Düzenleme Görünümünün Kopyası',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Öge Adı ve Görüntülenecek Etiket değerlerinin ikisinin de yazılması zorunludur. Boş bir öge Öge Adı ve Görüntülenecek Etiket alanlarına herhangi bir şey yazmadan Ekle üzerine tıklayın.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'Anahtar listede zaten var',
    'LBL_NO_SAVE_ACTION' => 'Bu görünüm için kayıt işlemi bulunamadı.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: belge biçimi düzgün değil',


//RELATIONSHIPS
    'LBL_MODULE' => 'Modül',
    'LBL_LHS_MODULE' => 'Birincil Modül',
    'LBL_CUSTOM_RELATIONSHIPS' => '* Studio üzerinde oluşturulmuş ilişki',
    'LBL_RELATIONSHIPS' => 'İlişkiler',
    'LBL_RELATIONSHIP_EDIT' => 'İlişkileri Düzenle',
    'LBL_REL_NAME' => 'Ad',
    'LBL_REL_LABEL' => 'Etiket',
    'LBL_REL_TYPE' => 'Tür',
    'LBL_RHS_MODULE' => 'İlişkili Modül',
    'LBL_NO_RELS' => 'Herhangi Bir İlişki Yok',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'İsteğe Bağlı Koşul',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Sütun',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Değer',
    'LBL_SUBPANEL_FROM' => 'Alt pano kaynağı',
    'LBL_RELATIONSHIP_ONLY' => 'Bu iki modül arasında önceden var olan görünür bir ilişki olduğundan, bu ilişki için görünür bir bileşen oluşturulmayacak.',
    'LBL_ONETOONE' => 'Tek - Tek',
    'LBL_ONETOMANY' => 'Tek - Çok',
    'LBL_MANYTOONE' => 'Çok - Tek',
    'LBL_MANYTOMANY' => 'Çok - Çok',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Düzenlenecek bir modül seçin.',
    'LBL_QUESTION_LAYOUT' => 'Düzenlenecek bir görünüm seçin.',
    'LBL_QUESTION_SUBPANEL' => 'Düzenlenecek bir alt pano seçin.',
    'LBL_QUESTION_SEARCH' => 'Düzenlenecek bir süzgeç görünümü seçin.',
    'LBL_QUESTION_MODULE' => 'Düzenlenecek bir modül bileşeni seçin.',
    'LBL_QUESTION_PACKAGE' => 'Düzenlenecek bir paket seçin ya da yeni bir paket oluşturun.',
    'LBL_QUESTION_EDITOR' => 'Bir araç seçin.',
    'LBL_QUESTION_DASHLET' => 'Düzenlenecek bir pano bileşeni görünümü seçin.',
    'LBL_QUESTION_POPUP' => 'Düzenlenecek bir açılan pencere görünümü seçin.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Ad',
    'LBL_LABELS' => 'Etiketler',
    'LBL_MASS_UPDATE' => 'Toplu Güncelleme',
    'LBL_DEFAULT_VALUE' => 'Varsayılan Değer',
    'LBL_REQUIRED' => 'Zorunlu',
    'LBL_DATA_TYPE' => 'Tür',
    'LBL_HCUSTOM' => 'ÖZEL',
    'LBL_HDEFAULT' => 'VARSAYILAN',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_CUSTOM_FIELDS' => '* Studio üzerinde oluşturulmuş alan',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Etiketleri Düzenle',
    'LBL_SECTION_PACKAGES' => 'Paketler',
    'LBL_SECTION_PACKAGE' => 'Paket',
    'LBL_SECTION_MODULES' => 'Modüller',
    'LBL_SECTION_DROPDOWNS' => 'Açılan Listeler',
    'LBL_SECTION_PROPERTIES' => 'Özellikler',
    'LBL_SECTION_DROPDOWNED' => 'Açılan Listeyi Düzenle',
    'LBL_SECTION_HELP' => 'Yardım',
    'LBL_SECTION_MAIN' => 'Asıl',
    'LBL_SECTION_FIELDEDITOR' => 'Alanı Düzenle',
    'LBL_SECTION_DEPLOY' => 'Dağıt',
    'LBL_SECTION_MODULE' => 'Modül',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Varsayılan',
    'LBL_HIDDEN' => 'Gizli',
    'LBL_AVAILABLE' => 'Kullanılabilir',
    'LBL_LISTVIEW_DESCRIPTION' => 'Aşağıda üç sütun görüntülenir. <b>Varsayılan</b> sütununda liste görünümünde varsayılan olarak görüntülenen alanlar bulunur, <b>Ek</b> sütununda kullanıcıların özel bir görünüm oluşturmak için seçebileceği alanlar bulunur. <b>Kullanılabilir</b> sütununda yönetici olarak kullanıcıların kullanabilmesi için Varsayılan ya da Ek sütunlarına ekleyebileceğiniz alanlar bulunur.',
    'LBL_LISTVIEW_EDIT' => 'Liste Görünümü Düzenleyici',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Ön İzleme',
    'LBL_MB_RESTORE' => 'Geri Yükle',
    'LBL_MB_DELETE' => 'Sil',
    'LBL_MB_DEFAULT_LAYOUT' => 'Varsayılan Görünüm',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Ekle',
    'LBL_BTN_SAVE' => 'Kaydet',
    'LBL_BTN_SAVE_CHANGES' => 'Değişiklikleri Kaydet',
    'LBL_BTN_DONT_SAVE' => 'Kaydetmeden Çık',
    'LBL_BTN_CANCEL' => 'İptal',
    'LBL_BTN_CLOSE' => 'Kapat',
    'LBL_BTN_SAVEPUBLISH' => 'Kaydedip Dağıt',
    'LBL_BTN_CLONE' => 'Kopyala',
    'LBL_BTN_ADDROWS' => 'Satırlar Ekle',
    'LBL_BTN_ADDFIELD' => 'Alan Ekle',
    'LBL_BTN_ADDDROPDOWN' => 'Açılan Liste Ekle',
    'LBL_BTN_SORT_ASCENDING' => 'Artan Sıralama',
    'LBL_BTN_SORT_DESCENDING' => 'Azalan Sıralama',
    'LBL_BTN_EDLABELS' => 'Etiketleri Düzenle',
    'LBL_BTN_UNDO' => 'Geri Al',
    'LBL_BTN_REDO' => 'Yinele',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Özel Alan Ekle',
    'LBL_BTN_EXPORT' => 'Özelleştirmeleri Dışa Aktar',
    'LBL_BTN_DUPLICATE' => 'Kopyala',
    'LBL_BTN_PUBLISH' => 'Yayınla',
    'LBL_BTN_DEPLOY' => 'Dağıt',
    'LBL_BTN_EXP' => 'Dışa Aktar',
    'LBL_BTN_DELETE' => 'Sil',
    'LBL_BTN_VIEW_LAYOUTS' => 'Görünümleri Görüntüle',
    'LBL_BTN_VIEW_FIELDS' => 'Alanları Görüntüle',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'İlişkileri Görüntüle',
    'LBL_BTN_ADD_RELATIONSHIP' => 'İlişki Ekle',
    'LBL_BTN_RENAME_MODULE' => 'Modül Adını Değiştir',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Hata: Alan Zaten Var',
    'ERROR_INVALID_KEY_VALUE' => "Hata: Anahtar Değeri Geçersiz: [']",
    'ERROR_NO_HISTORY' => 'Herhangi bir geçmiş dosyası bulunamadı',
    'ERROR_MINIMUM_FIELDS' => 'Görünümde en az bir alan bulunmalıdır',
    'ERROR_GENERIC_TITLE' => 'Bir sorun çıktı',
    'ERROR_REQUIRED_FIELDS' => 'Devam etmek istediğinize emin misiniz? Aşağıdaki zorunlu alanlar görünümde bulunmuyor:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Paket Adı:',
    'LBL_MODULE_NAME' => 'Modül Adı:',
    'LBL_AUTHOR' => 'Sorumlu:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_KEY' => 'Anahtar:',
    'LBL_ADD_README' => 'Beni oku',
    'LBL_LAST_MODIFIED' => 'Son Değişiklik:',
    'LBL_NEW_MODULE' => 'Yeni Modül',
    'LBL_LABEL' => 'Etiket:',
    'LBL_LABEL_TITLE' => 'Etiket',
    'LBL_WIDTH' => 'Genişlik',
    'LBL_PACKAGE' => 'Paket:',
    'LBL_TYPE' => 'Tür:',
    'LBL_NAV_TAB' => 'Gezinme Sekmesi',
    'LBL_CREATE' => 'Ekle',
    'LBL_LIST' => 'Liste',
    'LBL_VIEW' => 'Görünüm',
    'LBL_HISTORY' => 'Geçmişi Görüntüle',
    'LBL_RESTORE_DEFAULT' => 'Varsayılanları Geri Yükle',
    'LBL_ACTIVITIES' => 'İşlemler',
    'LBL_NEW' => 'Yeni',
    'LBL_TYPE_BASIC' => 'temel',
    'LBL_TYPE_COMPANY' => 'kuruluş',
    'LBL_TYPE_PERSON' => 'kişi',
    'LBL_TYPE_ISSUE' => 'sorun',
    'LBL_TYPE_SALE' => 'satış',
    'LBL_TYPE_FILE' => 'dosya',
    'LBL_RSUB' => 'Modülünüzde görüntülenecek alt pano',
    'LBL_MSUB' => 'Modülünüzün ilişkili modülde görüntülenmesi için sunulan alt pano',
    'LBL_MB_IMPORTABLE' => 'İçe aktarılıyor',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] silindi',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Özelleştirmeleri Dışa Aktar',
    'LBL_EC_NAME' => 'Paket Adı:',
    'LBL_EC_AUTHOR' => 'Sorumlu:',
    'LBL_EC_DESCRIPTION' => 'Açıklama:',
    'LBL_EC_CHECKERROR' => 'Lütfen bir modül seçin.',
    'LBL_EC_CUSTOMFIELD' => 'özelleştirilmiş alanlar',
    'LBL_EC_CUSTOMLAYOUT' => 'özelleştirilmiş görünümler',
    'LBL_EC_NOCUSTOM' => 'Özelleştirilmiş bir modül yok.',
    'LBL_EC_EMPTYCUSTOM' => 'boş özelleştirmeleri var.',
    'LBL_EC_EXPORTBTN' => 'Dışa Aktar',
    'LBL_MODULE_DEPLOYED' => 'Modül dağıtıldı.',
    'LBL_UNDEFINED' => 'tanımlanmamış',
    'LBL_EC_VIEWS' => 'özelleştirilmiş görünümler',
    'LBL_EC_SUITEFEEDS' => 'özelleştirilmiş akışlar',
    'LBL_EC_DASHLETS' => 'özelleştirilmiş pano bileşenleri',
    'LBL_EC_CSS' => 'özelleştirilmiş css biçemleri',
    'LBL_EC_TPLS' => 'özelleştirilmiş tpls tanımları',
    'LBL_EC_IMAGES' => 'özelleştirilmiş görseller',
    'LBL_EC_JS' => 'özelleştirilmiş JavaScript betikleri',
    'LBL_EC_QTIP' => 'özelleştirilmiş qtip tanımları',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Veri alınamadı',
    'LBL_AJAX_LOADING' => 'Yükleniyor...',
    'LBL_AJAX_DELETING' => 'Siliniyor...',
    'LBL_AJAX_BUILDPROGRESS' => 'Oluşturma İşlemi Sürüyor...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Dağıtma İşlemi Sürüyor...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Sonuç',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Bu işlem tamamlandı',
    'LBL_AJAX_LOADING_TITLE' => 'İşlem Sürüyor...',
    'LBL_AJAX_LOADING_MESSAGE' => 'Lütfen bekleyin, yükleniyor...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Bu paketi silmek istediğinize emin misiniz? Bu paket ile ilişkili tüm dosyalar kalıcı olarak silinecek.',
    'LBL_JS_REMOVE_MODULE' => 'Bu modülü silmek istediğinize emin misiniz? Bu modül ile ilişkili tüm dosyalar kalıcı olarak silinecek.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Bu modül yeniden dağıtlırsa Studio içinde yaptığınız tüm özelleştirmelerin üzerine yazılır. İlerlemek istediğinize emin misiniz?',

    'LBL_DEPLOY_IN_PROGRESS' => 'Paket Dağıtılıyor',
    'LBL_JS_VALIDATE_NAME' => 'Ad - Alfa-sayısal karakterlerden oluşmalı, bir harf karakteri ile başlamalı ve içinde boşluk karakteri bulunmamalıdır.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'Aynı adlı bir paket zaten var',
    'LBL_JS_VALIDATE_KEY' => 'Anahtar - Alfa-sayısal karakterlerden oluşmalı, bir harf karakteri ile başlamalı ve içinde boşluk karakteri bulunmamalıdır.',
    'LBL_JS_VALIDATE_LABEL' => 'Bu modülün Görüntülenecek Adı olarak kullanılacak bir etiket yazın',
    'LBL_JS_VALIDATE_TYPE' => 'Yukarıdaki listeden oluşturmak istediğiniz modül türünü seçin',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Etiket - Lütfen alt pano üzerinde görüntülenecek bir etiket ekleyin',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Bu özel alan silindiğinde özel alandaki ve veritabanındaki özel alan ile ilgili tüm veriler silinir. Özel alan modül görünümlerinde görüntülenmez.\n\nDevam etmek istiyor musunuz?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'İlişkiyi silmek istediğinize emin misiniz?',
    'LBL_CONFIRM_DONT_SAVE' => 'Son kaydetmeden sonra bazı değişiklikler yapılmış. Bu değişiklikleri kaydetmek ister misiniz?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Değişiklikler kaydedilsin mi?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Veri budanabilir ve bu işlem geri alınamaz. Devam etmek istediğinize emin misiniz?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Alana yazılacak verilere uygun veri türünü seçin.',

//Revert Module labels
    'LBL_RESET' => 'Sıfırla',
    'LBL_RESET_MODULE' => 'Modülü Sıfırla',
    'LBL_REMOVE_CUSTOM' => 'Özelleştirmeleri Kaldır',
    'LBL_CLEAR_RELATIONSHIPS' => 'İlişkileri Temizle',
    'LBL_RESET_LABELS' => 'Etiketleri Sıfırla',
    'LBL_RESET_LAYOUTS' => 'Görünümleri Sıfırla',
    'LBL_REMOVE_FIELDS' => 'Özel Alanları Kaldır',
    'LBL_CLEAR_EXTENSIONS' => 'Eklentileri Temizle',
    'LBL_HISTORY_TIMESTAMP' => 'Zaman Damgası',
    'LBL_HISTORY_TITLE' => ' geçmiş',

    'fieldTypes' => array(
        'varchar' => 'Metin Alanı',
        'int' => 'Tam Sayı',
        'float' => 'Ondalık',
        'bool' => 'İşaret Kutusu',
        'enum' => 'Açılan Liste',
        'dynamicenum' => 'Devingen Açılan Liste',
        'multienum' => 'Çoklu Seçim',
        'date' => 'Tarih',
        'phone' => 'Telefon',
        'currency' => 'Para Birimi',
        'html' => 'HTML',
        'radioenum' => 'Radyo Düğmesi',
        'relate' => 'İlişkilendir',
        'address' => 'Adres',
        'text' => 'Metin Alanı',
        'url' => 'Adres',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Tarih Saat',
        'decimal' => 'Ondalık',
        'image' => 'Görsel',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Sık kullanılan etiketler",
        "all" => "Tüm Etiketler",
    ),

    'parent' => 'Esnek İlişki',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Bu ögeyi açılan listeden kaldırılmak üzere seçiyorsunuz. Bu değer artık bulunduğu açılan liste alanlarında görüntülenmeyecek ve değer açılan listelerden seçilemeyecek. Devam etmek istediğinize emin misiniz?",

    'LBL_ALL_MODULES' => 'Tüm Modüller',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (ilişkili {1} kod)',
);
