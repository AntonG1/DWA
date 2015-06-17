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
				
				<a name="osobniPodaci"><h2>Unos proizvoda</h2></a>
			
						   <form name="unosProizvoda" action="unosProizvoda.php" method="POST">
			<br><p>Naziv proizvoda:  <input type="text" name="naziv"></p>
			<br><p>Tip proizvoda: <select name="tip">
							<option value="torta">Torta</option>
							<option value="keks">Keks</option>
							<option value="kolač">Kolač</option>
							<option value="čokolada">Čokolada</option>
							<option value="piće">Piće</option>
							<option value="ostalo">Ostalo</option>
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
			<br><p>Tipovi alergena: 
				<INPUT TYPE=CHECKBOX NAME="soja" value="soja, ">soja
				<INPUT TYPE=CHECKBOX NAME="jaja" value="jaja, ">jaja
				<INPUT TYPE=CHECKBOX NAME="kikiriki" value="kikiriki, ">kikiriki
				<INPUT TYPE=CHECKBOX NAME="mlijeko" value="mlijeko, ">mlijeko
				<INPUT TYPE=CHECKBOX NAME="rakovi" value="rakovi, ">rakovi
				<INPUT TYPE=CHECKBOX NAME="skoljke" value="školjke, ">školjke
				<INPUT TYPE=CHECKBOX NAME="orasasti" value="orašasti plodovi, ">orašasti plodovi
				<INPUT TYPE=CHECKBOX NAME="jagode" value="jagode, ">jagode
				<INPUT TYPE=CHECKBOX NAME="kivi" value="kivi, ">kivi
				<INPUT TYPE=CHECKBOX NAME="ananas" value="ananas  ">ananas<br>
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