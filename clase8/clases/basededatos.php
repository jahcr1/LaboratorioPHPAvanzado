<?php 
class BaseDatos {
    
    private $conexion;

    function __construct($servidor, $usuario, $password, $base)
    {
        $this->conexion = new mysqli($servidor, $usuario, $password, $base);
    }

    public function ejecutarQuery($sqlquery) {
        $tipo = strtoupper(substr($sqlquery, 0,6));

        switch ($tipo) {
            case 'INSERT':
                $resultado = $this->conexion->query($sqlquery);
                break;
            case 'UPDATE':
                $resultado = $this->conexion->query($sqlquery);
                break;
            case 'DELETE':
                $resultado = $this->conexion->query($sqlquery);
                break;
            case 'SELECT':
                $resultado = $this->conexion->query($sqlquery);
                while ($listarCont = $resultado->fetch_assoc()) {
                    $mostrarCont[]=$listarCont;
                }
                return $mostrarCont;
                break;
                
        }
    }

}
?>