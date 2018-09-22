<?php
include('../conexion.php');
session_start();

//Datos para la receta, tienen un comentario "Receta"
$_SESSION['tratamiento'] = '';

#Datos de consulta normal
$paciente = $_SESSION['pacienteActivo']; //Receta
$fecha = $_POST['present']; //Receta
$motivo = $_POST['motivoConsulta'];
$historia = $_POST['historiaConsulta'];
$diagnostico = $_POST['diagnostico'];
$tratamiento = $_POST['tratamiento']; //Receta
$_SESSION['tratamiento'] = $tratamiento;

#Datos consulta Extendida
$frecuencia = $_POST['frecuencia'];
$presion = $_POST['presion'];
$saturacion = $_POST['saturacion'];
$temperatura = $_POST['temperatura'];
$respiratoria = $_POST['respiratoria'];
$piel = $_POST['piel'];
$cabeza = $_POST['cabeza'];
$cuello = $_POST['cuello'];
$torax = $_POST['torax'];
$pulmones = $_POST['pulmones'];
$corazon = $_POST['corazon'];
$abdomen = $_POST['abdomen'];
$ginecologico = $_POST['ginecologico'];
$extremidades = $_POST['extremidades'];
$neurologico = $_POST['neurologico'];


header("Location: ../test.php?data=$fecha");

/*
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
		
/*
$nuevaConsulta = "INSERT INTO consulta 
(FechaConsuta,MotivoConsulta,HistoriaEnfermedad,Diagnostico,TratamientoRecomendado,Observaciones,Paciente_idPaciente) VALUES 
('".$fecha."','".$motivo."','".$historia."','".$diagnostico."','".$tratamiento."','".$codigo."','".$paciente."');";
$insertarConsulta = mysqli_query($conexion,$nuevaConsulta);

	if (!$insertarConsulta) {
		
	   printf("Errormessage: %s\n", $conexion->error);

	}else{
		#Traemos el id de la consulta recien guardada, usando el codigo unico que generamos.
		$traerConsulta = "SELECT idConsulta FROM consulta WHERE Observaciones like binary '".$codigo."';";
		$runConsulta = mysqli_query($conexion, $traerConsulta);
		$arrayConsulta = mysqli_fetch_array($runConsulta);
		#Tenemos el id, lo mandamos a la variable; sera utilizado para insertar el examen fisico
		$idConsulta = $arrayConsulta['0'];

		$examenFisico = "INSERT INTO examenfisico(PresionArterial, FrecuenciaCardiaca, Temperatura, SaturacionOxigeno, FrecuenciaRespiratoria, PielFameras, Cabeza, Cuello, Torax, Pulmones, Corazon, Abdomen, Ginecologico, Extremidades, Neurologico, Consulta_idConsulta, Consulta_Paciente_idPaciente) VALUES ('".$presion."','".$frecuencia."','".$temperatura."','".$saturacion."','".$respiratoria."','".$piel."','".$cabeza."','".$cuello."','".$torax."','".$pulmones."','".$corazon."','".$abdomen."','".$ginecologico."','".$extremidades."','".$neurologico."','".$idConsulta."','".$paciente."')";
		$insertarExamenFisico = mysqli_query($conexion,$examenFisico);

		if (!$insertarExamenFisico) {
		
	   printf("Errormessage: %s\n", $conexion->error);

		}
	}
	*/
?>
