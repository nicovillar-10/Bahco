<?php
include 'config/conexion.php';
$id = $_GET['id'];
$nombre = $_GET['nombre'];


$update = "UPDATE nomenclador_sector SET sector='$nombre' WHERE id_sector='$id'";

$ejecuta=$conexion->query($update);

if ($ejecuta) {
	echo "Se actualizó el nombre";
}else{
	echo "Hubo un error, comuniquese con sistemas.";
}

?>