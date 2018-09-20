<?php
session_start();
error_reporting(0);
 if(!isset($_SESSION['userid'])) 
{
    header("location:../logearse.php");
}
include_once "../conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Tablero de Gestión </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link type="text/css" rel="stylesheet" href="../css/app.css"/>
    <link rel="shortcut icon" href="../img/icono.ico"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="../vendors/bootstrap-table/css/bootstrap-table.min.css">    
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <link rel="stylesheet" type="text/css" href="../css/custom_css/bootstrap_tables.css">
    <!--end of page level css-->
    <script type="text/javascript">
		function comparar_textos() {
		    var texto_1 = document.forms[0].elements['password1'].value;
		    var texto_2 = document.forms[0].elements['password2'].value;
		    var texto_3 = document.forms[0].elements['pregunta'].value;
		    var texto_4 = document.forms[0].elements['respuesta'].value;

		    if (texto_1 =='' && texto_2 == '' && texto_3 == '' && texto_4 == '') {
		        alert('¡Todos los campos deben estar ingresados!');
		    } else {
		    		location.href ="change.php"; 
		            }
		        }
		    }
		}
	</script>
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
                Cambiar Contraseña
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../dashboard.php">
                        <i class="fa fa-fw fa-home"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="#"> Perfil</a>
                </li>
                <li class="active">
                    Cambiar Contraseña
                </li>
            </ol>
        </section>
        <!-- Main content -->
		<div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-key"></i> Cambio de Contraseña
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form action="change.php" method="post" id="passwordForm">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" />
                                <input type="password" class="input-md form-control" name="password1" id="password1"
                                       placeholder="Ingrese Contraseña Nueva" autocomplete="off">
                                <div>
                                    <div class="col-sm-6 padding">
                                        <span id="8char" class="glyphicon glyphicon-remove"
                                              style="color:#FE5B5B;"></span> 8 Caracteres Minimos
                                        <br>
                                        <span id="ucase" class="glyphicon glyphicon-remove"
                                              style="color:#FE5B5B;"></span> Una Letra Mayúscula
                                    </div>
                                    <div class="col-sm-6 padding">
                                        <span id="lcase" class="glyphicon glyphicon-remove"
                                              style="color:#FE5B5B;"></span> Una Letra Minúscula
                                        <br>
                                        <span id="num" class="glyphicon glyphicon-remove" style="color:#FE5B5B;"></span>
                                        Un Número
                                    </div>
                                </div>
                                <input type="password" class="input-md form-control" name="password2" id="password2"
                                       placeholder="Ingrese nuevamente la contraseña" autocomplete="off">
                                <div>
                                    <div class="col-sm-10 padding">
                                        <span id="pwmatch" class="glyphicon glyphicon-ok" style="color:#2ECC71;"></span>
                                        Las Contraseñas Coinciden 
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="skill">
                                        Pregunta secreta
                                    </label>
                                    <div class="col-md-6">
                                        <select id="skill" name="pregunta" class="form-control">
                                            <option value="">
                                                Please select
                                            </option>
                                            <option value="mascota">¿Nombre de tu primer mascota?</option>
                                            <option value="lugar">¿Lugar donde crecí?</option>
                                            <option value="colegio">¿Colegio de la infancia? </option>
                                            <option value="pelicula">¿Nombre de tu pelicula favorita?</option>
                                            <option value="cantante">¿Nombre de tu cantante favorito?</option>
                                        </select>
                                    </div>
                                <br>
                                <br>
                                <br>
                                    <label class="col-md-4	 control-label" for="skill">Respuesta</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="respuesta" class="form-control" id="input-text"
                                               placeholder="Ingrese Respuesta">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col-sm-4" >
                                    <button type="submit" class="col-xs-10 btn btn-primary btn-load btn-md"
                                       data-loading-text="Changing Password..." onclick ="comparar_textos(this.form)">Actualizar</button>
                                </div>
                            </form>
                        </div>
                    </div>
		<!-- Main content -->
    </aside>
</div>
<!-- wrapper-->
<!-- global js -->
<script src="../js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="../vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script type="text/javascript" src="../vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="../vendors/bootstrap-maxlength/js/bootstrap-maxlength.js"></script>
<script src="../vendors/iCheck/js/icheck.js"></script>
<script src="../js/custom_js/form1.js"></script>
<script src="../js/custom_js/form2.js"></script>
<script src="../js/custom_js/form3.js"></script>
<script src="../js/custom_js/form_validations.js"></script>
<!-- end of page level js -->
</body>

</html>
