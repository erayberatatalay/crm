<?php
/* Smarty version 4.5.3, created on 2025-04-21 16:18:47
  from 'C:\xampp\htdocs\istencicrm\cache\themes\SuiteP\modules\AOS_Products\SearchForm_advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_680653c7de49d9_96596767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46c88a3c868ec23c6753f3a896621d27be5901c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\istencicrm\\cache\\themes\\SuiteP\\modules\\AOS_Products\\SearchForm_advanced.tpl',
      1 => 1745245127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680653c7de49d9_96596767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),4=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),5=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<?php echo '<script'; ?>
>
    
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    
<?php echo '</script'; ?>
>
<div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            <?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>


            <div class="col-xs-12">
                                <label for='name_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'AOS_Products'),$_smarty_tpl);?>
</label>
                            </div>
            <div class="form-item">
                                
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_advanced']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_advanced']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_advanced']['name'];?>
' size='30'
    maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='-1'      accesskey='9'  >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            <?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>


            <div class="col-xs-12">
                                <label for='part_number_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_PART_NUMBER','module'=>'AOS_Products'),$_smarty_tpl);?>
</label>
                            </div>
            <div class="form-item">
                                
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['part_number_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['part_number_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['part_number_advanced']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['part_number_advanced']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['part_number_advanced']['name'];?>
' size='30'
    maxlength='25'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='-1'      >

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            <?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>


            <div class="col-xs-12">
                                <label for='cost_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COST','module'=>'AOS_Products'),$_smarty_tpl);?>
</label>
                            </div>
            <div class="form-item">
                                
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['cost_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cost_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cost_advanced']['value']);
}?>

<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['fields']->value['cost_advanced']['name']);?>

<?php if ((isset($_REQUEST['cost_advanced_range_choice']))) {
$_smarty_tpl->_assignInScope('starting_choice', $_REQUEST['cost_advanced_range_choice']);
} else {
$_smarty_tpl->_assignInScope('starting_choice', "=");
}?>

<?php echo '<script'; ?>
 type='text/javascript'>
function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(val) 
{
  calculate_between = (val == 'between');

  //Clear the values depending on the operation
  if(calculate_between) {
     document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';   
  } else {
     document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
  }
 
  document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = calculate_between ? 'none' : '';
  document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = calculate_between ? '' : 'none';
}

var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset = function()
{
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
}

});

YAHOO.util.Event.onDOMReady(function() {
 	 if(document.getElementById('search_form_clear_advanced'))
 	 {
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
 	 }
});

YAHOO.util.Event.onDOMReady(function() {
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {
         YAHOO.util.Event.addListener('search_form_submit', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
     }
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
    }

});

// this function is specific to range searches and will check that both start and end range fields have been
// filled prior to submitting search form.  It is called from the listener added above.
function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate(e){
    if (
            (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
          ||(document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
       )
    {
        e.preventDefault();
        alert('<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHOOSE_START_AND_END_ENTRIES'];?>
');
        if (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0) {
            document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
        else {
            document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
    }

}
<?php echo '</script'; ?>
>

<span style="white-space:nowrap !important;">
<select id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" style="width:190px !important;" onchange="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['cost_advanced']['options'],'selected'=>$_smarty_tpl->tpl_vars['starting_choice']->value),$_smarty_tpl);?>

</select>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div" style="<?php if ($_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:none;<?php } else { ?>display:'';<?php }?>">
<input type='text' name='range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' id='range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='width:75px !important;' size='20' 
     
    value='<?php if (empty($_REQUEST['range_cost_advanced']) && !empty($_REQUEST['cost_advanced'])) {
echo $_REQUEST['cost_advanced'];
} else {
echo $_REQUEST['range_cost_advanced'];
}?>' tabindex='-1' >
</div>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div" style="<?php if ($_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:'';<?php } else { ?>display:none;<?php }?>">
<input type='text' name='start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' 
    id='start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['start_range_cost_advanced'];?>
' tabindex='-1'>
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_AND'];?>

<input type='text' name='end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' 
    id='end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['end_range_cost_advanced'];?>
' tabindex='-1'>    
</div> 
</span>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            <?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>


            <div class="col-xs-12">
                                <label for='price_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_PRICE','module'=>'AOS_Products'),$_smarty_tpl);?>
</label>
                            </div>
            <div class="form-item">
                                
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['price_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['price_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['price_advanced']['value']);
}?>

<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['fields']->value['price_advanced']['name']);?>

<?php if ((isset($_REQUEST['price_advanced_range_choice']))) {
$_smarty_tpl->_assignInScope('starting_choice', $_REQUEST['price_advanced_range_choice']);
} else {
$_smarty_tpl->_assignInScope('starting_choice', "=");
}?>

<?php echo '<script'; ?>
 type='text/javascript'>
function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(val) 
{
  calculate_between = (val == 'between');

  //Clear the values depending on the operation
  if(calculate_between) {
     document.getElementById("range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';   
  } else {
     document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
     document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value = '';
  }
 
  document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div").style.display = calculate_between ? 'none' : '';
  document.getElementById("<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div").style.display = calculate_between ? '' : 'none';
}

var <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset = function()
{
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change('=');
}

YAHOO.util.Event.onDOMReady(function() {
if(document.getElementById('search_form_clear'))
{
YAHOO.util.Event.addListener('search_form_clear', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
}

});

YAHOO.util.Event.onDOMReady(function() {
 	 if(document.getElementById('search_form_clear_advanced'))
 	 {
 	     YAHOO.util.Event.addListener('search_form_clear_advanced', 'click', <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_reset);
 	 }
});

YAHOO.util.Event.onDOMReady(function() {
    //register on basic search form button if it exists
    if(document.getElementById('search_form_submit'))
     {
         YAHOO.util.Event.addListener('search_form_submit', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
     }
    //register on advanced search submit button if it exists
   if(document.getElementById('search_form_submit_advanced'))
    {
        YAHOO.util.Event.addListener('search_form_submit_advanced', 'click',<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate);
    }

});

// this function is specific to range searches and will check that both start and end range fields have been
// filled prior to submitting search form.  It is called from the listener added above.
function <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_validate(e){
    if (
            (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
          ||(document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length >0 && document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0)
       )
    {
        e.preventDefault();
        alert('<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHOOSE_START_AND_END_ENTRIES'];?>
');
        if (document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").value.length == 0) {
            document.getElementById("start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
        else {
            document.getElementById("end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").focus();
        }
    }

}
<?php echo '</script'; ?>
>

<span style="white-space:nowrap !important;">
<select id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" name="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_choice" style="width:190px !important;" onchange="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_change(this.value);">
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['price_advanced']['options'],'selected'=>$_smarty_tpl->tpl_vars['starting_choice']->value),$_smarty_tpl);?>

</select>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_range_div" style="<?php if ($_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:none;<?php } else { ?>display:'';<?php }?>">
<input type='text' name='range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' id='range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='width:75px !important;' size='20' 
     
    value='<?php if (empty($_REQUEST['range_price_advanced']) && !empty($_REQUEST['price_advanced'])) {
echo $_REQUEST['price_advanced'];
} else {
echo $_REQUEST['range_price_advanced'];
}?>' tabindex='-1' >
</div>
<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_between_range_div" style="<?php if ($_smarty_tpl->tpl_vars['starting_choice']->value == 'between') {?>display:'';<?php } else { ?>display:none;<?php }?>">
<input type='text' name='start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' 
    id='start_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['start_range_price_advanced'];?>
' tabindex='-1'>
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_AND'];?>

<input type='text' name='end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' 
    id='end_range_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' style='width:75px !important;' size='10' 
     
    value='<?php echo $_REQUEST['end_range_price_advanced'];?>
' tabindex='-1'>    
</div> 
</span>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            <?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>


            <div class="col-xs-12">
                                <label for='created_by_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'AOS_Products'),$_smarty_tpl);?>
</label>
                            </div>
            <div class="form-item">
                                
<?php echo smarty_function_html_options(array('id'=>'created_by_advanced','name'=>'created_by_advanced[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['created_by_advanced']['options'],'size'=>"6",'class'=>"templateGroupChooser",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['created_by_advanced']['value']),$_smarty_tpl);?>


                            </div>
        </div>
    </div>
    
    <div>
        <div>
            &nbsp;
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['DISPLAY_SAVED_SEARCH']->value) {?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
            <?php if (!$_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
                <div>
                    <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alt_show_hide", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['alt_show_hide']->value,'name'=>"advanced_search",'ext'=>".gif",'other_attributes'=>'border="0" id="up_down_img" '),$_smarty_tpl);?>

                        &nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_SAVED_VIEWS'];?>

                    </a><br>
                    <input type='hidden' id='showSSDIV' name='showSSDIV' value='<?php echo $_smarty_tpl->tpl_vars['SHOWSSDIV']->value;?>
'>
                    <p>
                </div>
            <?php }?>
            <div class="" scope='row' width='10%' nowrap="nowrap">
                <div class="col-xs-12">
                    <label><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SAVE_SEARCH_AS','module'=>'SavedSearch'),$_smarty_tpl);?>
:</label>
                </div>
                <div class="form-item" width='30%' nowrap>
                    <input type='text' name='saved_search_name'>
                    <input type='hidden' name='search_module' value=''>
                    <input type='hidden' name='saved_search_action' value=''>
                    <input title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
' class='button'
                           type='button' name='saved_search_submit'
                           onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
                </div>
            </div>
            <div class="hideUnusedSavedSearchElements" scope='row' width='10%'
                 nowrap="nowrap"<?php if (!$_smarty_tpl->tpl_vars['savedSearchData']->value['selected']) {?> style="display: none;"<?php }?>>
                <label><?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFY_CURRENT_FILTER','module'=>'SavedSearch'),$_smarty_tpl);?>
: <span
                            id='curr_search_name'>"<?php echo $_smarty_tpl->tpl_vars['savedSearchData']->value['options'][$_smarty_tpl->tpl_vars['savedSearchData']->value['selected']];?>
"</span></label>
            </div>
            <div class="hideUnusedSavedSearchElements" width='30%'
                 nowrap<?php if (!$_smarty_tpl->tpl_vars['savedSearchData']->value['selected']) {?> style="display: none;"<?php }?>>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_UPDATE'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_UPDATE'];?>
' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETE_CONFIRM','module'=>'SavedSearch'),$_smarty_tpl);?>
")'
                       value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE'];?>
' name='ss_delete' id='ss_delete'
                       type='button'>
            </div>
        </div>
        <div>
            <div colspan='6'>
                <div<?php if (!$_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?> style='<?php echo $_smarty_tpl->tpl_vars['DISPLAYSS']->value;?>
'<?php }?> id='inlineSavedSearch'>
                    <?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCH']->value;?>

                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['displayType']->value != 'popupView') {?>
        <div>
            <div class="submitButtonsAdvanced">
                <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){document.getElementById("saved_search_select").options[0].selected=true;} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
                <?php if ($_smarty_tpl->tpl_vars['DOCUMENTS_MODULE']->value) {?>
                    &nbsp;
                    <input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BROWSE_DOCUMENTS_BUTTON_TITLE'];?>
" type="button" class="button"
                           value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BROWSE_DOCUMENTS_BUTTON_LABEL'];?>
"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
                <div>
                    <?php }?>
                    <a id="basic_search_link" href="javascript:void(0)"
                       accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_BASIC_FILTER'];?>
</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value) {?>|&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVED_FILTER_SHORTCUT'];?>
</b>&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>
 <?php }?>
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GO_BUTTON_LABEL'];?>
 '/></span>
        </span>
                    <?php if ($_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
                </div>
                <?php }?>
            </div>
            <div class="help">
                <?php if ($_smarty_tpl->tpl_vars['DISPLAY_SEARCH_HELP']->value) {?>
                    <img border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>

<?php echo '<script'; ?>
>
    
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search', '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search');
        });
    });
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"E\u015fle\u015fme Yok"};sqs_objects['search_form_created_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"E\u015fle\u015fme Yok"};sqs_objects['search_form_assigned_user_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"E\u015fle\u015fme Yok"};sqs_objects['search_form_contact_advanced']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_advanced","contact_id_advanced","contact_id_advanced","contact_id_advanced"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"E\u015fle\u015fme Yok"};sqs_objects['search_form_aos_product_category_name_advanced']={"form":"search_form","method":"query","modules":["AOS_Product_Categories"],"group":"or","field_list":["name","id"],"populate_list":["aos_product_category_name_advanced","aos_product_category_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"E\u015fle\u015fme Yok"};<?php echo '</script'; ?>
><?php }
}
