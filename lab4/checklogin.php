<?php
 session_start();
$myusername=""; // Mysql username 
$mypassword=""; // Mysql password 



// Connect to server and select databse.
 mysql_connect("localhost", "root", "root")or die("cannot connect"); 
 mysql_select_db("dwalab")or die("cannot select DB");



// username and password sent from form 
 $myusername=$_POST['username']; 
 $mypassword=$_POST['password']; 
 $hashpassword = md5($mypassword);



// To protect MySQL injection (more detail about MySQL injection)
 $myusername = stripslashes($myusername);
 $hashpassword = stripslashes($hashpassword);
 $myusername = mysql_real_escape_string($myusername);
 $hashpassword = mysql_real_escape_string($hashpassword);

$sql="SELECT * FROM korisnici WHERE username='$myusername' and password='$hashpassword'";
 $result=mysql_query($sql);

 
// Mysql_num_row is counting table row
 $count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file
 $_SESSION['myusername']=$myusername;
 $_SESSION['mypassword']= $hashpassword;
 header("location:login.php");
 }
 else {
  header("location:login.html");
 }
 ?>