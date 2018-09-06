<?php
//se declara el inicio de sesión
session_start();
error_reporting(0);
 if(!isset($_SESSION['userid'])) 
{
    //se redirige al index
    header("location:index.php");
}
include_once('conexion.php');

$i = 1;

if($_POST){

//Consulta para una "consulta medica"
$traerDatos = "SELECT fechaConsulta, Diagnostico, TratamientoRecomendado FROM Consulta
                    WHERE Paciente_idPaciente = '".$array['0']."' ";
$datospaciente = mysqli_query($conexion, $traerDatos);

//Se obtiene el nombre del paciente
$busqueda = trim($_POST['nombrePaciente']);

//se obtiene el apellido del paciente 
$busqueda2 = trim($_POST['apellidoPaciente']);

//se verifica que el nombre y el apellido no estén vacios
if(empty($busqueda) or empty($busqueda2)){    

}else{

    //consulta que devuelve los datos datos del paciente 
    $sql = "SELECT idPaciente, Nombre, Apellido FROM paciente
            WHERE Nombre like '%".$_POST['nombrePaciente']."%'
            AND Apellido like  '%".$_POST['apellidoPaciente']."%';";
    $rec = mysqli_query($conexion, $sql);
    $array = mysqli_fetch_array($rec);
    $i = $i + 1;
    $_SESSION['pacienteActivo'] = $array['idPaciente'];
}
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
    <link href="vendors/morrisjs/morris.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css">
    <link href="vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="index-header">
                <div class="inner-bg">
                    <div class="header-section">
                        <div class="row">
                            <div class="col-md-2 col-lg-12 hidden-xs hidden-sm">
                                <h1>Bienvenido - <?php echo $_SESSION['nombre']; ?>  
                                </h1>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
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
                <div class="col-md-13">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="glyphicon glyphicon-check"></i> Datos del Paciente
                            </h3>
                            <span class="pull-right">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                                </span>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-2 control-label">Nombres del Paciente </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="nombrePaciente" class="form-control" id="input-text"
                                               value="<?php if($i == 1){print_r("");}else{print_r($array['1']);} ?> " >
                                    </div>
                                
                                    <label for="input-text" class="col-sm-2 control-label">Apellidos del Paciente </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="apellidoPaciente" class="form-control" id="input-text"
                                               value="<?php if($i ==1 ){echo "";}else{ print_r($array['2']);} ?>">
                                    </div>
                                </div>
                            <br>
                                <center><button type="submit"
                                class="button button-rounded button-primary-flat" onclick="">Verificar</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
        <div class="col-sm-12">
                <a href="consulta.php?va=cnt" class="col-xs-12 btn btn-primary btn-lg btn-md"
                   data-loading-text="Generar Nueva Consulta">Nueva Consulta</a>
        </div>
    </aside>
</div>
<!-- ./wrapper -->
<!-- global js -->
<div id="qn"></div>
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="js/backstretch.js"></script>
<!--sales tiles-->
<script src="vendors/countupcircle/js/jquery.countupcircle.js" type="text/javascript"></script>
<script src="vendors/granim/js/granim.min.js" type="text/javascript"></script>
<!-- end of sales tiles -->
<!-- Flot tab2-->

<script src="vendors/flotspline/js/jquery.flot.spline.min.js" type="text/javascript"></script>
<!-- end of flot tab2 -->
<script type="text/javascript" src="vendors/chartist/js/chartist.min.js"></script>
<!--morris donut-->
<script type="text/javascript" src="vendors/morrisjs/morris.min.js"></script>
<script type="text/javascript" src="vendors/d3/d3.min.js"></script>
<script type="text/javascript" src="vendors/nvd3/js/nv.d3.min.js"></script>
<script type="text/javascript" src="js/custom_js/stream_layers.js"></script>
<!--maps-->
<script src="vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- end of maps -->
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
