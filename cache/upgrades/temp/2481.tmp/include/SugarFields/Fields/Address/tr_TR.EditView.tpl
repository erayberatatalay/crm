{*
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
<script src='{sugar_getjspath file="include/SugarFields/Fields/Address/SugarFieldAddress.js"}'></script>
{{assign var="key" value=$displayParams.key|upper}}
{{assign var="street" value=$displayParams.key|cat:'_address_street'}}
{{assign var="city" value=$displayParams.key|cat:'_address_city'}}
{{assign var="state" value=$displayParams.key|cat:'_address_state'}}
{{assign var="country" value=$displayParams.key|cat:'_address_country'}}
{{assign var="postalcode" value=$displayParams.key|cat:'_address_postalcode'}}
<fieldset id='{{$key}}_address_fieldset'>
    <legend>{sugar_translate label='LBL_{{$key}}_ADDRESS' module='{{$module}}'}</legend>
    <table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
        <tr>
            <td valign="top" id="{{$street}}_label" width='25%' scope='row'>
                <label for="{{$street}}">{sugar_translate label='LBL_{{$key}}_STREET' module='{{$module}}'}:</label>
                {if $fields.{{$street}}.required || {{if $street|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td width="*">
                {{if $displayParams.maxlength}}
                <textarea id="{{$street}}" name="{{$street}}" title='{{$vardef.help}}' maxlength="{{$displayParams.maxlength}}"
                          rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}"
                          tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
                {{else}}
                <textarea id="{{$street}}" name="{{$street}}" title='{{$vardef.help}}' rows="{{$displayParams.rows|default:4}}"
                          cols="{{$displayParams.cols|default:60}}"
                          tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
                {{/if}}
            </td>
        </tr>

        <tr>

            <td id="{{$city}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%'
                scope='row'>
                <label for="{{$city}}">{sugar_translate label='LBL_CITY' module='{{$module}}'}:
                    {if $fields.{{$city}}.required || {{if $city|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                    <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                    {/if}
            </td>
            <td>
                <input type="text" name="{{$city}}" id="{{$city}}" title='{$fields.{{$city}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$city}}.value}'
                       tabindex="{{$tabindex}}">
            </td>
        </tr>

        <tr>
            <td id="{{$state}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%'
                scope='row'>
                <label for="{{$state}}">{sugar_translate label='LBL_STATE' module='{{$module}}'}:</label>
                {if $fields.{{$state}}.required || {{if $state|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td>
                <input type="text" name="{{$state}}" id="{{$state}}" title='{$fields.{{$state}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$state}}.value}'
                       tabindex="{{$tabindex}}">
            </td>
        </tr>

        <tr>

            <td id="{{$postalcode}}_label"
                width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' scope='row'>

                <label for="{{$postalcode}}">{sugar_translate label='LBL_POSTAL_CODE' module='{{$module}}'}:</label>
                {if $fields.{{$postalcode}}.required || {{if $postalcode|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td>
                <input type="text" name="{{$postalcode}}" id="{{$postalcode}}" title='{$fields.{{$postalcode}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}}
                       value='{$fields.{{$postalcode}}.value}' tabindex="{{$tabindex}}">
            </td>
        </tr>

        <tr>

            <td id="{{$country}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%'
                scope='row'>

                <label for="{{$country}}">{sugar_translate label='LBL_COUNTRY' module='{{$module}}'}:</label>
                {if $fields.{{$country}}.required || {{if $country|lower|in_array:$displayParams.required}}true{{else}}false{{/if}}}
                <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
                {/if}
            </td>
            <td>
                <input type="text" name="{{$country}}" id="{{$country}}" title='{$fields.{{$country}}.help}' size="{{$displayParams.size|default:30}}"
                       {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$country}}.value}'
                       tabindex="{{$tabindex}}">
            </td>
        </tr>

        {{if $displayParams.copy}}
        <tr>
            <td scope='row' NOWRAP>
                {sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:
            </td>
            <td>
                <input id="{{$displayParams.key}}_checkbox" name="{{$displayParams.key}}_checkbox" type="checkbox"
                       onclick="{{$displayParams.key}}_address.syncFields();">
            </td>
        </tr>
        {{else}}
        <tr>
            <td colspan='2' NOWRAP>&nbsp;</td>
        </tr>
        {{/if}}
    </table>
</fieldset>
<script type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {ldelim}
      {{$displayParams.key}}_address = new SUGAR.AddressField("{{$displayParams.key}}_checkbox", '{{$displayParams.copy}}', '{{$displayParams.key}}');
      {rdelim});
</script>