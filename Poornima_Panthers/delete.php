<?php
  $servername="localhost";
$username="id5251823_nsn";
$password="poornimapanthers";
$dbname="id5251823_poornimapanthers";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if($_REQUEST['sn'])
  {
	$sn=$_GET['sn'];
	$query=mysqli_query($cn,"delete from joincollege where sn='$sn'");
	header('location:admin.php');
  }

?>