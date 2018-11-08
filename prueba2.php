<?php

include('conexion.php');
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

$tratamiento = $_POST['tratamiento']; //receta


$_SESSION['tratamiento'] = $tratamiento;


print_r($fecha);
print_r($tratamiento);
print_r($_SESSION['tratamiento']);

?>