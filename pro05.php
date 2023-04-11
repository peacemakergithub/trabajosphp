<?php
if($_GET){
$numero1 = $_GET['txt_numero1'];
$numero2 = $_GET['txt_numero2'];
$operador =$_GET['txt_operador'];
define("suma","+");
define("restar","-");
define("multi","*");
define("division","/");
if(suma==$operador){
    $resultado=$numero1+$numero2;
}elseif(restar==$operador){
    $resultado=$numero1-$numero2;
}elseif(multi==$operador){
    $resultado= $numero1*$numero2;
}elseif(division==$operador){
    $resultado=$numero1/$numero2;
}else{
    echo"esta operacion no existe";
}

echo "El primer numero ingresado es: ".$numero1."<br>El segundo numero ingresado es:".$numero2."<br>El operador que escogio es: ".$operador;
echo "<br>El resultado es :".$resultado;
#echo "<br>La suma de los 2 numeros es: ".$suma."<br>La resta de los 2 numeros es: ".$resta."<br>La multiplicacion de los 2 numeros es: ".$multi."<br>La division de los 2 numeros es: ".$div;
}
?>