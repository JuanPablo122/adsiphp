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
$ob1=new Libro('virtual','ISBN 856-96700-0-9','Gabo','100 años de soledad','Buen estado','EDITORIAL Planeta','200','20');
$ob2=new Revista('Papel estucado','ISSN 0028-0836','Pepe Perez','nature','Buen estado','Cientifico','03-09-2021','EEUU','19');


$biblio->adicionar($ob);
$biblio->adicionar($ob1);
$biblio->adicionar($ob2);


$biblio->verMateriales();



?>
