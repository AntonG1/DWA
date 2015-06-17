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

				  
				<div class="col-md-12" id="rekl" style="background-color: blue; height:50px; z-index: 1; margin-left: 40%;  width: 400px; position: absolute;">
		<button type="button" name="reklama" onClick="sakrijReklamu('rekl')" style="margin-left: 120px">Sakrij reklamu</button>
	</div>
		<div class="row pozadina header">
		  <div class="col-xs-10 col-sm-10 col-md-9 ">
				
				<img src="images/logo.jpg" height="60" width="160" alt="">
				
					<a href="#osobniPodaci">Osobni podaci,</a>
					<a href="#skolovanje">Školovanje,</a>
					<a href="#radnoIskustvo">Radno iskustvo,</a>
					<a href="#znanja">Znanja</a>
				
				
		  
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
					<a href="izradipdf.php">Izradi PDF</a></br>
					<a href="barchart.php">Bar chart</a></br>
					<a href="piechart.php">Pie chart</a></br>
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
				
			<a name="osobniPodaci" href="javascript:showOrHide('showOrHideDiv')"><h2>Osobni podaci</h2></a>
			
			<div id="showOrHideDiv" style="display: none"><p>Ime i prezime: Anton Galfi, </br>
			Grad: Subotica, </br>
			Datum rođenja: 04.10.1992.  </br></p></div>
			
			<a name="skolovanje" href="javascript:showOrHide('showOrHideDiv1')"><h2>Podaci o školovanju</h2></a>
				
			<div id="showOrHideDiv1" style="display: none"><p>Osnovna škola: Osnovna škola Poreč, </br>
			Srednja škola: Opća gimnazija Mate Balote Poreč, < /br>
			Fakultet: Tehničko veleučilište u Zagrebu </br></p></div>
			
			<a name="radnoIskustvo" href="javascript:showOrHide('showOrHideDiv2')"><h2>Podaci o radnom iskustvu</h2></a>
			
			
			<div id="showOrHideDiv2" style="display: none"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
			nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
			reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
			pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
			qui officia deserunt mollit anim id est laborum.</p></div>
			
			<a name="znanja" href="javascript:showOrHide('showOrHideDiv3')"><h2>Znanja i vještine</h2></a>
					
			<div id="showOrHideDiv3" style="display: none"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
					
		
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
  
  		<script language="javascript">
    function showOrHide(ime) 
    {
        var div = document.getElementById(ime);
        if (div.style.display == "block") 
        {
            div.style.display = "none";
        }
        else 
        {
            div.style.display = "block";
        }
    } 
	</script>
	
	<script>	function sakrijReklamu(reklamaID){
		var div = document.getElementById(reklamaID);
		div.style.zIndex = "-9999";
	}</script>
  
</body>
</html>