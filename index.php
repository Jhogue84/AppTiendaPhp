<?php

require_once("./config/Enrutador.php");
require_once("./Controllers/proveedorController.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="./public/css/style.css">

</head>

<body>
    <nav class="colorSena">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Pagina Web Compras</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="?view=producto/inicio">Productos</a></li>
            </ul>
        </div>
    </nav>
    <main class="container">
        <?php
        $enrutador = new Enrutador();
        if (isset($_GET["view"])) {
            $enrutador->cargarVista($_GET["view"]);
        } else {
        ?>
            <!--html-->
            <h1>Pagina web</h1>
            <p>Para realizar compras, puede iniciar sesion, registrarse o ver nuestros productos.</p>
            <!--html-->
            <h4>Iniciar Sesion</h4>
            <div class="row">
                <form class="col s12" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="usuario" name="usuario" type="text" class="validate" required>
                            <label for="usuario">Usuario</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="clave" name="clave" type="password" class="validate" required>
                            <label for="clave">Contraseña</label>
                        </div>
                    </div>
                    <select>
                        <option value="1">seleccionar</option>
                    </select>
                    <div class="row">
                        <button type="submit" name="iniciarSesion" class="btn green-ligth">Iniciar
                            Sesion</button>&nbsp;

                        <a href="?view=/registrar">Registrarse</a>
                        <br>
                        <a href="#" onclick="saludar()">Saludar</a>
                        <br>
                        <a href="#" class="btn" onclick="miToast()">Toast!</a>
                        <br>
                        <a href="#" class="btn" onclick="ventana()">ventana!</a>
                    </div>
                </form>
            </div>
        <?php
        }

        ?>
    </main>
    <script src="./public/js/miScript.js">
    </script>
    <!-- Compiled and minified JavaScript -->

</body>

</html>