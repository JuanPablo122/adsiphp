<?php
class Usuarios{
private $IdUsuarios;
private $NombreUsuarios;
private $ApellidoUsuarios;
private $EmailUsuarios;
private $ContrasenaUsuarios;
private $IdRoles;

function __construct($IdUsuarios,$NombreUsuarios,$ApellidoUsuarios,$EmailUsuarios,$ContrasenaUsuarios,$IdRoles){
    $this->IdUsuarios=$IdUsuarios;
    $this->NombreUsuarios=$NombreUsuarios;
    $this->ApellidoUsuarios=$ApellidoUsuarios;
    $this->EmailUsuarios=$EmailUsuarios; 
    $this->ContrasenaUsuarios=$ContrasenaUsuarios;
    $this->IdRoles=$IdRoles; 
}

function getIdUsuarios() {
    return $this->IdUsuarios;
}

function setIdUsuarios($IdUsuarios) {
    $this->IdUsuarios = $IdUsuarios;
}

function getNombreUsuarios() {
    return $this->NombreUsuarios;
}

function setNombreUsuarios($NombreUsuarios) {
    $this->NombreUsuarios = $NombreUsuarios;
}

function getApellidoUsuarios() {
    return $this->ApellidoUsuarios;
}

function setApellidoUsuarios($ApellidoUsuarios) {
    $this->ApellidoUsuarios = $ApellidoUsuarios;
}

function  getEmailUsuarios() {
    return $this->EmailUsuarios;
}

function  setEmailUsuarios($EmailUsuarios){
    $this->EmailUsuarios= $EmailUsuarios;
}

function  getContrasenaUsuarios() {
    return $this->ContrasenaUsuarios;
}

function  setContrasenaUsuarios($ContrasenaUsuarios){
    $this->ContrasenaUsuarios= $ContrasenaUsuarios;
}

function  getIdRoles() {
    return $this->IdRoles;
}

function  setIdRoles($IdRoles){
    $this->IdRoles= $IdRoles;
}
}
