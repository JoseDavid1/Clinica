<?php 
session_start();
error_reporting(0);
include("conexion.php");
if(!isset($_SESSION['userid'])){
    header("Location:logearse.php");
}

$datosPaciente = "SELECT * FROM Paciente WHERE idPaciente = '".$_SESSION['pacienteActivo']."';";
$runDatos = mysqli_query($conexion, $datosPaciente);
$array = mysqli_fetch_array($runDatos);

if (!isset($_SESSION['pacienteActivo'])) {

}else{

$traerAntedecentes = "SELECT * FROM antecedentes 
					WHERE Paciente_idPaciente = '".$_SESSION['pacienteActivo']."';";
$runQuery = mysqli_query($conexion, $traerAntedecentes);
$arrayAntecedentes = mysqli_fetch_array($runQuery);

}
$consultar = "SELECT * FROM antecedentes 
                    WHERE Paciente_idPaciente = '".$_SESSION['pacienteActivo']."';";
    $runConsulta = mysqli_query($conexion, $consultar);
    $arrayConsulta = mysqli_fetch_array($runConsulta);

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Clínica Médica</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/icono.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="vendors/iCheck/css/all.css" rel="stylesheet"/>
    <link href="css/buttons_sass.css" rel="stylesheet">
    <link href="css/advbuttons.css" rel="stylesheet">    
    <link href="vendors/bootstrap-fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="vendors/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="vendors/datedropper/datedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/timedropper/css/timedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/jquerydaterangepicker/css/daterangepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/formelements.css">

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
            <!--section starts-->
            <h1>
                Consultar Antecedentes
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li>
                </li>
                <li class="active">
                    Antecedentes
                </li>
            </ol>
        </section>
        <!--section ends-->
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
                            <form class="form-horizontal" role="form"  method="POST">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-2 control-label">Nombres del  Paciente: </label>
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
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="glyphicon glyphicon-check"></i> Antecedentes del Paciente 
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="paciente/updateRecord.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label" >Medicos: </label>
                                    <div class="col-sm-6">
                                       <textarea  name="medicos"
                                          class="form-control resize_vertical"
                                          placeholder="Antecedentes Medicos"><?php print_r($arrayAntecedentes['1']);?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label" >Quirurgicos: </label>
                                    <div class="col-sm-6">
                                       <textarea  name="quirurgicos"
                                          class="form-control resize_vertical"
                                          placeholder="Antecedentes Quirurgicos"><?php print_r($arrayAntecedentes['2']);?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label">Traumaticos:</label>
                                    <div class="col-sm-6">
                                       <textarea  name="traumaticos"
                                          class="form-control resize_vertical"
                                          placeholder="Antecedentes Traumaticos"><?php print_r($arrayAntecedentes['3']);?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label">Familiares:</label>
                                    <div class="col-sm-6">
                                       <textarea  name="familiares"
                                          class="form-control resize_vertical"
                                          placeholder="Antecedentes Familiares"><?php print_r($arrayAntecedentes['4']);?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label">Ginecologicos:</label>
                                    <div class="col-sm-6">
                                       <textarea  name="ginecologicos"
                                          class="form-control resize_vertical"
                                          placeholder="Antecedentes Ginecologicos"><?php print_r($arrayAntecedentes['5']);?></textarea>
                                    </div>
                                </div>
	                            <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label">Nacimiento:</label>
                                    <div class="col-sm-6">
                                       <textarea  id='d' name="nacimiento"
                                          class="form-control resize_vertical"
                                          placeholder="Antecedentes de Nacimiento"><?php print_r($arrayAntecedentes['6']);?></textarea>
                                    </div>
                                </div>
                            <br>
                            <div class="col-md-16	">
                                <div class="col-xs-4 col-md-3">
                                    <input type="reset" value="Borrar"
                                           class="btn btn-danger btn-block btn-md btn-responsive">
                                </div>
                                <?php
                                    if ($arrayConsulta == NULL) {
                                        echo "<div class='col-xs-4 col-md-3 col-md-offset-3'>
                                    <input type='submit' name='btncheck1' value='Guardar'
                                           class='btn btn-primary btn-block btn-md btn-responsive'
                                           tabindex='7' >
                                </div>";
                                    }else{
                                        echo "<div class='col-xs-4 col-md-3 col-md-offset-3'>
                                    <input type='submit' name='btncheck1' value='Guardar'
                                           class='btn btn-primary btn-block btn-md btn-responsive'
                                           tabindex='7'disabled>
                                </div>";
                                    }
                                    if ($arrayConsulta != NULL) {
                                        echo "<div class='col-xs-4 col-md-3'>
                                    <input type='submit' name='btncheck1' value='Actualizar'
                                           class='btn btn-success btn-block btn-md btn-responsive'
                                           tabindex='7'>";
                                    }else{
                                        echo "<div class='col-xs-4 col-md-3'>
                                    <input type='submit' name='btncheck1' value='Actualizar'
                                           class='btn btn-success btn-block btn-md btn-responsive'
                                           tabindex='7' disabled>";
                                    }
                                ?>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- global js -->
<script src="js/app.js" type="text/javascript"></script>

<!-- end of global js -->
<!-- begining of page level js -->
<script src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/moment/js/moment.min.js" type="text/javascript"></script>
<script src="vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="vendors/datedropper/datedropper.js" type="text/javascript"></script>
<script src="js/custom_js/form_elements.js"></script>
<script src="js/custom_js/datepickers.js" type="text/javascript"></script>
<script src="vendors/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>

<!-- end of page level js -->
</body>

</html>
