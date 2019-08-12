<?php
	if (isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['message'];
        $sub = $_POST['subject'];
        
		$to ='2016pietcenarendra067@poornima.org';	
		$subject = "Subject: ".$sub;
		$message = "Name: ".$name."\n"."Email: ".$email."\n"."Write the following:"."\n\n".$msg;
		$headers = "From:".$email;
		if(mail($to, $subject, $message,$headers))
		{
			echo "<h1>Sent Successfully! Thank You"." ".$name.",We will contact You Shortly </h1>";
		}
		else
		{
			echo "Something Went Wrong";
		}
	}
?>
