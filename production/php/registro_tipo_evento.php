<?php

	$conexion=mysqli_connect('localhost', 'root', '', 'bahco_db');

	$tipo_evento=$_POST["nuevo_tipo_evento"];

	$sql = "INSERT INTO nomenclador_evento (tipo_evento) VALUES ('$tipo_evento')";

	$ejecuta= mysqli_query($conexion, $sql);
	if ($ejecuta) {
		echo "1";
	}
	else{
		echo "2";
	}
?>