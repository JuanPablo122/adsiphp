<?php
include('material.php');

class biblioteca1 extends material1 {
    function __construct($tipoMaterial,$codigo,$autor,$titulo,$editorial){
        parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$editorial);
    } 

   
  
}
$ob=new material1("Libro",1010,"Paulo Coelho","El Alquimista","Araca Editores");
$ob->datos();

echo $ob->info();

class biblioteca2 extends material2 {
    function __construct($tipoMaterial,$codigo,$autor,$titulo,$cuartil){
        parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$cuartil);
    } 
   
  
}
$ob=new material2("Revista",1020,"Martha Fedor","Journal of Biological Chemistry","Q1");

$ob->datos1();

echo '<br><br>';
echo $ob->info1();



?>
