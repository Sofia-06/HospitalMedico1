{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Actualizar salas</h1>
    <form  method="POST" action="?controller=Doc&method=ActSalas" class="col s12">

    <div class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="estado">
          <label for="icon_prefix">Estado de la sala:</label>
        </div>
    </div>
    
    <div class="row">
            <div class="input-field col s8">
                <select class="browser-default" name="salas">
                    {foreach from=$Sala item=$s}
                        <option value="{$s['Nombre']}">{$s['Nombre']}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    </form>
  </div>
{include file="Cabeceras/Header.tpl"}