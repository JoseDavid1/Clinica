<?php
include('funciones.php');

verificarLogin();
error_reporting(0);

$query = "SELECT * FROM paciente";
$patientList = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listado de Pacientes </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="../img/icono.ico"/>
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
    <link rel="stylesheet" href="../vendors/bootstrap-table/css/bootstrap-table.min.css">    
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <link rel="stylesheet" type="text/css" href="../css/custom_css/bootstrap_tables.css">
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
                    <div class="panel panel-success filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-th-large"></i> Listado de Pacientes
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table id="table4" data-toolbar="#toolbar" data-search="true" data-show-refresh="false"
                                    data-show-columns="true" data-show-export="true"
                                    data-detail-formatter="detailFormatter"
                                   data-minimum-count-columns="2" data-show-pagination-switch="true"
                                   data-pagination="true" data-id-field="id" data-page-list="[10, 20,40,ALL]"
                                   data-show-footer="false" data-height="503">
                                <thead>
                                <tr>
                                    <th data-field="nombre" data-sortable="true">Nombres </th>
                                    <th data-field="apellido" data-sortable="true">Apellidos</th>
                                    <th data-field="edad" data-sortable="true">Edad</th>
                                    <th data-field="genero" data-sortable="true">Genero</th>
                                    <th data-field="estado civil" data-sortable="true">Estado Civil</th>
                                    <th data-field="religion" data-sortable="true">Religión</th>
                                    <th data-field="telefono" data-sortable="true">Teléfono</th>
                                    <th data-field="originario" data-sortable="true">Originario</th>
                                    <th data-field="reside" data-sortable="true">Residente</th>
                                    <th data-field="naci" data-sortable="true">Fecha de Nacimiento</th>
                                    <th data-field="direccion" data-sortable="true">Direccion</th>
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
                                        $fecha = explode("/", $row[10]);
                                        $hoy = date(Y);
                                        $anios = $hoy - $fecha['2'];
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
<script type="text/javascript" src="../vendors/editable-table/js/mindmup-editabletable.js"></script>
<script type="text/javascript" src="../vendors/bootstrap-table/js/bootstrap-table.min.js"></script>
<script type="text/javascript" src="../vendors/tableExport.jquery.plugin/tableExport.min.js"></script>
<script src="../js/custom_js/bootstrap_tables.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
