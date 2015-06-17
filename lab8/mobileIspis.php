<!DOCTYPE html> 
<html> 
<head> 
	<title>Lab 8</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Lab 8</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p><h3>Uneseni podaci:</h3></p>		
			
			
		<?php
					
					error_reporting(0);
					
				$naziv = $_POST['naziv'];
				$tip = $_POST['tip'];
				$opis = $_POST['opis'];
				$vegeterijanski = $_POST['vegeterijanski'];
				$halal = $_POST['halal'];
				$koser = $_POST['koser'];
				$alergeni = $_POST['soja'].$_POST['jaja'].$_POST['kikiriki'].$_POST['mlijeko'].$_POST['rakovi'].$_POST['skoljke'].$_POST['orasasti'].$_POST['jagode'].$_POST['kivi'].$_POST['ananas'];
				$cijena = $_POST['cijena'];
				$alergeni = substr($alergeni,0,-1);
					
					/*
					if($mjesec<
					
					if($dan<1 && $dan>31
					*/
					

					
				//	$upit=$_POST['upit'];
					
					echo "Unešeni su sljedeći podatci<br> ";
					echo "Naziv proizvoda: $naziv<br>";
					echo "Tip proizvoda: $tip<br>";
					echo "Opis proizvoda: $opis<br>";
					echo "Vegetarijanski: $vegeterijanski<br>";
					echo "Halal: $halal<br>";
					echo "Košer: $koser<br>";
					echo "Alergeni: $alergeni<br>";
					echo "Cijena: $cijena<br>";
					

					
					//spajanje na bazu
					
					$con=mysqli_connect('localhost','root','root','dwalab') or die('Error connecting to MySQL server.');;		
					mysqli_set_charset($con, "utf8");
					$upit = "INSERT INTO proizvodi VALUES ('$naziv', '$tip', '$opis', '$vegeterijanski', '$halal', '$koser', '$alergeni', '$cijena')";
					$result = mysqli_query($con, $upit);
				

					
					mysqli_close($con);  
					
					
					
					
					?>
	
		<form action="login.php" >
			<div data-role="fieldcontain">
				<input type="submit" value="HOME" />
			</div>
		</form>
		
	
	</div><!-- /content -->
	
	




</div><!-- /page -->

</body>
</html>