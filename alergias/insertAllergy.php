<?php
include_once('../conexion.php');

$nombre = $_POST['nombreAlergia'];
$descrip = $_POST['descAlergia'];

$queryAlergia = "INSERT INTO alergias(NombreAlergia,Descripcion) 
					VALUES ('".$nombre."','".$descrip."');";
$runQuery = mysqli_query($conexion,$queryAlergia);

if (!$runQuery) {
		
	   printf("Errormessage: %s\n", $conexion->error);
	}else{
	
	header("Location: newAllergy.php?va=nla");		
	}


?>