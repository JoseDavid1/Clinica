<?php 

define('DB_SERVER','localhost');
define('DB_NAME','clinica');
define('DB_USER','root');
define('DB_PASS','');

$conexion = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if ($conexion->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>