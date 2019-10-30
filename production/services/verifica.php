<?php
session_start();
require_once('../config/conexion.php');

if (isset($_POST['usuario']) && isset($_POST['password'])) {
	$user = $_POST['usuario'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM usuario WHERE usuario='$user' and password='$pass'";
	$resultado = $conexion->query($sql);
	$total_registros = mysqli_num_rows($resultado);
	$row = mysqli_fetch_assoc($resultado);
	
	if ($total_registros > 0) {
		
		$_SESSION['usuario_logueado'] = $row['nombre'];
		$_SESSION['apellido'] =$row['apellido'];
		$_SESSION['logueado'] = true;
		$_SESSION['user'] = $row['usuario'];
		$_SESSION['id_user'] = $row['id_usuario'];
		header("Location: http://localhost/proyecto_bahco/production/index.php");
	}else{
		echo "No se encontró";
		header("Location: http://localhost/proyecto_bahco/production/login.php?error=1");
	}

}else{
	echo "No hay parametros ";
}


?>