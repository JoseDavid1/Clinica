<?php
include('../paciente/funciones.php');

verificarLogin();
pacienteActivo();
tipoUsuario();
error_reporting(0);

$datosPaciente = "SELECT * FROM Paciente WHERE idPaciente = '".$_SESSION['pacienteActivo']."';";
$runDatos = mysqli_query($conexion, $datosPaciente);
$array = mysqli_fetch_array($runDatos);

$alergias = "SELECT * FROM alergias;";
$runAlergias = mysqli_query($conexion, $alergias);


$historialPaciente = "SELECT A.NombreAlergia, A.Descripcion, p.fecha from alergias A
                        inner join alergias_has_paciente P
                        on P.Paciente_idPaciente = '".$_SESSION['pacienteActivo']."'
                        where P.Alergias_idAlergias = A.idAlergias;;";
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
                Información de alergias
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li><a href="#"> Pacientes</a></li>
                <li>
                    <a href="#">Alergias</a>
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
                                <i class="fa fa-fw fa-list"></i> Alergias asociadas el Paciente 
                            </h3>
                            <span class="pull-right hidden-xs">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                        </span>
                        </div>
                        <div class="panel-body">
                            <table data-toggle="table" data-sort-name="age" data-sort-order="desc"  data-height="300">
                                <thead>
                                <tr>
                                    <th data-field="nombreAlergia" data-sortable="true">Nombre de la Alergia</th>
                                    <th data-field="descripcion" data-sortable="true">Descripcion de la alergia</th>
                                    <th data-field="fecha" data-sortable="true">Fecha Detectada</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($array = mysqli_fetch_array($runHistorial)) {
                                 		
                                 	?> 	
                                <tr>
                                    <td><?php print_r($array['0']); ?></td>
                                    <td><?php print_r($array['1']); ?></td>
                                    <td><?php print_r($array['2']); ?></td>
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
        <section class="content">
            <!--main content-->
                    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-file-text-o"></i> Formulario para Nuevas Alergias
                        </h3>
                        <span class="pull-right hidden-xs">
                                <i class="fa fa-fw fa-chevron-up clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div>
                            <form class="form-horizontal"  role="form" action="#.php" method="POST" >
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Alergias:</label>
                                        <div class="col-md-6 m-t-10">
                                            <select class="form-control" name="alergia">
                                                <option>Seleccione uno</option>
                                                <?php 
                                         while ($dato = mysqli_fetch_array($runAlergias)) {
                                                        ?>
                                <option><?php print_r($dato['0'] . " " .$dato['1']); ?></option>
                                                <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-6" for="last_Name">Fecha de detección:
                                        </label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="descAlergia"
                                                   placeholder="DD/MM/AAAA">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <center>
                                    <button  type="submit" class="btn btn-primary">Guardar
                                    </button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
