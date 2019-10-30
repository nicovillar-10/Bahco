<?php 
require 'conexion.php';

function getListasOp(){
  $mysqli = getConn();
  $query_ops = 'SELECT * FROM nomenclador_categoria';
  $result = $mysqli->query($query_ops);
  $lista_categoria = '<option value="0">Seleccione una categoria</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $lista_categoria .= "<option value='$row[id_categoria]'>$row[categoria]</option>";
  }
  return $lista_categoria;
}

echo getListasOp();
?>
