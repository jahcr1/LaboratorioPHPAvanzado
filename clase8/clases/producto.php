<?php 
class producto {
    public $base;
    public $codigo;
    public $producto;
    public $descripcion;
    public $precio;


    function __construct($baseconectada)
    {
        $this->base = $baseconectada;
    }

    public function listar_productos() {
        $sql = $this->base->ejecutarQuery("SELECT * FROM productos");
        return $sql;
    }

    public function listar_producto($cod) {
        $sql = $this->base->ejecutarQuery("SELECT * FROM productos WHERE codigo = $cod");
        return $sql;
    }
}
?>