<?php
require 'config/conexion.php';
	
Class Imagen{
	// el constructor para instanciar una imagen
	public function __construct(){

	}

	public function mostrarImagenes($id){
		global $conexion;
		$buscarImagen = $conexion->query("SELECT url FROM imagen WHERE id_evento_imagen ='$id'");
		$count = 0;
		echo '<div class="row">';
		while ($fila = $buscarImagen->fetch_assoc()) {
			
			
			if ($count == 2) {
			echo '</div>';
			echo '<div class="row">';
			}
			if ($count == 4) {
			echo '</div>';
			echo '<div class="row">';
			}
			if ($count == 8) {
			echo '</div>';
			echo '<div class="row">';
			}
			if ($count == 10) {
			echo '</div>';
			echo '<div class="row">';
			}

			//echo '<div class="row">';
			echo 	'<div class="col-md-6">';	
			echo 		'<img src="'.$fila['url'].'" width="400px">';
			echo 	'</div>';
			$count++;
			
		}
	}
}

?>