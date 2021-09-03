<?php
class persona{
    private $ciudad;
    private $telefono;
    
function __construct($ciudad,$telefono){
   $this->ciudad=$ciudad;
   $this->telefono=$telefono; 
}

function datos(){
    return 'vive en: '. $ciudad 'y su numero es: '. $telefono;
    }
}

?>