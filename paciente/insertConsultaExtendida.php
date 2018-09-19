<?php
include('../conexion.php');
session_start();

$paciente = $_SESSION['pacienteActivo'];
$fecha = $_POST['present'];
$motivo = $_POST['motivoConsulta'];
$historia = $_POST['historiaConsulta'];
$diagnostico = $_POST['diagnostico'];
$tratamiento = $_POST['tratamiento'];

function generarCodigo($longitud, $tipo=0)
		{
		    $codigo = "";
		    $caracteres="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		    $max=strlen($caracteres)-1;
		    for($i=0;$i < $longitud;$i++)
		    {
		        $codigo.=$caracteres[rand(0,$max)];
		    }
		    return $codigo;
		}

$codigo = generarCodigo(10);
		

$nuevaConsulta = "INSERT INTO consulta 
(FechaConsuta,MotivoConsulta,HistoriaEnfermedad,Diagnostico,TratamientoRecomendado,Observaciones,Paciente_idPaciente) VALUES 
('".$fecha."','".$motivo."','".$historia."','".$diagnostico."','".$tratamiento."','".$codigo."','".$paciente."');";
$insertarConsulta = mysqli_query($conexion,$nuevaConsulta);

	if (!$insertarConsulta) {
		
	   printf("Errormessage: %s\n", $conexion->error);

	}else{
		#Traemos el id de la consulta recien guardada, usando el codigo unico que generamos.
		$traerConsulta = "SELECT idConsulta FROM consulta WHERE Observaciones = '".$codigo."';";
		$runConsulta = mysqli_query($conexion, $traerConsulta);
		$arrayConsulta = mysqli_fetch_array($runConsulta);
		#Tenemos el id, lo mandamos a la variable; sera utilizado para insertar el examen fisico
		$idConsulta = $arrayConsulta['0'];

		print_r($idConsulta);

		}
?>