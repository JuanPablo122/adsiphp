<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>		
	<link rel="stylesheet" type="text/css" href="../estilos/estilo11.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
	<a id="r" href="registroempleado.php"><button class="r">Soy Empleado</button></a>
	<a id="c" href="registrocliente.php"><button class="r">Soy Cliente</button></a>
<header>
	<h1 id="tit">REGISTRO RESTAURANTE</h1>
</header>

<form method="post" action="../modelo/registro3.php"> 
	<label>Nombres dueño*</label>
	<input type="text" placeholder="Nombres del dueño del restaurante" required="Completa este campo" name="nombres" id="nombres"><br><br>
	<label>Correo electronico*</label>
	<input type="email" placeholder="Correo del dueño del restaurante" required="Completa este campo" name="email" id="email"><br><br>
	<label>Numero de telefono*</label>
	<input type="tel" placeholder="Numero de telefono del dueño del restaurante" required="Completa este campo" name="numero" id="numero"><br><br>
	<label>Crea tu contraseña*</label>
	<input type="password" required="Completa este campo" name="contrasena" id="contrasena" ><br><br>
	<label>Tipo de persona*</label>
	<select required="completa este campo" name="tipoPersona" id="tipoPersona">
		<option></option>
		<option>Juridica</option>
		<option>Natural</option>
	</select><br><br>
	<label>NIT restaurante*</label>
	<input type="text" required="Completa este campo" name="nit" id="nit"><br><br>
	<label>Nombre del restaurante*</label>
	<input type="text" placeholder="Nombres del restaurante" required="Completa este campo" name="nombreres" id="nombreres"><br><br>
	<label>Celular del restaurante*</label>
	<input type="tel" placeholder="Telefono del restaurante" required="Completa este campo" name="celres" id="celres"><br><br>
	<label>Barrio*</label>
	<input type="text" placeholder="Barrio donde se encuentra el restaurante" required="Completa este campo" name="barrio" id="barrio"><br><br>
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