<h2>{{rutaTitle}}</h2>
<a href="index.php?page=rutas">Listado de rutas</a>
<form action="index.php?page=ruta&acc={{rutaMode}}" method="post">
  
  
  <div>
    <label class="col4" for="ru_id">Código</label>
    <input class="col8" type="text" disabled="disabled" value="{{ru_id}}"/>
    <input type="hidden" id="ru_id" name="ru_id" value="{{ru_id}}"/>
  </div>
  
  <div>
    <label class="col4" for="ru_des">Descripcion</label>
    <input class="col8" type="text" id="ru_des" name="ru_des" value="{{ru_des}}" {{disabled}}/>
  </div>
  
  <div>
    <label class="col4" for="ru_ini">Lugar de Inicio</label>
    <input class="col8" type="text" id="ru_ini" name="ru_ini" value="{{ru_ini}}" {{disabled}}/>
  </div>
  
    <div>
    <label class="col4" for="ru_fin">Lugar Final</label>
    <input class="col8" type="text" id="ru_fin" name="ru_fin" value="{{ru_fin}}" {{disabled}}/>
  </div>

<div>
    <label class="col4" for="ru_lps">Precio Lps.</label>
    <input class="col8" type="text" id="ru_lps" name="ru_lps" value="{{ru_lps}}" {{disabled}}/>
  </div>

  <div>
    <label class="col4" for="ru_est">Estado</label>
    <select class="col8" id="ru_est" name="ru_est" {{disabled}}>
      <option value="ACT" {{actSelected}}>Activo</option>
      <option value="INA" {{inaSelected}}>Inactivo</option>
      <option value="DES" {{desSelected}}>Descontinuado</option>
    </select>
  </div>
 
  <div class="right col12">
    <input type="hidden" id="btnacc" name="btnacc" value="{{rutaMode}}"/>
    <input type="button" name="btnGuardar" value="Confirmar" onclick="document.forms[0].submit();"/>
  </div>
</form>
