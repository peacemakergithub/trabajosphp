
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanzamineto de dado</title>

</head>

<body>
    <p>FORMULARIO</p>
    <form action="pro03.php" method="post">
        <label for="nombre">Cuantas veces desea lanzar el dado :</label>
        <input type="number" id="nombre" name="txt_cuantas"><br><br>
        
        
        <input type="submit" value="enviar">

    </form>
</body>

</html>
<?php

$cuantoveces =$_POST['txt_cuantas'];
for($a=1;$a<=$cuantoveces;$a++){
$numero_aletorio=rand(1,6);
echo "<br>Lanzamiento </br>".$a.":El numero que salio es: ".$numero_aletorio;

}
?>