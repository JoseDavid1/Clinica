<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['last_Name'];
$direccion = $_POST['address'];
$origen = $_POST['origen'];
$nacimiento = $_POST['departure'];
$estadoCivil = $_POST['estadocivil'];
$religion = $_POST['religion'];
$numero = $_POST['number'];
$ciudad = $_POST['city'];
$genero = $_POST['genderRadios'];


print_r($nombre . $apellido . $direccion . $origen . $nacimiento . $estadoCivil . $religion . $numero .$genero);
?>