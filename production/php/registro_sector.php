<?php

	$conexion=mysqli_connect('localhost', 'root', '', 'bahco_db');

	$sector=$_POST["nuevo_sector"];

	$sql = "INSERT INTO nomenclador_sector (sector) VALUES ('$sector')";

	echo mysqli_query($conexion, $sql);

?>