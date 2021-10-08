<?php
include("conexion.php");
$resultado=2;
if(isset($_POST['register'])){
	$nombres=($_POST['nombres']);
	$email=($_POST['email']);
	$numero=($_POST['numero']);
	$contrasena=md5($_POST['contrasena']);
	$tipo_persona=($_REQUEST['tipoPersona']);	
	$nit=($_POST['nit']);	
	$nombre_restaurante=($_POST['nombreres']);
	$celular_restaurante=($_POST['celres']);
	$barrio=($_POST['barrio']);
	  $consulta="insert into usuarios(NombreUsuario,Email,Contrasena,rol) values('$nombres','$email','$contrasena','restaurante')";
	  $consulta1="insert into restaurantes(NombresDue,Email,NumeroDue,Contrasena,TipoPersona,NIT,NomRes,CelularRes,Barrio) values('$nombres','$email','$numero','$contrasena','$tipo_persona','$nit','$nombre_restaurante','$celular_restaurante','$barrio')";
	  $resultado=mysqli_query($conn,$consulta);
	  $resultado1=mysqli_query($conn,$consulta1);
session_start();
	  if($resultado and $resultado1==1){
	  	$_SESSION['user']=$nombre_restaurante;
	  	header("location:../vista/iniciorestaurante.php?res=insertado");
	  }else{
	  	if($resultado and $resultado1<1){	  		
	  	header("location:../vista/registrorestaurante.php?res=error");
	  	}
	  }

}

mysqli_close($conn);
?>