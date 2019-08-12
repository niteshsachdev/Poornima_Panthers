<!DOCTYPE html>
<html>
	<head>
	<title>Poornima Panthers</title>
		
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="pplogin.html">Poornima Panthers</a> 
			  </div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
                   <input type="Submit" name="HOME" value=Back  onClick="parent.location='pplogin.php'">
					</ul>
				</div>
			</nav>
	  </div>
	</header>
</body>	
<style>
body {

	background-image: url(images/full_image_3.jpg);
	background-color:#cccccc;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid # 900;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: center;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>

</head>
<?php
if($_REQUEST['event']);
{
    $event=$_GET['event'];
}
?>
<body>
<br>
<font color="black">
<Fieldset>
            <legend>Join Event </legend>

<form  action="joinoutside.php"  method="post" style="border:1px solid #ccc">
  <div class="container">
     <label><b>Team Name</b></label>
    <input type="text" placeholder="Enter Team Name" name="tname" required>
    <label><b>Team Leader Name</b></label>
    <input type="text" placeholder="Enter Leader Name" name="tlname" required>
    <label><b>Registration ID</b></label>
    <input type="text" placeholder="Enter Reg. ID Name" name="regid" required>
    
    <label><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="mobno" pattern="[789][0-9]{9}" title="Must Be Start With 7/8/9 and other 9 digit [0-9]" maxlength="10" required>
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    <label><b>Year</b></label>
    <input type="text" placeholder="Enter Year" name="year" required>
    <input type="hidden" value="<?php echo $event ?>" name="event">


    <p>By creating an account you agree to our <a href="T&C.html">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" onClick="pplogin.php">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Join</button>
    </div>
  </div>
</form>
</Fieldset>
</font>
</body>
</html>
