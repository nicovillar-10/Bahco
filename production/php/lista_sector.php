<?php 
require 'conexion.php';

function getListasOp(){
  $mysqli = getConn();
  $query_ops = 'SELECT * FROM nomenclador_sector';
  $result = $mysqli->query($query_ops);
  $lista_sector = '<option value="0">Seleccione un sector</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $lista_sector .= "<option value='$row[id_sector]'>$row[sector]</option>";
  }
  return $lista_sector;
}

echo getListasOp();