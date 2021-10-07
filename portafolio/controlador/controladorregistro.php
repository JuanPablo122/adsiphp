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
require('../vista/registrousuarios.php');
require('../dao/daoUsuariosImpl.php');
$dao=new DaoUsuariosImpl();
if (isset($_GET['register'])) {
    $IdUsuarios=$_GET['idUser'];
    $NombresUsuarios=$_GET['nombres'];
    $ApellidoUsuarios=$_GET['apellidos'];
    $EmailUsuarios=$_GET['email'];
    $ContrasenaUsuarios=md5($_GET['contrasena']); 
    $IdRoles=$_GET['idRol'];
     $a=new Usuarios($IdUsuarios,$NombresUsuarios,$ApellidoUsuarios,$EmailUsuarios,$ContrasenaUsuarios,$IdRoles);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON EXITO";    
} 
           
?>    
</body>
</html>
