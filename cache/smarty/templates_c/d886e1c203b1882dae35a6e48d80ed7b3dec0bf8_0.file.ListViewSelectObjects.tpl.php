<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:49:32
  from 'C:\xampp8.2\htdocs\suitecrm\themes\SuiteP\include\ListView\ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807ba8c0c8d47_47355837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd886e1c203b1882dae35a6e48d80ed7b3dec0bf8' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\themes\\SuiteP\\include\\ListView\\ListViewSelectObjects.tpl',
      1 => 1745252412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807ba8c0c8d47_47355837 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
