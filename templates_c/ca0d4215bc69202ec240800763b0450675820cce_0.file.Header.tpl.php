<?php
/* Smarty version 3.1.39, created on 2021-09-20 16:50:09
  from 'C:\xampp\htdocs\HospitalPortlandVF\HospitalMedico\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61489fa13dced4_18781659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0d4215bc69202ec240800763b0450675820cce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HospitalPortlandVF\\HospitalMedico\\Cabeceras\\Header.tpl',
      1 => 1628814390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61489fa13dced4_18781659 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
      <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="Framework/materialize/css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php } else { ?>
            Home
        <?php }?>
      </title>
      </head>
      <body>
  
<?php }
}
