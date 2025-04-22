<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:51:23
  from 'C:\xampp8.2\htdocs\suitecrm\cache\modules\AOW_WorkFlow\UsersDetailViewfirst_name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807bafb93e430_74241850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcdf78a9b48037e7f5b86ad52861e9179875aef9' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\cache\\modules\\AOW_WorkFlow\\UsersDetailViewfirst_name.tpl',
      1 => 1745337083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807bafb93e430_74241850 (Smarty_Internal_Template $_smarty_tpl) {
if (strlen($_smarty_tpl->tpl_vars['fields']->value['first_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['value'];?>
</span>
<?php }
}
