﻿<?php 
session_start();
include("fpdf.php");
include_once('conexion.php');


$pdf = new FPDF('P','mm',array(212,135)); //constructor pdf
$pdf->SetFont('Arial','',8);
$pdf->AddPage();
$pdf->SetLineWidth(1);
$consulta = mysqli_query($conexion,"SELECT * FROM paciente WHERE idPaciente ='".$_SESSION['pacienteActivo']."';");
$row = mysqli_fetch_array($consulta);

$fecha = explode('/',$_SESSION['fecha']);
$nacimiento = explode('/',$row['nacimiento']);
$hoy = date(Y);
$anios = $hoy - $nacimiento['2'];




$pdf->Image('imagen.png','0','0','135','212','png'); 
//IMAGE (RUTA,X,Y,ANCHO,ALTO,EXTEN)

//distancia entre el tope de la hoja y la primer linea
$pdf->Ln(45);

//Letra , tipo y tamaño
$pdf->SetFont('Arial','B',9);
$pdf->Cell(22);
$pdf->Cell(0,5,utf8_decode($fecha['0']. "                                               ". $fecha['1']. "                            ". $fecha['2']),0,1,'L');
$pdf->ln(4);
$pdf->Cell(14);
$pdf->Cell(0,6,utf8_decode("    ".$row['Nombre']." ". $row['Apellido'] ."                                          ".$anios),0,1);
$pdf->Cell(9);
$pdf->ln(20);
$pdf->MultiCell(0,4,($_SESSION['tratamiento']));

ob_end_clean();
$pdf->Output();
ob_end_flush(); 


?>
