<link rel="stylesheet" href="practica.css">
<?php
$notamate=$_POST['txt_mate'];
$notcomu=$_POST['txt_comu'];
$notingle=$_POST['txt_ingl'];
$promedio=($notamate+$notcomu+$notingle)/3;
$red_promedio=round($promedio,1);
if($promedio>=11){
$mensaje = "aprobado";
}elseif($promedio<=10){
    $mensaje="desaprobado";
}else{
   echo "sobrepasa la nota";
}
if($promedio>=0 && $promedio<=5){
    echo "<br>La nota es:".$red_promedio. "<br>saco D";
}elseif($promedio>=6 && $promedio<=10){
    echo "<br>La nota es:".$red_promedio. "<br>saco C";
}elseif($promedio>=11 && $promedio<=15){
    echo "<br>La nota es:".$red_promedio. "<br>saco B";
}elseif($promedio>=16 && $promedio>=21){
    echo "<br>La nota es:".$red_promedio. "<br>saco A";
}else {
    echo "sobrepasa la nota";
}
echo "<br>El estudiante esta: ".$mensaje;

?>