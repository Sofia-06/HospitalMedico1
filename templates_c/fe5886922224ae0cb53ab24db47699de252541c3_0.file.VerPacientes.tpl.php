<?php
/* Smarty version 3.1.39, created on 2021-09-17 19:47:55
  from 'C:\xampp2\htdocs\HospitalMedico\Doctor\VerPacientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6144d4cbd77667_83798165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5886922224ae0cb53ab24db47699de252541c3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\Doctor\\VerPacientes.tpl',
      1 => 1631900873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6144d4cbd77667_83798165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Ver pacientes</h1>
<h4>Ingrese los datos que se le solicitan...</h4>
<br/>
<br/>
    <form  method="POST" action="" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">card_travel</i>
          <input id="icon_prefix" type="text" class="validate" name="medico">
          <label for="icon_prefix">Especialidad médica</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fechan"/>
            <label for="Fecha">Fecha</label>
        </div>
        <div class="row" align="center">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
        <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Horario</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
          </tr>
        </tbody>
      </table>
      </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
