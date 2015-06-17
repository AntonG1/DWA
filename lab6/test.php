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
					<a href="pretraga.php">Pretraga inventara</a>
					</div>
			</div>
			
			<div class="col-xs-10 col-sm-10 col-md-10">
			
			<h2>Nađi proizvod ili proizvođača</h2>
			

					<form class="form-horizontal" action="test.php" method="GET" role="form">
					</br>
						
						 
				 <div class="form-group">
					  
						<label for="" class="col-sm-2 control-label">Proizvod</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="proizvod" id="prizvod">
						</div>
					  </div>
					  
					  
				 <div class="form-group">
					  
						<label for="" class="col-sm-2 control-label">Proizvođač</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="naziv" id="naziv">
						</div>
					  </div>

						<button type="submit" name="trazi" class="btn btn-default">Traži</button>
					  

				</form>
				
		
				</br>
			
			
			
<?php 


/*			
function dohvati_podatke($url)
{
  
	return $podaci;
}*/

if(isset($_GET['trazi']))
{

	$proizvod = $_GET['proizvod'];
    $naziv = $_GET['naziv'];

	if($proizvod==NULL && $naziv==NULL){
		echo '<h3 style="color:red">Unesite ime i prezime doktora!</h3>';
	}
	
	else {
		
	$url = "http://stipe.predanic.com/TVZ/podaci.php";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
	$timeout = 5;
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($curl, CURLOPT_HEADER, false);
	$podaci = curl_exec($curl);
	curl_close($curl);


$podaciDoktori = $podaci;

$jsonObject = json_decode($podaciDoktori, true);


$rezultat = array();

if(isset($_GET['proizvod']) && $naziv == NULL )
{

	echo '<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
			<tr> 
					
					<th style="width:90px">ID</th>
					<th style="width:160px">ID proizvođača</th>
					<th style="width:160px">Proizvod</th>
					<th style="width:85px">Cijena</th>
					<th style="width:160px">Stanje na skladištu</th>
					<th style="width:90px">Proizvođač</th>
				
				</tr>
				
				</table>';
				
    foreach($jsonObject as $item)
    {
        if(stristr($item['proizvod'], $proizvod) == TRUE)
        {
			
			echo '<div class="tablica">
				
				<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
					<tr >
					  <td style="width:80px">'.$item['id'].'</td> 
				
					  <td style="width:160px;">'.$item['id_proizvodjaca'].'</td>
				
					  <td style="width:160px;">'.$item['proizvod'].'</td>
				
					  <td style="width:90px;">'.$item['cijena'].'</td>
				
					  <td style="width:150px;">'.$item['stanje_na_skladistu'].'</td>
					  
					  <td style="width:80px">'.$item['naziv'].'</td> 

				
					</tr>
					
				 </table>
				 </div>';
			
        }
    }
}
elseif(isset($_GET['naziv']) && $proizvod== NULL)
{	
	
	echo '<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
			<tr> 
					
					<th style="width:90px">ID</th>
					<th style="width:160px">ID proizvođača</th>
					<th style="width:160px">Proizvod</th>
					<th style="width:85px">Cijena</th>
					<th style="width:160px">Stanje na skladištu</th>
					<th style="width:90px">Proizvođač</th>
				
				</tr>
				
				</table>';
    
    foreach($jsonObject as $item)
    {
        if(stristr($item['naziv'], $naziv) == TRUE)
        {
            echo '<div class="tablica">
				
				<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
					<tr >
					  <td style="width:80px">'.$item['id'].'</td> 
				
					  <td style="width:160px;">'.$item['id_proizvodjaca'].'</td>
				
					  <td style="width:160px;">'.$item['proizvod'].'</td>
				
					  <td style="width:90px;">'.$item['cijena'].'</td>
				
					  <td style="width:150px;">'.$item['stanje_na_skladistu'].'</td>
					  
					  <td style="width:80px">'.$item['naziv'].'</td>

				
					</tr>
					
				 </table>
				 </div>';
        }
    }
}
elseif(isset($_GET['proizvod']) && isset($_GET['naziv']))
{		
	
	echo '<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
			<tr> 
					
					<th style="width:90px">ID</th>
					<th style="width:160px">ID proizvođača</th>
					<th style="width:160px">Proizvod</th>
					<th style="width:85px">Cijena</th>
					<th style="width:160px">Stanje na skladištu</th>
					<th style="width:90px">Proizvođač</th>
				
				</tr>
				
				</table>';

    foreach($jsonObject as $item)
    {
        if(stristr($item['proizvod'], $proizvod) == TRUE && stristr($item['naziv'], $naziv) == TRUE)
        { 
           echo '<div class="tablica">
				
				<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
					<tr >
					  <td style="width:80px">'.$item['id'].'</td> 
				
					  <td style="width:160px;">'.$item['id_proizvodjaca'].'</td>
				
					  <td style="width:160px;">'.$item['proizvod'].'</td>
				
					  <td style="width:90px;">'.$item['cijena'].'</td>
				
					  <td style="width:150px;">'.$item['stanje_na_skladistu'].'</td>
					  
					  <td style="width:80px">'.$item['naziv'].'</td>

				
					</tr>
					
				 </table>
				 </div>';
        }
    }
}

}


}
	/*		
			$url = 'http://stajp.vtszg.hr/~spredanic/DWA2/lab5/podaci.php';
			//$json_string = '[podrucni_ured]';
			$ch = curl_init( $url );
			
			$array = array(

				CURLOPT_RETURNTRANSFER => true,
				//CURLOPT_USERPWD	=> $username . “:” . $password,  // authentication
				CURLOPT_HTTPHEADER => array('Content-type: application/json'), 
				//CURLOPT_POSTFIELDS => $json_string
				);
				
				curl_setopt_array( $ch, $array );
				
				$result = curl_exec($ch); // Getting jSON result string
			
			
				$arrjson = json_decode($result, true);
				// Testvar_dump($arrjson);
				// getting the value of a certain element
				$url = $arrjson['podrucni_ured'];
				echo '<br/>'. $url;
				// getting the value of an element with the 
				//name stored in variable
				$elm = 'podrucni_ured';
				$val = $arrjson[$elm];
				echo '<br/>'. $val;
				
				//echo $result;
				while($row = mysqli_fetch_array($result)) {
					
					echo $row['podrucni_ured'];
				
				}*/
			/*
						
		foreach ( $result )
{
			echo '{$result->podrucni_ured}\n';
}		
			*//*
			var t = JSON.parse($result)
			alert(t.podrucni_ured[0]);
				
			while($row = mysqli_fetch_array($result)) {
			
		  	echo '<div class="tablica">
				
				<table class="tablica"  border="1" cellspacing="0" cellpadding="0" >
					<tr >
					  <td style="width:60px">'.$row['ime'].'</td> 
				
					  <td style="width:70px;">'.$row['prezime'].'</td>
				
					  <td style="width:40px;">'.$row['spol'].'</td>
				
					  <td style="width:90px;">'.$row['datumRodjenja'].'</td>
				
					  <td style="width:110px;">'.$row['mobitel'].'</td>

					  <td style="width:200px; ">'.$row['adresa'].'</td>

					  <td style="width:60px;">'.$row['mjesto'].'</td>
					</tr>
					
				 </table>
				 </div>';
				 
		  }		
				
				mysqli_close($konekcija);
				*/
				?>
		
        		
		
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