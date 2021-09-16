{include file="Cabeceras/Header.tpl"}
    <nav>
        <div class="nav-wrapper #d1c4e9 deep-purple lighten-4">
          <a href="" class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>Nombre</a></li>
            <li>| Secretaria |</a></li>
            <li><a href="">Salir</a></li>
          </ul>
        </div>
      </nav>

      <br/>
      <br/>
      <br/>

 <div class="row" align="center">

        <div class="col 1">
        </div>
          <div class="col 7" align="center">  
            {if isset($rol)}
                {if $rol=='pacex'}
                    {include file='Secretaria/PacienteExistente.tpl'}
                {else if $rol=='pacnue'}
                    {include file='Secretaria/PacienteNuevo.tpl'}
                {else if $rol=='salas'}
                    {include file='Secretaria/Salas.tpl'}
                {/if}
                {else}
                 <h1>Bienvenida Secretaria</h1>
                  <br/>
                  <br/>
                  <br/>
                <div class ="row">
                    <div class="input field col s12">
                    <a href="?controller=Secre&method=PacienteE" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Paciente ya existente</a>
                    </button>
                    </div>
                    <br/>
                <br/>
                <br/>
                <br/>
                </div> 
                <div class ="row">
                    <div class="input field col s12">
                    <a href="?controller=Secre&method=PacienteN" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Paciente Nuevo</a>
                    </button>
                    </div>
                    <br/>
                <br/>
                <br/>
                <br/>
                </div>
                <div class ="row">
                    <div class="input field col s12">
                    <a href="?controller=Secre&method=Salas" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Salas</a>
                    </button>
                    </div>
                    <br/>
                </div> 
         
            {/if}
        </div>
 </div>
                
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>

 <footer class="page-footer #d1c4e9 deep-purple lighten-4">
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

{include file="Cabeceras/Footer.tpl"}