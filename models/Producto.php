<?Php
require_once("../config/ConectorBD.php");

class Producto
{
    //atributos
    private $id;
    private $idProveedor;
    private $idCategoria;
    private $descripcion;
    private $vrUnitario;
    private $stock;

    //metodos
    public function __construct()
    {
        $conectarse = new ConectorBd();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;
    }
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function getVrUnitario()
    {
        return $this->vrUnitario;
    }

    public function setVrUnitario($vrUnitario)
    {
        $this->vrUnitario = $vrUnitario;
    }
    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    //listar
    public function create()
    {
        $cadenaSql = "insert into productos * from productos";
    }
}
