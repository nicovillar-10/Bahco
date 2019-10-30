<?php
session_start();

$id_usuario = $_SESSION['id_user'];

require_once '../config/conexion.php';
//var_dump($_POST);

$desc = $_POST['evento_descripcion'];
$t_evento = $_POST['tipo_reporte'];
$id_categoria = $_POST['tipo_categoria'];
$id_sector = $_POST['tipo_sector'];

$sql = "INSERT INTO evento (descripcion, id_tipo_evento, id_categoria, id_sector, id_usuario, id_estado, fecha) values 
('$desc', '$t_evento', '$id_categoria', '$id_sector', '$id_usuario', 1, current_timestamp())";

$GUARDAR_EVENTO = $conexion->query($sql); 

if ($GUARDAR_EVENTO) {
	$id_evento = $conexion->insert_id; //aca saco el id del evento y lo guardo en la variable.-
	
	$sql2= "INSERT INTO estado (fecha_inicio, id_evento, id_nomenclador_estado ) VALUES ( current_timestamp(),'$id_evento', 1)"; 
	$guardaEstado= $conexion->query($sql2);


	//Como el elemento es un arreglo utilizamos foreach para extraer todos los valores.-
	foreach($_FILES['archivo']['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["archivo"]["name"][$key]) {
			$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo.-
			$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo.-
			
			//echo "$filename";

			$directorio = 'docs/'; //Declaramos una variable con la ruta donde guardaremos los archivos.-
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			//echo "$target_path";

			$path_completo = "http://localhost/proyecto_bahco/production/services/".$target_path;
			//echo "$path_completo";

			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino

			if(move_uploaded_file($source, $target_path)) {	
				$SQL2 = "INSERT INTO imagen (url, id_evento_imagen) values ('$path_completo','$id_evento')";
				$GUARDAR_IMAGEN = $conexion->query($SQL2);
				if (!$GUARDAR_IMAGEN) {
					die("Error al guardar la imagen en la db. SQL :".$SQL2);
				}
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
				header("Location: http://localhost/proyecto_bahco/production/form.php?msg=exito");
				} else {	
				echo "Ha ocurrido un error al subir la imagen, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
	}
}else{
	die("Hubo un error en la consulta: ".$sql);
}
	
?>