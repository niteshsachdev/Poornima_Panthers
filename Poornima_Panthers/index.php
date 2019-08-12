<?php
error_reporting(0);
session_start();
if($_SESSION['email'])
{
  //  echo "<script>alert('hello')</script>";
    header('location:'.$_SERVER['HTTP_REFERER']);
}
if(isset($_COOKIE['username']) and isset($_COOKIE['pws'])){
$username= $_COOKIE['username'];
$password =$_COOKIE['pws'];
echo "<script>
document.getElementById('username').value ='$username';
document.getElementById('pws').value ='$password';
</script>";
}
?>
<!DOCTYPE html><head>
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
    <style>
.image{
    position:relative;
    overflow:hidden;
    padding-bottom:100%;
}
.image img{
      position: absolute;
      max-width: 100%;
      max-height: 100%;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
}
    </style>
    
	</head>
	<body>
		<?php
if( $posted )
{
	if ($result) {
		echo "<script type='text/javascript'>
					alert('Successfully Signup')
				</script>";
	}
	else
		echo "<script type='text/javascript'>
					alert('Failed To Signup')
				</script>";
}
?>
	<header role="banner" id="fh5co-header">
		<div class="fluid-container">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="poornimapanthers.html">Poornima Panthers</a> 
			  </div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
						<li><a href="#" data-nav-section="services"><span>News</span></a></li>
						<li><a href="#" data-nav-section="explore"><span>Gallery</span></a></li>
						<li><a href="#" data-nav-section="team"><span>About Us</span></a></li>
                        <li><a href="#" data-nav-section="query"><span>Query</span></a></li>
                        
						<li class="call-to-action"><a class="sign-up" href="#" data-nav-section="services"><span>Sign Up</span></a></li>
						<li class="call-to-action"><a class="sign-up" href="#" data-nav-section="services"><span>Login</span></a></li>
					</ul>
				</div>
			</nav>
	  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
		  <div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1 class="to-animate">Welcome To <span>Poornima Panthers</span></h1>
							<h2 class="to-animate">Poornima Panthers: is the sports team of Poornima Foundation (PF)
	and its constituent institutions, namely, Poornima University (PU),
	Poornima College of Engineering (PCE), Poornima Institute of 
	Engineering & Technology (PIET) & Poornima Group of Institutions (PGI)
	based in Jaipur, Rajasthan. The team is owned by PF whereas led &
	coached by Sports In charges appointed by PF.
	Poornima Panthers play their home matches at PU, PCE, PIET and PGI. 
	Team Poornima Panthers represents PF in Cricket, Soccer, 
	American Football, Volleyball, Basketball, Handball, Kabaddi, Kho-Kho, 
	Table Tennis, Chess, Lawn Tennis, Badminton, Yoga, Athletics,
	Music, Dance, Literary Events,Theatre and Fine Arts.The official logo
	bears a roaring panther which demonstrates aggressiveness, 
	courage and selfless dedication to a team in pursuit of victory.</h2>
						<!--	 <div class="call-to-action">
								<a href="collegewithout.html" class="demo to-animate"><i class="icon-power"></i> College Participation</a>
								<a href="outsidewithout.html" class="download to-animate"><i class="icon-power"></i> Outside Participation</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	<section id="fh5co-services" data-section="services" style:"margin-top=5px">

	<div class="core-features">
			<div class="grid2 to-animate" style="background-image: url(images/full_image_5.jpg);">
			
<head>
 
<title>Login & Sign Up Form Concept</title>
 
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>

<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

 
<link rel="stylesheet" href="css/ns.css">


 </head>


<body>


<div class="cotn_principal">

<div class="cont_centrar">

 
 <div class="cont_login">

<div class="cont_info_log_sign_up">
 
<div class="col_md_login">

<div class="cont_ba_opcitiy">
 
<h2>LOGIN</h2>  

  <p>WINNERS DARE MORE</p> 

  <button class="btn_login" onClick="cambiar_login()">LOGIN</button>
  
</div>
  
</div>

<div class="col_md_sign_up">

<div class="cont_ba_opcitiy">

<h2>SIGN UP</h2>

  

<p>Things get better with sports</p>


  <button class="btn_sign_up" onClick="cambiar_sign_up()">SIGN UP</button>

</div>

</div>
   
</div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
      
<img src="1.jpg" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
 
       <form method="post" action="indexlogin.php">
 <div class="cont_form_login">
<a href="#" onClick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   
<h2>LOGIN</h2>
 
<input type="text" placeholder="Email Id" name="email"/>

<input type="password" placeholder="Password" name="pws"/>


<button class="btn_login" type="submit" name="submit">LOGIN</button>
 </form> 
</div>
 
  <form method="post" action="sign-up.php"> 
<div class="cont_form_sign_up" >
<a href="#" onClick="ocultar_login_sign_up()">
<i class="material-icons">&#xE5C4;</i></a>
     
<h2>SIGN UP</h2>
<input type="text" placeholder="Enter Full Name" name="name" required>
    <input type="text" placeholder="Enter Mobile Number" name="mobile" pattern="[789][0-9]{9}" title="Must Be Start With 7/8/9 and other 9 digit [0-9]" maxlength="10" required>
    <input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
    <input type="password" placeholder="Enter Password" name="psw" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
    <input type="password" placeholder="Repeat Password" name="psw-repeat" oninput="check(this)"  required>
	 
<button class="btn_sign_up" type="submit" name="submit">SIGN UP</button>

  </div>
</form>
    </div>
    
  </div>
 </div>
</div>
  
  

    <script  src="js/index.js"></script>
  <script type="text/javascript" language="javascript">
  	function check(input)
  	{
  		if (input.value != document.getElementById('psw').value) 
  		{
  			input.setCustomValidity('Password Not matching');
  		}
  		else
  			input.setCustomValidity('');

  	}
  </script>




</body>


			</div>			
	<link rel="stylesheet" href="css/style.css">
			<div class="grid2 fh5co-bg-color">
				<div class="core-f">
					<h1 class="to-animate" style:"color:red;"><strong><span class="glyphicon glyphicon-list"></span> News</strong></h1>
					<div class="row">
						<div class="col-md-6">
							<div class="core">
								<div class="fh5co-post to-animate">
									<h3>Cricket Tournament</h3>
									<p>
									    Date:-10-03-2018 <br>
									    Time:-10 am <br>
									    Venue:-PIET
									</p>
								</div>
							</div>
							
							<div class="core">
								<div class="fh5co-post to-animate">
									<h3>Kabaddi Final</h3>
									<p>
									    Date:-12-03-2018 <br>
									    Time:-8 am <br>
									    Venue:-PGI
									</p>
								</div>
							</div>
							
							<div class="core">
								<div class="fh5co-post to-animate">
									<h3>Badminton quaterfinal</h3>
									<p>
									    Date:-15-03-2018 <br>
									    Time:-1 pm <br>
									    Venue:-PIET
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						    
							<div class="core">
								<div class="fh5co-post to-animate">
									<h3>Box Cricket Final</h3>
									<p>
									    Date:-11-03-2018 <br>
									    Time:-2 pm <br>
									    Venue:-PIET
									</p>
								</div>
							</div>
							<div class="core">
								
								<div class="fh5co-post to-animate">
									<h3>Volleyball group matches</h3>
									<p>
									    Date:-19-03-2018 <br>
									    Time:-7:30 am <br>
									    Venue:-PCE
									</p>
								</div>
							</div>
							<div class="core">
								
								<div class="fh5co-post to-animate">
									<h3>Basketball Semifinal</h3>
									<p>
									    Date:-25-03-2018 <br>
									    Time:-9 am <br>
									    Venue:-PIET
									</p>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<section id="fh5co-explore" data-section="explore">
		<div class="jumbotron" style="background:#D3D3D3;">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate" style="color: white;text-shadow: 0 0 3px blue; padding: 0;"><strong><span>Gallery</span></strong></h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3 style="color: white;text-shadow: 1px 1px 2px #000000;">The Sky is the ultimate art Gallery just above us</h3>
						</div>
					</div>
				</div>
			</div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image  project-grid to-animate-2">
                    <img src="images/1.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/2.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/3.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/17.jpg">
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/8.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/9.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/5.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/6.jpg">
                </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/4.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/7.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/10.jpg">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="image project-grid to-animate-2">
                    <img src="images/27.jpg">
                </div>
            </div>
        </div>
	</div>

	
	<section id="fh5co-team" class="fh5co-bg-color" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate" style="color: white;text-shadow: 2px 2px 4px blue;"><span>Meet The Team</span></h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate" style="color: white;text-shadow: 1px 1px 2px #000000;">The strength of the team is each individual member. The strength of each member is the team. </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/niteshsachdev.jpg" alt="Roger Garfield"></div>
							<h3>Nitesh Sachdev</h3>
							<span class="position">Designer and Developer</span>
							<p></p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="instagram"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/shubham.jpg" alt="Roger Garfield"></div>
							<h3>Shubham Jain</h3>
							<span class="position">Front-end Designer and Documentor</span>
							<p></p>
							<ul class="social-media">
								<li><a href="https://www.facebook.com/profile.php?id=100010036781907" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="https://twitter.com/Shubham971236" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/shubhuj29/" class="instagram"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/narendra.jpg" alt="Roger Garfield"></div>
							<h3>Narendra Ghotia</h3>
							<span class="position">Back-end Coder and Tester</span>
							<p></p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="instagram"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div
				></div>
			</div>
		</div>
	</section>

	<section id="fh5co-footer" role="contentinfo" data-section="query">
		<div class="container">
			<div class="row">
				<div class="col-md-4 to-animate">
					<h3 class="section-title">About Website</h3>
					<p></p>Motive of this website is to make event managing system easy and smooth.</p>
				</div>

				<div class="col-md-4 to-animate">
					<h3 class="section-title">Contact At</h3>
					<ul class="contact-info">
						<li><i class="icon-map-marker"></i>204 Vivek Vihar, New Sanganer Road, Sodala Jaipur</li>
						<li><i class="icon-phone"></i>+91 9549306166</li>
						<li><i class="icon-envelope"></i><a href="#">2016pietcenitesh074@poornima.org</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.poornimapanthers.com</a></li>
					</ul>
					
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Drop us a line</h3>
					<form class="contact-form" method="post" action="mail.php">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<label for="subject" class="sr-only">Subject</label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7"  name="message" placeholder="Message" required></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" name="submit" class="btn btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

