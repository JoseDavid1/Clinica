<?php
include('../conexion.php');
session_start();

//Datos para la receta, tienen un comentario "Receta"
$_SESSION['tratamiento'] = '';

#Datos de consulta normal
$paciente = $_SESSION['pacienteActivo'];
$fecha = $_POST['present'];
$motivo = $_POST['motivoConsulta'];
$historia = $_POST['historiaConsulta'];
$diagnostico = $_POST['diagnostico'];
$tratamiento = $_POST['tratamiento']; //receta
$_SESSION['tratamiento'] = $tratamiento;

$nuevaConsulta = "INSERT INTO consulta 
(FechaConsuta,MotivoConsulta,HistoriaEnfermedad,Diagnostico,TratamientoRecomendado,Paciente_idPaciente) VALUES 
('".$fecha."','".$motivo."','".$historia."','".$diagnostico."','".$tratamiento."','".$paciente."');";
$insertarConsulta = mysqli_query($conexion,$nuevaConsulta);

	if (!$insertarConsulta) {
		
	   printf("Errormessage: %s\n", $conexion->error);
	}else{
	
	header("Location: ../test.php?data=$fecha");;
		
	}
?>