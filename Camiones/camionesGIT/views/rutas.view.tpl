<h2>Rutas</h2>
<div class="col12 right clean">
  <a href="index.php?page=ruta&acc=ins">Nuevo</a>
</div>
<div>
  <div class="rowhd">
    <div class="col1 hd">Código</div>
    <div class="col2 hd">Descripcion</div>
    <div class="col2 hd">Inicio</div>
    <div class="col2 hd">Final</div>
    <div class="col1 hd">Costo Lps.</div>
    <div class="col1 hd">Estado</div>
  </div>
  {{foreach rutas}}
  <div class="row">
    <div class="col1">{{ru_id}}</div>
    <div class="col2">{{ru_des}}</div>
    <div class="col2">{{ru_ini}}</div>
    <div class="col2">{{ru_fin}}</div>
    <div class="col1">{{ru_lps}}</div>
    <div class="col1">{{ru_est}}</div>
    <div class="col2">
      <a href="index.php?page=ruta&acc=upd&ru_id={{ru_id}}">Update</a> |
      <a href="index.php?page=ruta&acc=dlt&ru_id={{ru_id}}">Delete</a>
    </div>
  </div>
  {{endfor rutas}}
</div>
