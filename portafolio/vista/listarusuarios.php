<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>	
	<link rel="stylesheet" type="text/css" href="../estilos/estilo19.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
<header>
</header>	
<div>
<h1 id="subt" align="center">Listado de usuarios</h1>
<table class="table">
            <thead>
                <tr>
                    <th>IdUsuarios</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
					<th>Contraseña</th>
					<th>Rol</th>
                </tr>
            </thead>
            <tbody>			
			<?php
			    include('../controlador/controladorlistar.php');
                foreach ($Usuarios as $key) {
            ?>
            <th><?php echo  $key->getIdUsuarios() ?></th>
			<th><?php echo  $key->getNombreUsuarios() ?></th>
			<th><?php echo  $key->getApellidoUsuarios() ?></th>
			<th><?php echo  $key->getEmailUsuarios() ?></th>
			<th><?php echo  $key->getContrasenaUsuarios() ?></th>
			<th><?php echo  $key->getIdRoles() ?></th>      
			<th>		
				<input type="submit" value="Eliminar" name="delete">
				<input type="submit" value="Actualizar" name="update">
			</th>
			<?php
			}
			?>
            </tbody>
    </table>

</div>
</body>
</html>