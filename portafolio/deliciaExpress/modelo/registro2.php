<?php
include("conexion.php");
$resultado=2;
if(isset($_POST['register'])){
	$nombres=($_POST['nombres']);
	$apellidos=($_POST['apellidos']);
	$email=($_POST['email']);
	$contrasena=md5($_POST['contrasena']);
	$eps=($_POST['eps']);
	$rol=($_REQUEST['rol']);		
	  $consulta="INSERT INTO usuarios(NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,IdRoles) VALUES('$nombres','$apellidos','$email','$contrasena','$rol')";
	  $consulta1="INSERT INTO empleados(IdEmpleados,IdUsuarios,NombreEps,IdRoles) VALUES('$eps','$rol')";
	  $resultado=mysqli_query($conn,$consulta);
	  $resultado1=mysqli_query($conn,$consulta1);

	 if($resultado and $resultado1 ==1){
	  	//echo "Insertado";
	  }else{
	  	if($resultado and $resultado1 <1){	  		
	  	header("location:../vista/registroempleado.php?res=error");
	  	}
	  }

}
session_start();
	  if ($_REQUEST['rol']=="domiciliario") {
	  	 $consulta2="INSERT INTO domiciliarios(IdDomiciliarios,IdEmpleados,AseguradoraSoat,LicenciaConduccion) VALUES('$','$','$','$','$')";
	  $resultado2=mysqli_query($conn,$consulta2);
	  if($resultado2==1){
	  	$_SESSION['user']=$nombres;
	  	header("location:../vista/iniciodomiciliario.php?res=insertado");
	  }else{
	  	if($resultado2<1){	  		
	  	header("location:../vista/registroempleado.php?res=error");
	  	}
	  }
}else if($_REQUEST['rol']=="cocinero"){
	$consulta3="INSERT INTO cocineros(IdEmpleados,IdCocineros,Email,Contrasena,EspecialidadCocineros) values('$','$','$email','$contrasena','$')";
	  $resultado3=mysqli_query($conn,$consulta3);
	  if($resultado3==1){
	  	$_SESSION['user']=$nombres;
	  	header("location:../vista/iniciococinero.php?res=insertado");
	  }else{
	  	if($resultado3<1){	  		
	  	header("location:../vista/registroempleado.php?res=error");
	  	}
	  }
}

	
	 

mysqli_close($conn);
?>