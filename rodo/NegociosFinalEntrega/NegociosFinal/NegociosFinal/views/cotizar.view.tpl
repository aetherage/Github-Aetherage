{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}
<div class="header"></div>
<div class="contenedorproduct">
    <span style="position: absolute; left: 15px; top: 5px;">  * Campos Obligatorios</span>
        <div class="tituto">
            <h1 style="text-shadow: white 0.1em 0.1em 0.05em">Cotizar</h1>
        </div>
    <img style="position: absolute; left: 15px; top: 70px; width: 400px;" id="i" src="public/img/iconcotizador.png" />
    <div class="contenedorcoti">
        <form action="index.php?page=cotizar" method="post">
            <label>Empresa</label><input style="width: 395px; position: absolute; left: 155px;" type="text" name="txtEmpresa" value="{{txtEmpresa}}"/>
            <br><br>
            <label>*Nombre de Contácto</label><input style="width: 395px; position: absolute; left: 155px;" type="text" pattern="^[a-zA-Z_áéíóúñ\s]*$" required name="txtContacto" value="{{txtContacto}}" oninput="check_letras(this);"/>
            <br><br>
            <label>Teléfono</label><input style="width: 395px; position: absolute; left: 155px;" type="text" pattern="[0-9]{0,9}" maxlength="8" name="txtTel" value="{{txtTel}}" oninput="check_numero(this);"/>
            <br><br>
            <label>* Celular</label><input style="width: 395px; position: absolute; left: 155px;" type="text" pattern="[0-9]{0,9}" maxlength="8" required name="txtCel" value="{{txtCel}}" oninput="check_numero(this);"/>
            <br><br>
            <label>* Correo</label><input style="width: 395px; position: absolute; left: 155px;" type="text" pattern="^[\w._%-]+@[\w.-]+\.[a-zA-Z]{2,4}$" required name="txtCorreo" value="{{txtCorreo}}" oninput="check_correo(this);"/>
            <br><br>
            <label>Producto</label><input style="width: 395px; position: absolute; left: 155px;" type="text" name="txtProduc" value="{{txtProduc}}"/>
            <br><br>
            <label>Cantidad</label><input style="width: 395px; position: absolute; left: 155px;" type="text" name="txtCanti" value="{{txtCanti}}"/>
            <br><br>
            <label>Especificaciones</label><textarea style="width: 395px;  height: 100px; position: absolute; left: 155px;" name="txtEspecif"></textarea>
            <br><br>
            <input style=" position: absolute; bottom: 120px; right: 0; color: #003366; background-color: #FF9900; width:100px; height:35px; font-size: 20px; color: white; text-shadow: black 0.1em 0.1em 0.05em" type="submit" name="btnEnviar" value="Enviar"/>
        </form>
    </div>
</div>

<script type="text/javascript">
function check_numero(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("SOLO NÚMEROS");  
    }  
    else {  
        input.setCustomValidity("");  
    }
}   
function check_letras(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("SOLO LETRAS");  
    }  
    else {  
        input.setCustomValidity("");  
    }
}    
function check_correo(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("FORMATO INCORRECTO");  
    }  
    else {  
        input.setCustomValidity("");  
    }
}  </script>



    


    

