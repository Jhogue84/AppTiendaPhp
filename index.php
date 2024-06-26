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


</head>

<body>
    <nav>
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
                    <a href="#" onclick="saludar()">otro link</a>
                    <br>
                    <a class="btn" onclick="mitoast()">Toast!</a>
                </div>
            </form>
        </div>
        <?php
        }

        ?>
    </main>
    <!-- Compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../public/js/miScript.js">
    function mitoast() {
        M.toast({
            html: 'I am a toast!'
        })
    }
    </script>
</body>

</html>