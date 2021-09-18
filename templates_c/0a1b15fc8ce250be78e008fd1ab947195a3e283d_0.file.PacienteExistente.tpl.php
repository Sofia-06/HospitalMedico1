<?php
/* Smarty version 3.1.39, created on 2021-09-17 19:23:39
  from 'C:\xampp2\htdocs\HospitalMedico\Secretaria\PacienteExistente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144cf1bb1a5f0_00665335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1b15fc8ce250be78e008fd1ab947195a3e283d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\Secretaria\\PacienteExistente.tpl',
      1 => 1631899417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6144cf1bb1a5f0_00665335 (Smarty_Internal_Template $_smarty_tpl) {
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
  </tr>
</thead>

<tbody>
  <tr>
    <td>Apellido</td>
    <td>Eclair</td>
  </tr>
  <tr>
    <td>¿Posee seguro?</td>
    <td>Jellybean</td>
  </tr>
  <tr>
    <td>DPI</td>
    <td>Lollipop</td>
  </tr>
  <tr>
    <td>Telefono:</td>
    <td>Lollipop</td>
  </tr>
</tbody>
</table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
