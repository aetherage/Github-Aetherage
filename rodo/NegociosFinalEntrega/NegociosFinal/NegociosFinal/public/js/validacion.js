

        function validateForm()
        {   

            var data= {
                        "nombre" : document.getElementById("nombre").value,
                        "email" : document.getElementById("email").value,
                        "Asunto" : document.getElementById("Asunto").value,
                        "mensaje":document.getElementById("mensaje").value
                  };

            if (!validator.isEmail(data.email)){
                alert("Email Es Requerido ");
                return false;
            } 

            if (!validator.isAlpha(data.nombre)){
                alert("Nombre Es Requerido ");
                return false;
            } 

             if (!validator.isAlpha(data.Asunto)){
                alert("Asunto Es Requerido ");
                return false;
            } 

             if (!validator.isAlpha(data.mensaje)){
                alert("Mensaje Es Requerido ");
                return false;
            } 

            return true;
        } 
  
