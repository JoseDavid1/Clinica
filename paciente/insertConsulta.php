<?php
include('../conexion.php');
session_start();

//Datos para la receta
$_SESSION['tratamiento'] = '';
$_SESSION['fecha'] = '';

//Datos de consulta normal
$paciente = $_SESSION['pacienteActivo'];
$fecha = $_POST['present'];
$motivo = $_POST['motivoConsulta'];
$historia = $_POST['historiaConsulta'];
$diagnostico = $_POST['diagnostico'];
$tratamiento = $_POST['tratamiento'];
$_SESSION['tratamiento'] = $tratamiento;

$nuevaConsulta = "INSERT INTO consulta 
(FechaConsuta,MotivoConsulta,HistoriaEnfermedad,Diagnostico,TratamientoRecomendado,Paciente_idPaciente) VALUES 
('".$fecha."','".$motivo."','".$historia."','".$diagnostico."','".$tratamiento."','".$paciente."');";
$insertarConsulta = mysqli_query($conexion,$nuevaConsulta);

	if (!$insertarConsulta) {
		
	   printf("Errormessage: %s\n", $conexion->error);
	}else{
	$_SESSION['fecha'] = $fecha;

		?>
		<script type="text/javascript" language="Javascript">window.open('http://localhost/Clinicaa/receta.php');</script>
<script type="text/javascript">
   location.href="http://localhost/clinicaa/consulta.php?va=cnt";
    </script>
	<?php
	//header("Location: patientHistory.php?va=pht");
	}
?>