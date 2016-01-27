<span href="#" class="button" id="toggle-login">Inicio Sesion</span>
<div id="login"  >
        <div id="triangle"></div>
                <h1>Inicio Sesion</h1>
                <form method="POST" action="index.php?page=home">
                    <input type="email" name="txtemail" value="{{txtemail}}"
                               id="txtemail" placeholder="Email" />
                    <input type="password" name="txtPWD"
                               id="txtPWD" placeholder="Password" />
                    <input type="submit" name="btnLogin"
                               value="Iniciar Sesión" id="btnLogin"/>
                    <input type="hidden" name="returnUrl"
                               value="{{returnUrl}}"/>
                        <ul class="error">
        {{foreach errores}}
          <li>{{errmsg}}</li>
        {{endfor errores}}
    </ul>
                </form>

</div>

<span href="#" class="button2" id="toggle-login2">Registrarse</span>

        <div id="login2" style="display: none;">
        <div id="triangle2"></div>
        <h1>Registro</h1>
	<form action="index.php?page=home" method="post">
	    <input type="email" name="txtemail"
                       id="txtemail" placeholder="Correo electronico"/>
                <br/>
                <input type="text" name="txtNombre"
                       id="txtNombre" placeholder="Nombre Completo"/>
                <br/>
                <input type="password" name="txtPWD"
                       id="txtPWD" placeholder="Contraseña"/>
                <br/>
                <input type="password" name="txtCPWD"
                       id="txtCPWD" placeholder="Confirmar contraseña"/>
                <br/>
                 <label></label>
                <input type="submit" name="btnInsert" value="Crear Cuenta" id="btnInsert"/>
                        {{foreach errores}}
          <li>{{errmsg}}</li>
        {{endfor errores}}
    </ul>
	</form>
        </div>


