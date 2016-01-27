<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <link rel="stylesheet" href="public/css/estilo.css" />
	    <link rel="stylesheet" href="public/css/login.css" />
            <link rel="stylesheet" href="public/css/index.css"  />
            <link rel="stylesheet" href="public/css/inicio.css"  />
            <link rel="stylesheet" href="public/css/menu.css" />
            <link rel="stylesheet" href="public/css/footer.css" />
	    <link rel="stylesheet" href="public/css/productos.css" />
	    <script src="public/js/validaciones.js"></script>
	    <script src="public/js/utilitarios.js"></script>
	    <script src="public/js/jquery-2.1.1.js"> </script>
        </head>
        <body>
        <div id="header">
        <h1>-----------------------------------------------------------------</h1>
        </div>
        <div style="position: absolute; z-index: 10;" class="logo">
	<img src="public/img/logo.png" >
        </div>    
        </div>

	{{{NoestaLogiado}}}

            <div style="position: absolute; z-index: 10;" id="menu">
                <ul class="menu">
                    <li><a href="index.php?page=home">Inicio</a></li>
                    <li> <a href="">Productos </a>
                        <ul class="submenu">
                            <li> <a href="index.php?page=producto">Productos</a></li>
                            <li> <a href="index.php?page=mostrarproducto">Listado</a></li>
                        </ul>          
                    </li> 
                    <li><a href="index.php?page=vision">Nuestra Empresa</a></li>
                    <li><a href="index.php?page=contactenos">Contactenos</a></li>
		    <li><a href="index.php?page=carretilla">Carretilla</a></li>
                </ul>  
            </div>
	    
        {{{page_content}}}
	<script src="public/js/login.js"> </script>
        </body>
    </html>
