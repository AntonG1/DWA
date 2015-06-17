<script>
var i = -1;
</script>
<!DOCTYPE html>
<html data-ng-app="">
<head>
  <meta charset="UTF-8" />
  
  <title>Lab 5</title>

  <!-- Učitavanje stilskih datoteka -->

 
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/grid.css" />
  <link rel="stylesheet" href="css/stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


  
</head>
<body onload="javascript:sljedeci()">
		
		<?php
				$i=0;
				session_start();
				if(!isset($_SESSION['user'])){
				 header("Location: login.html");
				}
				
	 ?>		  

		<div class="row pozadina header">
		  <div class="col-xs-10 col-sm-10 col-md-9 ">
				
				<img src="images/logo.png" height="60" width="160" alt="">
				
				
		  
		  </div>
		  <div class="col-xs-2 col-md-3 odjava">
				
				<?php
			//	error_reporting(0);
			//	$username=$_POST['username'];
				echo $_SESSION['user']; 
				
				?>
				
				</br>
			<form name="odjava" method="POST" action="odjava.php" >
				
				<button type="submit" name="odjava" class="btn btn-default btn-xs">Odjava</button>
			
			
			
			</form>
		  
		  </div>
		</div>
	
		<div class="row">
		<ol class="breadcrumb col-xs-12 col-sm-12 col-md-12">
			  
			  <li><a href="login.php">Home</a></li>
			  
			  <li class="active">IspisLAB5</li> 
		</ol>	
		
		</div>
	
		
		
		<div class="row pozadina-sadrzaj">
			  <div class="col-xs-2 col-md-2 ">
				<div class="linkovi">
						
						<a href="popis.php">Popis</a>
						</br>
						<a href="unos.php">Unos</a>
						</br>
						<a href="unosLAB4.php">UnosLAB4</a>
						</br>
						<a href="IspisLAB5.php">IspisLAB5</a>
						</br>
						<a href="pieChart.php">Chart M,Ž</a>
						</br>
						<a href="barChart.php">Chart Krv.G</a>
						</br>
						<a href="doktor.php">Doktor</a>
					
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
			
			<h2>Ispis unesenih pacijenata</h2>

				</br>
				<form class="form-horizontal" action="ispis.php" method="GET" role="form">
						<br><p>Pretraži po:<select name="odabir">
								<option value="Naziv_proizvoda">Naziv proizvoda</option>
								<option value="Opis_proizvoda">Opis proizvoda</option>
							</select><input type="text" name="text"><input type="submit" value="Traži" name="trazi"></p>
				</form>
				
				<?php
					
					if(isset($_GET['text'])){
					$text=$_GET['text'];
					$trazi=$_GET['odabir'];
					$con = mysqli_connect('localhost','root','root','dwalab');
					if(! $con )
					{
					  die('Could not connect: ' . mysql_error());
					}
					mysqli_set_charset($con, "utf8");
					//$upit=mysqli_query($con,"SELECT * FROM proizvodi WHERE $trazi = $text");
					
					$return_arr = array();

						$fetch = mysqli_query($con,"SELECT * FROM proizvodi WHERE $trazi LIKE '%$text%'"); 

						while ($row = mysqli_fetch_array($fetch)) {
							$row_array['Naziv_proizvoda'] = $row['Naziv_proizvoda'];
							$row_array['Tip_proizvoda'] = $row['Tip_proizvoda'];
						    $row_array['Opis_proizvoda'] = $row['Opis_proizvoda'];
							$row_array['Vegetarijanski'] = $row['Vegetarijanski'];
							$row_array['Halal'] = $row['Halal'];
							$row_array['Košer'] = $row['5'];
							$row_array['Alergeni'] = $row['Alergeni'];
							$row_array['Cijena'] = $row['Cijena'];

							array_push($return_arr,$row_array);
						}

					$encode = json_encode($return_arr);
					$count=mysqli_num_rows($fetch);
					mysqli_close($con);
					}

				?>
				
				
				Naziv: &nbsp <span id="Naziv_proizvoda"></span></br>
				Tip: &nbsp <span id="Tip_proizvoda"></span></br>
				Opis: &nbsp <span id="Opis_proizvoda"></span></br>
				Vegetarijanski: &nbsp <span id="Vegetarijanski"></span></br>
				Halal: &nbsp <span id="Halal"></span></br>
				Košer: &nbsp <span id="Košer"></span></br>
				Alergeni: &nbsp <span id="Alergeni"></span></br>
				Cijena: &nbsp <span id="Cijena"></span></br></br>
				
				
				<button onclick="javascript:prethodni()">Prethodni</button>
				<button onclick="javascript:sljedeci()">Sljedeći</button>
				

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
	
	$('#Naziv_proizvoda').html(jsArray[i].Naziv_proizvoda);
	$('#Tip_proizvoda').html(jsArray[i].Tip_proizvoda);
	$('#Opis_proizvoda').html(jsArray[i].Opis_proizvoda);
	$('#Vegetarijanski').html(jsArray[i].Vegetarijanski);
	$('#Halal').html(jsArray[i].Halal);
	$('#Košer').html(jsArray[i].Košer);
	$('#Alergeni').html(jsArray[i].Alergeni);
	$('#Cijena').html(jsArray[i].Cijena);
	}
	
}
</script>

<script type="text/javascript">
function sljedeci()
{	

	if(i==count){
			
	$('#Naziv_proizvoda').html(jsArray[i].Naziv_proizvoda);
	$('#Tip_proizvoda').html(jsArray[i].Tip_proizvoda);
	$('#Opis_proizvoda').html(jsArray[i].Opis_proizvoda);
	$('#Vegetarijanski').html(jsArray[i].Vegetarijanski);
	$('#Halal').html(jsArray[i].Halal);
	$('#Košer').html(jsArray[i].Košer);
	$('#Alergeni').html(jsArray[i].Alergeni);
	$('#Cijena').html(jsArray[i].Cijena);
			
		}
	
	else if (i>=-1 && i<count){

		++i;
	
	$('#Naziv_proizvoda').html(jsArray[i].Naziv_proizvoda);
	$('#Tip_proizvoda').html(jsArray[i].Tip_proizvoda);
	$('#Opis_proizvoda').html(jsArray[i].Opis_proizvoda);
	$('#Vegetarijanski').html(jsArray[i].Vegetarijanski);
	$('#Halal').html(jsArray[i].Halal);
	$('#Košer').html(jsArray[i].Košer);
	$('#Alergeni').html(jsArray[i].Alergeni);
	$('#Cijena').html(jsArray[i].Cijena);
			
		}
		
	
	
		
		
}
</script>