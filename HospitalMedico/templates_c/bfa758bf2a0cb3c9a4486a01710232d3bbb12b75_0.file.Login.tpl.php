<?php
/* Smarty version 3.1.39, created on 2021-09-05 02:57:06
  from 'C:\xampp2\htdocs\HospitalMedico\templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_613415e2996279_57707009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfa758bf2a0cb3c9a4486a01710232d3bbb12b75' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\HospitalMedico\\templates\\Login.tpl',
      1 => 1630803425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_613415e2996279_57707009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<nav>
        <div class="nav-wrapper #f8bbd0 pink lighten-4">
          <a class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          </ul>
        </div>
      </nav>

      <br/>
      <br/>
      <br/>
    <div align="center">
    <h1>Registrate a continuación...</h1>
    </div>

    <div align="center">

        <div background="red ligten-3"></div>

            <div class="container">
            <form method="post" action="?controller=User&method=BuscarUsuario">
            <div class="row">
            <div class="input-field col s12">
            <input  name="nombre" id="nombre" type="text" class="validate"/>
            <label class="active" for="nombre">Nombre</label>
                    </div>
                    
            <div class="input-field col s12">
            <input  name="pass" id="pass" type="password" class="validate"/>
            <label class="active" for="pass">Password</label>
                    </div>
                </div>
                
                <div aling="center">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Entrar 
                    </button>  
                </div>   
                </form>
            </div>
    </div>
  <br/>
  <br/>
  <br/>
    <footer class="page-footer #f8bbd0 pink lighten-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">¿Sabias que...?</h5>
                <p class="grey-text text-lighten-4">El Hospital Portland es un hospital privado localizado en la zona 7 de ciudad de Guatemala, abierto las 24 horas. Contamos con un excelente servicio, además de nuestro excelente equipo de trabajo. El hospital Portland es uno de los más sobresalientes en nuestro país 
                gracias a nuestro amplio lugar de trabajo, contamos con distintas amenidades para la comodidad del paciente, al igual que un call center por cualquier emergencia del paciente disponible 24/7.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes sociales</h5>
                <ul>
                <li><a class="grey-text text-lighten-3">Para más información puedes contactarnos por medio de...</a></li>
                <li><a class="grey-text text-lighten-3">Teléfono: +502 3993 3972</a></li>
                <li><a class="grey-text text-lighten-3">Facebook: Hospital  Portland</a></li>
                <li><a class="grey-text text-lighten-3">Instagram: HospitalPortland.gt</a></li>
                <li><a class="grey-text text-lighten-3">Gmail:Porthospital@gmail.com</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright Text
            </div>
          </div>
        </footer>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}