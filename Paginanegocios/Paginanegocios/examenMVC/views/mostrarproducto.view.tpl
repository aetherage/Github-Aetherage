<div class="EspacioCentro">
    <div id="main"><!-- Defining submain content section -->
    <section id="content"><!-- Defining the content section #2 -->
        <div id="left">
            <h3>PRODUCTOS</h3>
        <table border=3 bordercolor=white style="text-align: center;">
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Existencia</th>
            <th></th>
        </tr>
        {{foreach productos}}
        <tr>
            <td><img src="{{PtrImagen}}"></td>
            <td>{{PtrNombre}}</td>
            <td>{{PrtPrecio}}</td>
            <td>{{PtrExistencia}}</td>
            <td id={{PrtCodigo}} class="button4">Añadir</td>
        </tr>
        {{endfor productos}}
        </div>
    </div>        
    </table>
    <script src="public/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" >
        {{foreach productos}}
            document.getElementById("{{PrtCodigo}}").addEventListener('click', Ejecutar, false);
        {{endfor productos}}
        
        function Ejecutar(evt){
        pagina="index.php?page=productoDetalle&CodigoProducto="+this.id;
        window.location = pagina;
        return 0;
    }
    </script>
</div>

