<?php
session_start();
error_reporting(0);
 if(!isset($_SESSION['userid'])) 
{
    header("location:../logearse.php");
}
?>

<script src="../jquery-3.2.1.min.js"></script>
 <script>
    function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  }  
}
    $(document).ready(function(){
        var ventanaActiva = getQueryVariable("va");
       
if(ventanaActiva!= null){
   
    ventanaActiva = "#" + ventanaActiva
    var objectVentana = $(ventanaActiva);
    objectVentana.parent().addClass("in");
    objectVentana.parent().parent().addClass("active");
    objectVentana.addClass("active");
   
}

});
</script>
<header class="header">
    <nav class="navbar navbar-fixed-top" role="navigation">
        <a   class="logo">

        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!--tasks-->
                    <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <div class="riot">
                            <div>
                                Configuración
                                <span>
                                        <i class="caret"></i>
                                    </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../img/logo.png" class="img-circle" alt="User Image">
                            <p>Clínica Médica</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="p-t-3"><a href="#"> <i class="fa fa-fw fa-user"></i> Mi perfil </a>
                        </li>
                        <li class="p-t-3"><a href="client/changePassword.php?va=psw"> <i class="fa fa-fw fa-key"></i> Cambiar Contraseña </a>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="../logout.php">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                    Salir
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
<aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar affix">
            <div class="slim">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="../img/logo.png" width="55" height="55" class="img-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">Clínica Médica</h4>
                           
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                        <ul class="sub-menu">
                            <li id="sig">
                                   <a href="../index.php?va=sig">
                                    <i class="menu-icon fa fa-fw fa-home"></i>
                                    <span class="mm-text ">Inicio</span>
                                </a>
                            </li>
                        </ul>
                    <li  class= 'menu-dropdown' id="clt">
                        <a href="#">
                        <i class="fa fa-fw fa-group"></i>
                            <span>Pacientes</span>
                                <span class="fa arrow">
                                </span>
                        </a>
                        <ul class="sub-menu">
                            <li  id="nnt">
                                <a href="../paciente/new-patient.php?va=nnt">
                                    <i class="fa fa-fw fa-plus"></i> Nuevo Paciente
                                </a>
                            </li>
                            <li  id="ptl">
                                <a href="../paciente/patientList.php?va=ptl">
                                    <i class="fa fa-fw fa-archive"></i> Listado de Pacientes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <ul class="sub-menu">
                        <li  id="pht">
                            <a href="../paciente/patientHistory.php?va=pht">
                                <i class="fa fa-fw fa-folder-open"></i> Historial de Paciente
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu">
                        <li id="rcd">
                            <a href="../record.php?va=rcd">
                                <i class="fa fa-fw fa-files-o"></i>
                                <span class="mm-text ">Antecedentes</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sub-menu">
                        <li id="cnt">
                            <a href="../consulta.php?va=cnt">
                                <i class="fa fa-fw fa-edit"></i>
                                <span class="mm-text ">Nueva Consulta</span>
                            </a>
                        </li>
                    </ul>
                        </ul>
                    </li>                 
                </ul>
            </div>
        </div>
    </section>
</aside>
