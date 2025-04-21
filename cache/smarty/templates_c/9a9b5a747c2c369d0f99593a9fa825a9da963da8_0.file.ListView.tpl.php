<?php
/* Smarty version 4.5.3, created on 2025-04-21 16:18:51
  from 'C:\xampp\htdocs\istencicrm\include\SugarFields\Fields\Currency\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_680653cb55eec8_26953259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a9b5a747c2c369d0f99593a9fa825a9da963da8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\istencicrm\\include\\SugarFields\\Fields\\Currency\\ListView.tpl',
      1 => 1730362011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680653cb55eec8_26953259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\istencicrm\\include\\Smarty\\plugins\\function.sugar_currency_format.php','function'=>'smarty_function_sugar_currency_format',),));
?>

<?php echo smarty_function_sugar_currency_format(array('var'=>$_smarty_tpl->tpl_vars['amount']->value,'currency_id'=>$_smarty_tpl->tpl_vars['currency_id']->value,'currency_symbol'=>$_smarty_tpl->tpl_vars['currency_symbol']->value),$_smarty_tpl);
}
}
