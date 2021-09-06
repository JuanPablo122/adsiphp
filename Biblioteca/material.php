<?php
include('libro.php');
class material1 extends libro{
    private $tipoMaterial;
    private $codigo;
    private $autor;
    private $titulo;
function __construct($tipoMaterial,$codigo,$autor,$titulo,$editorial){
    parent::__construct($editorial);
    $this->tipoMaterial=$tipoMaterial;
    $this->codigo=$codigo;
    $this->autor=$autor;
    $this->titulo=$titulo;
}

function info(){
    return 'Tipo material: '.$this->tipoMaterial.
           '<br>Codigo: '.$this->codigo.
           '<br>Autor: '.$this->autor.
           '<br>Titulo: '.$this->titulo.'<br>'.
           $this->datos();
}
}


class material2 extends revista{
    private $tipoMaterial;
    private $codigo;
    private $autor;
    private $titulo;
function __construct($tipoMaterial,$codigo,$autor,$titulo,$cuartil){
    parent::__construct($cuartil);
    $this->tipoMaterial=$tipoMaterial;
    $this->codigo=$codigo;
    $this->autor=$autor;
    $this->titulo=$titulo;
}

function info1(){
    return 'Tipo material: '.$this->tipoMaterial.
           '<br>Codigo: '.$this->codigo.
           '<br>Autor: '.$this->autor.
           '<br>Titulo: '.$this->titulo.' '.'<br>'.
           $this->datos1();
}
}



?>