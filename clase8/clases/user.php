<?php 

class user {
    private $base;
    private $email;
    private $password;


function __construct($baseconectada)
    {
        $this->base = $baseconectada;
    }

public function registrarUsuario ($nombre, $apellido, $correo, $usuario, $password) {
    $sql = $this->base->ejecutarQuery("INSERT INTO registro VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$password')");
}

public function verificaUsuario ($correo, $pw) {
    $sql = $this->base->ejecutarQuery("SELECT correo FROM registro WHERE correo = '$correo'");

    if(mysqli_num_rows($sql)==1) {
        $extraer_pass = mysqli_fetch_assoc($sql);
        $validar = password_verify($pw, $extraer_pass['pass']);

        if($validar) {
            $_SESSION [] = $extraer_pass['correo'];
            header("Location: ../unidad8.php");
        }

    } else {
        header("Location:./unidad8.php?usuarionoexixte");
    }
}

}


?>