<?php
require_once "../modelos/Evento.php";

$evento=new Evento();

switch ($_GET["op"]){
	case 'listar':
		$rspta=$evento->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){

 			$data[]=array(
 				"0"=>$reg->id_evento,
 				"1"=>$reg->descripcion,
 				"2"=>$reg->tipo_evento,
 				"3"=>$reg->categoria,
 				"4"=>$reg->sector,
 				"5"=>$reg->estado,
 				//"6"=>$reg->fecha_inicio,
 				//"7"=>$reg->fecha_fin,
 				"6"=>$reg->usuario,	
 				"7"=>'<center>
 				<a class="btn btn-success" onclick="verImg('.$reg->id_evento_imagen.')"><i class="glyphicon glyphicon-picture"></i></a>
 				<a class="btn btn-warning" onclick="abrir('.$reg->id_evento.')"><i class="glyphicon glyphicon-edit"></i></a> 
 				<a class="btn btn-danger" onclick="eliminar('.$reg->id_evento.')"><i class="glyphicon glyphicon-trash"></i></a>
 				</center>' 				
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;
}

?>