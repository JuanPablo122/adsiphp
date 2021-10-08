<!DOCTYPE html>
<html lang="es">
<head>
	<img src="../imagenes/logo.png" id="logo">
	<title>DELICIA EXPRESS</title>	
	<link rel="stylesheet" type="text/css" href="../estilos/estilo.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
	<a href="acercade.php"><button>Acerca de</button></a>
	<a href="normacmm.php"><button>Norma CMM</button></a>
	<a href="misionVision.php"><button>Misión / Vision</button></a>
	<a href="registrocliente.php"><button>Registrate</button></a>
	<a href="iniciosesion.php"><button>Inicia Sesión</button></a>
<header id="hed">
	<h1 id="tit">DELICIA EXPRESS</h1>
</header>
	<div id="uno">
		<div id="galeria">
			<div id="contenedor">
				<div id="barra"></div>
			</div>
			<div id="deslizar">
				<img id="imagen" alt="Imagen de bienvenida">
				<img id="imagen1" >
			</div>
		</div>	
		<p id="p1">Receta secreta... <br>
		   500 gr de amor <br>
		   300 gr de sabor<br>
		   1 huevo de paciencia<br>
		   y locura al gusto</p>
	</div>
	<script src="../js/app1.js" type="text/javascript"></script>
	<h2>Somos tu mejor <b id="opc">opción</b></h2>
<table>
	<tr >		
		<td>
		<?php
		include '../modelo/conexion.php';
			$sql = "SELECT COUNT(*) total FROM usuarios";
			$result = mysqli_query($conn, $sql);
			$fila = mysqli_fetch_assoc($result);
			echo $fila['total'];
		?>
		</td>		
		<td>
		<?php
		include '../modelo/conexion.php';
			$sql = "SELECT COUNT(*) total FROM restaurantes";
			$result = mysqli_query($conn, $sql);
			$fila = mysqli_fetch_assoc($result);
			echo $fila['total'];
		?>	
		</td>
		
	</tr>
	<tr>
		<td><b>Total Usuarios</b></td>	
		<td><b>Restaurantes Aliados</b></td>
	</tr>
	<tr>
		<td>
		<?php
		include '../modelo/conexion.php';
			$sql = "SELECT COUNT(*) total FROM domiciliarios";
			$result = mysqli_query($conn, $sql);
			$fila = mysqli_fetch_assoc($result);
			echo $fila['total'];
		?>		
		</td>
		<td>
		<?php
		include '../modelo/conexion.php';
			$sql = "SELECT COUNT(*) total FROM cocineros";
			$result = mysqli_query($conn, $sql);
			$fila = mysqli_fetch_assoc($result);
			echo $fila['total'];
		?>	
		</td>	
	</tr>
	<tr>
<td><b>Domiciliarios</b></td>
		<td><b>Cocineros</b></td>
	</tr>
		

</table>

</p>
<footer>
	<p id="textfooter">Contactanos <br>
	Numeros: 3182883910-3002608446-3229564274 <br>
	Direccion: Carrera 9 Este N 30C-36 San Mateo</p>
</footer>

</body>
</html>
