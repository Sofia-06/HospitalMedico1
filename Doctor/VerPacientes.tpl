{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Ver pacientes</h1>
<h4>Ingrese los datos que se le solicitan...</h4>
<br/>
<br/>
    <form  method="POST" action="" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">card_travel</i>
          <input id="icon_prefix" type="text" class="validate" name="medico">
          <label for="icon_prefix">Especialidad médica</label>
        </div>
        <div class="input-field col s6">
        <i class="material-icons prefix">evento</i>
            <input id="Fecha" type="date" class="validate" required="" name="Fecha"/>
            <label for="Fecha">Fecha</label>
        </div>
        <div class="row" align="center">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"   name="action"/>
            </div>
        </div>
        <table>
          <tr>
            <td>Especialidad Medica</td>
            <td>Fecha</td>
          </tr>
          {foreach from=$pacientes item=$p}
          <tr>
            <td>{$p['EspecialidadMedica']}</td>
            <td>{$p['Fecha']}</td>
          </tr>
          {/foreach}

        
        <tbody>
          <tr>
            <td>Alvin</td>
            
          </tr>
        </tbody>
      </table>
      </div>
    </form>
  </div>
{include file="Cabeceras/Footer.tpl"}