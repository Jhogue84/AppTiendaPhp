<?php
class ConectorBd
{

    //atributos

    private $host = "localhost";
    private $bd = "tienda";
    private $user = "jhonnymysql";
    private $pass = "utilizar";
    private $conectarse;

    public function __construct()
    {

        try {
            $this->conectarse = new mysqli($this->host, $this->user, $this->pass, $this->bd);
            if ($this->conectarse->connect_error) {
                die("Error de Conexion: " . $this->conectarse->connect_error);
            }
            //echo "conexion Exitosa";
        } catch (Exception $e) {
            echo "Excepcion Error: " . $e->getMessage();
        }
    }

    public function consultaSinRetorno($cadenaSql)
    {
        $this->conectarse->query($cadenaSql);
    }

    public function consultaConRetorno($cadenaSql)
    {
        return $this->conectarse->query($cadenaSql);
    }

    public function desConectarse()
    {
        $this->conectarse->close();
    }
}