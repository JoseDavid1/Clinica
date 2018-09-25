<?php 
include_once('../conexion.php');
include('../paciente/funciones.php');
verificarLogin();
error_reporting(0);

$query = "SELECT * FROM alergias";
$listaAlergias = mysqli_query($conexion, $query);

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
                    <a href="#">Alegias</a>
                </li>
                <li class="active">
                    Nueva Alergia
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
	                        <i class="fa fa-fw fa-file-text-o"></i> Formulario para Nuevas Alergias
	                    </h3>
	                    <span class="pull-right hidden-xs">
	                            <i class="fa fa-fw fa-chevron-up clickable"></i>
	                    </span>
	                </div>
	                <div class="panel-body">
	                    <div>
	                        <form class="form-horizontal"  role="form" action="insertAllergy.php" method="POST" >
	                            <div class="col-md-8">
	                                <div class="form-group">
	                                    <label class="control-label col-md-3">Nombre:
	                                    </label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="nombreAlergia"
	                                               placeholder="Ingrese nombre de la alergia">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="control-label col-md-3" for="last_Name">Descripción:
	                                    </label>
	                                    <div class="col-md-9">
	                                        <input type="text" class="form-control" name="descAlergia"
	                                               placeholder="Ingrese descripción de la alergia">
	                                    </div>
	                                </div>
	                                <br>
	                                <br>
	                                <br>
	                                <center>
                                    <button type="submit" class="btn btn-primary">Guardar
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
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-fw fa-th-large"></i> Listado de Alergias
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table id="table4" data-toolbar="#toolbar" data-search="true" 
                                   data-minimum-count-columns="2" data-page-list="[10, 20,40,ALL]"
                                   data-show-footer="false" data-height="503">
                                <thead>
                                <tr>
                                	<th data-field="id" data-sortable="true">Id</th>
                                    <th data-field="nombre" data-sortable="true">Nombre</th>
                                    <th data-field="descripcion" data-sortable="true">Descripción</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                while($row = mysqli_fetch_array($listaAlergias)){
                                 ?>
                                <tr>
                                	<td><?php print_r($row[0]);?></td>
                                    <td><?php print_r($row[1]);?></td>
                                    <td><?php print_r($row[2]);?></td>
                                </tr>
                                <?php }       
                                 ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row-->
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
<script type="text/javascript" src="../vendors/editable-table/js/mindmup-editabletable.js"></script>
<script type="text/javascript" src="../vendors/bootstrap-table/js/bootstrap-table.min.js"></script>
<script type="text/javascript" src="../vendors/tableExport.jquery.plugin/tableExport.min.js"></script>
<script src="../js/custom_js/bootstrap_tables.js" type="text/javascript"></script>

<!-- end of page level js -->
</body>

</html>
