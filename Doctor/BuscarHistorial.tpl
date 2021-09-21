{include file="Cabeceras/Header.tpl"}
<h1>Buscar historial clinico</h1>
<h4>Introduzca el DPI del paciente...</h4>
<div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">DPI</label>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"  name="action"/>
            </div>
        </div>
            <br/>
            <table>
        <thead>
          <tr>
              <th>DPI</th>
              <th>Diagnóstico</th>
              <th>Medicamentos</th>
          </tr>
        </thead>
        {foreach from=$paci item=$row}
          <tr>
            <td>{$row['dpi']}</td>
            <td>{$row['diagnostico']}</td>
            <td>{$row['medicina']}</td>
            
          </tr>
          {/foreach}

        
      </table>
            
{include file="Cabeceras/Footer.tpl"}