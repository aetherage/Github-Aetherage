<h2>{{camionTitle}}</h2>
<a href="index.php?page=camiones">Listado de camiones</a>
<form action="index.php?page=camion&acc={{camionMode}}" method="post">
  
  
  <div>
    <label class="col4" for="cam_id">Código</label>
    <input class="col8" type="text" disabled="disabled" value="{{cam_id}}"/>
    <input type="hidden" id="cam_id" name="cam_id" value="{{cam_id}}"/>
  </div>
  
  <div>
    <label class="col4" for="cam_placa">Placa</label>
    <input class="col8" type="text" id="cam_placa" name="cam_placa" value="{{cam_placa}}" {{disabled}}/>
  </div>
  
  <div>
    <label class="col4" for="cam_des">Descripcion</label>
    <input class="col8" type="text" id="cam_des" name="cam_des" value="{{cam_des}}" {{disabled}}/>
  </div>
  
    <div>
    <label class="col4" for="cam_tipo">Tipo</label>
    <select class="col8" id="cam_tipo" name="cam_tipo" {{disabled}}>
      <option value="RAB" {{rabSelected}}>Rabon(1 Eje)</option>
      <option value="TOR" {{torSelected}}>Torton(2 Ejes)</option>
      <option value="CC" {{ccSelected}}>Caja Cerrada</option>
      <option value="DS" {{dsSelected}}>Doble Semiremolque</option>
      <option value="CR" {{crSelected}}>Caja Refrigerada</option>
      <option value="PLA" {{plaSelected}}>Plataforma</option>
      <option value="ATP" {{atpSelected}}>Autotanque/Pipa</option>
      <option value="ATG" {{atgSelected}}>Autotanque/Granel</option>
      <option value="JGR" {{jgrSelected}}>Jaula/Granelera</option>
      <option value="JGA" {{jgaSelected}}>Jaula Ganadera</option>
      <option value="JCO" {{jcoSelected}}>Jaula Cortinada</option>
      <option value="LB" {{lbSelected}}>Low Boy</option>
      <option value="TOL" {{tolSelected}}>Tolva</option>
      <option value="MPV" {{mpvSelected}}>Madrina/Porta Vehiculos</option>
    </select>
  </div>
    
    <div>
    <label class="col4" for="cam_lps">Precio Lps</label>
    <input class="col8" type="text" id="cam_lps" name="cam_lps" value="{{cam_lps}}" {{disabled}}/>
  </div>

<div>
    <label class="col4" for="cam_max">Peso Maximo Kg.</label>
    <input class="col8" type="text" id="cam_max" name="cam_max" value="{{cam_max}}" {{disabled}}/>
  </div>

  <div>
    <label class="col4" for="cam_est">Estado</label>
    <select class="col8" id="cam_est" name="cam_est" {{disabled}}>
      <option value="ACT" {{actSelected}}>Activo</option>
      <option value="INA" {{inaSelected}}>Inactivo</option>
      <option value="DES" {{desSelected}}>Descontinuado</option>
    </select>
  </div>
 
  <div class="right col12">
    <input type="hidden" id="btnacc" name="btnacc" value="{{camionMode}}"/>
    <input type="button" name="btnGuardar" value="Confirmar" onclick="document.forms[0].submit();"/>
  </div>
</form>
