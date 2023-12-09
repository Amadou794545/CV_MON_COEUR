<?php
session_start();


require('../fpdf.php');



function createCV($title,$name,$surname,$description,
                  $email,$phone,$adress,
                  $school,$formation,$dateEducation,
                  $entreprise,$dateExperience,$descriptionExperience,
                  $interest,
                  $hardskill,$softskill)  {

    $pdf= new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    //CV
    $pdf->Cell(40,10,'Titre: '.$title,0,1);
    $pdf->Cell(40,10,'Nom: '.$name,0,1);
    $pdf->Cell(40,10,'Prenom: '.$surname, 0,1  );
    $pdf->Cell(40,10,'Description: '.$description,  0,1);
    //Contact
    $pdf->Cell(40,10,'Email: '.$email,  0,1);
    $pdf->Cell(40,10,'Phone: '.$phone,  0,1);
    $pdf->Cell(40,10,'Adress: '.$adress,  0,1);
    //Education
    $pdf->Cell(40,10,'School: '.$school,  0,1);
    $pdf->Cell(40,10,'Formation: '.$formation,  0,1);
    $pdf->Cell(40,10,'Date: '.$dateEducation,  0,1);
    //Experience
    $pdf->Cell(40,10,'Entreprise: '.$entreprise,  0,1);
    $pdf->Cell(40,10,'Date: '.$dateExperience,  0,1);
    $pdf->Cell(40,10,'Description: '.$descriptionExperience,  0,1);
    //Interest
    $pdf->Cell(40,10,'Interest: '.$interest,  0,1);
    //Hardskill
    $pdf->Cell(40,10,'Hardskill: '.$hardskill,  0,1);
    //Softskill
    $pdf->Cell(40,10,'Softskill: '.$softskill,  0,1);


    $pdf->Output();

}

createCV($_SESSION['Titre'],$_SESSION['Name'],$_SESSION['prenom'],$_SESSION['description'],
    $_SESSION['email'], $_SESSION['phone'],$_SESSION['adress'],
    $_SESSION['school'],$_SESSION['formation'],$_SESSION['dateEducation'],
    $_SESSION['name_entreprise'],$_SESSION['dateExperience'],$_SESSION['descriptionExperience'],
    $_SESSION['interest'],
    $_SESSION['hardskill'],$_SESSION['softskill']);


?>