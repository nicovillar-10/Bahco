<?php

	$conexion=mysqli_connect('localhost', 'root', '', 'bahco_db');

	$categoria=$_POST["nueva_categoria"];
	

	$sql = "INSERT INTO nomenclador_categoria (categoria)
			VALUES ('$categoria')";

	echo mysqli_query($conexion, $sql);

?>