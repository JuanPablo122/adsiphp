<?php
class libro{
    private $editorial;

function __construct($editorial){
    $this->editorial=$editorial;
}
function datos(){
    return 'Editorial: '.$this->editorial;
}
}
class revista{
    private $cuartil;

function __construct($cuartil){
    $this->cuartil=$cuartil;
}
function datos1(){
    return 'Cuartil: '.$this->cuartil;
}
}

?>