<?php
session_start();
include_once('../conexion.php');

function verificarLogin(){

	if (!isset($_SESSION['userid'])) {
    	header("Location: ../index.php?va=sig");
	}

}

function pacienteActivo(){

	if ($_SESSION['pacienteActivo'] == NULL) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
    <script type="text/javascript" src="../vendors/sweetalert2/js/sweetalert.min.js"></script>
	</head>
	<body>
	<script type="text/javascript">
       swal({
		  title: "Debe seleccionar un paciente!",
		  text: "Por favor, seleccione un paciente y vuelva a intentar.",
		  icon: "error",
		})
		.then((value) => {
		   location.href="../index.php?va=sig";
		});
    </script>
	</body>
	</html>
	<?php

}
}
function pacienteActivoIndex(){

	if ($_SESSION['pacienteActivo'] == NULL) {
	?>
	<!DOCTYPE html>
	<html>
	<head>
    <script type="text/javascript" src="vendors/sweetalert2/js/sweetalert.min.js"></script>
	</head>
	<body>
	<script type="text/javascript">
       swal({
		  title: "Debe seleccionar un paciente!",
		  text: "Por favor, seleccione un paciente y vuelva a intentar.",
		  icon: "error",
		})
		.then((value) => {
		   location.href="index.php?va=sig";
		});
    </script>
	</body>
	</html>
	<?php

}
}


?>