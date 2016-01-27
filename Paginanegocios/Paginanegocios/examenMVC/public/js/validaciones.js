function isEmpty(value) {
    var regex = /^\s+$|^$/gi;
    return regex.test(value);
}

function isValidEmail(value){
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(value);
}
function isValidPassword(value){
    var regex = /(?=^.{8,}$)((?=.*\d)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
    return regex.test(value);
}

function isValidDecima(value){
    var regex = /^\d+$/;
    return regex.test(value);
}


        function validarFormulario(){
            var nombre = document.getElementById("txtemail"),
                direccion = document.getElementById("txtPWD"),
                pedido = document.getElementById("txtPedido");
                telefono = document.getElementById("txtTelefono");
                valornombre = nombre.value,
                valordireccion = direccion.value,
                valorpedido = pedido.value,
                valortelefono = telefono.value;
                errores = new Array();
            if (isEmpty(valornombre)) {
                errores.push("Campo Nombre est� vac�o.");
            }
            if (isEmpty(valordireccion)) {
                errores.push("Campo Direccion est� vac�o.");
            }
            if (isEmpty(valortelefono)) {
                errores.push("Campo Tel�fono est� vac�o.");
            }
            
            if (errores.length) {
                mostrarErrores(errores,"mensaje");
            }else{
                mostrarErrores(new Array(),"mensaje");
            }
        }