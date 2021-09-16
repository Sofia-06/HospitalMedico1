<?php
/* Smarty version 3.1.39, created on 2021-09-13 19:13:40
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Doctor\CrearHistorial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613f86c45c0c30_33254877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf276f52f4dda0334f4e874c2bef4d195fd56e40' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Doctor\\CrearHistorial.tpl',
      1 => 1630801930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613f86c45c0c30_33254877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Crea el historial del paciente...</h1>
<div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">DPI</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">accessibility</i>
            <input id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Motivo de consulta:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_alert</i>
            <input id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Enfermedad diagnosticada:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_to_queue</i>
            <input id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Examenes a realizar:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_shopping_cart</i>
            <input id="icon_telephone" type="text" class="validate">
            <label for="icon_telephone">Medicamentos:</label>
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
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
