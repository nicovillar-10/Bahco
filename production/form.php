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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <!--Estilo del boton de adjuntar imagen -->
    <style type="text/css">
      .fileinput {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
   }
   
   label[for="archivo[]"] {
   font-size: 14px;
   font-weight: 600;
   color: #fff;
   background-color: #106BA0;
   display: inline-block;
   transition: all .5s;
   cursor: pointer;
   padding: 15px 40px !important;
   text-transform: uppercase;
   width: fit-content;
   text-align: center;
   }
    </style>
  <!-- Fin estilo del boton de adjuntar imagen -->
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-sm">
    <?php
  if (isset($_GET['msg'])) {
    echo "<script>
Swal.fire({
  position: 'center',
  type: 'success',
  title: 'El evento se registró correctamente',
  showConfirmButton: false,
  timer: 2000
})
    </script>";
  }
?>
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
                    <h2>Alta de nuevo reporte <small>completar todos los campos del formulario</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  
                    <form action="services/SaveImage.php" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" >
                                  <div class="row">
                                    <div class="col-md-1">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12"><center>Usuario<span class="required">*</span></center></label>
                                    </div>
                                    <div class="col-md-3">
                                      <input name= "usuario" disabled value="<?php echo $_SESSION['user']; ?>" type="text" class="form-control" placeholder="Usuario">
                                    </div>
                                    <div class="col-md-1">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12"><center>Apellido<span class="required">*</span></center></label>
                                    </div>
                                    <div class="col-md-3">
                                      <input name="apellido" disabled value="<?php echo $_SESSION['apellido']; ?>" type="text" class="form-control" placeholder="Apellido">
                                    </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <div class="col-md-1">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><center>Nombre<span class="required">*</span></center></label>
                                      </div>
                                      <div class="col-md-3">
                                        <input name="nombre" disabled value="<?php echo $_SESSION['usuario_logueado']; ?>" type="text" class="form-control" placeholder="Nombre">
                                      </div>
                                    
                                      <div class="col-md-1">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha<span class="required">*</span></label>
                                      </div>
                                        <div class="col-md-3">
                                        <input disabled value="<?php echo date('d-m-y');?>" type='text' class="form-control" />
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                      <div class="col-md-1">
                                        <label class="">Tipo de Reporte<span class="required">*</span></label>
                                      </div>
                                      <div class="col-md-3">
                                        <select id="tipo_reporte" name="tipo_reporte" class="form-control">
                                      </select>     
                                      </div>
                                    
                                      <div class="col-md-1">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoría<span class="required">*</span></label>
                                      </div>
                                        <div class="col-md-3">
                                        <select id="tipo_categoria" name="tipo_categoria" class="form-control">
                                      </select>
                                      </div>
                                  </div>
                                  <br>                      
                                  <div class="row">
                                      <div class="col-md-1">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sector<span class="required">*</span></label>
                                      </div>
                                      <div class="col-md-3">
                                        <select id="tipo_sector" name="tipo_sector" class="form-control">
                                      </select>    
                                      </div>
                                      <div class="col-md-1">
                                        
                                      </div>
                                      <div class="col-md-3">
                                        <label for="archivo[]">
                                          <span>Seleccionar imagenes</span>
                                        </label>
                                        <span class="archivo[]">
                                            <input class="fileinput" type="file" id="archivo[]" name="archivo[]" multiple="" required="">
                                          </span>
                                      </div>
                                     
                                  </div> 

                                  <hr>
                                  <br>

                                    <div class="row">
                                        <div class="col-md-1">
                                          <label class="">Descripción<span class="required">*</span>
                                        </div>
                                          <div class="col-md-7">
                                          <textarea name="evento_descripcion" class="form-control" rows="10" placeholder="Por favor escriba aquí la descripción del caso..." maxlength="150"></textarea>
                                        </select>
                                    </div>  
                                  </div>
                             
                                  <div class="ln_solid"></div>
                                  <div class="form-group" style="margin-right: 50%">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-9">
                                      <button type="submit" class="btn btn-success">Enviar</button>
                                      <button type="button" class="btn btn-warning">Cancelar</button>
                                      <input type="reset" class="btn btn-primary">
                                      
                                    </div>
                                  </div> 
                    </form>

              </div>
                      <!-- FIN carga de la imagen -->              
                      <!-- Botones del formulario -->
                      
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
  /*$(document).ready(function(){
        $('#enviar').click(function(){
            var datos=$('#registro').serialize();
            //alert(datos);
            $.ajax({
                type:"POST",
                url:"php/registro_nuevo_evento.php",
                data:datos,
                success:function(r){
                  
                    if(r==1){
                        alert("Evento agregado con Exito");
                    }else{
                        alert("Fallo el registro");
                    }
                    alert(r);
                }
            });
            return false;
        });
    });*/
</script>
