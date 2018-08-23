
<?php
 session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MediBulk a Medical Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<!--/metadata -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="MediBulk Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- for banner css -->
 
<!-- //for banner css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!--//fonts-->


</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MediKit</a>
    </div>
	<ul style="float:right; font-size:20px;margin-top:20px;">
	<li>          <div style="float:right; font-size:20px;margin-top:20px;">
			<p style ="color:white; font-size:25px;">
            <?php
			 if(isset($_SESSION['userid']))	
			 {
			 echo "Welcome,   ".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
                ?></p>
				<a href="userlogin.php?value=0" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="usersignup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div></li>
    </ul>
</div>
</nav>
<div class="banner-top">
	<div class="banner-header">
		<!--header-->
		<div class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.html">MEDIKIT</a></h1>
					</div>
				</div>
      
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="home.php?value=0">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="services.html">Our Services</a></li>
							
							<li><a href="gallery.html">Our Doctors</a></li>
							
							<li><a href="contact.html">Contact</a></li>
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="icons.html"></a></li>
                                        <li></li>
										<li><a href="typography.html">Typography</a></li>
									</ul>
							  </li>
							
                            
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
		<!--//header-->
</div>

<!-- slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>We provide best medical services</h3>
						<div class="contrast">
							  <p> </p>
						 </div>
					</div>
				</div>
				</div>
			</div>
			<div class="item item1"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>We provide best Medical services</h3>
						<div class="contrast">
							  <p> .</p>
						 </div>
					</div>
				</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>We provide best Child Health services </h3>
						  <div class="contrast">
							  <p> .</p>
						  </div>
					</div>
				</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						 <h3>We provide top doctors</h3>
						 
						  <div class="contrast">
							  <p> </p>
						  </div>
					</div>
				</div>
				</div>
			</div>
			
			<div class="item item4"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						 <h3> </h3>
						  
						  <div class="contrast">
							  <p> </p>
						  </div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div> 
    <!--
	<div class="agileits_reservation">
					<form action="#" method="post">
						<div class="cuisine"> 
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<input type="text" name="Location" placeholder="Enter name" required="">
						</div>
						<div class="phone_email"> 
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<input type="text" name="Phone" placeholder="Phone" required=""> 
						</div>
						<div class="phone_email1"> 
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="clearfix"> </div>
						<div class="agileits_reservation_grid">
							<div  class="span1_of_1 book_date"> 
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input class="date" id="datepicker" name="Text" placeholder="Select Date"  type="text" required="">
							</div>
							<div class="span1_of_1 section_room"> 
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  
								<input type="text" name="Time" class="timepicker" value=" Time">	 
							</div>
							<div class="span1_of_1 section_room">
								<!-- start_section_room --> <!--
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<select id="country1" class="frm-field sect" required>
									<option value="">People</option>
									<option value="1">1 People</option>
									<option value="2">2 People</option>         
									<option value="3">More</option>
								</select> 
							</div>  
							<div class="clearfix"></div>
						</div>
						<div class="date_btn"> 
							<input type="submit" value="Book An Appointment" /> 
						</div> 
					</form>
				</div>-->
 </div> 
	<!-- //slider -->
<!-- // banner -->

<!-- /About -->
    <!--
	<div class="w3-about about-gap" id="about">
		<div class="container">
			<div class="w3-heading-all">
				<h3>About us</h3>
			</div>
		<div class="w3-about-grids">
				<div class="col-md-6 w3-about-left-grid">
					<div class=" w3-about-left-grid-inner-head">
						<i class="fa fa-microphone" aria-hidden="true"></i>
						<h3>Lets Talk about Hospitality</h3>
					</div>
					<div class=" w3-about-left-grid-inner2-head">
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida, ante egestas egestas vulputate, elit risus maximus mauris, non gravida arcu justo eget est. Cras eu mauris nisl. Maecenas ut scelerisque metus.</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 w3-about-right-grid">
						<div class="col-md-8 w3-about-right-text1">
							<h5>Lorem ipsum 109</h5>
							<h4>Specialist1</h4>
							<h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
				
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a11.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>Dunke alpha 212</h5>
							<h4>Specialist2</h4>
							<h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a121.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>Monst ibram 143</h5>
							<h4>Specialist3</h4>
							<h3>Ut sed augue porttitor, vehicula eros in, vehicula elit. Aliquam ut ex aliquam risus vestibulum hendrerit.</h3>
						</div>
						<div class="col-md-4 w3-about-right-img1">
							<img src="images/a13.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
		</div>
		</div>
	</div>
	<!-- //About -->
<!-- /services -->
   
<div class="services" id="services">
	<div class="container">
		<div class="w3-heading-all services-head">
			<h3>Services</h3>
		</div>	

		<div class="w3-services-grids">
			<div class="col-md-4 w3-services-grids1">
			<div class="w3-services-grid1">
			<a href="viewChild.php?value=0"><i class="fa fa-user-md" aria-hidden="true"></i></a>
				<h3> Special Team</h3>
				<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1 ">
			<div class=" w3-services-grid2">
                <a href = "ChildIndex.php?value=0"><i class="fa fa-laptop" aria-hidden="true"></i></a>
				<h3>Child Health Care</h3>
			<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid3">
			<i class="fa fa-hospital-o" aria-hidden="true"></i>
				<h3>Symptom Checker</h3>
			<div class="w3-services-grid1-left">
					<h4> </h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
		
			</div>
			</div>
			
			<div class="clearfix"></div>
			<div class="w3-services-grid-bottom">
			<div class="col-md-4 w3-services-grids1">
			<div class="w3-services-grid4">
                <a href="doctorBooking.php?value=0"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
				<h3>Doctor Booking</h3>
				<div class="w3-services-grid1-left">
					<h4> </h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid5">
							<i class="fa fa-flask" aria-hidden="true"></i>
				<h3>Ability Test</h3>
				<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-4 w3-services-grids1">
			<div class=" w3-services-grid6">
							<i class="fa fa-ambulance" aria-hidden="true"></i>
				<h3>Emergency Help</h3>
				<div class="w3-services-grid1-left">
					<h4></h4>
					<p></p>
				</div>
				<div class="w3-services-grid1-right">
				<h4></h4>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		</div>
</div>
</div>
<!-- //services -->
<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">
		<div class="w3-heading-all">
			<h3>Testimonials</h3>
		</div>
			<div class="w3ls_testimonials_grids">
				 <section class="center slider">
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Rosy Crisp</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/tm1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Laura Paul</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/tm2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p>In eu auctor felis, id eleifend dolor. Integer bibendum dictum erat, 
									non laoreet dolor.</p>
								<h4>Michael Doe</h4>
								<h5>Student</h5>
								<div class="w3l_testimonial_grid_pos">
									<img src="images/tm3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
						</div>
				</section>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->
<div class="footer">
	<div class="container">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-4 footer-left">
			<h2><a href="index.html">MediKit </a></h2>
			<p>MediKit is a online Medical Expert System, provides awesome features online i.e: symptom checking, online doctor booking.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-4 footer-right">
			<div class="sign-grds">
				<div class="sign-gd">
					<h4>Information </h4>
					<ul>
						 <li><a href="index.html" class="active">Home</a></li>
        <li><a href="about.html" >About</a></li>
        <li><a href="services.html"> Services</a></li>
		<li><a href="gallery.html">Doctors</a></li>
		<li><a href="contact.html">Contact</a></li>
						
					</ul>
				</div>
				</div>
			</div>
				<div class="col-md-4 sign-gd-two">
					<h4>Address</h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+91-9931021948</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com">info@medikit.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Hosur Road, Bengaluru
								
								</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				
		
		<div class="clearfix"></div>
			
		<p class="copy-right">&copy;2018 MediKit. All rights reserved | Design by <a href="http://w3layouts.com/">MediKit Team</a></p>
	</div>
</div>
</div>
<!-- //footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<!-- carousal -->
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->


			<script src="js/SmoothScroll.min.js"></script>
		<!-- smooth scrolling-bottom-to-top -->
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //smooth scrolling-bottom-to-top -->
		<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Time select -->
				<script type="text/javascript" src="js/wickedpicker.js"></script>
				<script type="text/javascript">
					$('.timepicker').wickedpicker({twentyFour: false});
				</script>
				<!-- //Time select -->
				<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 

</body>
</html>
    
<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>