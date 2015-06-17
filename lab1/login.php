<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  
  <title>Lab 1</title>

 
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
					
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
				
				<a name="osobniPodaci"><h2>Osobni podaci</h2></a>
			
			<p>Ime i prezime: Anton Galfi, </br>
			Grad: Subotica, </br>
			Datum rođenja: 04.10.1992.  </br></p>
			
			<a name="skolovanje"><h2>Podaci o školovanju</h2></a>
				
			<p>Osnovna škola: Osnovna škola Poreč, </br>
			Srednja škola: Opća gimnazija Mate Balote Poreč, < /br>
			Fakultet: Tehničko veleučilište u Zagrebu </br></p>
			
			<a name="radnoIskustvo"><h2>Podaci o radnom iskustvu</h2></a>
			
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
			pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
			qui officia deserunt mollit anim id est laborum.</p>
			
			<a name="znanja"><h2>Znanja i vještine</h2></a>
					
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					
		
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