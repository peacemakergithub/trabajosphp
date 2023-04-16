<?php
if($_POST){
$Filtrar = $_POST['Idproducto'];
$servidor="localhost";
$usuario="root";
$contraseña="";
$bd="matricula";


try {

    $conexion = new PDO("mysql:host=$servidor; dbname=$bd", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    $sql = "select Id_Producto,Nomb_Producto, Desc_Producto, Prec_Producto, Cant_Producto FROM productos where Id_Producto =? ";

    $resultado = $conexion->prepare($sql);
    $resultado->execute(array($Filtrar));

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
         echo "Id     : ". $registro['Id_Producto'].
              "<br> Nombre del Producto: ". $registro['Nomb_Producto'].
              "<br> Descripcion Producto: ". $registro['Desc_Producto'].
              "<br> Precio del Producto: ". $registro['Prec_Producto'].
              "<br> Cantidad del Producto: ". $registro['Cant_Producto']."<br><br>"
              ;
            }
        $resultado->closeCursor();
    
    } catch ( PDOException $error) {
     echo $error->getCode();
     echo "Linea del error: ".$error->getLine();
     
     }finally{
     $conexion = null;
    
    }
    
}
    
    
    ?>