<?php
require 'config/seguridad.php';
require 'config/conexion.php';    

?>                

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bahco Argentina </title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/carga_tipo_reportes.js"></script>
    <script src="js/carga_categoria.js"></script>
    <script src="js/carga_sector.js"></script>
    <script src="js/drop_categoria.js"></script>
    <script src="js/drop_tipo_evento.js"></script>

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
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
<!-- DESDE ACA ES COMUN A TODAS LAS PAGINAS-->

<?php
include "config/lateral.php"; 
 
include "config/superior.php"; 
 ?>
<!--HASTA ACA ES  probando git COMUN PARA TODAS LAS PAGINAS!!!!!! -->

 <!-- Comienzo contenido de la pagina-->
        <!-- Comienzo tabla-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ADMINISTRAR TIPO DE EVENTO </h3>
              </div>
            </div>
              <div class="clearfix"></div>
              <a href="nuevo_tipo_evento.php"><button class="btn btn-success" value="Nuevo" style="margin-left:90%" id="btnNuevo" name="btnNuevo">Nuevo</button></a>
    <div class="panel-body table-responsive" id="listadoregistros">
      <table id="tbllistado_tipo_evento" class="table table-striped table-bordered table-condensed table-hover">
        <thead>
            <th>Id Tipo de Evento</th>
            <th>Descripción</th>  
            <th>Acción</th>   
        </thead>
      <tbody>                            
      </tbody>
      </table>
    </div>
    
          </div>
        </div>
        <!-- /fin contenido de la pagina -->
       <!-- inicio contenido del footer  -->
        <footer>
          <div class="pull-right">
            Nicolás Villar - Proyecto Final <a href="https://infinittecnologia.com.com"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /fin contenido del footer  -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Dropzone.js -->
    <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</script>  
</body>
</html>
<script type="text/javascript">
function abrir (id){
  window.open('verTipoEvento.php?id='+id,'modificar', 'height=400,width=400');
}
function eliminar(id){
    Swal.fire({
  title: 'Esta seguro?',
  text: "Estas por eliminar un sector!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Borrar!',
  cancelButtonText: 'No, Cancelar!'
}).then((result) => {
  if (result.value) {
     $.ajax({
                type:"POST",
                url:"drop_tipo_evento.php?id="+id,
                data:id,
                success:function(data){
                    Swal.fire({
                      position: 'top-center',
                      type: 'success',
                      title: data,
                      showConfirmButton: true,
                      timer: 3000
                    })         
                    setTimeout("window.location = 'http://localhost/proyecto_bahco/production/administrar_tipo_evento.php'",2000);
                }
            });
  }
})           
}
</script>
<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- DATATABLES -->
    <script src="datatables/jquery.dataTables.min.js"></script>    
    <script src="datatables/dataTables.buttons.min.js"></script>
    <script src="datatables/buttons.html5.min.js"></script>
    <script src="datatables/buttons.colVis.min.js"></script>
    <script src="datatables/jszip.min.js"></script>
    <script src="datatables/pdfmake.min.js"></script>
    <script src="datatables/vfs_fonts.js"></script> 
    <script src="js/bootbox.min.js"></script> 
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/getTipoEvento.js"></script> 