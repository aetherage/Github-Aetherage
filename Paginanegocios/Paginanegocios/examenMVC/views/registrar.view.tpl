        <form action="index.php?page=home" method="post">
            <h2>Regístrate</h2>
             <label>Correo Electrónico</label>
                <input type="email" name="txtemail"
                       id="txtemail"/>
                <br/>
                <label>Nombre Completo</label>
                <input type="text" name="txtNombre"
                       id="txtNombre"/>
                <br/>
                <label>Contraseña</label>
                <input type="password" name="txtPWD"
                       id="txtPWD"/>
                <br/>
                <label>Confirmar</label>
                <input type="password" name="txtCPWD"
                       id="txtCPWD"/>
                <br/>
                 <label></label>
                <input type="submit" name="btnInsert" value="Crear Cuenta" id="btnInsert"/>
        </form>