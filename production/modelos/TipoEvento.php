<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class Sector
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM nomenclador_evento ORDER BY id_nomenclador_evento ";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select

}


?>