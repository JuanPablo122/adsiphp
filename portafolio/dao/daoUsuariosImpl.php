<?php
include('daoUsuarios.php');
include ('../conexion/conexion.php');
include ('../modelo/usuarios.php');

class DaoUsuariosImpl extends Conexion implements daoUsuarios{
   
    
    public function registrar(Usuarios $a){ 
        try{
        if ($this->getCnx()!=null) {
        $IdUsuarios=$a->getIdUsuarios();
        $NombreUsuarios=$a->getNombreUsuarios();
        $ApellidoUsuarios=$a->getApellidoUsuarios();
        $EmailUsuarios=$a->getEmailUsuarios();
        $ContrasenaUsuarios=$a->getContrasenaUsuarios();
        $IdRoles=$a->getIdRoles();
        $sql="INSERT INTO usuarios VALUES(?,?,?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$IdUsuarios,$NombreUsuarios,$ApellidoUsuarios,$EmailUsuarios,$ContrasenaUsuarios,$IdRoles]);        
        } else {
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'Datos no registrados';
    }
               
        
    }    
    ////funcion modificar
public function modificar(Usuarios $a){  
    $IdUsuarios=$a->getIdUsuarios();      
    $NombreUsuarios=$a->getNombreUsuarios();
    $ApellidoUsuarios=$a->getApellidoUsuarios();
    $EmailUsuarios=$a->getEmailUsuarios();
    $ContrasenaUsuarios=$a->getContrasenaUsuarios();
    $IdRoles=$a->getIdRoles();
    $sql="UPDATE usuarios
    SET NombreUsuarios ='$NombreUsuarios', ApellidoUsuarios ='$ApellidoUsuarios', EmailUsuarios = '$EmailUsuarios', ContrasenaUsuarios = '$ContrasenaUsuarios', IdRoles = '$IdRoles'
    WHERE IdUsuarios ='$IdUsuarios'";
    $stmt=$this->getCnx()->prepare($sql);
    $stmt->execute();
}

    public function eliminar($a){        
        $id=$_GET['IdUsuarios'];
        $stmt=$this->getCnx()->prepare("DELETE FROM usuarios where IdUsuarios=$id");
        $stmt->execute(); 

    }
//public function listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("SELECT * FROM usuarios");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) { 
            $a = new Usuarios(null,null,null,null,null,null);
            $a->setIdUsuarios($key['IdUsuarios']);
            $a->setNombreUsuarios($key['NombreUsuarios']);
            $a->setApellidoUsuarios($key['ApellidoUsuarios']);
            $a->setEmailUsuarios($key['EmailUsuarios']);
            $a->setContrasenaUsuarios($key['ContrasenaUsuarios']);
            $a->setIdRoles($key['IdRoles']);             
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoUsuariosImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
}


?>
