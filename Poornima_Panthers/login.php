<?php
   if(isset($_POST['sb']))
   {
	if(empty($_POST['username']) || empty($_POST['password']))
	{
	  $error="blank data";	
	}
	else
	{
		$servername="localhost";
$username="id5251823_nsn";
$password="poornimapanthers";
$dbname="id5251823_poornimapanthers";
$conn=mysqli_connect($servername,$username,$password,$dbname);	
$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from admin where Username='$username' and Password='$password'";
	$ck=mysqli_query($conn,$query);
	$rw=mysqli_num_rows($ck);
	/*echo $rw;
	die();*/
	if($rw>0)
	{
	session_start();
	$_SESSION['username']=$username;
	header('location:choice.html');
	}
	else
	{
	$error="invalid data";	
	}
	
	mysqli_close($conn);
	
	}
	   
   }


?>