<?php 
//se verifica que exista una sesión iniciada
session_start();
error_reporting(0);
include("../conexion.php");
include("funciones.php");

if(!isset($_SESSION['userid'])){

    header("Location:logearse.php");
}

tipoUsuario();
pacienteActivo();


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
    <link rel="shortcut icon" href="../img/icono.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- global css -->
    <link type="text/css" href="../css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="../vendors/iCheck/css/all.css" rel="stylesheet" type="text/css"/>
    <link href="../vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../vendors/gridforms/css/gridforms.css">
    <link rel="stylesheet" type="text/css" href="../vendors/datedropper/datedropper.css">
    <link rel="stylesheet" type="text/css" href="../vendors/jquerydaterangepicker/css/daterangepicker.min.css">

    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/form_layouts.css">
    <link rel="stylesheet" type="text/css" href="../css/datepicker.css">
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
            <!--section starts-->
            <h1>
                Formulario para Pacientes
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="#">Pacientes</a>
                </li>
                <li class="active">
                    Nuevo Paciente
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
					<div class="row">
	        <div class="col-lg-12">
	            <div class="panel panel-warning">
	                <div class="panel-heading">
	                    <h3 class="panel-title">
	                        <i class="fa fa-fw fa-file-text-o"></i> Formulario para Nuevos Pacientes
	                    </h3>
	                    <span class="pull-right hidden-xs">
	                            <i class="fa fa-fw fa-chevron-up clickable"></i>
	                    </span>
	                </div>
	                <div class="panel-body">
	                    <div>
	                        <form class="form-horizontal"  role="form" action="updatePatient.php" method="POST" >
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Nombres:
	                                    </label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="nombre"
	                                               value="<?php print_r($array['1']); ?>">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="last_Name">Apellidos:
	                                    </label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="last_Name"
	                                               value="<?php print_r($array['2']); ?>">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="postal_Address">Dirección:</label>
	                                    <div class="col-md-9">
	                                        <textarea rows="3" class="form-control"
	                                                  name="address"
	                                                  value=""><?php print_r($array['4']); ?></textarea>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="input">Lugar de Nacimiento:</label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control"
	                                               name="origen" value="<?php print_r($array['8']); ?>">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3 m-t-10">Fecha de Nacimiento:</label>
	                                    <div class="input-group">
								            <div class="input-group-addon">
								                <i class="fa fa-fw fa-calendar"></i>
								            </div>
								            <input type="text" class="form-control" name="departure" value="<?php print_r($array['10']); ?>" />
								        </div>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Estado Civil:</label>
	                                    <div class="col-md-5 m-t-10">
	                                        <select class="form-control" name="estadocivil" >
	                                            <option>Seleccione uno</option>
	                                            <option>Soltero</option>
	                                            <option>Casado</option>
	                                            <option>Divorciado</option>
	                                            <option>Viudo</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="input">Religión:</label>
	                                        <div class="col-md-5 m-t-10">
	                                        <select class="form-control" name="religion">
	                                            <option>Seleccione una</option>
	                                            <option>Católica</option>
	                                            <option>Evangélica</option>
	                                            <option>Atea</option>
	                                            <option>Otra</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="phone_Number">Teléfono:</label>
	                                    <div class="col-md-9">
	                                        <input type="tel" class="form-control" name="number"
	                                               value="<?php print_r($array['7']); ?>">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3"
	                                           for="city">Reside:</label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="city"
	                                               value="<?php print_r($array['9']); ?>">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Género:</label>
	                                    <?php if($array['3'] == 'Masculino'){ ?>
	                                    <div class="col-md-4">
	                                        <label class="radio-inline">
	                                            <input type="radio" name="genderRadios" value="Masculino" 
	                                                   class="radio-blue" checked="true"> Masculino </label>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <label class="radio-inline">
	                                            <input type="radio" name="genderRadios" id="gender"
	                                                   class="radio-blue" value="Femenino"> Femenino
	                                        </label>
	                                    </div>
	                                    <?php }elseif ($array['3'] == 'Femenino') { ?>
	                                    <div class="col-md-4">
	                                        <label class="radio-inline">
	                                            <input type="radio" name="genderRadios" value="Masculino" 
	                                                   class="radio-blue" > Masculino </label>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <label class="radio-inline">
	                                            <input type="radio" name="genderRadios" id="gender"
	                                                   class="radio-blue" value="Femenino" checked="true"> Femenino
	                                        </label>
	                                    </div>
	                                	<?php } ?>
	                                </div>
	                                <br>
	                                <br>
	                                <br>
	                                <br>
                                    <button type="submit" class="btn btn-primary">Actualizar
                                    </button>
	                            </div>
	                        </form>
	                    </div>
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
<script src="../js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="../vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script src="../vendors/moment/js/moment.min.js" type="text/javascript"></script>
<script src="../vendors/iCheck/js/icheck.js" type="text/javascript"></script>
<script src="../vendors/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="../vendors/jquerydaterangepicker/js/jquery.daterangepicker.min.js" type="text/javascript"></script>
<script src="../vendors/datedropper/datedropper.js" type="text/javascript"></script>
<script src="../vendors/timedropper/js/timedropper.js" type="text/javascript"></script>

<script src="../js/custom_js/form_layouts.js" type="text/javascript"></script>
<script src="../js/custom_js/datepickers.js" type="text/javascript"></script>

<!-- end of page level js -->
</body>

</html>
