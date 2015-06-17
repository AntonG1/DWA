<!DOCTYPE html> 
<html> 
<head> 
	<title>Lab 8</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="css/mobileMoj.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Lab 8</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p><h3>Unos proizvoda</h3></p>		
			
			
		<form action="mobileIspis.php" method="post">
		
			<div data-role="fieldcontain">
				<p>Naziv proizvoda:<label for="naziv"></label></p>
				<input type="text" name="naziv" id="naziv" placeholder="Naziv proizvoda"  />
			</div>
			
			<div data-role="fieldcontain">
				<p><label for="tip">Opis proizvoda:</label></p>
				<input type="text" name="opis" id="opis" placeholder="Opis proizvoda" />
			</div>
			
			<div data-role="fieldcontain">
				<p>Tip proizvoda: <select name="tip">
							<option value="torta">Torta</option>
							<option value="keks">Keks</option>
							<option value="kolač">Kolač</option>
							<option value="čokolada">Čokolada</option>
							<option value="piće">Piće</option>
							<option value="ostalo">Ostalo</option>
							</select></p>
			</div>
			<div data-role="fieldcontain">
			<br><p>Vegeterijanski: <select name="vegeterijanski">
							<option value="DA">DA</option>
							<option value="NE">NE</option>
							</select></p></div>
			<div data-role="fieldcontain">
			<br><p>Halal: <select name="halal">
							<option value="DA">DA</option>
							<option value="NE">NE</option>
							</select></p>
			</div>
			<div data-role="fieldcontain">
			<br><p>Košer: <select name="koser">
							<option value="DA">DA</option>
							<option value="NE">NE</option>
							</select></p>
			</div>

			

			<div data-role="fieldcontain">
				<p><label for="adresa">Cijena:</label></p>
				<input type="text" name="cijena" id="cijena" placeholder="Cijena" />
			</div>
			<div data-role="fieldcontain">
			Tipovi alergena: 
				<p><INPUT TYPE=CHECKBOX NAME="soja" value="soja,"> soja
				<INPUT TYPE=CHECKBOX NAME="jaja" value="jaja,">jaja
				<INPUT TYPE=CHECKBOX NAME="kikiriki" value="kikiriki,">kikiriki
				<INPUT TYPE=CHECKBOX NAME="mlijeko" value="mlijeko,">mlijeko
				<INPUT TYPE=CHECKBOX NAME="rakovi" value="rakovi,">rakovi
				<INPUT TYPE=CHECKBOX NAME="skoljke" value="školjke,">školjke
				<INPUT TYPE=CHECKBOX NAME="orasasti" value="orašasti plodovi,">orašasti plodovi
				<INPUT TYPE=CHECKBOX NAME="jagode" value="jagode,">jagode
				<INPUT TYPE=CHECKBOX NAME="kivi" value="kivi,">kivi
				<INPUT TYPE=CHECKBOX NAME="ananas" value="ananas,">ananas</p><br>
			</div>
			
			
			</br>
			</br>
			
			<div data-role="fieldcontain">
				<input type="submit" value="Unesi" />
			</div>
			
			</br>
			</br>
			
		</form>
	
	</div><!-- /content -->
	
	




</div><!-- /page -->

</body>
</html>