<h1>Clientes</h1>
<table>
    <tr>
        <th>Código</th>
        <th>Num.Placa</th>
        <th>Descripcion</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Max Carga Kg.</th>
        <th>Estado</th>
    </tr>
    {{foreach clientes}}
    <tr>
        <td>{{cam_id}}</td>
        <td>{{cam_placa}}</td>
        <td>{{cam_des}}</td>
        <td>{{cam_tipo}}</td>
        <td>{{cam_lps}}</td>
        <td>{{cam_max}}</td>
        <td>{{cam_est}}</td>
        <td><a href>W'll be back!</a></td>
    </tr>
    {{endfor clientes}}
</table>