/* COMPRAS */

/* REGISTRAR */
function abrirVentana() {
    window.location.hash = "ventana-";
    document.getElementById("ventana").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentana() {
    window.location.hash = "";
    document.getElementById("ventana").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

/* LISTADO INSUMOS */
function abrirVentanaList() {
    window.location.hash = "ventana-emergenteList";
    document.getElementById("ventana-emergenteList").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}
    
function cerrarVentanaList() {
    window.location.hash = "";
    document.getElementById("ventana-emergenteList").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

/* VALIDACION REGISTRAR */
function ValidacionC(){
    let nombre = document.getElementById("nombre").value;
    let total=document.getElementById("total").value;
    let insumo=document.getElementById("insumo").value;
    let canti=document.getElementById("canti").value;
    let precio=document.getElementById("precio").value;
    if(nombre=="" && total=="" && insumo=="" && canti=="" && precio==""){
        window.location.hash = "validacion-NoRegistrado";
        document.getElementById("validacion-NoRegistrado").style.display = "flex"
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-NoRegistrado").style.display = "none";
        }, 5000);
        console.log(2,nombre,total,insumo,canti,precio)
    }else{
        window.location.hash = "validacion-Registrado";
        document.getElementById("validacion-Registrado").style.display = "flex"
        setTimeout(function() {
            cerrarVentanaPR();
        }, 3000);
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-Registrado").style.display = "none";
        }, 5000);
        console.log(1,nombre,total,insumo,canti,precio)
    }
}

