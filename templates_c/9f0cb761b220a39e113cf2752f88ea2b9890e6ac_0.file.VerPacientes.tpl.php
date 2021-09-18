<?php
/* Smarty version 3.1.39, created on 2021-09-18 04:38:37
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Doctor\VerPacientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6145512d6bd209_49706468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f0cb761b220a39e113cf2752f88ea2b9890e6ac' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Doctor\\VerPacientes.tpl',
      1 => 1631932697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6145512d6bd209_49706468 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
            <label for="Fecha">Fecha</label>
        </div>
        <div class="row" align="center">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
        <table>
          <tr>
            <td>Especialidad Medica</td>
            <td>Fecha</td>
          </tr>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pacientes']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['EspecialidadMedica'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['Fecha'];?>
</td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        
        <tbody>
          <tr>
            <td>Alvin</td>
            
          </tr>
        </tbody>
      </table>
      </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
