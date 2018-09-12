<?php
session_start();
 if(!isset($_SESSION['userid'])) 
{
    header("location:index.php");
}
error_reporting(0);
include_once('conexion.php');

if (!isset($_SESSION['userid'])) {
    header("Location: ../dashboard.php?va=sig");
}
else{

$query = "SELECT * FROM paciente";
$patientList = mysqli_query($conexion, $query);


}
if(!$_SESSION['pacienteActivo']){

    $dato = $_POST['optionsRadios'];
    $_SESSION['pacienteActivo'] = $dato;

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clínica Médica</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/icono.ico"/>
    <link type="text/css" rel="stylesheet" href="css/app.css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/toastr/css/toastr.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="vendors/chartist/css/chartist.min.css">
    <link href="vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendors/bootstrap-table/css/bootstrap-table.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css">
    <link href="vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/custom_css/bootstrap_tables.css">
    <link href="css/custom_css/dashboard1.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->

</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<?php include("menu/menu-principal.php"); ?>
    <aside class="right-side">
        <!--section ends-->
        <section class="content sec-mar">
            <div class="row">
                <div class="col-md-16">
                    <div class="row tiles-row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-count=".num" data-from="0"
                                         data-to="512" data-duration="1">
                                <div class="canvas-interactive-wrapper1">
                                <canvas id="canvas-interactive1"></canvas>
                                    <div class="cta-wrapper1">
                                        <div class="item">
                                        <div class="widget-icon pull-left icon-color animation-fadeIn">
                                               <i class="fa fa-fw fa-male"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box1" class="count-box">
                                                    <?php print_r($saldoAhorro['0']); ?>
                                                </div>
                                                <span class="title">Personas en espera</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-count=".num" data-from="0"
                                 data-to="512" data-duration="2">
                                <div class="canvas-interactive-wrapper2">
                                    <canvas id="canvas-interactive2"></canvas>
                                    <div class="cta-wrapper2">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                               
                                               <i class="fa fa-fw fa-check-square-o"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box2" class="count-box">
                                                    <?php print_r($ejectVYS['0']); ?>
                                                </div>
                                                <span class="title">Consultas en el día</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-suffix="k" data-count=".num"
                                 data-from="0" data-to="310" data-duration="4" data-easing="false">
                                <div class="canvas-interactive-wrapper3">
                                    <canvas id="canvas-interactive3"></canvas>
                                    <div class="cta-wrapper3">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                                <i class="fa fa-fw fa-check-square"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box2" class="count-box">
                                                    <?php/*
                                                    include_once('cambio.php');
                                                    printf($dato); */?>
                                                </div>
                                                <span class="title">Consultas en el mes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-count=".num" data-from="0"
                                 data-to="512" data-duration="3">
                                <div class="canvas-interactive-wrapper4">
                                    <canvas id="canvas-interactive4"></canvas>
                                    <div class="cta-wrapper4">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                               <i class="fa fa-fw fa-shopping-cart fa-size"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box3" class="count-box">
                                                    <?php /* if ($eject['0'] == null ) {
                                                        print_r("0");}
                                                        print_r($eject['0']); */?>
                                                </div>
                                                <span class="title">Pagos y Servicios</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-count=".num" data-from="0"
                                 data-to="512" data-duration="3">
                                <div class="canvas-interactive-wrapper5">
                                    <canvas id="canvas-interactive5"></canvas>
                                    <div class="cta-wrapper5">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                              <i class="fa fa-fw fa-credit-card"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box4" class="count-box">
                                                    <?php 
                                                    /*if ($saldoTarjeta == null ) {
                                                        print_r("0");
                                                    }
                                                    print_r($saldoTarjeta['0']); */?>
                                                </div>
                                                <span class="title">Saldo Tarjeta de Crédito</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <!--
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tile-bottom">
                            <div class="widget" data-count=".num" data-from="0"
                                 data-to="512" data-duration="3">
                                <div class="canvas-interactive-wrapper6">
                                    <canvas id="canvas-interactive6"></canvas>
                                    <div class="cta-wrapper6">
                                        <div class="item">
                                            <div class="widget-icon pull-left icon-color animation-fadeIn">
                                               <i class="fa fa-fw fa-pencil-square-o"></i>
                                            </div>
                                        </div>
                                        <div class="widget-count panel-white">
                                            <div class="item-label text-center">
                                                <div id="count-box5" class="count-box">
                                                    <?php 
                                                        /*if ($saldoPrestamo['0'] == null) {
                                                            print_r("0");
                                                        }
                                                    print_r($saldoPrestamo['0']); */?>
                                                </div>
                                                <span class="title">Prestamos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <br>
                        <br>
                    </div>
                </div>
            </div>        
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-check"></i> Seleccionar Paciente
                            </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                </span>                            
                        </div>
                <form class="form-horizontal"  role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" >
                        <div class="panel-body">
                            <table id="table4" data-toolbar="#toolbar" data-search="true" data-show-refresh="false" 
                                    data-detail-formatter="detailFormatter"
                                   data-minimum-count-columns="2" 
                                    data-id-field="id" data-page-list="[10, 20,40,ALL]"
                                   data-show-footer="false" data-height="503">
                                <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">Id</th>
                                    <th data-field="nombre" data-sortable="true">Nombres </th>
                                    <th data-field="apellido" data-sortable="true">Apellidos</th>
                                    <th data-field="edad" data-sortable="true">Edad</th>
                                    <th data-field="genero" data-sortable="true">Genero</th>
                                    <th data-field="estado civil" data-sortable="true">Estado Civil</th>
                                    <th data-field="religion" data-sortable="true">Religión</th>
                                    <th data-field="originario" data-sortable="true">Originario</th>
                                    <th data-field="reside" data-sortable="true">Residente</th>
                                    <th data-field="naci" data-sortable="true">Fecha de Nacimiento</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                while($row = mysqli_fetch_array($patientList)){
                                 ?>
                                <tr>
                                    <td><input type="radio" name="optionsRadios" 
                                                       value="<?php print_r($row['0']);?>"><?php print_r($row['0']);?></td>
                                    <td><?php print_r($row[1]);?></td>
                                    <td><?php print_r($row[2]);?></td>
                                    <td><?php
                                        $fecha = explode("/", $row[10]);
                                        $hoy = date(Y);
                                        $anios = $hoy - $fecha['2'];
                                        print_r($anios);     
                                        ?></td>
                                    <td><?php print_r($row[3]);?></td>
                                    <td><?php print_r($row[5]);?></td>
                                    <td><?php print_r($row[6]);?></td>
                                    <td><?php print_r($row[8]);?></td>
                                    <td><?php print_r($row[9]);?></td>
                                    <td><?php print_r($row[10]);?></td>
                                </tr>
                                <?php }       
                                 ?>
                                </tbody>
                            </table>
                            <br>
                                <center><button type="submit"
                                class="button button-rounded button-primary-flat" >Seleccionar</button></center>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </aside>
</div>
<!-- ./wrapper -->
<!-- global js -->
<div id="qn"></div>
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="js/backstretch.js"></script>
<script type="text/javascript" src="vendors/editable-table/js/mindmup-editabletable.js"></script>
<script type="text/javascript" src="vendors/bootstrap-table/js/bootstrap-table.min.js"></script>
<!--sales tiles-->
<script src="vendors/countupcircle/js/jquery.countupcircle.js" type="text/javascript"></script>
<script src="vendors/granim/js/granim.min.js" type="text/javascript"></script>
<script src="js/custom_js/bootstrap_tables.js" type="text/javascript"></script>
<script src="js/dashboard1.js" type="text/javascript"></script>

<script>
        $('.slim').slimscroll({
            height: '100vh',
            size: '5px',
            opacity: 0.2
        });
</script>
<!-- end of page level js -->

</body>

</html>
