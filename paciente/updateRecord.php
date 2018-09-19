<?php
session_start();
include_once('../conexion.php');


$id = $_SESSION['pacienteActivo'];
$medicos = $_POST['medicos'];
$quirurgicos = $_POST['quirurgicos'];
$traumaticos = $_POST['traumaticos'];
$familiares = $_POST['familiares'];
$ginecologicos = $_POST['ginecologicos'];
$nacimiento = $_POST['nacimiento'];
$operacion = $_POST['btncheck1'];

print_r($operacion);

if($operacion == 'Actualizar'){
	$actualizarAntecedentes = "UPDATE antecedentes 
		SET Medicos = '".$medicos."',Quirurgicos = '".$quirurgicos."',Traumaticos = '".$traumaticos."', Familiares = '".$familiares."',Ginecologicos='".$ginecologicos."',Nacimiento='".$nacimiento."' WHERE Paciente_idPaciente='".$_SESSION['pacienteActivo']."';";
	$runActualizacion = mysqli_query($conexion,$actualizarAntecedentes);

	if (!$runActualizacion) {
   printf("Errormessage: %s\n", $conexion->error);
	}else{
	header("Location: record.php?va=rcd");

	}


}else if ($operacion == 'Guardar') {


	$insertAntecedentes = "INSERT INTO antecedentes(Medicos,Quirurgicos,Traumaticos,Familiares,Ginecologicos,Nacimiento,Paciente_idPaciente) 
		VALUES 
('".$medicos."','".$quirurgicos."','".$traumaticos."','".$familiares."',
'".$ginecologicos."','".$nacimiento."','".$id."');";

	$runInsert = mysqli_query($conexion, $insertAntecedentes);
	
	if (!$runInsert) {
	   printf("Errormessage: %s\n", $conexion->error);
	}else{
	header("Location: record.php?va=rcd");
		
	}
}

?>