<?php
/* Smarty version 3.1.39, created on 2021-09-05 02:51:12
  from 'C:\xampp2\htdocs\HospitalMedico\Cliente\AgendarCita.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613414804927e8_54218325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7925dd5fa25065deb5c164a9e68434800a276b3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\Cliente\\AgendarCita.tpl',
      1 => 1630801752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_613414804927e8_54218325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">

    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Teléfono</label>
        </div>
        <div class="input-field col s12">
        <i class="material-icons prefix">card_travel</i>
          <select>
            <option value="" disabled selected>Eliga especialidad médica</option>
            <option value="1">Médico General</option>
            <option value="2">Médico Internista</option>
            <option value="3">Traumatólogo</option>
          </select>
        <label>Materialize Select</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">DPI</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
            <label for="Fecha">Fecha que desea</label>
        </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
      </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
