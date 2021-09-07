<?php
include_once ('libro.php');
include_once ('revista.php');
class Biblioteca{
    private $coleccion;    

    function __construct(){
        $this->coleccion=array();
    }
    
    function adicionar($material){
        array_push($this->coleccion,$material);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->coleccion) ; $i++) {
            echo $this->coleccion[$i]->getAutor();
            }
                   
    }
    
}

$biblio=new Biblioteca();
$ob1=new Libro('Virtual','ISBN 856-96700-0-9',' Gabo','100 años de soledad',1978,'Buen estado','EDITORIAL Planeta','200','20');

$biblio->adicionar($ob);
$biblio->adicionar($ob1);


$biblio->verMateriales();



?>
