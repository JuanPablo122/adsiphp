<?php
class Animal{
    public $nombre;
    public $clase;
    function __construct($nombre,$clase){
        $this->nombre=$nombre;
        $this->clase=$clase;
    } 
    function setter($atributo,$valor){
        $this->$atributo=$valor;

    }
    function getter($atributo,$valor){
        return $this->$atributo;
    }

}

interface Locomocion{
    public function movimiento();
    public function emitirSonido($sonido);
}

?>