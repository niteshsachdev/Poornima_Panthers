<?php

$servername="localhost";
$username="id5251823_nsn";
$password="poornimapanthers";
$dbname="id5251823_poornimapanthers";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Could Not Connect:".mysql_error());
}
 if (isset($_POST['submit'])) {
 
 $username = $_POST["email"]; 
 $password = $_POST["pws"];
 $sql="SELECT username FROM signup WHERE email='$username' and password='$password'"; 
 $result=mysqli_query($conn,$sql);
 $count=mysqli_num_rows($result);
 if ($count==1)
  {	
  				session_start();
  				$_SESSION['email'] = $username;
  				header("location:pplogin.php");
  }
}
else{
	header("location:index.php");
}


?>