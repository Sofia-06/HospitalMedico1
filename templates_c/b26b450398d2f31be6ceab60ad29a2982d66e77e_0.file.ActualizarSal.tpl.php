<?php
/* Smarty version 3.1.39, created on 2021-09-18 03:52:54
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Doctor\ActualizarSal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614546768628b4_36747560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26b450398d2f31be6ceab60ad29a2982d66e77e' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Doctor\\ActualizarSal.tpl',
      1 => 1631902670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_614546768628b4_36747560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Actualizar salas</h1>
    <form  method="POST" action="" class="col s12">

    <div class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="estado">
          <label for="icon_prefix">Estado de la sala:</label>
        </div>
    </div>
    <div class= "col s12">
    <span>Elige la sala que estes usando<span>
    <p>
      <label>
        <input class="with-gap" name="sala1" type="radio" checked />
        <span>Sala 1</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="sala2" type="radio" />
        <span>Sala 2</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="sala3" type="radio"  />
        <span>Sala 3</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="sala4" type="radio" />
        <span>Sala 4</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="sala5" type="radio"  />
        <span>Sala 5</span>
      </label>
    </p>
    </div>
    </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
