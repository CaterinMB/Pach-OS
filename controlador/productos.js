/* REGISTRAR */
function abrirVentanaR() {
    window.location.hash = "ventana-emergenteR";
    document.getElementById("ventana-emergenteR").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaR() {
    window.location.hash = "";
    document.getElementById("ventana-emergenteR").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

/* ACTUALIZAR */
function abrirVentanaA() {
    window.location.hash = "ventana-emergenteA";
    document.getElementById("ventana-emergenteA").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaA() {
    window.location.hash = "";
    document.getElementById("ventana-emergenteA").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

/* INFORMACION */
function abrirVentanaI() {
    window.location.hash = "ventana-emergenteI";
    document.getElementById("ventana-emergenteI").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaI() {
    window.location.hash = "";
    document.getElementById("ventana-emergenteI").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

/* DESHABILITAR*/
function abrirVentanaD() {
    window.location.hash = "ventana-emergenteD";
    document.getElementById("ventana-emergenteD").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaD() {
    window.location.hash = "";
    document.getElementById("ventana-emergenteD").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

/* VALIDAR REGSITRO */
function ValidacionP(){
    let nombre = document.getElementById("nombre").value;
    let cant = document.getElementById("cant").value;
    let precio = document.getElementById("precio").value;
    let insumo = document.getElementById("insumo").value;
    let canti = document.getElementById("canti").value;
    if(nombre=="" && cant=="" && precio=="" && insumo=="" && canti==""){
        window.location.hash = "validacion-Mala";
        document.getElementById("validacion-Mala").style.display = "flex"
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-Mala").style.display = "none";
        }, 5000);
        console.log(2, nombre, cant, precio, insumo, canti)
        
    }else{
        window.location.hash = "validacion-Buena";
        document.getElementById("validacion-Buena").style.display = "flex"
        setTimeout(function() {
            cerrarVentanaR();
        }, 3000);
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-Buena-Prove").style.display = "none";
        }, 5000);
        console.log(1, nombre, cant, precio, insumo, canti)
    }
}

/* VALIDACION ACTUALIZAR*/
function validarAP(){
    window.location.hash = "validacion-actualizar";
    document.getElementById("validacion-actualizar").style.display = "flex"
    setTimeout(function() {
        cerrarVentanaA();
    }, 3000);
    setTimeout(function() {
        window.location.hash = "";
        document.getElementById("validacion-actualizar").style.display = "none";
    }, 5000);
}