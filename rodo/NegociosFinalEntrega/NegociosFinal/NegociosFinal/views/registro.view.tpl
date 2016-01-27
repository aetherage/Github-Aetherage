{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}
<div class="bloque6">
<form action="index.php?page=registro" method="post">
    <label>Nombre Completo</label><input type="text" name="txtUserName" value="{{txtUserName}}"/>
    <br/>
    <br/>
    <label>Correo Electrónico</label><input type="email" name="txtEmail" value="{{txtEmail}}"/>
    <br/>
    <br/>
    <label>Contraseña</label><input type="password" name="txtPswd" />
    <br/>
    <br/>
    <label>Confirme Contraseña</label><input type="password" name="txtPswdCnf" />
    <br/>
    <br/>
    
    <input type="submit" name="btnRegister" value="Regístrate" />
</form>
</div>