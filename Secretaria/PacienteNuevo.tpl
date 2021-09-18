{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Ingrese los datos del paciente</h1>
    <form  method="POST" action="?controller=Secre&method=PacienteN" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nom">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="apel">
          <label for="icon_prefix">Apellido</label>
        </div>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="segurom">
          <label for="icon_prefix">¿Posee seguro?</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="cel">
          <label for="icon_telephone">Teléfono</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">card_travel</i>
          <input id="icon_prefix" type="text" class="validate" name="medico">
          <label for="icon_prefix">Especialidad médica que necesita:</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate" name="idpersonal">
          <label for="icon_telephone">DPI</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fechan"/>
            <label for="Fecha">Fecha que desea</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Horario" type="time" class="timepicker" required="" name="Horario"/>
            <label for="Horario">Horario que desea:</label>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
      </div>
    </form>
  </div>
{include file="Cabeceras/Header.tpl"}