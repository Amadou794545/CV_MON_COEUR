<?php
session_start();


require('../fpdf.php');


function createCV($title,$name,$surname,$description,$email,$phone,$adress,$school,$formation,$date){

    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Titre: '.$title,0,1);
    $pdf->Cell(40,10,'Nom: '.$name,0,1);
    $pdf->Cell(40,10,'Prenom: '.$surname, 0,1  );
    $pdf->Cell(40,10,'Description: '.$description,  0,1);
    $pdf->Cell(40,10,'Email: '.$email,  0,1);
    $pdf->Cell(40,10,'Phone: '.$phone,  0,1);
    $pdf->Cell(40,10,'Adress: '.$adress,  0,1);
    $pdf->Cell(40,10,'School: '.$school,  0,1);
    $pdf->Cell(40,10,'Formation: '.$formation,  0,1);
    $pdf->Cell(40,10,'Date: '.$date,  0,1);

    $pdf->Output();

}

createCV($_SESSION['Titre'],$_SESSION['Name'],$_SESSION['prenom'],$_SESSION['description'],$_SESSION['email'],$_SESSION['phone'],$_SESSION['adress'],$_SESSION['school'],$_SESSION['formation'],$_SESSION['date']);


?>