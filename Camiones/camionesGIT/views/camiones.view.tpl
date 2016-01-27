<h2>Camiones</h2>

<div class="col12 right clean">
  <a href="index.php?page=camion&acc=ins">Nuevo</a>
</div>
<div>
  <div class="rowhd">
    <div class="col1 hd">Código</div>
    <div class="col1 hd">Placa</div>
    <div class="col2 hd">Descripcion</div>
    <div class="col2 hd">Tipo</div>
    <div class="col1 hd">Precio Lps</div>
    <div class="col1 hd">Peso Max Kg.</div>
    <div class="col2 hd">Estado</div>
  </div>
  {{foreach camiones}}
  <div class="row">
    <div class="col1">{{cam_id}}</div>
    <div class="col1">{{cam_placa}}</div>
    <div class="col2">{{cam_des}}</div>
    <div class="col2">{{cam_tipo}}</div>
    <div class="col1">{{cam_lps}}</div>
    <div class="col1">{{cam_max}}</div>
    <div class="col2">{{cam_est}}</div>
    <div class="col2">
      <a href="index.php?page=camion&acc=upd&cam_id={{cam_id}}">Update</a> |
      <a href="index.php?page=camion&acc=dlt&cam_id={{cam_id}}">Delete</a>
    </div>
  </div>
  {{endfor camiones}}
</div>
