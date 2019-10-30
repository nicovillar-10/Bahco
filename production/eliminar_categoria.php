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

 <!-- Comienzo contenido de la pagina-->
        <!-- Comienzo tabla-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ELIMINAR CATEGORIA </h3>
              </div>
            </div>
              <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="table-responsive">
                    <form  id="eliminar" class="form-horizontal form-label-left" method="POST">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Seleccionar</th>
                            <th class="column-title">ID Categoría </th>
                            <th class="column-title">Descripción </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Se va a eliminar ( <span class="action-cnt"> </span> )</a>
                            </th>
                          </tr>                       
                        <?php
                        $sql="SELECT * FROM nomenclador_categoria";
                        $result=mysqli_query($conexion, $sql);

                        while ($mostrar=mysqli_fetch_array($result)) {
                        ?>
                        </thead>
                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                            <input type="checkbox"   name="eliminar" value="<?php echo $mostrar['id_categoria']?>" class="flat">
                            </td>
                            <td><?php echo $mostrar['id_categoria']?></td>
                            <td><?php echo $mostrar['categoria']?></td>
                          </tr>
                        <?php
                        }
                        ?>
                        </tbody> 
                      </table><!-- /fin contenido de tabla -->
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group"></div>
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-9">
                      <button type="reset" class="btn btn-warning">Cancelar</button >
                      <button type="submit" id= "BtnEliminar" class="btn btn-danger" >Eliminar</button>
                      </div>
                    </form>			
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
            Nicolás Villar - Proyecto Final <a href="https://infinittecnologia.com.com">Visit - Infinit</a>
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
    $(document).ready(function(){
        $('#BtnEliminar').click(function(){
            var datos=$('#eliminar').serialize();
            //alert(datos);
            $.ajax({
                type:"POST",
                url:"drop_categoria.php",
                data:datos,
                success:function(data){
                    alert (data);
                    window.location="http://localhost/proyecto_bahco/production/eliminar_categoria.php";
                }
            });
            return false;
        });
    });
</script>
