<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:51:23
  from 'C:\xampp8.2\htdocs\suitecrm\cache\modules\AOW_WorkFlow\UsersDetailViewstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807bafb9f0f55_72781438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e4d5685b16150be47bfcf2733a6da77fd999f7' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\cache\\modules\\AOW_WorkFlow\\UsersDetailViewstatus.tpl',
      1 => 1745337083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807bafb9f0f55_72781438 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['status']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'][$_smarty_tpl->tpl_vars['fields']->value['status']['value']];?>

<?php }
}
}
