<?php
if($_POST){

$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="matricula";
$registro01= $_POST['Nombre'];
$registro02= $_POST['Descripcion'];
$registro03= $_POST['Precio'];
$registro04= $_POST['Cantidad'];

try {

    $conexion = new PDO("mysql:host=$servidor; dbname=$bd", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $sql ="INSERT INTO productos ( Nomb_Producto, Desc_Producto, Prec_Producto, Cant_Producto) values (:NOMB, :DESC, :PREC, :CANT)";

    $resultado = $conexion->prepare($sql);
    $resultado->execute(array(":NOMB"=>$registro01,":DESC"=>$registro02,":PREC"=>$registro03,":CANT"=>$registro04));

        echo "Registro Insertado";
        $resultado->closeCursor();
    
    } catch ( PDOException $error) {
        echo"Conexion Erronea".$error;
        die('Error: '.$error->GetMessage());
        echo "Linea del error: ".$error->getLine();
     
     }finally{
     $conexion = null;
    
    }
    
}