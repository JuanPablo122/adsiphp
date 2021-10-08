<?php
include("conexion.php");
$resultado=2;
if(isset($_POST['register'])){
	$nombres=($_POST['nombres']);
	$apellidos=($_POST['apellidos']);
	$email=($_POST['email']);
	$contrasena=md5($_POST['contrasena']);		
	  $consulta="INSERT INTO usuarios(NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,IdRoles) values('$nombres','$apellidos','$email','$contrasena','1')";
	  /*$consulta1="insert into clientes(,Apellido,Email,Contrasena) values('$nombres','$apellidos','$email','$contrasena')";*/
	  $resultado=mysqli_query($conn,$consulta);
	  /*$resultado1=mysqli_query($conn,$consulta1);*/
session_start();
	  if($resultado==1){
	  	$_SESSION['user']=$nombres;
	  	header("location:../vista/iniciocliente.php?res=insertado");
	  }else{
	  	if($resultado<1){	  		
	  	header("location:../vista/registrocliente.php?res=error");
	  	}
	  }

}

mysqli_close($conn);
?>