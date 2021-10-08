<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>		
	<link rel="stylesheet" type="text/css" href="../estilos/estilo1.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
	<a id="r" href="registrorestaurante.php"><button class="r">Restaurantes</button></a>
	<a id="c" href="registrocliente.php"><button class="r">Soy Cliente</button></a>
<header>
	<h1 id="tit">REGISTRO EMPLEADO</h1>
</header>

<form method="post" action="../modelo/registro2.php"> 
	<p>Hola! Nos complace saber que deseas registrarte y ser parte de nuestro equipo, a continuacion encontraras un formulario, diligencialo correctamente y asi podras empezar a disfrutar.</p>
	<label>Nombres completos</label>
	<input type="text" class="ctexto" id="nombre" name="nombres"><br><br>
	<label>Apellidos completos</label>
	<input type="text" class="ctexto" id="apellido" name="apellidos"><br><br>
	<label>Correo Electronico</label>
	<input type="email" class="ctexto" id="correo" name="email"><br><br>	
	<label>Crea tu contraseña</label>
	<input type="password" class="ctexto" id="contraseña" name="contrasena"><br><br>
	<label>Nombre EPS</label>
	<input type="text" class="ctexto" id="eps" name="eps"><br><br>
	<label>Selecciona tu cargo</label>
	<select name="rol">
		<option value="">Selecciona tu cargo</option>
		<option value="4">Domiciliario</option>
		<option value="3">Cocinero</option>
	</select>
	<input class="b1" type="submit" id="m" name="register">
	<a href="../vista/iniciosesion.php">Ya te registraste? <u>INICIA SESIÓN</u> </a>
</form>
	<a id="v" href="../vista/inicio.php"><button class="b1"> VOLVER AL INICIO</button></a>
	
<footer>
	Contactanos <br>
	Numeros: 3182883910-3002608446-3229564274 <br>
	Direccion: Carrera 9 Este N 30C-36 San Mateo
</footer>

</body>
</html>