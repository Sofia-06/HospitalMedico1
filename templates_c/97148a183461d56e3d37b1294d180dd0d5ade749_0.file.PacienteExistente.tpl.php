<?php
/* Smarty version 3.1.39, created on 2021-09-20 00:18:59
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Secretaria\PacienteExistente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147b753c7cc06_05503360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97148a183461d56e3d37b1294d180dd0d5ade749' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Secretaria\\PacienteExistente.tpl',
      1 => 1632088972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_6147b753c7cc06_05503360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" align="center">
<div class="col 7" align="center">
<h1>Ingresa el DPI del Paciente...</h1>
<form role="form" method="POST">
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
</form>
<table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>DPI</th>
        <th>Especialidad Medica</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paci']->value, 'pa');
$_smarty_tpl->tpl_vars['pa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pa']->value) {
$_smarty_tpl->tpl_vars['pa']->do_else = false;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['pa']->value['Nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['pa']->value['DPI'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['pa']->value['EspecialidadMedica'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['pa']->value['Fecha'];?>
</td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
</thead>


</table>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
