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
<!--HASTA ACA ES  COMUN PARA TODAS LAS PAGINAS!!!!!! -->
        <!-- Contenido de la pagina -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Near Miss Reporting System</h3>
              </div>
            </div>
            <div class="clearfix"></div>
<!-- formularioooooooo -->
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Alta de nuevo sector <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form name="nuevo_sector" id="registro" class="form-horizontal form-label-left" method="POST">
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Nuevo Sector<span class="required">*</span></label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input name= "nuevo_sector"  value="" type="text" class="form-control" placeholder="Escriba el nuevo sector">
                        </div>
                      </div>
                      </form>
                      </div>
                  </div>
                </div>                                 
                      <!-- Botones del formulario -->
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-9">
                          <button type="button" class="btn btn-warning">Cancelar</button>
                          <button type="reset" class="btn btn-primary">Limpiar</button>
                          <button id="enviar" type="button" class="btn btn-success" >Guardar</button>
                        </div>
                      </div> 
                  </div>
                </div>
              </div>
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</script>
  
  </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#enviar').click(function(){
            var datos=$('#registro').serialize();
            alert(datos);
            $.ajax({
                type:"POST",
                url:"php/registro_sector.php",
                data:datos,
                success:function(r){
                    if(r==1){
                        alert("Sector agregado con Exito");
                        window.location="http://localhost/proyecto_bahco/production/administrar_sector.php";
                    }else{
                        alert("Falló al intentar registrar un nuevo sector");
                    }
                }
            });
            return false;
        });
    });
</script>
