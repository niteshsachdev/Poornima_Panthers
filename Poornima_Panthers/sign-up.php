<?php

$conn=mysqli_connect("localhost","id5251823_nsn","poornimapanthers");
if(!$conn)
{
	die("Could Not Connect:".mysqli_error($conn));
}
mysqli_select_db($conn,"id5251823_poornimapanthers");
if (isset($_POST['submit']))
 {
     
 	        $name=$_POST["name"];
            $mobileno=$_POST["mobile"];
            $emailid=$_POST["email"];
            $pass=$_POST["psw"];
            $repass=$_POST["psw-repeat"];
		$query="INSERT INTO signup (username,mobile,email,password) VALUES ('$name','$mobileno','$emailid','$pass')";
		$result =mysqli_query($conn,$query);
			if(!$result)
			{
				die("Error In Inserting records:".mysqli_error($conn));
			}
			else
			{  
				header("location:index.php");
			}
}
else
{
	header("location:index.php");
}
?>
