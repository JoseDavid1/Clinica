<?php 
//se verifica que exista una sesión iniciada
session_start();
error_reporting(0);
include("conexion.php");
include("paciente/funciones.php");

if(!isset($_SESSION['userid'])){

    header("Location:logearse.php");
}
tipoUsuarioIndex();
pacienteActivoIndex();

//consulta que devuelve los datos del paciente
$datosPaciente = "SELECT * FROM Paciente WHERE idPaciente = '".$_SESSION['pacienteActivo']."';";
$runDatos = mysqli_query($conexion, $datosPaciente);
$array = mysqli_fetch_array($runDatos);


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
    <link href="vendors/daterangepicker/css/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="vendors/datedropper/datedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/timedropper/css/timedropper.css">
    <link rel="stylesheet" type="text/css" href="vendors/jquerydaterangepicker/css/daterangepicker.min.css">
    
    
    <link rel="stylesheet" type="text/css" href="css/formelements.css">
    <link rel="stylesheet" media="screen" type="text/css" href="vendors/summernote/summernote.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
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
                Crear Nueva Consulta
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
                    Consulta
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
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="glyphicon glyphicon-check"></i> Datos de Consulta 
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" action="paciente/insertConsulta.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="input-text" class="col-sm-3 control-label">
                                            Fecha de   <br>
                                            Consulta:
                                        </label>
                                        <div class="input-group col-sm-5">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" id="departure" name="present" value="<?php  $hoy = date('d/m/Y'); print_r($hoy)?>" />
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label" >Motivo de Consulta: </label>
                                    <div class="col-sm-6">
                                       <textarea  name="motivoConsulta"
                                          class="form-control resize_vertical"
                                          placeholder="Ingrese el motivo de la visita"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label" >Historia: </label>
                                    <div class="col-sm-6">
                                       <textarea  name="historiaConsulta"
                                          class="form-control resize_vertical"
                                          placeholder="Ingrese Historia de la enfermedad"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label">Diagnostico:</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="diagnostico" class="form-control" id="input-text"
                                               placeholder="Diagnostico de la consulta">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input-text" class="col-sm-3 control-label" >Tratamiento Recomendado: </label>         

                                <div  class="col-sm-10" class="bootstrap-admin-panel-content summer_noted">
                                    <textarea type="text" name="tratamiento" class="input-block-level" id="summernote"></textarea>
                                </div>
                                </div>
                            <br>                            
                            <div class="col-md-12">
                                <div class="col-xs-5 col-md-3">
                                    <input type="reset" value="Borrar Consuta"
                                           class="btn btn-danger btn-block btn-md btn-responsive">
                                </div>
                                <div class="col-xs-5 col-md-3 col-md-offset-3">
                                    <a href="consultaExtendida.php?va=cne">
                                    <input type="button" id="Exam" value="Examen Fisico"
                                           class="btn btn-success btn-block btn-md btn-responsive"
                                           tabindex="7">
                                    </a>
                                </div>
                                <div class="col-xs-5 col-md-3 ">
                                    <input type="submit" id="btncheck1" value="Generar Receta"
                                           class="btn btn-primary btn-block btn-md btn-responsive"
                                           tabindex="7">
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

<script type="text/javascript" src="vendors/summernote/summernote.min.js"></script>

<script src="vendors/datedropper/datedropper.js" type="text/javascript"></script>
<script src="vendors/bootstrap-fileinput/js/fileinput.min.js" type="text/javascript"></script>
<script src="js/custom_js/form_elements.js"></script>


<script src="js/custom_js/form_editors.js" type="text/javascript"></script>

<script src="js/custom_js/datepickers.js" ></script>
<script src="vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>





<!-- end of page level js -->
</body>

</html>
