<?php
require_once "../modelos/Sector.php";

$sector=new Sector();

switch ($_GET["op"]){
	case 'listar':
		$rspta=$sector->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			

 			$data[]=array(
 				"0"=>$reg->id_sector,
 				"1"=>$reg->sector,
 				"2"=>'<center>
 				<a class="btn btn-warning" onclick="abrir('.$reg->id_sector.')"><i class="glyphicon glyphicon-edit"></i></a> 
 				<a class="btn btn-danger" onclick="eliminar('.$reg->id_sector.')"><i class="glyphicon glyphicon-trash"></i></a>
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