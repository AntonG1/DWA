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
				
				<h2>Unos tipova i alergena</h2>
			
			   <form name="unosTip" action="unosTip.php" method="POST">
					<br><p>Dodaj tip:  <input type="text" name="tip"></p>
				<input type="submit" value="Potvrdi">
				</form>
				
				<form name="unosAlergen" action="unosAlergen.php" method="POST">
					<br><p>Dodaj alergen:  <input type="text" name="alergen"></p>
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