<?php 
class carrito {
    public $base;
    

    function __construct($baseconectada)
    {
        $this->base = $baseconectada;
    }

    public function introducir_compra($codigo, $producto, $descripcion, $precio) {
        $cod = $_GET['codigo'];
        $sql = $this->base->ejecutarQuery("INSERT INTO compras VALUES (DEFAULT, '$codigo', '$producto','$descripcion', $precio) WHERE codigo = $cod ");

    }

    public function eliminar_compra($codigo, $producto, $descripcion, $precio) {
        $sql = $this->base->ejecutarQuery("DELETE FROM compras WHERE codigo=$codigo");
    }

    public function listar_compra($codigo, $producto, $precio) {
        $sql = $this->base->ejecutarQuery("SELECT * FROM compras");
        return $sql;
        
        
    }

   

}
?>