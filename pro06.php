<?php
if($_POST){
    $notamate = $_POST['txt_numero1'];
    $notcomu = $_POST['txt_numero2'];
    $notigle = $_POST['txt_numero3'];
    calcular ($notamate ,$notcomu,$notigle);
}
function calcular($notamate,$notcomu,$notigle){
    $promedio=($notamate+$notcomu+$notigle)/3;
    $red_promedio=round($promedio,1);

if($promedio<=11){
    echo $promedio ."aprobado";
    if(($promedio>0)&&($promedio<=5)){
        echo $promedio."desaprobado";
    }elseif(($promedio>5)&&($promedio<=10)){
        echo $promedio."sobrepasa la nota";
    }

}elseif (($promedio>10) && ($promedio<=20)) {
        if(($promedio>10) && ($promedio<=15)){
        echo "<br>La nota es:".$red_promedio. "<br>saco B";
    }elseif(($promedio>15) && ($promedio>=21)){
        echo "<br>La nota es:".$red_promedio. "<br>saco A";
    }
    }else{
    echo $red_promedio.":Nota Invalida";
    }
}
?>