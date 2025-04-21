<?php
/* Smarty version 4.5.3, created on 2025-04-21 16:19:55
  from 'C:\xampp\htdocs\istencicrm\cache\themes\SuiteP\modules\RC_ProductPricing\form_SubpanelQuickCreate_RC_ProductPricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6806540b633301_53514327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe2d2de2b79fd4a00447502bab8e2bb3b26d047' => 
    array (
      0 => 'C:\\xampp\\htdocs\\istencicrm\\cache\\themes\\SuiteP\\modules\\RC_ProductPricing\\form_SubpanelQuickCreate_RC_ProductPricing.tpl',
      1 => 1745245195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6806540b633301_53514327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),3=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),4=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),5=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_number_format.php','function'=>'smarty_function_sugar_number_format',),));
?>


<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_RC_ProductPricing'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'RC_ProductPricing_subpanel_save_button');return false;" type="submit" name="RC_ProductPricing_subpanel_save_button" id="RC_ProductPricing_subpanel_save_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"><?php }?> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="RC_ProductPricing_subpanel_cancel_button" id="RC_ProductPricing_subpanel_cancel_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
"> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FULL_FORM_BUTTON_TITLE'];?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="RC_ProductPricing_subpanel_full_form_button" id="RC_ProductPricing_subpanel_full_form_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FULL_FORM_BUTTON_LABEL'];?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=RC_ProductPricing", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

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
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'RC_ProductPricing'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="day_count">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DAY_COUNT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DAY_COUNT','module'=>'RC_ProductPricing'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="day_count"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['day_count']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['day_count']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['day_count']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['day_count']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['day_count']['name'];?>
' size='30' maxlength='25' value='<?php echo smarty_function_sugar_number_format(array('precision'=>0,'var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="price">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRICE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PRICE','module'=>'RC_ProductPricing'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="price"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['price']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['price']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['price']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['price']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['price']['name'];?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
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

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_RC_ProductPricing'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'RC_ProductPricing_subpanel_save_button');return false;" type="submit" name="RC_ProductPricing_subpanel_save_button" id="RC_ProductPricing_subpanel_save_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"><?php }?> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="RC_ProductPricing_subpanel_cancel_button" id="RC_ProductPricing_subpanel_cancel_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
"> 
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FULL_FORM_BUTTON_TITLE'];?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_RC_ProductPricing'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="RC_ProductPricing_subpanel_full_form_button" id="RC_ProductPricing_subpanel_full_form_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FULL_FORM_BUTTON_LABEL'];?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=RC_ProductPricing", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_RC_ProductPricing",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_RC_ProductPricing) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

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

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('form_SubpanelQuickCreate_RC_ProductPricing');addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'name', 'name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'date_entered_date', 'date', false,'Eklenme Tarihi' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'date_modified_date', 'date', false,'Değiştirilme Tarihi' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'day_count', 'int', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DAY_COUNT','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'price', 'currency', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRICE','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'currency_id', 'currency_id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENCY','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('form_SubpanelQuickCreate_RC_ProductPricing', 'rc_productpricing_aos_products_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RC_PRODUCTPRICING_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_RC_ProductPricing', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'RC_ProductPricing','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
>
<?php }
}
