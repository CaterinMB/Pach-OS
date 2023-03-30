<?php
include '../encabezado.php';
?>
        <link rel="stylesheet" href="../css/estiloCompras.css">

        <button class="bton-registrar" onclick="abrirVentana()">Registrar</button>
        <article class="contenido-Modulos">

            <table>
                <tr>
                    <th class="tamaño-compras">ID Compras</th>
                    <th >Nombre Proveedor</th>
                    <th class="tamaño-compras">Total</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                </tr>
                <tr>
                    <td>C1</td>
                    <td>Distritodo</td>
                    <td>67.000</td>
                <td>16 / 03 / 2023</td>
                <td><a href="#" onclick="abrirVentanaList()"><img src="../img/info.png" alt="Info" width="30" height="30"></a></td>
            </tr>
            <tr>
                <td>C2</td>
                <td>Euro</td>
                <td>350.000</td>
                <td>14 / 03 / 2023</td>
                <td><a hhref="#" onclick="abrirVentanaList()"><img src="../img/info.png" alt="Info" width="30" height="30"></a></td>
            </tr>
            <tr>
                <td>C3</td>
                <td>D1</td>
                <td>300.000</td>
                <td>12 / 03 / 2023</td>
                <td><a href="#" onclick="abrirVentanaList()"><img src="../img/info.png" alt="Info" width="30" height="30"></a></td>
            </tr>
            <tr>
                <td>C4</td>
                <td>Faissan</td>
                <td>570.000</td>
                <td>10 / 03 / 2023</td>
                <td><a href="#" onclick="abrirVentanaList()"><img src="../img/info.png" alt="Info" width="30" height="30"></a></td>
            </tr>
            <tr>
                <td>C5</td>
                <td>D1</td>
                <td>195.000</td>
                <td>08 / 03 / 2023</td>
                <td><a href="#" onclick="abrirVentanaList()"><img src="../img/info.png" alt="Info" width="30" height="30"></a></td>
            </tr>
        </table>

    </article>
        
    </div>
        <div id="ventana">
            <form>
            <fieldset id="contenido">
                <div class="mostrar">
                    <h2>Nueva Compra</h2>
                    <a href="#" onclick="cerrarVentana()">&times;</a>
                </div>
                <div class="columnas">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre Proveedor" size="24">
                    <input type="number" name="total" id="total" placeholder="Total" size="10">
                </div>
                <br>
                <h3>Insumos Receta</h3>
                <div class="insumo">
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="15">
                    <input type="number" name="canti" id="canti" placeholder="Cant" size="5">
                    <input type="number" name="precio" id="precio" placeholder="Precio" size="7">
                </div>
                <button class="Boton" onclick="ValidacionC()">Registrar</button>
            </fieldset>
            </form>        
        </div>
    </div>

    <div id="ventana-emergenteList">
        <form>
            <fieldset id="contenido">
                <div class="mostrar">
                    <h2>Listado Insumos Proveedor</h2>
                </div>
                <br>
                <div class="listado">
                    <p>Tomate</p>
                    <p>7</p>
                    <p>5.000</p>
                    <p>Cebolla</p>
                    <p>8</p>
                    <p>4.000</p>
                </div>
                <button href="#" onclick="cerrarVentanaList()">Cerrar</button>
            </fieldset>
          </form>
    </div>

    <div id="validacion-Registrado">
        <img class="validacion-img"  src="../img/correctamente-validacion.png" alt="">
        <h3><strong>¡ Compras registrada !</strong></h3>
        <p>Se registró la compra<br>correctamente.</p>
    </div>
    <div id="validacion-NoRegistrado">
        <img class="validacion-img"  src="../img/erronea-validacion.png" alt="">
        <h3><strong>¡ Error !</strong></h3>
        <p>Verifique que todos los campos<br>esten completos.</p>
    </div>

    <br><br>    
    <script src="../../controlador/compras.js">
    </script>
<?php
    include '../footer.php';
?>