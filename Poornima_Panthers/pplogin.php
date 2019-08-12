<?php session_start(); ?>
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
					
						<li><a class="log-out" onClick="parent.location.href='logout.php'" ><span>Logout</span></a></li>
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
							<h1 class="to-animate"><span>
							<?php
					$conn=mysqli_connect("localhost","id5251823_nsn","poornimapanthers","id5251823_poornimapanthers");
							 $sql="SELECT username FROM signup WHERE email ='".$_SESSION['email']."'"; 
 $result=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($result);
   $row=mysqli_fetch_array($result);
                            echo "Welcome ".$row["username"]; ?></span></h1>
							<h2 class="to-animate">“Confidence and enthusiasm are the greatest sales producers in any kind of economy.”</h2>
							<center>
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/login-images/1.jpg" alt="Los Angeles" style="width:50%;">
      </div>

      <div class="item">
        <img src="images/login-images/2.jpg" alt="Chicago" style="width:50%;">
      </div>
    
      <div class="item">
        <img src="images/login-images/3.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/4.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/5.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/6.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/7.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/8.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/9.jpg" alt="New york" style="width:50%;">
      </div>
      
      <div class="item">
        <img src="images/login-images/10.jpg" alt="New york" style="width:50%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</center>
							<div class="call-to-action">
								<a href="college.html" class="demo to-animate"><i class="icon-power"></i> College Participation</a>
								<a href="outside.html" class="download to-animate"><i class="icon-power"></i> Outside Participation</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="fh5co-services" data-section="services">

	<div class="core-features">
			<div class="grid2 to-animate" style="background-image: url(images/full_image_5.jpg); color:#000; border-color:#000">
            	<?php
$servername="localhost";
$username="id5251823_nsn";
$password="poornimapanthers";
$dbname="id5251823_poornimapanthers";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT * FROM `joincollege` where `emailid`='".$_SESSION['email']."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
  while($row=mysqli_fetch_array($result))
  {?>
    <table>
    <tr>
    <th colspan="2">College Events</th>
    </tr>
    <tr>
    <th>Name</th>
    <th>Details</th>
    </tr>
    <tr>
    <td><?php echo $row["teamname"]; ?></td>
    <td>
        <?php
        echo "<H3>Registration ID</H3><br>";
    echo $row["registrationid"]."<br>";
    echo "<H3>PhoneNo.</H3><br>";
    echo $row["mobileno"]."<br>";
    echo "<H3>Email</H3><br>";
    echo $row["emailid"]."<br>";
    echo "<H3>Year</H3><br>";
    echo $row["year"]."<br>";
  }
}
	else {
    echo "No Events";
  } 
mysqli_close($conn);
?>
    </td>
    </tr>
    </table>
</div>



	<link rel="stylesheet" href="css/style.css">
			<div class="grid2 fh5co-bg-color">
				<div class="core-f">
					<h1 class="to-animate" style:"color:red;"><strong><center><span class="glyphicon glyphicon-list"></span> News</center></strong></h1>
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
							<span class="position">Back-end coder and Tester</span>
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
					<p>Motive of this website is to make event managing system easy and smooth.</p>
				</div>

				<div class="col-md-4 to-animate">
					<h3 class="section-title">Contact At:-</h3>
					<ul class="contact-info">
						<li><i class="icon-map-marker"></i>204 Vivek Vihar, New Sanganer Road, Sodala Jaipur</li>
						<li><i class="icon-phone"></i>+91 9549306166</li>
						<li><i class="icon-envelope"></i><a href="#">2016pietcenitesh074@poornima.org</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.poornimapanthers.com</a></li>
					</ul>
					
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Drop us a line</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="subject" class="sr-only">Subject</label>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
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