<?php
class persona {
public $Nombre;

public function asignarnombre ($asignarnombre){
    $this->nombre = $asignarnombre;
}
public function imprimirnombre(){
echo "Hola yo soy ".$this->nombre."<br>";


 }
}

$a = new persona();
$a ->asignarnombre("Fernando");
$a ->imprimirnombre();

$s = new persona ();
$s ->asignarnombre("Mario");
$s ->imprimirnombre();

echo $a ->nombre."<br>";
echo $s ->nombre."<br>";

?>