<?php 
include("fpdf.php");
include_once('conexion.php');


$pdf = new FPDF('P','mm',array(110,153)); //constructor pdf
$pdf->SetFont('Arial','',8);
$pdf->AddPage();

$consulta = mysqli_query($conexion,"SELECT * FROM paciente WHERE idPaciente ='1';");
$row = mysqli_fetch_array($consulta);

$fecha = explode('/',$row['nacimiento']);
$texto = utf8_decode($text);

$pdf->Image('imagen.png','0','0','110','157','png'); 
//IMAGE (RUTA,X,Y,ANCHO,ALTO,EXTEN)

//distancia entre el tope de la hoja y la primer linea
$pdf->Ln(30);

//Letra , tipo y tamaño
$pdf->SetFont('Arial','B',9);
$pdf->Cell(22);
$pdf->Cell(0,5,utf8_decode($fecha['0']. "                            ". $fecha['1']. "                            ". $fecha['2']),0,1,'L');
$pdf->Cell(7,30);
$pdf->Cell(0,6,utf8_decode("    ".$row['Nombre']. $row['Apellido']),0,1,'L');
$pdf->Cell(32);
$pdf->Cell(0,5,utf8_decode('Genero: '. $row['3']),0,1,'L');


ob_end_clean();
$pdf->Output();
ob_end_flush(); 


?>
