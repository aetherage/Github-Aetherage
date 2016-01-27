<div class="EspacioCentro">
    {{if mostrarErrores}}
    <ul class="error">
        {{foreach errores}}
            <li>{{errmsg}}</li>
        {{endfor errores}}
    </ul>
    {{endif mostrarErrores}}
    <script src="public/js/jquery-2.1.1.js"></script>
    <form action="index.php?page=carretilla" method="post">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Totales</th>
        </tr>
        {{foreach carretilla}}
        <tr>
            <td>{{PtrNombre}}</td>
            <td>{{CrtDtlCantidad}}</td>
            <td>{{CrtDtlPrecio}}</td>
            <td>{{total}}</td>
        </tr>
        {{endfor carretilla}}
        <tr>
            <td colspan=3>total</td>
            <td>{{CrtTotal}}</td>
        </tr>
        </table>
            <input type="submit" name="btnComprar" value="Comprar" />
        </form>
        <ul class="error">
        {{foreach errores}}
          <li>{{errmsg}}</li>
        {{endfor errores}}
    </ul>
    {{endif mostrarErrores}}
</div>

