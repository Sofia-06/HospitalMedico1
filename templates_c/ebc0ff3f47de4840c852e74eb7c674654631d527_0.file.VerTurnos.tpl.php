<?php
/* Smarty version 3.1.39, created on 2021-09-17 19:50:56
  from 'C:\xampp2\htdocs\HospitalMedico\Doctor\VerTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144d5807369b3_47246066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc0ff3f47de4840c852e74eb7c674654631d527' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\Doctor\\VerTurnos.tpl',
      1 => 1631901054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6144d5807369b3_47246066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<div class="col 7"  align="center">
<h1>Ver turnos durante el mes de Septiembre</h1>

<img class="responsive-img" src="Recursos/horarios2.jpeg">
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
