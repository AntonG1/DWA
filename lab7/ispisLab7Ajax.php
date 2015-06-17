<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","test.php?q="+str);
        xmlhttp.send();
    }
}
</script>
 <meta charset="UTF-8" />
  
  <title>Lab 7</title>

  <!-- Učitavanje stilskih datoteka -->

 
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
				$i=0;
				session_start();
				if(!isset($_SESSION['myusername'])){
				 header("Location: login.html");
				}
				
	 ?>		  

		<div class="row pozadina header">
		  <div class="col-xs-10 col-sm-10 col-md-9 ">
				
				<img src="images/logo.jpg" height="60" width="160" alt="">
				
				
		  
		  </div>
		  <div class="col-xs-2 col-md-3 odjava">
				
				<?php
				echo $_SESSION['myusername']; 
				
				?>
				
				</br>
			<form name="odjava" method="POST" action="odjava.php" >
				
				<button type="submit" name="odjava" class="btn btn-default btn-xs">Odjava</button>
			
			
			
			</form>
		  
		  </div>
		</div>		
		
		<div class="row pozadina-sadrzaj">
			  <div class="col-xs-2 col-md-2 ">
				<div class="linkovi">
						
					<a href="login.php">Home</a></br>
					<a href="popis.php">Popis</a></br>
					<a href="unos.php">Unos</a></br>
					<a href="unosTipAlergen.php">Unos tip i alergen</a></br>
					<a href="izradipdf.php">Izradi PDF</a></br>
					<a href="barchart.php">Bar chart</a></br>
					<a href="piechart.php">Pie chart</a></br>
					<a href="pretraga.php">Pretraga inventara</a></br>
					<a href="unosL6.php">Unos L6</a></br>
					<a href="ispisLab7Ajax.php">Ispis L7</a></br>
					
					</div>
			</div>

<form>
 <br><p>Naziv proizvoda:  <input type="text" name="naziv" onclick="showUser(naziv)"></p>
</form>
<br>
<div id="txtHint"><b>Podatci</b></div>
</body>
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
  <script src="js/angular.min.js"></script>
  

</html>