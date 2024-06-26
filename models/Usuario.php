<?Php
require_once("./config/ConectorBD.php");

class Usuario
{
    //atributos
    private $id;
    private $idTipoUsuario;//objeto
    private $nombres;
    private $apellidos;
    private $numIdentificacion;
    private $tipoIdentificacion;
    private $correo;
    private $usuario;
    private $clave;
    private $telefono;
    private $direccion;
    private $fechaRegistro;    
    private $conectarse; //para la conexion

    //metodos
    public function __construct()
    {
        $this->conectarse = new ConectorBd();
    }

    public function getter($atributo){
        return $this->$atributo;
    }

    public function setter($atributo, $valor){
        $this->$atributo = $valor;
    }
      //listar
    public function create()
    {
        //validar si el usuario existe.
        $cadenaSql = "SELECT * FROM usuarios WHERE numIdentificacion ='$this->numIdentificacion' AND idTipoUsuario = '$this->idTipoUsuario'";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        if ($resultado->num_rows != 0) {
            return false;
        } else {
            $cadenaSql = "INSERT INTO usuarios (idTipoUsuario, nombres, apellidos, numIdentificacion,tipoIdentificacion,correo, usuario, clave,telefono,direccion,fechaRegistro) VALUES ($this->idTipoUsuario, '$this->nombres','$this->apellidos','{$this->numIdentificacion}',$this->tipoIdentificacion,'$this->correo','$this->clave','$this->telefono', '$this->direccion', NOW())";
            $this->conectarse->consultaSinRetorno($cadenaSql);
            return true;
        }
    }

    
    public function listAll()
    {
        $cadenaSql = "SELECT * FROM usuarios";
        $resultado = $this->conectarse->consultaConRetorno($cadenaSql);
        
        $datos = $resultado->fetch_all();
        return $datos;
    }
    /*
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumIdentificacion()
    {
        return $this->numIdentificacion;
    }

    public function setNumIdentificacion($numIdentificacion)
    {
        $this->numIdentificacion = $numIdentificacion;
    }

    public function getNombreCompania()
    {
        return $this->nombreCompania;
    }

    public function setNombreCompania($nombreCompania)
    {
        $this->nombreCompania = $nombreCompania;
    }
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->telefono = $direccion;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function getTelefono2()
    {
        return $this->telefono2;
    }
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;
    }
    public function getClave()
    {
        return $this->clave;
    }
    public function setClave($clave)
    {
        $this->clave = $clave;
    }
*/
}

  