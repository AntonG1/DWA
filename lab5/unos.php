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
					<a href="unosTipAlergen.php">Unos tip i alergen</a></br>
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
				
				<a name="osobniPodaci"><h2>Unos proizvoda</h2></a>
			
						   <form name="unosProizvoda" action="unosProizvoda.php" method="POST">
			<br><p>Naziv proizvoda:  <input type="text" name="naziv"></p>
			<br><p>Tip proizvoda: <select name="tip">
							<?php 
								$con=mysqli_connect('localhost','root','root','dwalab') or die('Error connecting to MySQL server.');;		
								mysqli_set_charset($con, "utf8");
								$upit = "SELECT * FROM unostip";
								$result = mysqli_query($con, $upit);
									while($row = mysqli_fetch_assoc($result)) {
									$tip=$row['tip'];
									echo '(<option value='.$tip.'>'.$tip.'</option>)';
									}
									mysqli_close($con);
							?>
							</select></p>
			<br><p>Opis proizvoda:  <input type="text" name="opis"></p>
			<br><p>Vegeterijanski: <select name="vegeterijanski">
							<option value="DA">DA</option>
							<option value="NE">NE</option>
							</select></p>
			<br><p>Halal: <select name="halal">
							<option value="DA">DA</option>
							<option value="NE">NE</option>
							</select></p>
			<br><p>Košer: <select name="koser">
							<option value="DA">DA</option>
							<option value="NE">NE</option>
							</select></p>

				<br><p>Tipovi alergena<br>
							<?php 
								$con=mysqli_connect('localhost','root','root','dwalab') or die('Error connecting to MySQL server.');;		
								mysqli_set_charset($con, "utf8");
								$upit = "SELECT * FROM unosalergen";
								$result = mysqli_query($con, $upit);
									while($row = mysqli_fetch_assoc($result)) {
									$alergen=$row['alergen'];
									$alergenV = $alergen . ', ';
									echo '<INPUT TYPE=CHECKBOX NAME='.$alergen.' value='.$alergenV.'>'.$alergen.'';
									}
									mysqli_close($con);
							?>
							</p>
			<br><p>Cijena:  <input type="text" name="cijena"></p>
			<input type="submit" value="Potvrdi">
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