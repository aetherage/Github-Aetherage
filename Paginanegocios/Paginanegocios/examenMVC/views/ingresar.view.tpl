{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}
<form action="index.php?page=ingresar" method="post">
    <label>Nombre del servidor</label><input type="text" name="txtNombre"/>
    <br>
    <label>Ip</label><input type="text" name="txtIp"/>
    <br>
    <label>Sistema operativo</label>
    <select name="txtSo">
        <option value="win">Windows</option>
        <option value="linox">Linox</option>
        <option value="osx">Osx</option>
        <option value="as400">As400</option>
    </select>
    <br>
    <label>Ram</label><input type="text" name="txtRam"/>
    <br>
    <label>Numero de nucleos</label><input type="text" name="txtCpu"/>
    <br>
    <label>Numero de interfaces de red</label><input type="text" name="txtRed"/>
    <br>
    <label>Numero de discos duros</label><input type="text" name="txtDisco"/>
    <br>
    <label>Espacio de almacenamiento</label><input type="text" name="txtEspacio"/>
    <br>
    <label>Estado</label>
    <select name="txtEstado">
        <option value="ACT">ACT</option>
        <option value="INT">INT</option>
        <option value="DEV">DEV</option>
        <option value="PRB">PRB</option>
        <option value="MNT">MNT</option>
    </select>
    <br>
    <input type="submit" name="btnIngresar" value="Ingresar" />
</form>