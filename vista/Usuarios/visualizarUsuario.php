<?php
include '../encabezado.php';
?>

        <link rel="stylesheet" href="../css/estiloUsuarios.css">
        <button onclick="abrirVentanaPR()" class="bton-registrar">Registrar Usuario</button>

        <article class="contenido-Modulos">

            <table>
                <tr>
                    <th class="id-usuarios">ID</th>
                    <th class="nombre-usuarios">Nombre Completo</th>
                    <th class="rol-usuarios">Rol</th>
                    <th class="correo-usuarios">Correo</th>
                    <th class="celular-usuarios">Celular</th>
                    <th class="celular-accion">Acción</th>
            </tr>
            <tr>
                <td>01</td> 
                <td>Miguel Angel Medina Cardona</td>
                <td>Administrador</td>
                <td>mjackmeca@gmail.com</td>
                <td>123-456-7890</td>
                <td>                
                    <a href="#" onclick="abrirVentana()">Editar</a>
                    <a href="#" class="estado" onclick="cambiarEstado()">Estado</a>
                </td>
            </tr>
            <tr>
                <td>02</td> 
                <td>Juan Andres Navarro Herrera</td>
                <td>Cajero</td>
                <td>Janavarro@gmail.com</td>
                <td>123-645-7890</td>
                <td>                
                    <a href="#visualizarUsuario.php" onclick="abrirVentana()">Editar</a>
                    <a href="#" class="estado" onclick="cambiarEstado()">Estado</a>
                </td>
            </tr>
            <tr>
                <td>03</td> 
                <td>Caterin Martinez Badillo</td>
                <td>Administrador</td>
                <td>Cmatinas12342@gmail.com</td>
                <td>123-456-0987</td>
                <td>                
                    <a href="#visualizarUsuario.php" onclick="abrirVentana()">Editar</a>
                    <a href="#" class="estado" onclick="cambiarEstado()">Estado</a>
                </td>
            </tr>
            <tr>
                <td>04</td> 
                <td>Karen Lorena Vergara Suarez</td>
                <td>Cajero</td>
                <td>Kvergara125@gmail.com</td>
                <td>321-456-7890</td>
                <td>                
                    <a href="#visualizarUsuario.php" onclick="abrirVentana()">Editar</a>
                    <a href="#" class="estado" onclick="cambiarEstado()">Estado</a>
                </td>
            </tr>
            <tr>
                <td>05</td> 
                <td>Ana Carolina Herrera Restrepo</td>
                <td>Cajero</td>
                <td>Acarolina@gmail.com</td>
                <td>398-456-7890</td>
                <td>                
                    <a href="#visualizarUsuario.php" onclick="abrirVentana()">Editar</a>
                    <a href="#" class="estado" onclick="cambiarEstado()">Estado</a>
                </td>
            </tr>
        </table>
    </article>
    




<div id="ventana-emergente">
    <form class="form-usuarios">
        <fieldset id="contenido-ventana">
            <div class="header-registrar-usuario">
                <h2>Nuevo Usuario</h2>
                    <a href="#" onclick="cerrarVentana()">Cerrar</a>
                </div>
                <select name="rol" id="rol" class="rol">
                    <option value="cajero">Cajero</option>
                    <option value="administrador">Administrador</option>
                </select> <br>
                <input type="text" name="documento" class="inp-registrar-usuarios" placeholder="Documento"> <br>
                <input type="text" name="nombre" class="inp-registrar-usuarios" placeholder="Nombre"> <br>
                <input type="email" name="correo" class="inp-registrar-usuarios" placeholder="Correo"> <br>
                <input type="text" name="celular" class="inp-registrar-usuarios" placeholder="Celular"> <br>
                <input type="password" name="contraseña" class="inp-registrar-usuarios" placeholder="Contraseña"> <br>
                <input type="password" name="confirmarContraseña" class="inp-registrar-usuarios" placeholder="Confirmar Contraseña"> <br>
                
                <button class="bton registrarUsuario">Registrar</button>
            </fieldset>
          </form>        
    </div>

    
    

    <script src="../js/js.js">
    </script>
    
    <?php

include '../footer.php';
?>
