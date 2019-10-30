<?php
require 'config/seguridad.php';
 
$conexion=mysqli_connect('localhost','root','','bahco_db');
                        //cuenta el numero de registros que hay en tabla cliente. 
                        $sql="SELECT COUNT(*) total FROM nomenclador_categoria";
                        $result=mysqli_query($conexion, $sql);
                        $nro_categorias=mysqli_fetch_assoc($result); //Obtiene una fila de resultado como un array asociativo
                        //cuenta el numero de registros en tabla operario.
                        $sql="SELECT COUNT(*) total FROM nomenclador_sector";
                        $result1=mysqli_query($conexion, $sql);
                        $nro_sectores=mysqli_fetch_assoc($result1);
                        //cuenta el numero de registros en tabla auto.
                        $sql="SELECT COUNT(*) total FROM nomenclador_evento";
                        $result2=mysqli_query($conexion, $sql);
                        $nro_tipo_evento=mysqli_fetch_assoc($result2);
                        //cuenta el numero de registros en tabla orden.
                        $sql="SELECT COUNT(*) total FROM evento";
                        $result3=mysqli_query($conexion, $sql);
                        $nro_eventos=mysqli_fetch_assoc($result3);
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Bahco Argentina</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-sm">
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

        <!-- Inicio contenido de la pagina -->
        <div class="right_col" role="main">

          <!-- inicio top titulos -->
          <div class="row tile_count">
          <!-- /fin top titulos -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row x_title">
                  <div class="col-md-6">
                    <h2>NEAR MISS REPORTING SYSTEM</h2>
                  </div>
                </div>
                <!-- /GRAFICO PARA PANTALLA PRINCIPAL --> 
                
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php echo $nro_eventos['total']; ?></div>
                  <h3>Eventos Cargados</h3>
                  <p>Muestra el numero de eventos cargados.</p>
                </div>
                </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count"><?php echo $nro_sectores['total']; ?></div>
                  <h3>Sectores</h3>
                  <p>Muestra la cantidad de sectores.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count"><?php echo $nro_categorias['total']; ?></div>
                  <h3>Categorías</h3>
                  <p>Muestra la cantidad de categorías.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count"><?php echo $nro_tipo_evento['total']; ?></div>
                  <h3>Eventos</h3>
                  <p>Muestra la cantidad de tipos de eventos.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12" style="opacity: 0.2;">
                  <img src="images/logogrande.png" width="100%">
                </div>
              </div>
              
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <br />
        </div>
        <!-- /fin contenido de la pagina -->

        <!-- inicio contenido del footer  -->
        <footer>
          <div class="pull-right">
            Nicolás Villar - Proyecto Final<a href="https://infinittecnologia.com.com"></a>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="../vendors/echarts/dist/echarts.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
