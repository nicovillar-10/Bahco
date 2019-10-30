<?php
$servidor='localhost';
$db='bahco_db';
$usuario='root';
$contraseña='';
$conexion= mysqli_connect($servidor, $usuario, $contraseña, $db);

if (mysqli_connect_errno())
  {
  echo "Fallo al conectar con la base" . mysqli_connect_error();
  }
?> 

