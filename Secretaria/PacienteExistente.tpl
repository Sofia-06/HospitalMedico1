{include file="Cabeceras/Header.tpl"}
<div class="container" align="center">
<div class="col 7" align="center">
<h1>Ingresa el DPI del Paciente...</h1>
<form role="form" method="POST">
  <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">DPI</label>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"  name="action"/>
            </div>
            <br/>
        </div>
  </div>
</form>
<table>
    <thead>
      <tr>
        <th>Nombre</th>
        <th>DPI</th>
        <th>Especialidad Medica</th>
        <th>Fecha</th>
      </tr>
    </thead>
    {foreach from=$paci item=$pa}
    <tr>
      <td>{$pa['Nombre']}</td>
      <td>{$pa['DPI']}</td>
      <td>{$pa['EspecialidadMedica']}</td>
      <td>{$pa['Fecha']}</td>
    </tr>
    {/foreach}
  
</thead>


</table>
</div>
{include file="Cabeceras/Footer.tpl"}