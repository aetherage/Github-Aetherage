function mostrarErrores(errores, errorPanelID){
    var panel = document.getElementById(errorPanelID),
        htmlStr = "";
    for(i in errores ){
        htmlStr += "<li> "+ errores[i] + "</li>";
    }
    panel.innerHTML = htmlStr;
}