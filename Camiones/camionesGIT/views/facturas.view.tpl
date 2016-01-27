<h2>facturas</h2>
<p>A continuación se le presenta un listado de Facturas registradas en la empresa, puede editar los conductores pero no
 podra generar nuevas facturas o eliminarlas desde esta pantalla.</p>
<div>
  <div class="rowhd">
    <div class="col1 hd">Código Factura</div>
    <div class="col1 hd">Codigo Camion</div>
    <div class="col2 hd">Codigo Ruta</div>
    <div class="col2 hd">Codigo Empleado</div>

  </div>
  {{foreach facturas}}
  <div class="row">
    <div class="col1">{{fac_id}}</div>
    <div class="col1">{{cam_id}}</div>
    <div class="col2">{{ru_id}}</div>
    <div class="col2">{{emp_reg}}</div>
    <div class="col2">
      <a href="index.php?page=factura&acc=upd&fac_id={{fac_id}}">Update</a>
    </div>
  </div>
  {{endfor facturas}}
</div>
