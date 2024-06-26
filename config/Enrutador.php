<?php

class Enrutador
{
    //atributos

    //metodos
    public function __construct()
    {
    }


    public function cargarVista($vista)
    {
        $carpetaArchivo = explode("/", $vista);
        //var_dump($carpetaArchivo);
        switch ($carpetaArchivo[1]) {
            case 'inicio':
                require_once("./public/views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            case 'crear':
                require_once("./public/views/" . $vista . ".php");
                break;
            case 'detalle':
                require_once("./public/views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            case 'editar':
                require_once("./public/views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            case 'eliminar':
                require_once("./public/views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            case 'registrar':
                require_once("./public/views/" . $carpetaArchivo[0] . "/" . $carpetaArchivo[1] . ".php");
                break;
            default:
                require_once("./public/views/error.php");
                break;
        }
    }

    public function validarGet($var)
    {
        if (empty($var)) {
            require_once("./Views/inicio.php");
        } else {
            return true;
        }
    }
}