<?php
class persona {
private $nombre;
private $edad;
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
public function imprimirno(){
    echo "Hola  soy".$this-$nombre."<br>";
}

}
class trabajador extends persona{
    private $puesto;
    public function setpuesto ($puesto){
        $this-> puesto  = $puesto;
    
    }
    public function getpuesto(){
        return $this->puesto ;
    }
    public function imprimirTrabajo(){
        echo "Hola soy ".$this->getnombre()." tengo ".$this->getedad()." y mi puesto es de ". $this->puesto."<br>";

    }
}
$a = new  trabajador();
$a -> setnombre("Fernando");
$a -> setedad(22);
$a -> setpuesto("Programador");
$a -> imprimirTrabajo();
echo $a->getnombre();

?>