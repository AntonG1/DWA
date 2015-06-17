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
<body onload="tableSearch.init();">
		
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
			</br>
			<input type="text" size="30" value="" placeholder="Traži" id="textBoxSearch" onkeydown="tableSearch.search(event);" />
			<input type="button" value="Traži" onclick="tableSearch.runSearch();" />
				
			<?php 
						
				$con=mysqli_connect('localhost','root','root','dwalab');
						
				mysqli_set_charset($con, "utf8");
						 
				$result = mysqli_query($con,"SELECT * FROM proizvodi");


				$table = '
					<div class="tablica">
				
				<table class="table"  border="1" cellspacing="0" cellpadding="0" >
					<thead>
					<tr>
					<th>Naziv</th>
					<th>Tip</th>
					<th>Opis</th>
					<th>Vegeterijanski</th>
					<th>Halal</th>
					<th>Košer</th>
					<th>Alergeni</th>
					<th>Cijena</th>
					</tr>
					</thead>
					<tbody id="data">';
					while ($row = mysqli_fetch_array($result)) {
					$table .= '<tr>
					<td>'.$row['Naziv_proizvoda'].'</td>
					<td>'.$row['Tip_proizvoda'].'</td>
					<td>'.$row['Opis_proizvoda'].'</td>
					<td>'.$row['Vegetarijanski'].'</td>
					<td>'.$row['Halal'].'</td>
					<td>'.$row['Košer'].'</td>
					<td>'.$row['Alergeni'].'</td>
					<td>'.$row['Cijena'].'</td>
					</tr>';
					}
				$table .= '</tbody></table></div>';
				echo $table;
				
				mysqli_close($con);
				
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
  
  <script language="javascript" type="text/javascript">
        //define the table search as an object, which can implement both functions and properties
        window.tableSearch = {};

        //initialize the search, setup the current object
        tableSearch.init = function() {
            //define the properties I want on the tableSearch object
            this.Rows = document.getElementById('data').getElementsByTagName('TR');
            this.RowsLength = tableSearch.Rows.length;
            this.RowsText = [];
            
            //loop through the table and add the data to
            for (var i = 0; i < tableSearch.RowsLength; i++) {
                this.RowsText[i] = (tableSearch.Rows[i].innerText) ? tableSearch.Rows[i].innerText.toUpperCase() : tableSearch.Rows[i].textContent.toUpperCase();
            }
        }

        //onlys shows the relevant rows as determined by the search string
        tableSearch.runSearch = function() {
            //get the search term
            this.Term = document.getElementById('textBoxSearch').value.toUpperCase();
            
            //loop through the rows and hide rows that do not match the search query
            for (var i = 0, row; row = this.Rows[i], rowText = this.RowsText[i]; i++) {
                row.style.display = ((rowText.indexOf(this.Term) != -1) || this.Term === '') ? '' : 'none';
            }
        }
		

						
		/*$("input").keydown(function(event){
			tableSearch.runSearch();
		});*/
		
		
        //runs the search
        tableSearch.search = function(e) {
            //checks if the user pressed the enter key, and if they did then run the search
            var keycode;
            if (window.event) { keycode = window.event.keyCode; }
            else if (e) { keycode = e.which; }
            else { return false; }
            if (keycode == 13) {
                tableSearch.runSearch();


            }
            else { return false; }
        }
    </script>
  
</body>
</html>