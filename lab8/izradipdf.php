<!DOCTYPE html>
 <?php
	session_start();
   if(!isset($_SESSION['myusername']) ){
	header("location:login.html");
 }
 ?>
<html>
<head>
  <meta charset="UTF-8" />
  
  <title>Lab 4</title>

 
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>
		<div class="row pozadina header">
		  <div class="col-xs-10 col-sm-10 col-md-9 ">
				
				<img src="images/logo.jpg" height="60" width="160" alt="">
		  </div>
		  <div class="col-xs-2 col-md-3 odjava">
			<form name="odjava" action="logout.php">
				<?php
				error_reporting(0);
				$username=$_SESSION['myusername'];
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
					<a href="unosTipAlergen.php">Unos tip i alergen</a></br>
					<a href="izradipdf.php">Izradi PDF</a>
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
			
			<form class="form-horizontal" action="pdf.php" method="POST" >
				
				<br><p>Upišite naziv proizvoda: <input type="text" name="pojam"> 
				<select name="col">
						<option value='Naziv_proizvoda'>Naziv proizvoda</option>
						<option value='Tip proizvoda'>Tip proizvoda</option>
						<option value='Opis proizvoda'>Opis proizvoda</option>
						<option value='Vegetarijanski'>Vegetarijanski</option>
						<option value='Halal'>Halal</option>
						<option value='Košer'>Košer</option>
						<option value='Alergeni'>Alergeni</option>
						<option value='Cijena'>Cijena</option>
				</select> <p>
				<input type="submit" value="Traži">
			</form>
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