<?php
require 'config/conexion.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$buscarSector = $conexion->query("SELECT * FROM nomenclador_sector WHERE id_sector ='$id'");
	$fila = $buscarSector->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Sector</title>
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
<form name="nueva_categoria" id="registro" class="form-horizontal form-label-left" method="POST">
 <div class="form-group">
     <label class="control-label col-md-4 col-sm-4 col-xs-12">Nombre anterior<span class="required">*</span></label>
      <div class="col-md-5 col-sm-5 col-xs-12">
        <input id="nuevo_nombre" name= "nuevo_nombre"  value="<?php echo  $fila['sector']; ?>" type="text" class="form-control" placeholder="Nombre">
        <br>
        <center><button disabled id="btnAct" name="btnAct" class="btn btn-success" onclick="editar('<?php echo $fila['id_sector']; ?>')">Actualizar</button></center>
       </div>
 </div>
</form>
</body>
<!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>

    $('#nuevo_nombre').change(function(){
        $('#btnAct').attr("disabled", false);
    });
    function editar(id){
        var nombre = $('#nuevo_nombre').val();
            $.ajax({
                type:"POST",
                url:"update_sector.php?id="+id+"&nombre="+nombre,
                data:id,
                success:function(data){
                    alert (data);
                    window.close();
                }
            });
}
</script>
</html>