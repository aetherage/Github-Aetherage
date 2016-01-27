<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8" />
            <title>{{page_title}}</title>
            <link rel="stylesheet" href="public/css/styles.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
        </head>
        <body>

            
            <div class="menu">
<ul>
    <li >
        <div class="Imagen">
        </div>
    </li>
    <li>
        <div class="desplegable">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Usuario</a>
                            <ul>
                                  <li><a href="index.php?page=compras">Compras</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="#">Empleado</a>
                            <ul>
                                <li><a href="#">Clientes</a></li>
                                <li><a href="index.php?page=camiones">Camiones</a></li>
                                <li><a href="index.php?page=empleados">Empleados</a></li>
                                <li><a href="index.php?page=facturas">Facturas</a></li>
                                <li><a href="index.php?page=rutas">Rutas</a></li>
                            </ul>
                    </li>
                    <li>
                        <a href="#">Iniciar sesion</a>
                            <ul>
                                  <li><a href="index.php?page=login">Iniciar sesion</a></li>
                                  <li><a href="index.php?page=registro">Registrarse</a></li>
                            </ul>
                    </li>
                </ul>
        </div>
    </li>
</ul>
</div>
            <h1>{{page_title}}</h1>
<div class= "contenido">
                {{{page_content}}}
</div>

       
           <div class="footer">
<footer class="footer-centrada">
    <p class="footer-Logo">
        Contactenos a:
    </p>
    <p class="footer-links">
        <a href="#"></a>
        		home		·
        <a href="#"></a>
        		Facebook		·
        		Twitter		· +50432355668
        <a href="#"></a>
    </p>
    <p class="footer-nombre">
        Transportes © 2015
    </p>
</footer>    
</div>
</body>
</html>
