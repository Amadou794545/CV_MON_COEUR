<?php
//session_start();


require('../fpdf.php');

$title = $_GET['titre'];
$name = $_GET['nom'];
$surname = $_GET['prenom'];
$description = $_GET['description'];
function createCV($title,$name,$surname,$description){

    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Titre: '.$title,0,1);
    $pdf->Cell(40,10,'Nom: '.$name,0,1);
    $pdf->Cell(40,10,'Prenom: '.$surname, 0,1  );
    $pdf->Cell(40,10,'Description: '.$description,  0,1);
    //$pdf->Cell(40,10,'Description: '.$_SESSION['Name'],  0,1);

    $pdf->Output();

}

createCV($title,$name,$surname,$description);


?>