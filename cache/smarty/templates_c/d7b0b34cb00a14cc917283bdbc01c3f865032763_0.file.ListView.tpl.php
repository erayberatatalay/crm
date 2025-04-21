<?php
/* Smarty version 4.5.3, created on 2025-04-21 16:18:51
  from 'C:\xampp\htdocs\istencicrm\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_680653cb4d29b0_26168949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b0b34cb00a14cc917283bdbc01c3f865032763' => 
    array (
      0 => 'C:\\xampp\\htdocs\\istencicrm\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1730362011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680653cb4d29b0_26168949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
