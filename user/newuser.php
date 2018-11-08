<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Clínica Médica</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="../css/app.css" rel="stylesheet"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="../vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet">
    <link href="../vendors/iCheck/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="../css/custom.css">

    <link rel="stylesheet" href="../css/custom_css/form2.css"/>
    <link rel="stylesheet" href="../css/custom_css/form3.css"/>
    <!--end of page level css-->
</head>

<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<?php include("../menu/submenu.php"); ?>
    
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Formulario para nuevo usuario
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="../index.php?va=sig">
                        <i class="fa fa-fw fa-home"></i>Inicio
                    </a>
                </li>
                <li>
                    <a href="#">Perfil</a>
                </li>
                <li class="active">
                    Nuevo usuario
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-star-half-empty"></i> Formulario para Usuarios Nuevos
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form id="form-validation" action="form_validations.html" method="post"
                                  class="form-horizontal">
                                  <div class="form-group">
                                    <label class="col-md-4 control-label" for="val-username">
                                        Nombre 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="val-username" name="nombre" 
                                        class="form-control"
                                               placeholder="Ingrese nombre del usuario">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="val-username">
                                        Username
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="val-username" name="user" class="form-control"
                                               placeholder="Ingrese el usuario">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">
                                        Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" name="email" class="form-control"
                                               placeholder="Ingrese correo electronico">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">
                                        Contraseña
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="Ingrese contraseña">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="confirmpassword">
                                        Confirmar Contraseña
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" id="confirmpassword" name="confirmpassword"
                                               class="form-control" placeholder="Confirmar contraseña">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="skill">
                                        Tipo de usuario
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                        <select id="skill" name="skill" class="form-control">
                                            <option value="">
                                                Seleccione
                                            </option>
                                            <option value="1">Super Usuario</option>
                                            <option value="2">Ingresar, Consultar</option>
                                            <option value="3">Consultar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-effect-ripple btn-default reset_btn">Borrar
                                        </button>
                                    </div>
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
