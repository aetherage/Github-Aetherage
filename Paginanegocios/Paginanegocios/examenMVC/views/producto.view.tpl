<div class="EspacioCentro">
    <script src="public/js/jquery-2.1.1.js"></script>
    <div id="main2">
    <form action="index.php?page=producto" method="post" enctype="multipart/form-data">
        <label>AGREGAR PRODUCTO</label><input type="text" name="txtCodigo" placeholder="Codigo"/>
        <br>
        <input type="text" name="txtNombre" placeholder="Nombre"/>
        <br>
        <input type="text" name="txtPrecio" placeholder="Precio"/>
        <br>
        <input type="text" name="txtExistencia" placeholder="Existencia"/>
        <br>
        <input type="file" name="imagen" id="imagen"/>
        <br>
        <input type="submit" name="btnProducto" value="Ingresar" />
    </form>
    <ul class="error">
        {{foreach errores}}
          <li>{{errmsg}}</li>
        {{endfor errores}}
    </ul>
    {{endif mostrarErrores}}
    </div>
</div>