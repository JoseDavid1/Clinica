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
    <div class="loader_img"><img src="../img/loading.gif" alt="loading..." height="64" width="64"></div>
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
	                        <form class="form-horizontal"  role="form" action="insertPatient.php" method="POST" >
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Nombres:
	                                    </label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="nombre"
	                                               placeholder="Ingrese Nombre/es">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="last_Name">Apellidos:
	                                    </label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="last_Name"
	                                               placeholder="Ingrese Apellido/os">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="postal_Address">Dirección:</label>
	                                    <div class="col-md-9">
	                                        <textarea rows="3" class="form-control"
	                                                  name="address"
	                                                  placeholder="Ingrese Dirección del paciente" ></textarea>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="input">Lugar de Nacimiento:</label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control"
	                                               name="origen" placeholder="Origen del Paciente">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3 m-t-10">Fecha de Nacimiento:</label>
	                                    <div class="input-group">
	            <div class="input-group-addon">
	                <i class="fa fa-fw fa-calendar"></i>
	            </div>
	            <input type="text" class="form-control" name="departure" placeholder="DD/MM/YYYY"/>
	        </div>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Estado Civil:</label>
	                                    <div class="col-md-5 m-t-10">
	                                        <select class="form-control" name="estadocivil">
	                                            <option>Seleccione uno</option>
	                                            <option>Soltero/a</option>
	                                            <option>Casado/a</option>
	                                            <option>Divorciado/a</option>
	                                            <option>Viudo/a</option>
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
	                                               placeholder="Numero telefonico (Sin guiones)">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3"
	                                           for="city">Reside:</label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="city"
	                                               placeholder="Lugar de residencia">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Género:</label>
	                                    <div class="col-md-4">
	                                        <label class="radio-inline">
	                                            <input type="radio" name="genderRadios" value="Masculino" 
	                                                   class="radio-blue"> Masculino </label>
	                                    </div>
	                                    <div class="col-md-4">
	                                        <label class="radio-inline">
	                                            <input type="radio" name="genderRadios" id="gender"
	                                                   class="radio-blue" value="Femenino"> Femenino
	                                        </label>
	                                    </div>
	                                </div>
	                                <br>
	                                <br>
	                                <br>
	                                <br>
                                    <button type="submit" class="btn btn-primary">Guardar
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
