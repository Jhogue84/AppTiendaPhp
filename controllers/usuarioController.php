<?php

require_once("./Models/Proveedor.php");

class ProveedorController
{
    //atributos
    private $proveedor;

    public function __construct()
    {
        $this->proveedor = new Proveedor();
    }

    public function index()
    {
        $listado = $this->proveedor->listAll();
        return $listado;
    }

    public function crear($nombre, $contacto, $telefono, $telefono2)
    {
        $this->proveedor->setNombre($nombre);
        $this->proveedor->setContacto($contacto);
        $this->proveedor->setTelefono($telefono);
        $this->proveedor->setTelefono2($telefono2);
        //
        $resultado = $this->proveedor->create();
        return $resultado;
    }

    public function eliminar($id)
    {
        $this->proveedor->setId($id);
        $this->proveedor->delete();
    }

    public function ver($id)
    {
        $this->proveedor->setId($id);
        $datos = $this->proveedor->listById();
        return $datos;
    }

    public function editar($id, $nombre, $contacto, $telefono, $telefono2)
    {
        $this->proveedor->setId($id);
        $this->proveedor->setNombre($nombre);
        $this->proveedor->setContacto($contacto);
        $this->proveedor->setTelefono($telefono);
        $this->proveedor->setTelefono2($telefono2);
        //del modelo
        $this->proveedor->update();
    }

    public function listar()
    {
        $datos = $this->proveedor->listAll();
        return $datos;
    }
}
