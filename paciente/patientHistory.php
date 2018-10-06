<?php
include('funciones.php');

verificarLogin();
pacienteActivo();
error_reporting(0);

$datosPaciente = "SELECT * FROM Paciente WHERE idPaciente = '".$_SESSION['pacienteActivo']."';";
$runDatos = mysqli_query($conexion, $datosPaciente);
$array = mysqli_fetch_array($runDatos);


$historialPaciente = "SELECT * FROM consulta 
                    WHERE Paciente_idPaciente = '".$_SESSION['pacienteActivo']."';";
$runHistorial = mysqli_query($conexion, $historialPaciente);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Clínica Médica </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link type="text/css" rel="stylesheet" href="../css/app.css"/>
    <link rel="shortcut icon" href="../img/icono.ico"/>
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
                Consultar Historial
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li><a href="#"> Pacientes</a></li>
                <li>
                    <a href="#"> Historia del Paciente</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="glyphicon glyphicon-check"></i> Visualizando al Paciente
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-2 control-label">Nombres del Paciente: </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nombrePaciente" class="form-control" id="input-text"
                                               value="<?php if($i == 1){print_r("");}else{print_r($array['1']);} ?> " >
                                    </div>
                                
                                    <label for="input-text" class="col-sm-2 control-label">Apellidos del Paciente:</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="apellidoPaciente" class="form-control" id="input-text"
                                               value="<?php if($i ==1 ){}else{ print_r($array['2']);} ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
        <section>
        	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-list"></i> Historial de Consultas 
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table data-toggle="table" data-sort-name="age" data-sort-order="desc"
                                   data-pagination="true" data-search="true" data-height="400">
                                <thead>
                                <tr>
                                    <th data-field="date" data-sortable="true">Fecha de Consulta</th>
                                    <th data-field="diag" data-sortable="true">Diagnostico</th>
                                    <th data-field="trat" data-sortable="true">Tratamiento</th>
                                    <th data-field="res" >PDF</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($array = mysqli_fetch_array($runHistorial)) {
                                 		
                                 	?> 	
                                <tr>
                                    <td><?php print_r($array['1']); ?></td>
                                    <td><?php print_r($array['4']); ?></td>
                                    <td><?php print_r($array['5']); ?></td>
                                    <td><a target="_blank" href="../test.php?date=<?php print_r($array['1'])?>&trat=<?php print_r($array['5'])?>"><i class="fa fa-fw fa-print" ></i></a>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third table end -->
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
