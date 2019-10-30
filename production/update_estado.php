<?php
include 'config/conexion.php';

$id = $_GET['id'];
$nombre = $_GET['nombre'];
//echo "$nombre";

$update = "UPDATE evento SET id_estado='$nombre' WHERE id_evento='$id'";
//$actualizar = "INSERT INTO estado (fecha_inicio, id_evento, id_nomenclador_estado) values (current_timestamp(), '$id', '$nombre')";
//$actualizar2="UPDATE evento SET id_estado= '$nombre' where id_evento='$id'"; 

$ejecuta=$conexion->query($update);
//$ejecuta2 = $conexion->query($actualizar);
if ($ejecuta) {
	echo "Se actualizó el estado";
}else{
	echo "Hubo un error, comuniquese con sistemas.".$update;
}

?>