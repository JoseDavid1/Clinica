
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form Editors | Core + Admin Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" media="screen" type="text/css" href="vendors/summernote/summernote.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    
    <!--end of page level css-->
</head>

<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="img/logoo.png" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                

            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                Nataliapery
                            </h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw fa-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="index.html">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Dashboard V1</span>
                        </a>
                    </li>
                    <li>
                        <a href="index2.html">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span class="mm-text ">Dashboard V2</span>
                        </a>
                    </li>
                    <li class="menu-dropdown active">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Forms</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-fw fa-fire"></i> Form Elements
                                </a>
                            </li>
                            <li class="active" id="active">
                                <a href="form_editors.html">
                                    <i class="fa fa-fw fa-file-text-o"></i> Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-fw fa-warning"></i> Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-fw fa-fire"></i> Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-fw fa-cog"></i> Form Wizards
                                </a>
                            </li>
                            <li>
                                <a href="complex_forms.html">
                                    <i class="fa fa-fw fa-newspaper-o"></i> Complex Forms
                                </a>
                            </li>
                            <li>
                                <a href="complex_forms2.html">
                                    <i class="fa fa-fw fa-newspaper-o"></i> Complex Forms 2
                                </a>
                            </li>
                            <li>
                                <a href="radio_checkboxes.html">
                                    <i class="fa fa-fw fa-check-square-o"></i> Radio and Checkbox
                                </a>
                            </li>
                            <li>
                                <a href="dropdowns.html">
                                    <i class="fa fa-fw fa-chevron-circle-down"></i> Drop Downs
                                </a>
                            </li>
                            <li>
                                <a href="datepicker.html">
                                    <i class="fa fa-fw fa-calendar-o"></i> Date pickers
                                </a>
                            </li>
                            <li>
                                <a href="advanceddate_pickers.html">
                                    <i class="fa fa-fw fa-calendar"></i> Advanced Date pickers
                                </a>
                            </li>
                            <li>
                                <a href="x-editable.html">
                                    <i class="fa fa-fw fa-eyedropper"></i> X-editable
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    

                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Form Editors
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Forms</a>
                </li>
                <li class="active">
                    Form Editors
                </li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">

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
                            <form class="form-horizontal" role="form" action="prueba2.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                        <label for="input-text" class="col-sm-3 control-label">
                                            Fecha de   <br>
                                            Consulta:
                                        </label>
                                        <div class="input-group col-sm-5">
                                            <div class="input-group-addon">
                                                <i class="fa fa-fw fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" id="departure" name="present" placeholder="DD/MM/YYYY"/>
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
                                    <textarea type="text" name="tratamiento" class="form-control" id="summernote"></textarea>
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


            <div id="right">
                <div id="slim2">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <h5 class="rightsidebar-right-heading rightsidebar-right-heading-first text-uppercase text-xs">
                                <i class="menu-icon  fa fa-fw fa-paw"></i> Contacts
                            </h5>
                            <ul class="list-unstyled margin-none">
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar1.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Alanis
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Rolando
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar2.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar3.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-warning"></i> Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar4.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-danger"></i> Kamryn
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar5.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-muted"></i> Cielo
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="img/authors/avatar7.jpg" height="20" width="20"
                                             class="img-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-muted"></i> Charlene
                                    </a>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-tasks"></i> Tasks
                            </h5>
                            <ul class="list-unstyled m-t-25">
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <small class="pull-right text-muted">
                                                40% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 40%">
                                                    <span class="sr-only">
                                                        40% Complete (success)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <small class="pull-right text-muted">
                                                20% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 20%">
                                                    <span class="sr-only">
                                                        20% Complete
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <small class="pull-right text-muted">
                                                60% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 60%">
                                                    <span class="sr-only">
                                                        60% Complete (warning)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <small class="pull-right text-muted">
                                                80% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar"
                                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 80%">
                                                    <span class="sr-only">
                                                        80% Complete (danger)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-group"></i> Recent Activities
                            </h5>
                            <div>
                                <ul class="list-unstyled">
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-comment fa-fw text-primary"></i> New Comment
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-twitter fa-fw text-success"></i> 3 New Followers
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-envelope fa-fw text-info"></i> Message Sent
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-tasks fa-fw text-warning"></i> New Task
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-upload fa-fw text-danger"></i> Server Rebooted
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-warning fa-fw text-primary"></i> Server Not Responding
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart fa-fw text-success"></i> New Order Placed
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-money fa-fw text-info"></i> Payment Received
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content ends-->
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
<script src="vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript" src="vendors/summernote/summernote.min.js"></script>
<script src="js/custom_js/form_editors.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
 	