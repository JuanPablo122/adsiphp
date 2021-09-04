<?php
include('persona.php');
//notacion camell case
class Aprendiz extends persona{
    private $nombre;
    private $documento;
    private $ficha;
function __construct($nombre,$documento,$ficha,$ciudad,$telefono){
    parent::__construct($ciudad,$telefono);
    $this->nombre=$nombre;
    $this->documento=$documento;
    $this->ficha=$ficha;
    //echo "Soy el constructor y me ACTIVARON";
}
function setter($atributo,$valor){
    $this->$atributo=$valor;
}    
/*function setNombre($nombre){
    $this->nombre=$nombre;
}
function setDocumento($documento){
    $this->documento=$documento;
}
function setFicha($ficha){
    $this->ficha=$ficha;
}*/
function getter($atributo){
    return $this->$atributo;
}
/*function getNombre(){
    return $this->nombre;
}
function getDocumento(){
    return $this->documento;
}
function getFicha(){
    return $this->ficha;
}*/
}
$ob=new Aprendiz("Juan",10100046710,2129,"Soacha",7252215);
/*$ob->setNombre("Juan");
$ob->setDocumento(1010046710);
$ob->setFicha(2142329);*/

/*echo $ob->getNombre().'<br>';
echo $ob->getDocumento().'<br>';
echo $ob->getFicha();*/
$ob->setter("nombre","Carlos bustamante");
$ob->setter("documento",77777);
$ob->setter("ficha",2186219);
echo '<br>';
echo $ob->datos();
echo '<br>';
echo $ob->getter('nombre');
echo '<br>';
echo $ob->getter('documento');
echo '<br>';
echo $ob->getter('ficha');



?>