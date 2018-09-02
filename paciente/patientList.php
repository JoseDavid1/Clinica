<?php
session_start();
error_reporting(0);

include_once('../conexion.php');
if (!isset($_SESSION['userid'])) {
    header("Location: ../dashboard.php?va=sig");
}
else{

$query = "SELECT * FROM paciente";
$patientList = mysqli_query($conexion, $query);

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listado de Pacientes </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" rel="stylesheet" href="../css/app.css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="../vendors/datatables/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../vendors/datatables/css/colReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../vendors/datatables/css/rowReorder.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../vendors/datatables/css/buttons.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../vendors/datatables/css/scroller.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../vendors/datatablesmark.js/css/datatables.mark.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <link rel="stylesheet" type="text/css" href="../css/custom_css/responsive_datatables.css">
    <!--end of page level css-->
</head>

<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="../img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<?php include("../menu/submenu.php"); ?>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Listado de Pacientes
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li><a href="#"> Pacientes</a></li>
                <li class="active">
                    Listado de Pacientes
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-align-justify"></i> Horizontal Scroll
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table horizontal_table table-striped" id="table1">
                                <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Estado Civil</th>
                                    <th>Religión</th>
                                    <th>Teléfono</th>
                                    <th>Originario</th>
                                    <th>Reside</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Direccion</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                            <?php 
                                while($row = mysqli_fetch_array($patientList)){
                                 ?>
                                 <tr>
                                    <td><?php print_r($row[1]);?></td>
                                    <td><?php print_r($row[2]);?></td>
                                    <td><?php
                                        $antes = $row[10];
                                        $hoy = date(Y);
                                        $anios = $hoy - $antes;
                                        print_r($anios);     
                                        ?></td>

                                    <td><?php print_r($row[3]);?></td>
                                    <td><?php print_r($row[5]);?></td>
                                    <td><?php print_r($row[6]);?></td>
                                    <td><?php print_r($row[7]);?></td>
                                    <td><?php print_r($row[8]);?></td>
                                    <td><?php print_r($row[9]);?></td>
                                    <td><?php print_r($row[10]);?></td>
                                    <td><?php print_r($row[4]);?></td>

                                </tr>

                            <?php }       
                                 ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
        </section>
    </aside>
</div>
<!-- wrapper-->
<!-- global js -->
<script src="../js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script type="text/javascript" src="../vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/dataTables.buttons.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/dataTables.colReorder.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/dataTables.responsive.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/dataTables.rowReorder.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/buttons.colVis.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/buttons.html5.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/buttons.print.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/buttons.bootstrap.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/buttons.print.js"></script>
<script type="text/javascript" src="../vendors/datatables/js/dataTables.scroller.js"></script>
<script src="../vendors/mark.js/jquery.mark.js" charset="UTF-8"></script>
<script src="../vendors/datatablesmark.js/js/datatables.mark.min.js" charset="UTF-8"></script>
<script src="../js/custom_js/responsive_datatables.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
