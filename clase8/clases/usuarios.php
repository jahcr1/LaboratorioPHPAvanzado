<?php 

class Usuarios {

    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $apell, $nacimiento)
    {
        $this->nombre = $nom;
        $this->apellido = $apell;
        $this->fecha_nacimiento = $nacimiento;
    }

    private function calcular_edad($nacimiento) {
        $anio = substr($nacimiento, -4);
        $edad = (2024 - $anio);

        $edad1 = ($this->fecha_nacimiento = $nacimiento);
        return $edad1;
        // aplicar metodo para guardar la edad calculada en
    }

    public function imprime_caracteristicas () {
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Apellido: ".$this->apellido."</p>";
        echo "<p>Edad: ".$this->fecha_nacimiento."</p>";
        //echo "<p>Edad1: "   .parent::calcular_edad($nacimiento)."</p>";
    }
        
    }




?>