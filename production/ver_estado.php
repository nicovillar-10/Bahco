<?php
require 'config/conexion.php';
if (isset($_GET['id'])) {
	$id = $_GET['id']; //trae el id del evento cargado. 
    //echo "$id"; 
    $buscarEstado = $conexion->query("SELECT evento.id_evento, nomenclador_estado.estado FROM evento JOIN estado ON (evento.id_evento=estado.id_evento) JOIN nomenclador_estado ON (estado.id_nomenclador_estado=nomenclador_estado.id_nomenclador_estado) WHERE evento.id_evento = '$id'");
	$fila = $buscarEstado->fetch_assoc(); //trae el estado que tiene seteado el evento.  
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Estado</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/carga_estado.js"></script>
</head>
<!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
<body>
<form id="registro" class="form-horizontal form-label-left" method="POST">
 <div class="form-group">
     <label class="control-label col-md-4 col-sm-4 col-xs-12">Estado Actual<span class="required">*</span></label>
      <div class="col-md-5 col-sm-5 col-xs-12">
        <input id="estado" name= "estado"  value="<?php echo  $fila['estado']; ?>" type="text" class="form-control" disabled>
        <label class="control-label col-md-4 col-sm-4 col-xs-12">Nuevo Estado<span class="required">*</span></label>
        <select id="tipo_estado" name="tipo_estado" class="form-control">     
        </select>     
        <br>                          
        <center>
        <button disabled id="btnAct" name="btnAct" class="btn btn-success" onclick="editar('<?php echo $fila['id_evento']; ?>')">Actualizar</button>
        </center>
       </div>
 </div>
</form>
</body>
<!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    $('#tipo_estado').change(function(){
        $('#btnAct').attr("disabled", false);
    });
    function editar(id){
        var nombre = $('#tipo_estado').val();
            $.ajax({     
                type:"POST",
                url:"update_estado.php?id="+id+"&nombre="+nombre,
                data:id,
                success:function(data){
                    alert (data);
                    window.close();
                    
                }

            });
}
</script>
</html>