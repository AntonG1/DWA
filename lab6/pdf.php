
<?php
require('mc_table.php');

$string = $_POST['pojam'];
$colm = $_POST['col'];

$pdf=new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','b',11);
$pdf->SetWidths(array(25, 22, 50, 16, 15, 15, 40, 15));
$con=mysqli_connect('localhost','root','root','dwalab');
mysqli_set_charset($con, 'utf8');
$result = mysqli_query($con,"SELECT * FROM proizvodi WHERE $colm LIKE '%$string%'");
$pdf->Row(array("Naziv proizvoda", "Tip proizvoda", "Opis proizvoda", "Vegetarijanski", "Halal", "Košer", "Alergeni", "Cijena"));
$pdf->SetFont('Arial','',11);
while ($row = mysqli_fetch_array($result)) {
$pdf->Row(array($row['Naziv_proizvoda'], $row['Tip_proizvoda'], $row['Opis_proizvoda'], $row['Vegetarijanski'], $row['Halal'], $row['Košer'], $row['Alergeni'], $row['Cijena']));
}


$pdf->Output();


?>


