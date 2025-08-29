<?php 
class carrito {
    public $base;
    

    function __construct($baseconectada)
    {
        $this->base = $baseconectada;
    }

    public function introducir_compra($codigo, $producto, $descripcion, $precio) {
        
        $sql = $this->base->ejecutarQuery("INSERT INTO compras VALUES (DEFAULT, $codigo, '$producto', '$descripcion', $precio)");

    }

    public function eliminar_compra($codigo) {
        $sql = $this->base->ejecutarQuery("DELETE FROM compras WHERE id_compra=$codigo");
    }

    public function listar_compra() {
        $sql = $this->base->ejecutarQuery("SELECT * FROM compras");
        return $sql;
        
        
    }
    /*public function listar_compra2() {
        $sql = $this->base->ejecutarQuery("SELECT COUNT(codigo) AS cantidad, codigo,descripcion, precio FROM `compras` GROUP BY codigo");
        return $sql;
        
        
    }*/

   

}
?>