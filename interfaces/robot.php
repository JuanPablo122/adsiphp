<?php
include('animal.php');
class Robot implements Locomocion{
    public $tipo;
    function __construct(){
        $this->tipo=$tipo;
    }
    function emitirSonido(){
        echo 'Los robot tipo '.$this->tipo.'emiten sonido de '.$sonido;
    }
    function movimiento(){
        echo 'su movimiento es propio de los robots '.$this->tipo;
    }
    

}
$r2d2= new Robot('Drone');
$r2d2=emitirSonido('Aspas de vuelo');
$r2d2=movimiento();


?>