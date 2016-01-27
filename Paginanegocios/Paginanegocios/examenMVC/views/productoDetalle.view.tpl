<div class="EspacioCentro3"></div>
<div class="EspacioCentro2">
    <div class="cont">
    <h3>{{PtrNombre}}</h3>
    </br>
    <img src="{{PtrImagen}}">
    <h4>Descripción</h4>
    <p>Stock: {{PtrExistencia}}</p>
    <p>L.{{PrtPrecio}}</p>
    </div>
    <div class="Formulario">
        <form action="index.php?page=productoDetalle" method="post">
        <label style="color: black; text-align: center;">Cantidad</label><input type="text" name="txtCantidad"/>
        <br>
        <input type="hidden" name="Codigo" value={{PrtId}}>
        <input type="hidden" name="Txtprecio" value={{PrtPrecio}}>
        <input type="submit" name="btnAgregar" value="Agregar" />
    </form>
    </div>
</div>