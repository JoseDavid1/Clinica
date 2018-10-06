<?php
session_start();
date_default_timezone_set('America/Guatemala');
if (!isset($_SESSION['userid'])) {
    header("Location: ../index.php?va=sig");
}
include('../conexion.php');
$diaActual = date("d")."/".date("m")."/".date("Y");


if ($conexion->connect_errno) {
	echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "ErrNo: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
}

$nombre = $_POST['nombre'];
$apellido = $_POST['last_Name'];
$direccion = $_POST['address'];
$origen = $_POST['origen']; //Lugar de nacimiento
$estadoCivil = $_POST['estadocivil'];
$religion = $_POST['religion'];
$numero = $_POST['number'];
$ciudad = $_POST['city'];//Lugar en que reside el paciente
$genero = $_POST['genderRadios']; //Genero del paciente
$nacimiento = $_POST['departure'];//Fecha de nacimiento


$nuevoPaciente = "INSERT INTO paciente(Nombre,Apellido,Sexo,Direccion,EstadoCivil,Religion,Telefono,Originario,Residente,nacimiento,primeraVisita) VALUES('".$nombre."','".$apellido."','".$genero."','".$direccion."','".$estadoCivil."','".$religion."','".$numero."','".$origen."','".$ciudad."','".$nacimiento."','".$diaActual."')";
$runInsert = mysqli_query($conexion, $nuevoPaciente);

if (!$runInsert) {
	echo "Error: La ejecución de la consulta falló debido a: \n";
    echo "Query: " . $nuevoPaciente . "<br>";
    echo "ErrNo: " . $conexion->errno . "<br>";
    echo "Error: " . $conexion->error . "<br>";
}else{

	header("Location: patientList.php?va=ptl");
}




?>