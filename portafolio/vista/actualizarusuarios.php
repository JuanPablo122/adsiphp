<?php 
$consulta= consultarPersona($_GET['IdUsuarios']);

function consultarPersona($id){
    include '../conexion/conexion2.php';
    $sentencia="SELECT * FROM usuarios WHERE IdUsuarios='".$id."'";
    $resultado=$conexion->query($sentencia) or die ("Error de conexion".mysqli_error($conexion));
    $fila=$resultado->fetch_assoc();
return[
    $fila['IdUsuarios'],
    $fila['NombreUsuarios'],
    $fila['ApellidoUsuarios'],
    $fila['EmailUsuarios'],
    $fila['ContrasenaUsuarios'],
    $fila['IdRoles']
];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>		
	<link rel="stylesheet" type="text/css" href="../estilos/estilo2.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
	<!--<a id="r" href="registrorestaurante.php"><button class="r">Restaurantes</button></a>
	<a id="c" href="registroempleado.php"><button class="r">Soy Empleado</button></a>-->
<header>
	<h1 id="tit">ACTUALIZAR CLIENTE</h1>
</header>
<form method="GET" action="../controlador/controladoractualizar.php">
	<p>Hola! Nos complace saber que deseas registrarte y empezar a usar nuestros servicios, a continuacion encontraras un formulario, diligencialo correctamente y asi podras empezar a disfrutar.</p>
	<input type="hidden" class="ctexto" id="nombre" name="IdUsuarios" value="<?php echo $consulta[0]?>"><br><br>
	<label>Nombres completos</label>
	<input type="text" class="ctexto" id="nombre" name="nombres" value="<?php echo $consulta[1]?>"><br><br>
	<label>Apellidos completos</label>
	<input type="text" class="ctexto" id="apellido" name="apellidos" value="<?php echo $consulta[2]?>"><br><br>
	<label>Correo Electronico</label>
	<input type="email" class="ctexto" id="correo" name="email" value="<?php echo $consulta[3]?>"><br><br>	
	<label>Crea tu contraseña</label>
	<input type="password" class="ctexto" id="contraseña" name="contrasena" value="<?php echo $consulta[4]?>"><br><br>
	<label>IdRoles</label>
	<input type="text" class="ctexto" id="nombre" name="idRol" value="<?php echo $consulta[5]?>" ><br><br>
	<input class="b1" type="submit" id="m"  name="update" value="Actualizar">
	<!--<a href="../vista/iniciosesion.php">Ya te registraste? <u>INICIA SESIÓN</u> </a>-->
</form>
	<a id="v" href="listarusuarios.php"><button class="b1"> VOLVER AL LISTADO</button></a>
<footer>
</footer>

</body>
</html>