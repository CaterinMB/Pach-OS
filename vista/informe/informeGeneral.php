<?php
    include '../encabezado.php'
?>
<link rel="stylesheet" href="../css/estiloInforme.css">

<div class="header">
    <button onclick="openPoput()" class="bton-registrar">Generar Informe</button>

    <img src="../img/basura-negro.PNG" class="basura" onclick="abrirPoput()">

    <input type="date" class="calendar" id="start" name="trip-start"value="2018-07-22"min="2018-01-01" max="2030-12-31"></div>
</div>

<article class="contenido-Modulos">
    <button class="carta-informe-estilo">Ingresos <br>900.000</button>
    <button class="carta-informe-estilo">Mes Anterior <br> 500.000</button>
    <button class="carta-informe-estilo">Mes Actual <br> 400.000</button>
    
    
    <img class="imagen-grafica" src="../img/Grafica.PNG" alt="">

    <button onclick="location.href='General.php'" class="carta-informe-estilo posicion-abajo-informe-estado">Estados De <br>Resultados</button>
    <button onclick="location.href='Costos.php'" class="carta-informe-estilo posicion-abajo-informe-costos">Costos</button>

    <aside>
        <img class="foto-coso" src="../img/cosa.png" alt="">
    </aside>
</article>

<div class="poput" id="poput">
                <img src="../img/404-tick.PNG">
                <h2>!Reporte Generado!</h2>
                <p>Reporte Generado <br>Correctamente</p>
                <button type="button" onclick="closePoput()">OK</button>
            </div>
            <div class="poput2" id="poput2">
                <img src="../img/error.PNG">
                <h2>!Error!</h2>
                <p>Verifique Que Haya <br>Seleecionado mes valido</p>
                <button type="button" onclick="closePoput()">OK</button>
            </div>
            <div class="poput3" id="poput-error">
                <img src="../img/icono-basura.PNG">
                <p>Desea Hacer Limpieza Del <br>Informe De Ventas</p>
                <button type="button" onclick="cerrarPoput()" class="si">Si</button>
                <button type="button" onclick="cerrarPoput()" class="no">No</button>
            </div>

<div id="ventana">
            <form>
            <fieldset id="contenido">
                <div class="mostrar">
                    <a href="#" onclick="cerrarVentana()">&times;</a>
                </div>
                <div>
                    <input type="text" name="insumo" placeholder="INFORME" size="40%" height="20%"><br>
                    
                    <button class="Boton">Generar</button>

                </div>
            </fieldset>
            </form>        
        </div>

<script src="../../controlador/informe.js"></script>