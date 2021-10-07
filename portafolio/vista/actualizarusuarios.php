<?php
require '../conexion/conexion2.php';
$db =new Database();
$con = $db->conectar();

$id=$_GET['IdUsuarios'];
$query = $con->prepare("SELECT * FROM usuarios WHERE IdUsuarios = :IdUsuarios");
$query->execute(['IdUsuarios' => $id]);
$row = $query->fetch(PDO::FETCH_ASSOC);
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
<form method="get" action="../controlador/controladoractualizar.php">
	<p>Hola! Nos complace saber que deseas registrarte y empezar a usar nuestros servicios, a continuacion encontraras un formulario, diligencialo correctamente y asi podras empezar a disfrutar.</p>
	<input type="hidden" class="ctexto" id="nombre" name="idUser" value="<?php echo  $row['IdUsuarios']; ?>"><br><br>
	<label>Nombres completos</label>
	<input type="text" class="ctexto" id="nombre" name="nombres" value="<?php echo  $row['NombreUsuarios']; ?>"><br><br>
	<label>Apellidos completos</label>
	<input type="text" class="ctexto" id="apellido" name="apellidos" value="<?php echo  $row['ApellidoUsuarios']; ?>"><br><br>
	<label>Correo Electronico</label>
	<input type="email" class="ctexto" id="correo" name="email" value="<?php echo  $row['EmailUsuarios']; ?>"><br><br>	
	<label>Crea tu contraseña</label>
	<input type="password" class="ctexto" id="contraseña" name="contrasena" value="<?php echo  $row['ContrasenaUsuarios']; ?>"><br><br>
	<label>IdRoles</label>
	<input type="text" class="ctexto" id="nombre" name="idRol" value="<?php echo  $row['IdRoles']; ?>" ><br><br>
	<input class="b1" type="submit" id="m"  value="Actualizar">
	<!--<a href="../vista/iniciosesion.php">Ya te registraste? <u>INICIA SESIÓN</u> </a>-->
</form>
	<a id="v" href="listarusuarios.php"><button class="b1"> VOLVER AL LISTADO</button></a>
<footer>
</footer>

</body>
</html>