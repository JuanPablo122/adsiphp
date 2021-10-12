<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo2.css">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/actualizarusuarios.php');
require('../dao/daoUsuariosImpl.php');
$dao=new DaoUsuariosImpl();
if (isset($_GET['update'])) {
    $IdUsuarios=$_GET['IdUsuarios'];
    $NombreUsuarios=$_GET['nombres'];    
    $ApellidoUsuarios=$_GET['apellidos'];
    $EmailUsuarios=$_GET['email'];
    $ContrasenaUsuarios=$_GET['contrasena'];
    $IdRoles=$_GET['idRol'];
    $a=new Usuarios($IdUsuarios,$NombreUsuarios,$ApellidoUsuarios,$EmailUsuarios,$ContrasenaUsuarios,$IdRoles);
    $dao->modificar($a);
    echo '<span class="mensaje">¡¡SE ACTUALIZÓ CORRECTAMENTE!!</span>';
}
           
?> 
</body>
</html>