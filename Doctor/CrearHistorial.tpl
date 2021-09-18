{include file="Cabeceras/Header.tpl"}
<h1>Crea el historial del paciente...</h1>
<form method="POST" action="?controller=Doc&method=CrearH" class="col s12">
<div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="dpi" type="tel" class="validate" name="dpi">
          <label for="dpi">DPI</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">accessibility</i>
            <input id="consulta" type="text" class="validate" name="consulta">
            <label for="consulta">Motivo de consulta:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_alert</i>
            <input id="enf" type="text" class="validate" name="enf">
            <label for="enf">Enfermedad diagnosticada:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_to_queue</i>
            <input id="test" type="text" class="validate" name="test">
            <label for="test">Examenes a realizar:</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">add_shopping_cart</i>
            <input id="medicina" type="text" class="validate" name="medicina">
            <label for="medicina">Medicamentos:</label>
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
{include file="Cabeceras/Footer.tpl"}