<?php
/* Smarty version 3.1.39, created on 2021-09-17 19:24:48
  from 'C:\xampp2\htdocs\HospitalMedico\Secretaria\Salas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144cf6049b094_18794243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea4fc2bda0946a4355aae1fb9ae94b61670e118b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\Secretaria\\Salas.tpl',
      1 => 1631899486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_6144cf6049b094_18794243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Disponibilidad de las salas</h1>
    <form  method="POST" action="" class="col s12">
    <table>
    <thead>
      <tr>
          <th>Número de sala</th>
          <th>Especialidad</th>
          <th>Disponibilidad</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>$0.87</td>
      </tr>
      <tr>
        <td>Alan</td>
        <td>Jellybean</td>
        <td>$3.76</td>
      </tr>
      <tr>
        <td>Jonathan</td>
        <td>Lollipop</td>
        <td>$7.00</td>
      </tr>
    </tbody>
  </table>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
