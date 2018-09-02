<?php 
 session_start();
$_SESSION['valori'] = 1;

 if(isset($_SESSION['userid'])) 
{
    header("location:dashboard.php");
} 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tablero de Gesti&oacute;n</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icono.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet"/>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<div class="preloader">
    <div class="loader_img"><img src="img/loading.gif" alt="loading..." height="64" width="64"></div>
</div>

<div class="container">
    <div class="row">
        <div class="panel-header">
            <h2 class="text-center">
                Ingresar
            </h2>
        </div>
        <div class="panel-body social col-sm-offset-2">
            <div class="clearfix">
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6 form_width">
                    <form action="login.php" id="authentication" method="post" class="login_validator">
                        <div class="form-group">
                            <label for="email" class="sr-only">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope text-primary"></i></span>
                                <input name="user" type="text" class="form-control  form-control-lg" 
                                       placeholder="Usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock text-primary"></i></span>
                                <input name="contrasena" type="password" class="form-control form-control-lg"
                                        placeholder="Contrase&ntilde;a">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" name ="login" class="btn btn-primary btn-block"/>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="vendors/iCheck/js/icheck.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/custom_js/login2.js"></script>

</body>
</html>