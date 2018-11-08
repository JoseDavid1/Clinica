<?php
include('../conexion.php');


$nombre = $_POST['nombre'];
$usuario = $_POST['user'];
$email = $_POST['email'];
$contra = $_POST['confirmpassword'];
$tipo = $_POST['skill'];


$QueryInsertando = "INSERT INTO usuarios(Nombre,Usuario,Password,Correo,TipoUsuario_idTipoUsuario) 
					VALUES ('".$nombre."','".$usuario."',password=('".$contra."'),'".$email."','".$tipo."')";
$runQuery = mysqli_query($conexion,$QueryInsertando);

header("Location: ../index.php?va=sig");


?>