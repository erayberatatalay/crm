<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:49:11
  from 'C:\xampp8.2\htdocs\suitecrm\themes\SuiteP\modules\Calendar\tpls\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807ba7797b375_28803673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee0e97eb4119159e091c724aa42630f42b81a8d' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\themes\\SuiteP\\modules\\Calendar\\tpls\\header.tpl',
      1 => 1745252412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807ba7797b375_28803673 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['controls']->value) {?>

<div class="clear"></div>

<div style='float:left; width: 70%;'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'k', 'tabs', array (
));
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
	<input type="button" class="button" <?php if ($_smarty_tpl->tpl_vars['view']->value == $_smarty_tpl->tpl_vars['k']->value) {?> selected <?php }?> id="<?php echo $_smarty_tpl->tpl_vars['tabs_params']->value[$_smarty_tpl->tpl_vars['k']->value]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tabs_params']->value[$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['tabs_params']->value[$_smarty_tpl->tpl_vars['k']->value]['title'];?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['tabs_params']->value[$_smarty_tpl->tpl_vars['k']->value]['link'];?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<div style="float:left; text-align: right; width: 30%; font-size: 12px;">
	<?php if ($_smarty_tpl->tpl_vars['view']->value == "sharedWeek" || $_smarty_tpl->tpl_vars['view']->value == "sharedMonth") {?>
		<input id="userListButtonId" type="button" class="btn btn-info" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_USERLIST'];?>
" data-toggle="modal" data-target=".modal-calendar-user-list"">
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['view']->value != 'year' && !$_smarty_tpl->tpl_vars['print']->value) {?>
	<button id="goto_date_trigger" class="btn btn-danger">
		<span class="dateTime module-calendar">
		<span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
" ></span>
					<input type="hidden" id="goto_date" name="goto_date" value="<?php echo $_smarty_tpl->tpl_vars['current_date']->value;?>
">
					<?php echo '<script'; ?>
 type="text/javascript">
					Calendar.setup ({
                      inputField : "goto_date",
                      ifFormat : "%m/%d/%Y",
                      daFormat : "%m/%d/%Y",
                      button : "goto_date_trigger",
                      singleClick : true,
                      dateStr : "<?php echo $_smarty_tpl->tpl_vars['current_date']->value;?>
",
                      step : 1,
                      onUpdate: goto_date_call,
                      startWeekday: <?php echo $_smarty_tpl->tpl_vars['start_weekday']->value;?>
,
                      weekNumbers:false
                        });
                    
                    YAHOO.util.Event.onDOMReady(function(){
                      YAHOO.util.Event.addListener("goto_date","change",goto_date_call);
                    });
                    function goto_date_call(){
                      CAL.goto_date_call();
                    }
                    
					<?php echo '</script'; ?>
>
	</span>
	</button>
	<?php }?>
	<input type="button" id="" class="btn btn-info" data-toggle="modal" data-target=".modal-calendar-settings" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SETTINGS'];?>
">
</div>

<div style='clear: both;'></div>

<?php }?>


<div class="row monthHeader">
    <div class="col-xs-1"><?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
</div>
    <div class="col-xs-10 text-center"><h3><?php echo $_smarty_tpl->tpl_vars['date_info']->value;?>
</h3></div>
    <div class="col-xs-1 text-right"><?php echo $_smarty_tpl->tpl_vars['next']->value;?>
</div>
    <br>
</div>
<?php }
}
