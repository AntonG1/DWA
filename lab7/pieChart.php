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
					 $total=mysqli_num_rows($upit);
					 $p1= $countK/$total*360;
					 $p2= $countT/$total*360;
					 $p3= $countKk/$total*360;
					 $p4= $countC/$total*360;
					 $p5= $countP/$total*360;
					 $p6= $countO/$total*360;
					 mysqli_close($con);
					 
					 
    // Create an image
    $image = imagecreate(500, 500);
 
    // Allocate some colors
    $white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
    $gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
    $darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
    $navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
    $darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
    $red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
    $darkred  = imagecolorallocate($image, 0x90, 0x00, 0x00);
	$black = imagecolorallocate($image, 000, 000, 000);
	

    imagefilledarc($image, 250, 250, 400, 400,  0,  $p1, $navy, IMG_ARC_PIE);
    imagefilledarc($image, 250, 250, 400, 400, $p1, $p1+$p2, $gray, IMG_ARC_PIE);
    imagefilledarc($image, 250, 250, 400, 400, $p1+$p2, $p1+$p2+$p3, $red,  IMG_ARC_PIE);
	imagefilledarc($image, 250, 250, 400, 400, $p1+$p2+$p3, $p1+$p2+$p3+$p4, $darknavy,  IMG_ARC_PIE);
	imagefilledarc($image, 250, 250, 400, 400, $p1+$p2+$p3+$p4, $p1+$p2+$p3+$p4+$p5, $darkgray,  IMG_ARC_PIE);
	imagefilledarc($image, 250, 250, 400, 400, $p1+$p2+$p3+$p4+$p5, 360, $darkred,  IMG_ARC_PIE);
	
 
    // Flush the image
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
?>
