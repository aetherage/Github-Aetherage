<div class="header"></div>
    <div class="contenedorproductos">
        <span>  * Clic en la imagen para Ver Información</span>
        <div class="tituto">
            <h1 style="text-shadow: white 0.1em 0.1em 0.05em">Productos</h1>
        </div>
        <div class="contenedor">
        <ul type="none">
            {{foreach productos}}
                <div class="producto">
                    <li>
                    <div class="imagen1">
                        <a href="{{detalle_produc}}"><img id="img11" src="{{imagen_produc}}" /></a>
                    </div>
                    </li>
                    </br>
                    <li>{{nom_produc}}</li>
                </div>
            
            {{endfor productos}}
            </ul>
            
        </div>
    </div>

    
  


