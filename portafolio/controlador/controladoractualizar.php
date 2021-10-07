<?php 
require '../conexion/conexion2.php';
$db = new Database();
$con = $db->conectar();
$correcto = false;

if(isset($_POST['IdUsuarios'])){
     $IdUsuarios=$a->getIdUsuarios(); 
    $NombreUsuarios=$a->getNombreUsuarios();
    $ApellidoUsuarios=$a->getApellidoUsuarios();
    $EmailUsuarios=$a->getEmailUsuarios();
    $ContrasenaUsuarios=$a->getContrasenaUsuarios();
    $IdRoles=$a->getIdRoles();
    $query = $con->prepare("UPDATE usuarios " +
    "SET IdUsuarios =$IdUsuarios"+
    "NombreUsuarios =$NombreUsuarios," +
    "ApellidoUsuarios =$ApellidoUsuarios," +
   "EmailUsuarios = $EmailUsuarios" +
   "ContrasenaUsuarios =$ContrasenaUsuarios"+
   "IdRoles =$IdRoles"+
    "where IdUsuarios =$IdUsuarios");
    $resultado =$query->execute(array($NombreUsuarios,$ApellidoUsuarios,$EmailUsuarios,$ContrasenaUsuarios,$IdRoles));
    $IdUsuarios=$a->getIdUsuarios();        
    if($resultado){
        $correcto = true;
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/estilos.css">
    <title>Document</title>
</head>
<body>
    <?php
    if($correcto){?>
    <h3>Registro Guardado</h3>
    <?php }else{?> 
    <h3>Error al Guardar</h3>
    <?php }?>

    
        
    
  
</body>
</html>