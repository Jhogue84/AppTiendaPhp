<?php
require_once("./config/ConectorBd.php");

class TipoUsuario{
    private $id;
    private $nombre;
    private $descripcion;
    private $conectarse;

    public function __construct(){
        $this->conectarse = new ConectorBd();
    }

    public function create(){

    }

    public function getter($atributo){
        return $this->$atributo;
    }

    public function setter($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function view(){
        $cadenaSql ="SELECT * FROM tiposusuarios where id = $this->id";
        $rta = $this->conectarse->consultaConRetorno($cadenaSql);
        return $rta->fetch_assoc();
    }


}