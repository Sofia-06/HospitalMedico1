{include file="Cabeceras/Header.tpl"}
    <nav>
        <div class="nav-wrapper #69f0ae green accent-2">
          <a href="" class="brand-logo">Hospital Portland</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
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
          <div class="col 7">
            {if isset($rol)}
                {if $rol=='agendCita'}
                    {include file='Cliente/AgendarCita.tpl'}
                {else if $rol=='agendCovid'}
                    {include file='Cliente/AgendarCovid.tpl'}
                {else if $rol=='ubicaciones'}
                    {include file='Cliente/Ubicaciones.tpl'}
                {/if}
            {else}
              <div class="col 7" align="center">
              <h1>¡Bienvenido a Hospital Portland!</h1>
              <h3>Elige lo que deseas hacer a continuación...</h3>
              <br/>
              <br/><div background= "red ligten-3"></div>
    
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=AgendCita" class="waves-effect waves-light btn-large"><i class="material-icons left">event_note</i>Agendar cita médica</a>
            </button>
            </div>
        </div> 
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=AgendCovid" class="waves-effect waves-light btn-large"><i class="material-icons left">dns</i>Agendar prueba COVID-19</a>
        </button>
            </div>
        </div> 
        <div class ="row">
            <div class="input field col s12">
            <a href="?controller=Cliente&method=Ubicaciones" class="waves-effect waves-light btn-large"><i class="material-icons left">location_on</i>Ubicaciones</a>
        </button>
            </div>
        </div> 
            {/if}
        </div>
        
    </div>
        </div>
        <div class="center-align">
    
</div>
 </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <footer class="page-footer #69f0ae green accent-2">
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