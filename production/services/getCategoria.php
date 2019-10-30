<?php
require_once "../modelos/Categoria.php";

$categoria=new Categoria();

switch ($_GET["op"]){
	case 'listar':
		$rspta=$categoria->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			

 			$data[]=array(
 				"0"=>$reg->id_categoria,
 				"1"=>$reg->categoria,
 				"2"=>'<center>
 				<a class="btn btn-warning" onclick="abrir('.$reg->id_categoria.')"><i class="glyphicon glyphicon-edit"></i></a> 
 				<a class="btn btn-danger" onclick="eliminar('.$reg->id_categoria.')"><i class="glyphicon glyphicon-trash"></i></a>
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