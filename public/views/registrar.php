<?php
require_once("./Controllers/proveedorController.php");
$proveedorController = new ProveedorController();
//var_dump($_POST);
if (isset($_POST["guardar"])) {
    $rta = $proveedorController->crear($_POST["nombre"], $_POST["contacto"], $_POST["telefono"], $_POST["telefono2"]);
    if ($rta) {
        echo "Se registro satisfactoriamente";
        header("Location: index.php");
    } else {
        
        echo "Ya existe el proveedor, no se puede crear duplicados.";

    }
}

?>
<h4>Resitro de Usuarios</h4>
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s6">
                <label>
                    <input name="idTipoUsuario" type="radio" checked value="2" />
                    <span>Cajero</span>
                    <input name="idTipoUsuario" type="radio" value="3" />
                    <span>Cliente</span>
                    <input name="idTipoUsuario" type="radio" value="4" />
                    <span>Proveedor</span>
                </label>
            </div>
            <div class="input-field col s6">
                <input id="nombres" name="nombres" type="text" class="validate" required>
                <label for="nombres">Nombres</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="apellidos" name="apellidos" type="text" class="validate" required>
                <label for="apellidos">Apellidos</label>
            </div>
            <div class="input-field col s6">
                <input id="numIdentificacion" name="numIdentificacion" type="text" class="validate" required>
                <label for="numIdentificacion">Numero de Identificacion</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select name="tipoIdentificacion">
                    <option value="1">Cedula de Ciudadania</option>
                    <option value="2">Cedula de Extranjeria</option>
                    <option value="3">Tarjeta de Identidad</option>
                    <option value="4">Nit</option>
                </select>
                <!--<label for="tipoIdentificacion">Tipo de Identificacion</label>-->
            </div>
            <div class="input-field col s6">
                <input id="correo" name="correo" type="email" class="validate" required>
                <label for="correo">Correo Electronico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="usuario" name="usuario" type="text" class="validate" required>
                <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col s6">
                <input id="clave" name="clave" type="text" class="validate" required>
                <label for="clave">Clave</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="telefono" name="telefono" type="text" class="validate" required>
                <label for="telefono">Telefono</label>
            </div>
            <div class="input-field col s6">
                <input id="direccion" name="direccion" type="text" class="validate" required>
                <label for="direccion">Direccion</label>
            </div>

        </div>
</div>
<div class="row">
    <button type="submit" name="registrar" class="btn blue">Registrar</button>&nbsp;<button class="btn orange"
        name="cancelar">Cancelar</button>
</div>
</form>
</div>