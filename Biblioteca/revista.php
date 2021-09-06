<?php 
include ('material.php');
class Revista extends Material{
     private $tema; 
     private $fechaPublicacion;
     private $LugarPublicacion;
     private $numeroEdicion;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$status,$tema,$fechaPublicacion,$LugarPublicacion,$numeroEdicion){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$status);
    $this->tema=$tema;
    $this->fechaPublicacion=$fechaPublicacion;
    $this->lugarPublicacion=$LugarPublicacion;
    $this->numeroEdicion=$numeroEdicion;
}
    function setTema($tema){
        $this->tema=$tema;
    }
    function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion=$fechaPublicacion;
    }
    function setLugarPublicacion($LugarPublicacion){
        $this->lugarPublicacion=$LugarPublicacion;
    }
    function setNumeroEdicion($numeroEdicion){
        $this->numeroEdicion=$numeroEdicion;
    }
    function getTema(){
        return $this->tema;
    }
    function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    function getLugarPublicacion(){
        return $this->lugarPublicacion;
    }
    function getNumeroEdicion(){
        return $this->numeroEdicion;
    }
}
$ob=new Revista('Papel estucado','ISSN 0028-0836','Pepe Perez','nature','Buen estado','Cientifico','03-09-2021','EEUU','19');
echo $ob->datos();
echo '<br>';
echo 'Tema: '.$ob->getTema();
echo '<br>';
echo 'Fecha de publicación: '.$ob->getFechaPublicacion();
echo '<br>';    
echo 'Lugar de publicacion: '.$ob->getLugarPublicacion();
echo '<br>';
echo 'Numero de edición: '.$ob->getNumeroEdicion();
echo '<br>';
?>