<?php
require 'configuration.php';
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
$sql="select * from 'joincollege';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo"
	}
	
}
else
{
	echo "You Have Not Participated In Any Event";
}
mysqli_close($conn);
?>