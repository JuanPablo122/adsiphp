<?php
require '../conexion/conexion2.php';
$db =new Database();
$con = $db->conectar();
$id=$_GET['IdUsuarios'];

$query = $con->prepare("DELETE FROM usuarios WHERE IdUsuarios=?");
if($query->execute([$id])){
    echo 'Registro eliminado...';
}else{
    echo 'Error al eliminar registro...';
}
?>