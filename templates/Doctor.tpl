{include file="Cabeceras/Header.tpl"}
    <nav>
        <div class="nav-wrapper #b3e5fc light-blue lighten-4">
          <a href="" class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
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
        <div class="container">

        <div class="col s12"  align="center">
            
            {if isset($rol)}
                {if $rol=='bushist'}
                    {include file='Doctor/BuscarHistorial.tpl'}
                {else if $rol=='crearhist'}
                    {include file='Doctor/CrearHistorial.tpl'}
                {else if $rol=='verpacientes'}
                    {include file='Doctor/VerPacientes.tpl'}
                {else if $rol=='verturnos'}
                    {include file='Doctor/VerTurnos.tpl'}
                {else if $rol=='actsalas'}
                    {include file='Doctor/ActualizarSal.tpl'}
                {/if}
                {else}
                  <div class="col 7" align="center">
                  <h1>Bienvenido Doctor</h1>
                  <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=BuscHist" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Buscar historial clínico</a>
            </button>
            </div>
        <br/>
        <br/>
        </div> 
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=CrearH" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Crear historial clínico</a>
            </button>
            </div>
        </div> 
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=VerP" class="waves-effect waves-light btn-large"><i class="material-icons left">account_circle</i>Ver Pacientes</a>
            </button>
            </div>
        <br/>
        <br/>
        </div> 
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=VerT" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Ver Turnos</a>
            </button>
            </div>
        </div>
        <div class ="row" align="center">
            <div class="input field col s12">
            <a href="?controller=Doc&method=ActSalas" class="waves-effect waves-light btn-large"><i class="material-icons left">account_box</i>Actualizar salas</a>
            </button>
            </div>
        </div>
                  </div>
            {/if}
        </div>
        
 </div>
 </div>
 
 
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>
 <br/>

 <footer class="page-footer #b3e5fc light-blue lighten-3">
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