<?php
include('../conexion.php');
session_start();


$respuesta = $_POST['respuesta'];
$pregunta = $_POST['pregunta'];
$contrasena = $_POST['password2'];

$actualizar = "UPDATE usuarios 
SET password = password('".$contrasena."'),pregunta = '".$pregunta."',respuesta = '".$respuesta."'
				WHERE idUsuarios = '".$_SESSION['idUsuarios']."';";

$runActualizacion = mysqli_query($conexion, $actualizar);


if (!$runActualizacion) {
		
	   printf("Errormessage: %s\n", $conexion->error);
	}else{
	
	header("Location: ../index.php?va=sig");		
	}

?>