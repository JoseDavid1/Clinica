<?php 

//se destruye la variable de sesión
session_start();
session_destroy();
header("Location: logearse.php") ?>