{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Agenda tu prueba de COVID-19</h1>
    <form  method="POST" action="?controller=Cliente&method=AgendCovid" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nom" type="text" class="validate" name="nom">
          <label for="nom">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="apelli" type="text" class="validate" name="apelli">
          <label for="apelli">Apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="tel" type="tel" class="validate" name="tel">
          <label for="tel">Teléfono</label>
        </div>
        <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
            <label for="Fecha">Fecha que desea</label>
        </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
        <div class="video-container">
          <iframe width="560" height="315" src="Recursos/videocorona.mp4" frameborder="0" allow="autoplay;" allowfullscreen></iframe>
        </div>
      </div>
    </form>
  </div>
{include file="Cabeceras/Footer.tpl"}