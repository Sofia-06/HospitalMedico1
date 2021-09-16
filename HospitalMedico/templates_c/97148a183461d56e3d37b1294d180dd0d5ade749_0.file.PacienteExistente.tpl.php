<?php
/* Smarty version 3.1.39, created on 2021-09-13 19:20:52
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Secretaria\PacienteExistente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f88741c8680_35968926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97148a183461d56e3d37b1294d180dd0d5ade749' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Secretaria\\PacienteExistente.tpl',
      1 => 1630802568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613f88741c8680_35968926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" align="center">
<div class="col 7" align="center">
<h1>Ingresa el DPI del Paciente...</h1>
<div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">DPI</label>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"  name="action"/>
            </div>
            <br/>
        </div>
</div>
<table>
<thead>
  <tr>
      <th>Nombre:</th>
      <th>Item Name</th>
      <th>Item Price</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>Apellido</td>
    <td>Eclair</td>
    <td>$0.87</td>
  </tr>
  <tr>
    <td>¿Posee seguro?</td>
    <td>Jellybean</td>
    <td>$3.76</td>
  </tr>
  <tr>
    <td>DPI</td>
    <td>Lollipop</td>
    <td>$7.00</td>
  </tr>
  <tr>
    <td>Telefono:</td>
    <td>Lollipop</td>
    <td>$7.00</td>
  </tr>
</tbody>
</table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
