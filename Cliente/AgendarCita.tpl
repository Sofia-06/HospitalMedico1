{include file="Cabeceras/Header.tpl"}

<div class="row">
<h1>Agende su cita a continuación...</h1>
<br/>
    <!--<form >-->
    <form method="POST" action="?controller=Cliente&method=AgendCita" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="nombre" type="text" class="validate" name="nombre">
          <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="apellido" type="text" class="validate" name="apellido">
          <label for="apellido">Apellido</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="seguro">
          <label for="icon_prefix">¿Posee seguro?</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="celular" type="tel" class="validate" name="celular">
          <label for="celular">Teléfono</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">card_travel</i>
        <input id="espmed" type="text" class="validate" name="espmed">
        <label for="espmed">Especialidad médica</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="dpi" type="text" class="validate" name="dpi">
          <label for="dpi">DPI</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="fecha" type="date" class="validate" required="" name="fecha"/>
            <label for="fecha">Fecha que desea</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Horario" type="time" class="timepicker" required="" name="hora"/>
            <label for="Horario">Horario que desea:</label>
        </div>
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