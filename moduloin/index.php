<?php
session_start();
error_reporting(0);
 if(!isset($_SESSION['userid']))
{
    header("location:index.php?va=sig");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Clínica Médica</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="../img/DSI.ico"/>
    <link type="text/css" rel="stylesheet" href="../css/app.css"/>
  
    <link rel="stylesheet" type="text/css" href="../css/formelements.css">
    <link rel="stylesheet" href="../vendors/bootstrap-table/css/bootstrap-table.min.css">
    <link href="../css/custom_css/flot_charts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../vendors/chartist/css/chartist.min.css">

   
    <link href="../vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link href="../css/custom_css/nvd3_charts.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/custom_css/bootstrap_tables.css">
    <!--end of page level css-->
</head>

<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="../img/loading.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->

<?php include("../menu/submenu.php"); ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                    Modulo de Inteligencia de Negocios
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="#">Gráficas</a>
                </li>
                <li class="active">
                    IN
                </li>
            </ol>
        </section>
        <!-- Main content -->  

<section id="genero">
    <div class="row">
        <div class="col-md-12">
             <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-copy"></i> Genero por organización y por centro
                            </h3>
                            <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                </span>
                                </div>
                        <div class="panel-body">
                <section class ="content">
                    <div class="row">
                        <div class="col-lg-6">
                                    <table class="table table-striped table-bordered" data-toggle="table"  id="table2"  
                                    data-id-field="id" data-page-list="[10, 20,40,ALL]"
                                     data-height="413"
                                    data-detail-formatter="detailFormatter"
                                   data-minimum-count-columns="4"
                                   data-show-footer="false">
                                                <thead>
                                                   
                                                        <th>Organizacion</th>
                                                        <th>Centro</th>
                                                        <th>Masculino</th>
                                                        <th>Femenino</th>
                                                        <th>En Blanco</th>   
                                                   
                                                    </thead>
                                                    <tbody>
                                                    <?php while ($genT = mysqli_fetch_array($generoTab)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php print_r ($genT[0]); ?></td>
                                                            <td><?php print_r ($genT[1]); ?></td>
                                                            <td><?php print_r ($genT[2]); ?></td>
                                                            <td><?php print_r ($genT[3]); ?></td>
                                                            <td><?php print_r ($genT[4]); ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                    </table>
                        </div>
                       <div class="col-lg-6">
                    <!-- Stack charts strats here-->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-fw fa-pie-chart"></i> Donut
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div id="donut" class="flotChart2"></div>
                        </div>
                    </div>
                </div>
                     </div>
                </section>
               </div>
            </div>
        </div>
</div>
</section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- global js -->
<script src="../js/app.js" type="text/javascript"></script>
<script src="../vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
<script src="../vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="../vendors/flotchart/js/jquery.flot.stack.js"></script>
<script language="javascript" type="text/javascript" src="../vendors/flotchart/js/jquery.flot.time.js"></script>
<script src="../vendors/flotspline/js/jquery.flot.spline.min.js" type="text/javascript"></script>
<script src="../vendors/flotchart/js/jquery.flot.categories.js" type="text/javascript"></script>
<script src="../vendors/flotchart/js/jquery.flot.pie.js" type="text/javascript"></script>
<script src="../vendors/flot.tooltip/js/jquery.flot.tooltip.js" type="text/javascript"></script>

<script type="text/javascript" src="../vendors/chartist/js/chartist.min.js"></script>
<script src="../js/custom_js/chartist.js" type="text/javascript"></script>

<script type="text/javascript" src="../vendors/editable-table/js/mindmup-editabletable.js"></script>
<script type="text/javascript" src="../vendors/bootstrap-table/js/bootstrap-table.min.js"></script>
<script src="../js/custom_js/bootstrap_tables.js" type="text/javascript"></script>
<script src="../vendors/chartjs/js/Chart.js"></script>


<script type="text/javascript" src="../vendors/d3/d3.min.js"></script>
<script type="text/javascript" src="../vendors/nvd3/js/nv.d3.min.js"></script>
<script type="text/javascript" src="../js/custom_js/stream_layers.js"></script>


<!-- <script language="javascript" type="text/javascript" src="js/custom_js/flot_charts.php"></script>-->
<!--<script type="text/javascript" src="js/custom_js/chartjs-charts.js"></script>-->
<?php include('../js/custom_js/flot_charts.php');?>
<script>
        $('.slim').slimscroll({
            height: '100vh',
            size: '5px',
            opacity: 0.2
        });
</script>
</body>
</html>
