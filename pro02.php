 <?php
if($_POST){    
$nombre=$_POST['txt_nombre'];
$email=$_POST['txt_email'];
echo "Mi nombre es : ".$nombre."<br>Mi correo es: ".$email;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi formulario</title>

</head>

<body>
    <p>FORMULARIO</p>
    <form action="pro02.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="txt_nombre"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="txt_email"><br><br>

        <input type="submit" value="enviar">

    </form>
</body>

</html>