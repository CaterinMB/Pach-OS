<?php
include '../encabezado.php';
?>

<link rel="stylesheet" href="../css/estiloProductos.css">
   
        <button class="bton-registrar" onclick="abrirVentanaR()">Registrar</button>

        <table>
            <tr>
                <th class="tamaño-productos">ID Producto</th>
                <th>Categoria</th>
                <th>Nombre Producto</th>
                <th class="tamaño-productos">Porciones</th>
                <th class="tamaño-productos">Cantidad</th>
                <th class="tamaño-productos">Precio</th>
                <th colspan="3">Acción</th>
            </tr>
            <tr>
                <td>PS1</td>
                <td>Pizza</td>
                <td>Pizza Pequeña</td>
                <td>6</td>
                <td>5</td>
                <td>27.000</td>
                <td><a href="#" onclick="abrirVentanaA()"><img class="iconos" src="../img/edit.png" alt=""></a></td>
                <td><a href="#" onclick="abrirVentanaI()"><img class="iconos" src="../img/info.png" alt="Info" width="30" height="30"></a></td>
                <td><a href="#" onclick="abrirVentanaD()"><img class="iconos" src="../img/No.png" alt=""></a></td>
            </tr>
            <tr>
                <td>PS2</td>
                <td>Pizza</td>
                <td>Pizza Familiar</td>
                <td>12</td>
                <td>2</td>
                <td>53.000</td>
                <td><a href="#" onclick="abrirVentanaA()"><img class="iconos" src="../img/edit.png" alt=""></a></td>
                <td><a href="#" onclick="abrirVentanaI()"><img class="iconos" src="../img/info.png" alt="Info" width="30" height="30"></a></td>
                <td><a href="#" onclick="abrirVentanaD()"><img class="iconos" src="../img/No.png" alt=""></a></td>
            </tr>
            <tr>
                <td>PS3</td>
                <td>Bebida</td>
                <td>Jugo</td>
                <td>NO</td>
                <td>8</td>
                <td>6.000</td>
                <td><a href="#" onclick="abrirVentanaA()"><img class="iconos" src="../img/edit.png" alt=""></a></td>
                <td><a href="#" onclick="abrirVentanaI()"><img class="iconos" src="../img/info.png" alt="Info" width="30" height="30"></a></td>
                <td><a href="#" onclick="abrirVentanaD()"><img class="iconos" src="../img/No.png" alt=""></a></td>
            </tr>
            <tr>
                <td>PS4</td>
                <td>Bebida</td>
                <td>Soda</td>
                <td>NO</td>
                <td>6</td>
                <td>7.500</td>
                <td><a href="#" onclick="abrirVentanaA()"><img class="iconos" src="../img/edit.png" alt=""></a></td>
                <td><a href="#" onclick="abrirVentanaI()"><img class="iconos" src="../img/info.png" alt="Info" width="30" height="30"></a></td>
                <td><a href="#" onclick="abrirVentanaD()"><img class="iconos" src="../img/No.png" alt=""></a></td>
            </tr>
            <tr>
                <td>PS5</td>
                <td>Lazaña</td>
                <td>Lazaña de Pollo</td>
                <td>NO</td>
                <td>1</td>
                <td>18.000</td>
                <td><a href="#" onclick="abrirVentanaA()"><img class="iconos" src="../img/edit.png" alt=""></a></td>
                <td><a href="#" onclick="abrirVentanaI()"><img class="iconos" src="../img/info.png" alt="Info" width="30" height="30"></a></td>
                <td><a href="#" onclick="abrirVentanaD()"><img class="iconos" src="../img/No.png" alt=""></a></td>
            </tr>
        </table>
    
    

    <div id="ventana-emergenteR">
        <form>
        <fieldset id="contenido">
            <div class="mostrar">
                <h2>Nuevo Producto</h2>
                <a href="#" onclick="cerrarVentanaR()"><img src="../img/cerrar-icono.png" alt="Cerrar" width="15" height="18"></a>
            </div>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto" size="38">
            <input type="number" name="cant" id="cant" placeholder="Cantiadad" size="18">
            <input type="number" name="precio" id="precio" placeholder="Precio" size="18">
            <h3>Insumos Receta</h3>
            <div>
                <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
            </div>
            <button class="Boton" onclick="ValidacionP()">Registrar</button>
        </fieldset>
        </form>        
    </div>

    <div id="ventana-emergenteA">
        <form>
            <fieldset id="contenido">
                <div>
                    <h2>Actualizar Producto</h2>
                    <a href="#" onclick="cerrarVentanaA()">Cerrar</a>
                </div>
                <br>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto" size="38">
                <input type="number" name="cant" id="cant" placeholder="Cantiadad" size="18">
                <input type="number" name="precio" id="precio" placeholder="Precio" size="18">
                <h3>Insumos Receta</h3>
                <div>
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                    <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                    <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                    <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                </div>
                <button type="button" onclick="validarAP()">Actualizar</button>
            </fieldset>
          </form>
    </div>

    <div id="ventana-emergenteI">
        <form>
            <fieldset id="contenido">
                <div class="mostrar">
                    <h2>Listado Insumos Proveedor</h2>
                </div>
                <br>
                <div class="listadoP">
                    <p>Harina</p>
                    <p>2</p>
                    <p>Levadura</p>
                    <p>1</p>
                    <p>Parmesano</p>
                    <p>3</p>
                </div>
                <button href="#" onclick="cerrarVentanaI()">Cerrar</button>
            </fieldset>
          </form>
    </div>

    <div id="ventana-emergenteD">
        <form>
            <fieldset id="contenido">
                <div>
                    <h2>Eliminar Producto</h2>
                    <a href="#" onclick="cerrarVentanaD()">Cerrar</a>
                </div>
                <br>
                <h3>¿Desea Deshabilitar este proveedor?</h3>
                <button>Eliminar</button>
            </fieldset>
          </form>        
    </div>

    <div id="validacion-Buena">
        <img class="validacion-img"  src="../img/correctamente-validacion.png" alt="">
        <h3>¡ Registro completo !</h3>
        <p>Se registró al producto<br>correctamente.</p>
    </div>

    <div id="validacion-Mala">
        <img class="validacion-img"  src="../img/erronea-validacion.png" alt="">
        <h3>¡ Error !</h3>
        <p>Verifique que los campos se<br>completen correctamente.</p>
    </div>

    <div id="validacion-actualizar">
        <img class="validacion-img"  src="../img/correctamente-validacion.png" alt="">
        <h3>¡Datos Actualizados!</h3>
        <p>Los datos se actualizaron correctamente</p>
    </div>


    <div id="ventana-emergenteR">
        <form>
        <fieldset id="contenido">
            <div class="mostrar">
                <h2>Nuevo Producto</h2>
                <a href="#" onclick="cerrarVentanaR()"><img src="../img/cerrar.png" alt="Cerrar" width="15" height="18"></a>
            </div>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto" size="38">
            <input type="number" name="cant" id="cant" placeholder="Cantiadad" size="18">
            <input type="number" name="precio" id="precio" placeholder="Precio" size="18">
            <h3>Insumos Receta</h3>
            <div>
                <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
            </div>
            <button class="Boton" onclick="ValidacionP()">Registrar</button>
        </fieldset>
        </form>        
    </div>

    <div id="ventana-emergenteA">
        <form>
            <fieldset id="contenido">
                <div>
                    <h2>Actualizar Producto</h2>
                    <a href="#" onclick="cerrarVentanaA()">Cerrar</a>
                </div>
                <br>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre Producto" size="38">
                <input type="number" name="cant" id="cant" placeholder="Cantiadad" size="18">
                <input type="number" name="precio" id="precio" placeholder="Precio" size="18">
                <h3>Insumos Receta</h3>
                <div>
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                    <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                    <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                    <input type="text" name="insumo" id="insumo" placeholder="Insumo" size="20">
                    <input type="number" name="canti" id="canti" placeholder="Cantidad" size="15">
                </div>
                <button type="button" onclick="validarAP()">Actualizar</button>
            </fieldset>
          </form>
    </div>

    <div id="ventana-emergenteI">
        <form>
            <fieldset id="contenido">
                <div class="mostrar">
                    <h2>Listado Insumos Proveedor</h2>
                </div>
                <br>
                <div class="listadoP">
                    <p>Harina</p>
                    <p>2</p>
                    <p>Levadura</p>
                    <p>1</p>
                    <p>Parmesano</p>
                    <p>3</p>
                </div>
                <button href="#" onclick="cerrarVentanaI()">Cerrar</button>
            </fieldset>
          </form>
    </div>

    <div id="ventana-emergenteD">
        <form>
            <fieldset id="contenido">
                <div>
                    <h2>Eliminar Producto</h2>
                    <a href="#" onclick="cerrarVentanaD()">Cerrar</a>
                </div>
                <br>
                <h3>¿Desea Deshabilitar este proveedor?</h3>
                <button>Eliminar</button>
            </fieldset>
          </form>        
    </div>

    <div id="validacion-Buena">
        <img class="validacion-img"  src="../img/correctamente-validacion.png" alt="">
        <h3>¡ Registro completo !</h3>
        <p>Se registró al producto<br>correctamente.</p>
    </div>

    <div id="validacion-Mala">
        <img class="validacion-img"  src="../img/erronea-validacion.png" alt="">
        <h3>¡ Error !</h3>
        <p>Verifique que los campos se<br>completen correctamente.</p>
    </div>

    <div id="validacion-actualizar">
        <img class="validacion-img"  src="../img/correctamente-validacion.png" alt="">
        <h3>¡Datos Actualizados!</h3>
        <p>Los datos se actualizaron correctamente</p>
    </div>

    <script src="../../controlador/productos.js"></script>
<?php
    include '../footer.php';
?>