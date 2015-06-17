<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  
  <title>Lab 2</title>

 
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>
		
		<?php
					
					 if(isset($_POST['login'])){
						
					 $user='anton';
					 $pass='pass';
					 
					 $id=$_POST['username'];
					 $pwd=$_POST['password'];
					
					if($pass!=$pwd or $user!=$id){
						header("Location: login.html");
					  
				  }
				  }
				  
				  ?>
				  

		<div class="row pozadina header">
		  <div class="col-xs-10 col-sm-10 col-md-9 ">
				
				<img src="images/logo.jpg" height="60" width="160" alt="">
				
					<a href="#osobniPodaci">Osobni podaci,</a>
					<a href="#skolovanje">Školovanje,</a>
					<a href="#radnoIskustvo">Radno iskustvo,</a>
					<a href="#znanja">Znanja</a>
				
				
		  
		  </div>
		  <div class="col-xs-2 col-md-3 odjava">
			<form name="odjava" action="login.html">
				<?php
				error_reporting(0);
				$username=$_POST['username'];
				echo $username; 
				?>
				<button type="submit" class="btn btn-default btn-xs">Odjava</button>
			</form>
		  
		  </div>
		</div>
	
		<div class="row">
		
		</div>
		
		<div class="row pozadina-sadrzaj">
			  <div class="col-xs-2 col-md-2 ">
				<div class="linkovi">
				</br>
					<a href="login.php">Home</a></br>
					<a href="popis.php">Popis</a></br>
					<a href="unos.php">Unos</a></br>
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
				
		
			
			<?php
				$naziv = $_POST['naziv'];
				$tip = $_POST['tip'];
				$opis = $_POST['opis'];
				$vegeterijanski = $_POST['vegeterijanski'];
				$halal = $_POST['halal'];
				$koser = $_POST['koser'];
				$alergeni = $_POST['soja'].$_POST['jaja'].$_POST['kikiriki'].$_POST['mlijeko'].$_POST['rakovi'].$_POST['skoljke'].$_POST['orasasti'].$_POST['jagode'].$_POST['kivi'].$_POST['ananas'];
				$cijena = $_POST['cijena'];
				$alergeni = substr($alergeni,0,-2);
				$con=mysqli_connect('localhost','root','root','dwalab') or die('Error connecting to MySQL server.');;		
				mysqli_set_charset($con, "utf8");
				$upit = "INSERT INTO proizvodi VALUES ('$naziv', '$tip', '$opis', '$vegeterijanski', '$halal', '$koser', '$alergeni', '$cijena')";
				$result = mysqli_query($con, $upit);
				
				if($result){
					echo "Unešeni su sljedeći podatci<br> ";
					echo "Naziv proizvoda: $naziv<br>";
					echo "Tip proizvoda: $tip<br>";
					echo "Opis proizvoda: $opis<br>";
					echo "Vegetarijanski: $vegeterijanski<br>";
					echo "Halal: $halal<br>";
					echo "Košer: $koser<br>";
					echo "Alergeni: $alergeni<br>";
					echo "Cijena: $cijena<br>";
				}

				else {
				echo "ERROR";
				die('Could not connect: ' . mysql_error());
				}

				mysqli_close($con);
			?>
		
		  </div>
			</div>
			

  <footer class="footer row">
    <nav class="footer-navigation">
      
    </nav>
	</br>
    <p>Copyright &copy; ZKD, 2015</p>
	</br>
  </footer>
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</body>
</html>