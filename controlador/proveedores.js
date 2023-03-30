function abrirVentanaPR() {
    window.location.hash = "ventana-emergentePR";
    document.getElementById("ventana-emergentePR").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaPR() {
    window.location.hash = "";
    document.getElementById("ventana-emergentePR").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}
function abrirVentanaPA() {
    window.location.hash = "ventana-emergentePA";
    document.getElementById("ventana-emergentePA").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaPA() {
    window.location.hash = "";
    document.getElementById("ventana-emergentePA").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}
function abrirVentanaPE() {
    window.location.hash = "ventana-emergentePE";
    document.getElementById("ventana-emergentePE").style.display = "flex";
    document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentanaPE() {
    window.location.hash = "";
    document.getElementById("ventana-emergentePE").style.display = "none";
    document.getElementById("contenedor-principal").classList.remove("desenfocado");
}



function Validacion(){
    let nombre = document.getElementById("nombre");
    let correo=document.getElementById("correo");
    let cell=document.getElementById("celular");
    let direccion=document.getElementById("direccion");
    if(nombre.value=="" && correo.value=="" && cell.value=="" && direccion.value==""){
        
        window.location.hash = "validacion-Mala-Prove";
        document.getElementById("validacion-Mala-Prove").style.display = "flex"
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-Mala-Prove").style.display = "none";
        }, 5000);
        console.log(2,nombre.value,correo.value,cell.value ,direccion.value)
        
    }
    else{
        window.location.hash = "validacion-Buena-Prove";
        document.getElementById("validacion-Buena-Prove").style.display = "flex"
        setTimeout(function() {
            cerrarVentanaPR();
        }, 3000);
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-Buena-Prove").style.display = "none";
        }, 5000);
        console.log(1,nombre.value,correo.value,cell.value ,direccion.value)
    }

    
        
        

    }
    function validarAC(){
        window.location.hash = "validacion-actualizar-Prove";
        document.getElementById("validacion-actualizar-Prove").style.display = "flex"
        setTimeout(function() {
            cerrarVentanaPA();
        }, 3000);
        setTimeout(function() {
            window.location.hash = "";
            document.getElementById("validacion-actualizar-Prove").style.display = "none";
        }, 5000);
    }
    
    
    
