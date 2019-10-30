<?php 
require 'conexion.php';

function getListasOp(){
  $mysqli = getConn();
  $query_ops = 'SELECT * FROM nomenclador_estado';
  $result = $mysqli->query($query_ops);
  $lista_estado = '<option value="0">Seleccione un estado</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $lista_estado .= "<option value='$row[id_nomenclador_estado]'>$row[estado]</option>";
  }
  return $lista_estado;
}

echo getListasOp();