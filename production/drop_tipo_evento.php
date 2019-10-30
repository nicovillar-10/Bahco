<?php
require_once "config/conexion.php";

//echo $_POST["eliminar"];

if (isset($_POST['eliminar'])) {
	$id = $_POST['eliminar'];
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}


$eliminar= "DELETE FROM nomenclador_evento WHERE id_nomenclador_evento='$id'";

$ejecutar=$conexion->query($eliminar);  

if ($ejecutar) {
	echo "Se elimino correctamente";
}else{
	echo "Hubo un error al eliminar";
}

?>