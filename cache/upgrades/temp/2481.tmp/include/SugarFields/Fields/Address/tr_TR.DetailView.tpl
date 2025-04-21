/**
 *
 * SugarCRM Community Sürümü bir müşteri ilişkileri yönetimi (CRM) 
 * uygulamasıdır ve SugarCRM, Inc. tarafından geliştirilmiştir. 
 * Telif hakkı (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM  SalesAgility Ltd. tarafından SugarCRM Community sürümü üzerine 
 * geliştirilmiş bir uygulamadır. Telif hakkı (C) 2011 - 2018 SalesAgility Ltd.
 *
 * Bu uygulama özgür bir yazılımdır; Özgür Yazılım Vakfı tarafından yayınlanmış
 * GNU Affero Genel Kamu Lisansı 3. sürümü koşulları altında dağıtılıp 
 * değiştirilebilir. Ek olarak 15. bölüme 7(a) bölümünde izin verildiği gibi şu
 * ekler yapılmıştır: ÇALIŞMANIN SUGARCRM TARAFINDAN TELİF HAKKI İLE KAPSANAN
 * HERHANGİ BİR PARÇASI İÇİN SUGARCRM ÜÇÜNCÜ TARAF HAKLARININ İHLAL EDİLMEYECEĞİ
 * KONUSUNDA HERHANGİ BİR GARANTİ VERİLMEZ.
 *
 * Bu uygulama yardımcı olması amacı ile ancak HERHANGİ BİR GARANTİ OLMADAN; 
 * üstü kapalı olarak SATILABİLİRLİK ya da BELİRLİ BİR AMACA UYGUNLUK garantisi
 * verilmeden dağıtılmaktadır. Ayrıntılı bilgi almak için Affero Genel Kamu
 * Lisansı belgelerine bakabilirsiniz.
 *
 * Bu program ile GNU Affero Genel Kamu Lisansı verilmiş olmalıdır. 
 * Bulamıyorsanız http://www.gnu.org/licenses adresine bakabilir ya da Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA adresine yazabilirsiniz.
 *
 * SugarCRM için, SugarCM Inc. merkezine 10050 North Wolfe Road, SW2-130,
 * Cupertino, CA 95014, USA adresinden yazabilir ya da contact@sugarcrm.com
 * adresine e-posta gönderebilirsiniz.
 *
 * Bu programdaki etkileşimli kullanıcı arayüzleri ve nesne kodu sürümlerinde,
 * GNU Affero Genel Kamu Lisansı 3. sürümünün 5. bölümünde belirtildiği şekilde
 * Uygun Yasal Bildirimler görüntülenmelidir.
 *
 * GNU Affero Genel Kamu Lisansı 3. sürümünün 7(b) bölümüne uygun olarak bu 
 * Yasal Bildirimlerde "Powered by SugarCRM" logosu ve "Supercharged by
 * SuiteCRM" logosu korunmalıdır. Logolar teknik nedenlerle görüntülenemiyorsa
 * İlgili Yasal Bildirim metinlerinde "Powered by SugarCRM" ve "Supercharged by
 * SuiteCRM" metinleri görüntülenmelidir.
 */
*}
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <tr>
        <td width='99%'>
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_street"
                   value="{$fields.{{$displayParams.key}}_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_city"
                   value="{$fields.{{$displayParams.key}}_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_state"
                   value="{$fields.{{$displayParams.key}}_address_state.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_country"
                   value="{$fields.{{$displayParams.key}}_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            <input type="hidden" class="sugar_field" id="{{$displayParams.key}}_address_postalcode"
                   value="{$fields.{{$displayParams.key}}_address_postalcode.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}">
            {$fields.{{$displayParams.key}}_address_street.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
            <br>
            {$fields.{{$displayParams.key}}_address_city.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br} {$fields.{{$displayParams.key}}_address_state.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
            &nbsp;&nbsp;{$fields.{{$displayParams.key}}_address_postalcode.value|escape:'html_entity_decode'|strip_tags|url2html|nl2br}
            <br>
            {$fields.{{$displayParams.key}}_address_country.value|escape:'html_entity_decode'|escape:'html'|url2html|nl2br}
        </td>
        {{if !empty($displayParams.enableConnectors)}}
        <td class="dataField">
            {{sugarvar_connector view='DetailView'}}
        </td>
        {{/if}}
        <td class='dataField' width='1%'>
            {{*
            Adres tablosunun ikinci sütununda görüntülenmek üzere ayarlanabilecek özelleştirilmiş
			kod. Bir örnek olarak Hesaplar ayrıntı görünümündeki "Kopyala" düğmesi verilebilir.
			Ayarlanan değeri görmek için modules/Accounts/views/view.detail.php dosyasına bakın.
            *}}
            {$custom_code_{{$displayParams.key}}}
        </td>
    </tr>
</table>