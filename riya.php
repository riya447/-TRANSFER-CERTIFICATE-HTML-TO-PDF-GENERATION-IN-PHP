<?php

$schoolname=$_POST['schoolname'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$aflnum=$_POST['aflnum'];
$aflboard=$_POST['aflboard'];
$date=$_POST['date'];
$refnum=$_POST['refnum'];
$admnum=$_POST['admnum'];
$pupil=$_POST['pupil'];
$fname=$_POST['fname'];
$nat=$_POST['nat'];
$result=$_POST['result'];
$caste=$_POST['caste'];
$doa=$_POST['doa'];
$dob=$_POST['dob'];
$proclass=$_POST['proclass'];
$protclass=$_POST['protclass'];
$reason=$_POST['reason'];
$due=$_POST['due'];


include("fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image('logo.png',3,4,20);
$pdf->SetDrawColor(0,80,180);
$pdf->SetFillColor(200,220,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetLineWidth(0);
 $pdf->SetFont("Arial", "B", "15");
$pdf->Cell(0, 7, "{$schoolname}", 0, 1, "C");
$pdf->SetFont("Arial", "I", "10");
$pdf->Cell(0, 7, "{$address}", 0, 1, "C");
$pdf->SetFont("Arial", "U", "17");
$pdf->Cell(0, 9, "TRANSFER CERTIFICATE", 0, 1, "C");
$pdf->SetFont("Arial", "I", "10");
$pdf->Cell(0, 6, "Any further changes in the transfer certificate will be conducted by the authority ", 0, 1);
$pdf->SetTextColor(220,50,50);
$pdf->SetFont("Arial", "B", "12");
$pdf->Cell(50, 7, "CONTACT:", 0, 0);
$pdf->Cell(50, 7, "{$contact}", 1, 1);
$pdf->Cell(50, 7, "AFFILATION NUMBER:", 0, 0);
$pdf->Cell(100, 7, "{$aflnum}", 1, 1);
$pdf->Cell(50, 7, "AFFILATION BOARD:", 0, 0);
$pdf->Cell(100, 7, "{$aflboard}", 1, 1);
$pdf->Cell(50, 7, "ISSUING DATE:", 0, 0);
$pdf->Cell(100, 7, "{$date}", 1, 1);
$pdf->Cell(50, 7, "REFRENCE NUMBER:", 0, 0);
$pdf->Cell(100, 7, "{$refnum}", 1, 1);
$pdf->Cell(50, 7, "ADMISSION NUMBER:", 0, 0);
$pdf->Cell(100, 7, "{$admnum}", 1, 1);
$pdf->Cell(50, 7, "NAME OF PUPIL:", 0, 0);
$pdf->Cell(100, 7, "{$pupil}", 1, 1);
$pdf->Cell(50, 7, "FATHER'S NAME:", 0, 0);
$pdf->Cell(100, 7, "{$fname}", 1, 1);
$pdf->Cell(50, 7, "Nationality:", 0, 0);
$pdf->Cell(100, 7, "{$nat}", 1, 1);
$pdf->Cell(50, 7, "BELONGS TO:", 0, 0);
$pdf->Cell(100, 7, "{$caste}", 1, 1);
$pdf->Cell(50, 7, "DATE OF ADMISSION:", 0, 0);
$pdf->Cell(100, 7, "{$doa}", 1, 1);
$pdf->Cell(50, 7, "DATE OF BIRTH:", 0, 0);
$pdf->Cell(100, 7, "{$dob}", 1, 1);
$pdf->Cell(50, 7, "RESULT STATUS:", 0, 0);
$pdf->Cell(100, 7, "{$result}", 1, 1);
$pdf->Cell(50, 7, "Promoted from class:", 0, 0);
$pdf->Cell(100, 7, "{$proclass}", 1, 1);
$pdf->Cell(50, 7, "Promoted to class:", 0, 0);
$pdf->Cell(100, 7, "{$protclass}", 1, 1);
$pdf->Cell(50, 7, "Reason:", 0, 0);
$pdf->SetFont("Arial", "I", "10");
$pdf->Cell(100, 7, "{$reason}", 1, 1);
$pdf->SetFont("Arial", "B", "12");
$pdf->Cell(50, 7, "Due fees if any:", 0, 0);
$pdf->Cell(100, 7, "{$due}", 1, 1);
$pdf->Cell(100, 7, "", 2, 1);
$pdf->SetDrawColor(0,0,0);
$pdf->Cell(60, 20, "", 1, 2, "C");
$pdf->Cell(50, 7, "Principal signature", 0, 0);
$pdf->Output();
?>
