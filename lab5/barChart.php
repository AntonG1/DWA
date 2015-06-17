<html><head>
<meta charset="UTF-8" />
</head>
<body>
<?php 
	session_start();
   if(!isset($_SESSION['myusername']) ){
	header("location:login.html");
 }
    
				 $con = mysqli_connect('localhost','root','root','dwalab');
					 
					 if(! $con) {
						die ("Could not connect" . mysqli_error());
					 }
					 mysqli_set_charset($con, "utf8");
				     $upit=mysqli_query($con,"SELECT 'Tip proizvoda' FROM proizvodi");
					 $countK=mysqli_num_rows(mysqli_query($con, "SELECT * FROM proizvodi WHERE Tip_proizvoda = 'kolač'"));
					 $countT=mysqli_num_rows(mysqli_query($con, "SELECT * FROM proizvodi WHERE Tip_proizvoda = 'torta'"));
					 $countKk=mysqli_num_rows(mysqli_query($con, "SELECT * FROM proizvodi WHERE Tip_proizvoda = 'keks'"));
					 $countC=mysqli_num_rows(mysqli_query($con, "SELECT * FROM proizvodi WHERE Tip_proizvoda = 'čokolada'"));
					 $countP=mysqli_num_rows(mysqli_query($con, "SELECT * FROM proizvodi WHERE Tip_proizvoda = 'piće'"));
					 $countO=mysqli_num_rows(mysqli_query($con, "SELECT * FROM proizvodi WHERE Tip_proizvoda = 'ostalo'"));
					mysqli_close($con);
        // read the post data 
        $data = array($countK,$countT,$countKk, $countC,$countP,$countO);
        $x_fld = array('Kolači','Torte','Keksi','Čokolade','Pića','Ostalo'); 
        $max = 0; 
        for ($i=0;$i<6;$i++){ 
          if ($data[$i] > $max)$max=$data[$i];  // find the largest data 
        } 
        $im = imagecreate(600,255); // width , height px 

        $white = imagecolorallocate($im,255,255,255); // allocate some color from RGB components remeber Physics 
        $black = imagecolorallocate($im,0,0,0);   // 
        $red = imagecolorallocate($im,255,0,0);   // 
        $green = imagecolorallocate($im,0,255,0); // 
        $blue = imagecolorallocate($im,0,0,255);  // 
        // 
        // create background box 
        //imagerectangle($im, 1, 1, 319, 239, $black); 
        //draw X, Y Co-Ordinate 
        imageline($im, 10, 5, 10, 230, $blue ); 
        imageline($im, 10, 230, 400, 230, $blue ); 
        //Print X, Y 

        // what next draw the bars 
        $x = 15;    // bar x1 position 
        $y = 230;    // bar $y1 position 
        $x_width = 40;  // width of bars 
        $y_ht = 0; // height of bars, will be calculated later 
        // get into some meat now, cheese for vegetarians; 
        for ($i=0;$i<6;$i++){ 
          $y_ht = ($data[$i]/$max)* 100;    // no validation so check if $max = 0 later; 
          imagerectangle($im,$x,$y,$x+$x_width,($y-$y_ht),$red); 
          imagestring( $im,2,$x-1,$y+1,$x_fld[$i],$black); 
          imagestring( $im,2,$x-1,$y+10,$data[$i],$black); 
          $x += ($x_width+20);   // 20 is diff between two bars; 
          
        } 
        imagejpeg( $im, "graph.jpeg", 90); 
        imagedestroy($im); 
        echo "<img src='graph.jpeg'><p></p>"; 
  
?>
</body>
</html>