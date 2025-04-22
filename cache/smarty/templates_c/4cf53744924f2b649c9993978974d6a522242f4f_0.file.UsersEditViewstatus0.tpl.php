<?php
/* Smarty version 4.5.3, created on 2025-04-22 17:52:34
  from 'C:\xampp8.2\htdocs\suitecrm\cache\modules\AOW_WorkFlow\UsersEditViewstatus0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6807bb42cbacd5_02067671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf53744924f2b649c9993978974d6a522242f4f' => 
    array (
      0 => 'C:\\xampp8.2\\htdocs\\suitecrm\\cache\\modules\\AOW_WorkFlow\\UsersEditViewstatus0.tpl',
      1 => 1745337154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6807bb42cbacd5_02067671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp8.2\\htdocs\\suitecrm\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
            id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
            title=''  tabindex="1"              
            >

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']))) {?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

        <?php }?>
    </select>


<?php }
}
