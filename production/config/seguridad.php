<?php
session_start();

if (!$_SESSION['logueado']) {
		header("Location: http://localhost/proyecto_bahco/production/login.php");
}

?>