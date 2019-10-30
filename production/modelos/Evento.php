<?php
//Incluímos inicialmente la conexión a la base de datos
require "../config/conexion.php";

Class Evento
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementar un método para listar los registros
	public function listar()
	{
	$sql="SELECT evento.id_evento,evento.descripcion, nomenclador_evento.tipo_evento, nomenclador_categoria.categoria, nomenclador_sector.sector, nomenclador_estado.estado, usuario.usuario, imagen.id_evento_imagen FROM evento 
		JOIN nomenclador_evento ON (evento.id_tipo_evento=nomenclador_evento.id_nomenclador_evento) 
		JOIN nomenclador_categoria ON (evento.id_categoria=nomenclador_categoria.id_categoria)
		JOIN nomenclador_sector ON (evento.id_sector=nomenclador_sector.id_sector)
		JOIN nomenclador_estado ON (evento.id_estado=nomenclador_estado.id_nomenclador_estado)
		JOIN usuario ON (evento.id_usuario=usuario.id_usuario)
		JOIN imagen ON (evento.id_evento=imagen.id_evento_imagen)";

		//echo "$sql";
		
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select

}
?>