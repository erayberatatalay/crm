

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_RC_ProductPricing'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'RC_ProductPricing_subpanel_save_button');return false;" type="submit" name="RC_ProductPricing_subpanel_save_button" id="RC_ProductPricing_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="RC_ProductPricing_subpanel_cancel_button" id="RC_ProductPricing_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="RC_ProductPricing_subpanel_full_form_button" id="RC_ProductPricing_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=RC_ProductPricing", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='RC_ProductPricing'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="day_count">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DAY_COUNT">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DAY_COUNT' module='RC_ProductPricing'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="day_count"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.day_count.value) <= 0}
{assign var="value" value=$fields.day_count.default_value }
{else}
{assign var="value" value=$fields.day_count.value }
{/if}  
<input type='text' name='{$fields.day_count.name}' 
id='{$fields.day_count.name}' size='30' maxlength='25' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="price">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRICE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_PRICE' module='RC_ProductPricing'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="price"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.price.value) <= 0}
{assign var="value" value=$fields.price.default_value }
{else}
{assign var="value" value=$fields.price.value }
{/if}  
<input type='text' name='{$fields.price.name}' 
id='{$fields.price.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_RC_ProductPricing'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'RC_ProductPricing_subpanel_save_button');return false;" type="submit" name="RC_ProductPricing_subpanel_save_button" id="RC_ProductPricing_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="RC_ProductPricing_subpanel_cancel_button" id="RC_ProductPricing_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="RC_ProductPricing_subpanel_full_form_button" id="RC_ProductPricing_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=RC_ProductPricing", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_RC_ProductPricing",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_RC_ProductPricing) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('form_SubpanelQuickCreate_RC_ProductPricing');addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'date_entered_date', 'date', false,'Eklenme Tarihi' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'date_modified_date', 'date', false,'Değiştirilme Tarihi' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'day_count', 'int', true,'{/literal}{sugar_translate label='LBL_DAY_COUNT' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'price', 'currency', true,'{/literal}{sugar_translate label='LBL_PRICE' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'currency_id', 'currency_id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'rc_productpricing_aos_products_name', 'relate', false,'{/literal}{sugar_translate label='LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE' module='RC_ProductPricing' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_RC_ProductPricing', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='RC_ProductPricing' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='RC_ProductPricing' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
