<?php
/* Smarty version 3.1.39, created on 2021-09-20 23:17:43
  from 'C:\xamppp\htdocs\HospitalMedico\HospitalMedico\Doctor\ActualizarSal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6148fa778b6bb4_18681726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26b450398d2f31be6ceab60ad29a2982d66e77e' => 
    array (
      0 => 'C:\\xamppp\\htdocs\\HospitalMedico\\HospitalMedico\\Doctor\\ActualizarSal.tpl',
      1 => 1632106532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 2,
  ),
),false)) {
function content_6148fa778b6bb4_18681726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Actualizar salas</h1>
    <form  method="POST" action="?controller=Doc&method=ActSalas" class="col s12">

    <div class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="estado">
          <label for="icon_prefix">Estado de la sala:</label>
        </div>
    </div>
    
    <div class="row">
            <div class="input-field col s8">
                <select class="browser-default" name="salas">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Sala']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['Nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['Nombre'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    </div>
    </form>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
