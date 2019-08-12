<?php
$conn=mysqli_connect("localhost","id5251823_nsn","poornimapanthers");
if(!$conn)
{
	die("Could Not Connect:".mysqli_error($conn));
}
mysqli_select_db($conn,"id5251823_poornimapanthers");
if (isset($_POST['submit']))
 { $tn=$_POST['tname'];
$tl=$_POST['tlname'];
$rg=$_POST['regid'];
$mob=$_POST['mobno'];
$em=$_POST['email'];
$yr=$_POST['year'];
$ev=$_POST['event'];
	$query="INSERT INTO joinoutside (teamname,tlname,registrationid,mobileno,emailid,year,Events) VALUES ('$tn','$tl','$rg','$mob','$em','$yr','$ev')";
if(!mysqli_query($conn,$query))
{
	die("Error In Inserting records:".mysqli_error($conn));
	
}
else 
header("location:pplogin.php");
}
else
{
	header("location: joincollege.html");
}
?>