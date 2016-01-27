{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}

  <head>
    <title>Muflo</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="../css/index.css"></link>
    <link rel="stylesheet" href="../css/Contactanos.css"></link>
    <link rel="stylesheet" href="../public/css/style.css"/>
    <link rel="stylesheet" href="../public/css/Contactanos.css"/>
    <link rel="stylesheet" href="/public/img/logo.jpg"/>
    <script src= "public/js/validator.min.js" ></script>
    <script src= "public/js/validacion.js" ></script>
</head>

<body>
    
    <div class="header"></div>
    
    
 <div class="block4">
                <div class="imagen2">
                    <img id="img2" src="public/img/lgo.png" height="440" width="440"/>
              </div>    
        <div class="box2" >
    <br><br><br><br>
        
     
             <form onsubmit="return validateForm()" method="post" action="?page=contactanos">
                
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre" size="40" /><br/><br/>
            <input type="email" id="email" name="email" required placeholder="Email" size="40"/><br/><br/>
            <input type="text" id="Asunto" name="asunto" required placeholder="Asunto" size="40"/><br/><br/>
            <textarea id="mensaje"  name="mensaje"  txtlargo maxlength="" placeholder="Mensaje" size="60" ></textarea><br/>
            <br/> 
            
            
            <input style="font-size: 20px; font-weight: 500;background-color: #00CCFF;text-decoration: none;border-left-width: 3px;
		border-top-style: solid;border-right-style: solid;border-bottom-style: solid;border-left-style: solid;color: white;
		border-top-color: #E9E9E9;border-right-color: #666666;border-bottom-color: #666666;border-left-color: #E9E9E9;"
                type="submit" id="btnenviar" name="btnenviar"  value="Enviar" />  
          </form>            
	<br/>
	</div>
	<b><a style="color:white "> Direccion:</b><a style="color:white"> Col. Modelo 100 mts al Norte de edificio HondutelTegucigalpa, Honduras, C.A.  </a></br>
     <b><a style="color:white"> E-mail:</b><a style="color:white"> Imanuflores@hotmail.com. </br>/  muflodesigns@gmail.com </br>
       <b><a style="color:white">Cel:</b><a style="color:white">(504) 9970-6816 </br>
       <b><a style="color:white">Nuestras tallas:</b><a style="color:white">Contamos con todas las tallas par todos( Desde Niños de 1 año de Edad hasta 3XL)
       <b><a style="color:white">Requisitos: </b><a style="color:white"> Al realizar la orden  se le solicita al cliente un 70% de Anticipo y el 30% con la entrega del mismo
       <br/>  <br/>  <br/>   <br/><br/>    
         <a href="http://www.facebook.com">  <img id="img2" src="public/img/facebook.gif"  height="30" width="30"/></a>
         <a href="http://www.twitter.com">  <img id="img2" src="public/img/twitter.jpg"  height="30" width="30"/></a>
         <a href="http://www.google.com">  <img id="img2" src="public/img/google.jpg"  height="30" width="30"/></a><br/><br/><br/><br/>
         
           
	</div>

		
    </div>	
    </div>
    </div>

</body>
</html>
