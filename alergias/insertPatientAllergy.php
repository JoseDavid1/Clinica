<?php
session_start();
include_once('../conexion.php');


$dato = $_POST['alergia']; 
$alergia = explode(' ',$dato);
$idAlergia =  $alergia[0];
$paciente = $_SESSION['pacienteActivo'];
$fecha = $_POST['descAlergia'];



$queryAlergia = "INSERT INTO alergias_has_paciente(Alergias_idAlergias,Paciente_idPaciente,fecha) 
					VALUES ('".$alergia[0]."','".$paciente."','".$fecha."');";
$runQuery = mysqli_query($conexion,$queryAlergia);

if (!$runQuery) {
		
	   printf("Errormessage: %s\n", $conexion->error);
	}else{
	
	header("Location: patientAllergy.php?va=pll");		
	}


?>