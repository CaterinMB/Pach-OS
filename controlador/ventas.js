function abrirVentana() {
    window.location.hash = "ventana-emergente";
    document.getElementById("ventana-emergente").style.display = "flex";
    // document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarVentana() {
    window.location.hash = "";
    document.getElementById("ventana-emergente").style.display = "none";
    // document.getElementById("contenedor-principal").classList.remove("desenfocado");
}



function pizzasPersonalizadas(){
    var select = document.getElementById("categoria");
    var valorSeleccionado = select.value;
    console.log("Entro a personalizar las pizzas")

    if(valorSeleccionado == "pequeña" || valorSeleccionado == "grande" || valorSeleccionado == "familiar"){
        window.location.hash = "ventanaPizzasPersonalizadas";
        document.getElementById("ventanaPizzasPersonalizadas").style.display = "flex";
        // document.getElementById("contenedor-principal").classList.add("desenfocado");

        window.location.hash = "ventana-emergente";
        document.getElementById("ventana-emergente").style.marginLeft = "120px";

    }
}

function cerrarPizzasPersonalizadas(){
    window.location.hash = "";
    
    document.getElementById("ventanaPizzasPersonalizadas").style.display = "none";
    // document.getElementById("contenedor-principal").classList.remove("desenfocado");

    var select = document.getElementById("categoria");
    select.value = "personal"
    document.getElementById("ventana-emergente").style.marginLeft = "0px";

}

// Valdicaciones Ventas

function validacionVentas(){
    productoVentas = document.getElementById("productoVentas").value;
    cantidad_ventas = document.getElementById("cantidad_ventas").value;
    console.log(productoVentas, cantidad_ventas)

    if(productoVentas == "" || cantidad_ventas == ""){
        validacionMala(); 
        setTimeout(function(){
            cerrarValidacionMala();
        }, 3000)
    
        
    }else{
        cerrarVentana()
        validacionBuena();
        setTimeout(function(){
            cerrarValidacionBuena()
        }, 3000)
    }
}

function numeroRandom(){
    const randomNum = Math.floor(Math.random() * 2);
    console.log(randomNum);
    
    

    return randomNum
}

function validacionBuena(){
    window.location.hash = "validacion-Buena";
    document.getElementById("validacion-Buena").style.display = "flex"
    // document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function validacionMala(){
    window.location.hash = "validacion-Mala";
    document.getElementById("validacion-Mala").style.display = "flex"
    // document.getElementById("contenedor-principal").classList.add("desenfocado");
}

function cerrarValidacionBuena(){
    window.location.hash = "";
    document.getElementById("validacion-Buena").style.display = "none";
    // document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

function cerrarValidacionMala(){
    window.location.hash = "";
    document.getElementById("validacion-Mala").style.display = "none";
    // document.getElementById("contenedor-principal").classList.remove("desenfocado");
}

// Menu 

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}


function mostrarPagoDomicilio(){
    const checkbox = document.getElementById('checkbox-domicilio');
    const mostrarInput = document.getElementsByClassName('mostrarInput')[0]; //Selecciona el primer elemento de la lista de elementos
  
    if (checkbox.checked){
      mostrarInput.readOnly = false;
    } else {
        mostrarInput.readOnly = true
    }
  }
