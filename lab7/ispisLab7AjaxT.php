<script>
var i = -1;
</script>
<!DOCTYPE html>
<html data-ng-app="">
<head>
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
			
			<div class="col-xs-10 col-sm-10 col-md-10">
			
			<h2>Ispis unesenih proizvoda</h2>

				</br>
				
				<?php
				
					$con = mysqli_connect('localhost','root','root','dwalab');
					if(! $con )
					{
					  die('Could not connect: ' . mysql_error());
					}
					
					$upit=mysqli_query($con,"SELECT * FROM proizvodi ");
					mysqli_set_charset($con, "utf8");
					$return_arr = array();

						$fetch = mysqli_query($con,"SELECT * FROM proizvodi"); 

						while ($row = mysqli_fetch_array($fetch)) {
							$row_array['Naziv_proizvoda'] = $row['Naziv_proizvoda'];
							$row_array['Tip_proizvoda'] = $row['Tip_proizvoda'];
						    $row_array['Opis_proizvoda'] = $row['Opis_proizvoda'];
							$row_array['Vegetarijanski'] = $row['Vegetarijanski'];
							$row_array['Halal'] = $row['Halal'];
							$row_array['Koser'] = $row['5'];
							$row_array['Alergeni'] = $row['Alergeni'];
							$row_array['Cijena'] = $row['Cijena'];

							array_push($return_arr,$row_array);
						}

					
					$count=mysqli_num_rows($fetch);
					
	
				?>
				
				
				Naziv: &nbsp <span id="naziv"></span></br>
				Tip: &nbsp <span id="tip"></span></br>
				Opis: &nbsp <span id="opis"></span></br>
				Vegetarijanski: &nbsp <span id="veget"></span></br>
				Halal: &nbsp <span id="halal"></span></br>
				Košer: &nbsp <span id="koser"></span></br>
				Alergeni: &nbsp <span id="alerg"></span></br>
				Cijena: &nbsp <span id="cijena"></span></br>
				
				
				<button onclick="javascript:prethodni()">Prethodni</button>
				<button onclick="javascript:sljedeci()">Sljedeći</button>
				

		  </div>
			</div>
			

  <footer class="footer row">
    <nav class="footer-navigation">
      
    </nav>
	</br>
    <p>Copyright &copy; ZKD, 2014</p>
	</br>
  </footer>
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/angular.min.js"></script>
  
</body>
</html>

<script>
var jsArray = new Array();
     jsArray= <?php echo json_encode($return_arr, JSON_FORCE_OBJECT); ?>;
var count = <?php echo json_encode($count);?>;	 

</script>


<script type="text/javascript">
function prethodni()
{	
	
	if(i==count){
			
		   --i;
			
		}

	else if(i>0 && i<count){
	--i;
	
	$('#naziv').html(jsArray[i].Naziv_proizvoda);
	$('#tip').html(jsArray[i].Tip_proizvoda);
	$('#opis').html(jsArray[i].Opis_proizvoda);
	$('#veget').html(jsArray[i].Vegetarijanski);
	$('#halal').html(jsArray[i].Halal);
	$('#koser').html(jsArray[i].Koser);
	$('#alerg').html(jsArray[i].Alergeni);
	$('#cijena').html(jsArray[i].Cijena);
	}
	
}
</script>

<script type="text/javascript">
function sljedeci()
{	

	if(i==count){
			
	$('#naziv').html(jsArray[i].Naziv_proizvoda);
	$('#tip').html(jsArray[i].Tip_proizvoda);
	$('#opis').html(jsArray[i].Opis_proizvoda);
	$('#veget').html(jsArray[i].Vegetarijanski);
	$('#halal').html(jsArray[i].Halal);
	$('#koser').html(jsArray[i].Koser);
	$('#alerg').html(jsArray[i].Alergeni);
	$('#cijena').html(jsArray[i].Cijena);
			
		}
	
	else if (i>=-1 && i<count){

		++i;
	
	$('#naziv').html(jsArray[i].Naziv_proizvoda);
	$('#tip').html(jsArray[i].Tip_proizvoda);
	$('#opis').html(jsArray[i].Opis_proizvoda);
	$('#veget').html(jsArray[i].Vegetarijanski);
	$('#halal').html(jsArray[i].Halal);
	$('#koser').html(jsArray[i].Koser);
	$('#alerg').html(jsArray[i].Alergeni);
	$('#cijena').html(jsArray[i].Cijena);
			
		}

}
</script>