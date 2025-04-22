<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:49:31
  from 'C:\xampp8.2\htdocs\suitecrm\modules\SavedSearch\SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807ba8bcd6ac1_42448286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '023256684d58e90330c6456f52d720d062049365' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\modules\\SavedSearch\\SavedSearchSelects.tpl',
      1 => 1745252410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807ba8bcd6ac1_42448286 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
