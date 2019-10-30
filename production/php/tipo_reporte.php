<?php 
require 'conexion.php';

function getListasOp(){
  $mysqli = getConn();
  $query_ops = 'SELECT * FROM nomenclador_evento';
  $result = $mysqli->query($query_ops);
  $lista_reporte = '<option value="0">Seleccione un tipo de evento</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $lista_reporte .= "<option value='$row[id_nomenclador_evento]'>$row[tipo_evento]</option>";
  }
  return $lista_reporte;
}

echo getListasOp();