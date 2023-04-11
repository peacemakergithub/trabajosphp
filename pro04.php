<?php
if ($_GET) {
    $dni = $_GET['txt_DNI'];
    $contraseña = $_GET['txt_contraseña'];
    $nombre1 = $_GET['txt_nombre'];
    $apellido = $_GET['txt_apellido'];
    $email = $_GET['txt_email'];
    $login = true;
    
    echo "<br><b>Resultado</b></br>";
    echo "Nombre: " . $nombre1;
    echo "<br> Apellido: " . $apellido . "<br>Mi DNI: " . $dni . "<br>Mi correo electronico: " . $email . "<br>Mi contraseña: " . $contraseña;
    define("PI","3.14");
}
?>