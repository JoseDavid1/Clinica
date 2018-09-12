<?php
error_reporting(0);

include('funciones.php');
verificarLogin();
pacienteActivo();

print_r($_SESSION['pacienteActivo']);


?>