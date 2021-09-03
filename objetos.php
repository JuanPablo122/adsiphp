<?php
//include('persona.php');
//notacion camell case
class Aprendiz extends persona{
    Private $nombre;
    private $documento;
    private $ficha;
function __construct($nombre,$documento,$ficha){
    parent::__construct($ciudad,$telefono);
    $this->nombre=$nombre;
    $this->documento=$documento;
    $this->ficha=$ficha;
    //echo "Soy el constructor y me ACTIVARON";
}
    
function setNombre($nombre){
    $this->nombre=$nombre;
}
function setDocumento($documento){
    $this->documento=$documento;
}
function setFicha($ficha){
    $this->ficha=$ficha;
}
function getNombre(){
    return $this->nombre;
}
function getDocumento(){
    return $this->documento;
}
function getFicha(){
    return $this->ficha;
}
}
$ob=new Aprendiz("Juan",10100046710,2129,'Soacha',7252215);
/*$ob->setNombre("Juan");
$ob->setDocumento(1010046710);
$ob->setFicha(2142329);*/

echo $ob-> datos();

echo $ob->getNombre().'<br>';
echo $ob->getDocumento().'<br>';
echo $ob->getFicha();



?>