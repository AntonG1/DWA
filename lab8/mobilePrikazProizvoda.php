<script>
var i = -1;
var a = -1;
</script>

<!DOCTYPE html> 
<html> 
<head> 
	<title>Lab 8</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Lab 8</h1>
	</div><!-- /header -->
	
				<?php
					$con = mysqli_connect('localhost','root','root','dwalab');
					if(! $con )
					{
					  die('Could not connect: ' . mysql_error());
					}
					mysqli_set_charset($con, "utf8");
					
					$return_arr = array();

						$fetch = mysqli_query($con,"SELECT * FROM proizvodi"); 

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

					$count=mysqli_num_rows($fetch);
					mysqli_close($con);
					

				?>

	<div data-role="content">	
		<p><h3>Ispis unesenih proizvoda</h3></p>		
	
	<div id="ispis">
					  <p>Naziv proizvoda:</p>
					  <p>Tip proizvoda:</p>
					  <p>Opis proizvoda:</p>
			   </div>
		<div id="ispis1"><p>Vegetarijanski</p> </div>
		<div id="ispis2"> <p>Halal</p></div>
		<div id="ispis3"><p>Košer</p></div>
		<div id="ispis4"><p>Alergeni</p></div>
		<div id="ispis5"><p>Cijena</p></div>
			   
			   </br>
			
	<div data-role="footer" data-position="fixed">
		<input type="submit" class="button60" id="prethodni" value="prethodni" />
		<input type="submit" class="button60" id="sljedeci" value="sljedeci" />
	</div>
		
	
	</div><!-- /content -->


</div><!-- /page -->
	
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

<script>
   $(document).ready(function() {
	
      $("#prethodni").click(function(event){

		if(a==count){
				--a;	
				}
		
		else if(a>0 && a<count){
				--a;
	
           jsArray= <?php echo json_encode($return_arr, JSON_FORCE_OBJECT); ?>;
             $('#ispis').html('<p> Naziv proizvoda: ' + jsArray[a].Naziv_proizvoda + '</p>');
             $('#ispis').append('<p>Top proizvoda: ' + jsArray[a].Tip_proizvoda +'</p>');
             $('#ispis').append('<p>Opis proizvoda: ' + jsArray[a].Opis_proizvoda  +'</p>');
			 $('#ispis1').html('<p>Vegetarijanski: ' + jsArray[a].Vegetarijanski + '</p>');
			 $('#ispis2').html('<p>Halal: ' + jsArray[a].Halal + '</p>');
			 $('#ispis3').html('<p>Košer: ' + jsArray[a].Košer + '</p>');
			 $('#ispis4').html('<p>Alergeni: ' + jsArray[a].Alergeni + '</p>');
			 $('#ispis5').html('<p>Cijena: ' + jsArray[a].Cijena + '</p>');
			}
		  
      });
	  
	   $("#sljedeci").click(function(event){
	   
		if(a==count){

             $('#ispis').html('<p> Naziv proizvoda: ' + jsArray[a].Naziv_proizvoda + '</p>');
             $('#ispis').append('<p>Top proizvoda: ' + jsArray[a].Tip_proizvoda +'</p>');
             $('#ispis').append('<p>Opis proizvoda: ' + jsArray[a].Opis_proizvoda  +'</p>');
			 $('#ispis1').html('<p>Vegetarijanski: ' + jsArray[a].Vegetarijanski + '</p>');
			 $('#ispis2').html('<p>Halal: ' + jsArray[a].Halal + '</p>');
			 $('#ispis3').html('<p>Košer: ' + jsArray[a].Košer + '</p>');
			 $('#ispis4').html('<p>Alergeni: ' + jsArray[a].Alergeni + '</p>');
			 $('#ispis5').html('<p>Cijena: ' + jsArray[a].Cijena + '</p>');
		}
		
		else if (a>=-1 && a<count){

		++a;
	
             $('#ispis').html('<p> Naziv proizvoda: ' + jsArray[a].Naziv_proizvoda + '</p>');
             $('#ispis').append('<p>Top proizvoda: ' + jsArray[a].Tip_proizvoda +'</p>');
             $('#ispis').append('<p>Opis proizvoda: ' + jsArray[a].Opis_proizvoda  +'</p>');
			 $('#ispis1').html('<p>Vegetarijanski: ' + jsArray[a].Vegetarijanski + '</p>');
			 $('#ispis2').html('<p>Halal: ' + jsArray[a].Halal + '</p>');
			 $('#ispis3').html('<p>Košer: ' + jsArray[a].Košer + '</p>');
			 $('#ispis4').html('<p>Alergeni: ' + jsArray[a].Alergeni + '</p>');
			 $('#ispis5').html('<p>Cijena: ' + jsArray[a].Cijena + '</p>');
			
		}
         
      });
   });
   </script>