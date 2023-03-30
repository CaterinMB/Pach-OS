let poput=document.getElementById("poput");
let poput2=document.getElementById("poput2");
let poput3=document.getElementById("poput-error");
let lista = [];

// Se ejecuta 1 ves
for (let i = 0; i < 1; i++) {
    let random = Math.random();
    random = random * 2;
    random = Math.trunc(random);
    lista[i] = random;
    console.log(random)
    if(lista[i]==1){
        function openPoput(){
            poput.classList.add("open-poput");
        }
        function closePoput(){
            poput.classList.remove("open-poput");
        }
    }
    else if(lista[i]==0){
        function openPoput(){
            poput2.classList.add("open-poput2");
        }
        function closePoput(){
            poput2.classList.remove("open-poput2");
        }
    }
    console.log(lista)
}
function abrirPoput(){
    poput3.classList.add("open-poputError");
}
function cerrarPoput(){
    poput3.classList.remove("open-poputError");
}
