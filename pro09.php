<?php
class personaa {
private $nombre;
private $edad;
private $altura;
function __construct($nombre,$edad,$altura){
    $this -> nombre = $nombre;
    $this -> edad = $edad;
    $this -> altura = $altura;

}

public function setnombre ($nombre){
    $this-> nombre  = $nombre;

}
public function getnombre(){
    return $this->nombre;
}
public function setedad ($edad){
    $this-> edad  = $edad;

}
public function getedad(){
    return $this->edad;
}
public function setaltura($altura){
    $this-> altura = $altura;
}
public function getaltura(){
    return $this->altura;

}
public function imprimirno(){
    echo "Hola  soy".$this->getnombre." Tengo ".$this->edad." y mido ".$this->altura."<br>";

}

}

$a = new persona ("Fernando",21,"1.73 m");
$a->imprimirno();