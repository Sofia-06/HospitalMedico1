<?php
/* Smarty version 3.1.39, created on 2021-09-20 23:09:46
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Secretaria\Salas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6148f89ac1db93_90961030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '737b88717cc341f2b69781dacecdc4f4a0ec702e' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Secretaria\\Salas.tpl',
      1 => 1632110284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_6148f89ac1db93_90961030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Disponibilidad de las salas</h1>
    <form  method="POST" action="" class="col s12">
    <table>
    <thead>
      <tr>
          <th>Número de sala</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Disponibilidad</th>
      </tr>
    </thead>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sal']->value, 'sa');
$_smarty_tpl->tpl_vars['sa']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sa']->value) {
$_smarty_tpl->tpl_vars['sa']->do_else = false;
?>
        <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['sa']->value['idSalas'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['sa']->value['Nombre'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['sa']->value['Descripcion'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['sa']->value['Estado'];?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <tbody>
    </tbody>
  </table>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
