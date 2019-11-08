	<?php include('config/main.php'); ?>
	<?php include('config/function.php'); ?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>

	   <meta charset="utf-8">
	   <meta property="image" content="https://viajeroshubpalawan.com/img/logo.png" />
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta name="description" content="Viajeros Hub" />
	   <meta name="description" content="Time to take the plunge and soaked up the sun! An endless summer to remember! Tara viaje tayo mga kaviajeros!">
	   <meta name="keywords" content="Viajeros Hub" />
	   <meta name="author" content="Viajeros Hub"/>
	   <meta name="MobileOptimized" content="320" />
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?php echo URL;?>img/logo.png">
		<!-- Author Meta -->
		<meta name="author" content="MhadStudio">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Viajeros</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo URL;?>css/linearicons.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/nice-select.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/magnific-popup.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/bootstrap.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/main.css">
			<link rel="stylesheet" href="<?php echo URL;?>css/aos.css">
			<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/style.css">
			<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/templete.css">
			<style type="text/css">
				#myVideo {
				  position: fixed;
				  right: 0;
				  bottom: 0;
				  min-width: 100%; 
				  min-height: 100%;
				}
			</style>
		</head>
		<body>

			<!-- Start Header Area -->
			<div style="height: 0px;">
			<header class="default-header" >
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="<?php echo URL;?>"><img src="<?php echo URL;?>img/logo.png" alt="" width="100px"></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="#home">Home</a>
									<a href="#tour">Tour</a>
									<a href="#service">Service</a>
									<a href="#book">Book</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
			<!-- End Header Area -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
				<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
					<video autoplay muted loop id="myVideo">
					  <source src="img/bg.mp4" type="video/mp4">
					</video>
						<div class="banner-content col-lg-12 col-md-12 " style="margin-top: 30px;">
							<h1>Tara viaje tayo mga ka<span>viajeros</span>!
								<br>
							</h1>
							<a href="#tour" class="head-btn btn text-uppercase">Start Searching</a>
						</div>
				</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- start  packages and tour -->
			<?php include('package/packageOne.php'); ?>
			<!-- end package and tour -->
			

			<!-- Start about Area -->
			<section class="about-area section-full bg-white ">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-6 col-md-12 about-left no-padding"  data-aos="fade">
							<img class="img-fluid" src="img/plane.jpg" alt="">
						</div>
						<div class="col-lg-6 col-md-12 about-right"  data-aos="flip-left">
							<h1>A very Lovely Welcome <br>
							to Palawan</h1>
							<p>
								Palawan has been cited by the New York-based Travel + Leisure magazine as the “World’s Best Island.” Known globally for its beaches, Palawan joins a worldwide roster of hotels, transportation modes, and destinations that made it among the magazine’s World’s Best Awards.
							</p>
							<a href = "#book" class="btn btn-black">Book Now</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End about Area -->

			<!-- Start facilities Area -->
			<section class="facilities-area section-gap  section-full bg-white " id="service" >
				<div class="container"  data-aos="fade-up">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-80 header-text">
							<h1>Services</h1>
							<p>
								Professional management discipline focused upon the efficient and effective of support services for the Tourist
							</p>
						</div>
					</div>
					<div class="row text-center">
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-rocket"></span>
							<h4>Easy Transaction</h4>
							<p>
								We give our best transaction to make you happy.
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-magic-wand"></span>
							<h4>Get Promo Offers</h4>
							<p>
								Always update to our website to get Promo
							</p>
						</div>
						<div class="sigle-facilities col-lg-4 col-md-6">
							<span class="lnr lnr-gift"></span>
							<h4>Holiday Packages</h4>
							<p>
								We have hiloday packages on the summer
							</p>
						</div>
					</div>
				</div>
			</section>
			<!-- End facilities Area -->

			<!-- Start gallery Area -->
			<section class="gallery-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"  data-aos="flip-left">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g1.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Balabac Tour</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"  data-aos="flip-left">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g2.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Coron Tour</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"  data-aos="flip-left">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g3.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Underground River</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"  data-aos="flip-left">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g4.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Puerto Princesa Tour</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"  data-aos="flip-left">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g5.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Port Barton</h3>
						      </div>
						    </a>
						  </div>
						</div>
						<div class="col-lg-2 col-sm-6 single-gallery no-padding"  data-aos="flip-left">
						  <div class="content">
						    <a href="#" target="_blank">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/g6.jpg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Elnido Tour</h3>
						      </div>
						    </a>
						  </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End gallery Area -->


			<!-- Start booking Area -->
			<section class="booking-area" id="book">
				<div class="container">
					<div class="row">
						<div class="booking-wrap col-lg-12">
							<div class="row d-flex justify-content-center">
								<div class="col-md-10 pb-30 header-text">
									<h1>Book Your Tour</h1>
									<p>What are you waiting for LET'S GO!</p>
								</div>
							</div>
					  		<form class="booking-form" id="booking" method="get" action="phpmailer/send_conf.php">
								 <div class="row">
								    <div class="col-lg-6 col-md-12">
								    	<div class="row">
									    	<div class="col-lg-6">
									    		<small>First name</small>
												<input type="text" name="fname" class="single-in form-control" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="">
									    		<small>Last name</small>
												<input type="text" name="lname" class="single-in form-control" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required="">
									    		<small>Email</small>
												<input type="email" name="email" class="single-in form-control" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="">
									    		<small>Phone Number</small>
												<input type="number" name="phone" class="single-in form-control" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required="">
									    	</div>
									    	<div class="col-lg-6">
									    		<small>Arrival</small>
									    		<input type="date" name="arrival" class="single-in form-control" placeholder="Arrival" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Arrival'" required="">
									    		<small>Depature</small>
									    		<input type="date" name="depature" class="single-in form-control" placeholder="Depature" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Depature'" required="">
									    		<small>Number of Children</small>
									    		<input type="number" name="child" class="single-in form-control" placeholder="No. Child" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Child'" required="">
									    		<small>Number of Adult</small>
									    		<input type="number" name="adult" class="single-in form-control" placeholder="No. Adult" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Adlut'" required="">
									    	</div>
								    	</div>
								    </div>
								    <div class="col-lg-6 col-md-12">
									    <small>Message</small>
								      	<textarea class="single-in form-control" name="message" placeholder="Something you want to say" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Something you want to say'" required=""></textarea>
								    </div>
								     <div class="g-recaptcha" data-sitekey="6LfXwJYUAAAAAOBviQ6FeqBdxw6VVGhTl-qt6Aya"></div>
										<div class="col-lg-12 d-flex justify-content-center send-btn">
										<button type="submit" name="btnbook" class="primary-btn mt-20 text-uppercase ">book room<span class="lnr lnr-arrow-right"></span></button>
									</div>

									<div class="alert-msg"></div>
								  </div>
					  		</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End booking Area -->


			<!-- Start contact-info Area -->
			<section class="contact-info-area section-gap">
				<div class="container">
					<div class="row">
						<div class="single-info col-lg-6 col-md-12">
							 <h4>Visit Our Office</h4>
							 <a href="https://wego.here.com/directions/mix//Viajeros-Travel-and-Tours-Service,-Laguna-Village-Phase-1,-Solid-Road-Brgy.-San-Manuel,-5300-Puerto-Princesa-City:e-eyJuYW1lIjoiVmlhamVyb3MgVHJhdmVsIGFuZCBUb3VycyBTZXJ2aWNlIiwiYWRkcmVzcyI6IkxhZ3VuYSBWaWxsYWdlIFBoYXNlIDEsIFNvbGlkIFJvYWQgQnJneS4gU2FuIE1hbnVlbCwgNTMwMCBQdWVydG8gUHJpbmNlc2EgQ2l0eSwgUHVlcnRvIFByaW5jZXNhLCBQaGlsaXBwaW5lcyIsImxhdGl0dWRlIjo5Ljc3MjM3LCJsb25naXR1ZGUiOjExOC43NTcyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoyNDQ2NTkwODY0MzQ5MDB9?map=9.77377,118.75722,15,normal&fb_locale=en_GB" target="_blank"><img src="<?php echo URL.'img/maps.jpg'?>"></a>
							 <p style="text-align: left;">
							 	Laguna Village Phase 1, Solid Road Brgy. San Manuel, 5300 Puerto Princesa City, Puerto Princesa, Philippines
							 	<ul style="text-align: left;">
							 		<li>Phone: (0917 773 0334) (0949 334 0118) (0908 817 9837)</li>
							 		<li>Email: viajeroshubtravelandtours@gmail.com</li>
							 	</ul>
							 </p>
						</div>
						<div class="single-info col-lg-6 col-md-12">
							 <h4>Like as on Facebook</h4>
							 <div class="fb-page" data-href="https://www.facebook.com/palawancheaptourpackage/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/palawancheaptourpackage/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/palawancheaptourpackage/">Viajeros Travel and Tours Service</a></blockquote></div>
							 
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-info Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Time to take the plunge and soaked up the sun! An endless summer to remember! Tara viaje tayo mga kaviajeros!
								</p>
								 <p>
								 	<b>Address:</b><br>
							 	Laguna Village Phase 1, Solid Road Brgy. San Manuel, 5300 Puerto Princesa City, Puerto Princesa, Philippines
							 	<ul style="text-align: left;">
							 		<li>Phone: (0917 773 0334) (0949 334 0118) (0908 817 9837)</li>
							 		<li>Email: viajeroshubtravelandtours@gmail.com</li>
							 	</ul>
							 </p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div> 
										</div>
										<div class="info"></div>
										</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-12">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">Instragram Feed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-12">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/palawancheaptourpackage/" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/viajeroshub.travelandtours/" target="_blank"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
						<p class="footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">MhadStudio</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
			<div align="center">
			<img id="toTop" src="<?php echo URL;?>img/up-arrow.png" width="50" height="50" onclick="goUp()" title="Go To Top" data-aos="flip-left">
			</div>
				<div id="fb-root"></div>\
		
			<script src="<?php echo URL;?>js/vendor/jquery-2.2.4.min.js"></script>
			<script src="<?php echo URL;?>js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
			<script src="<?php echo URL;?>js/vendor/bootstrap.min.js"></script>
			<!-- PAROLLER -->
			<script src="<?php echo URL;?>js/owl.carousel.js"></script><!-- OWL SLIDER -->
			<script src="<?php echo URL;?>js/jquery.nice-select.min.js"></script>
			<script src="<?php echo URL;?>js/jquery.sticky.js"></script>
			<script src="<?php echo URL;?>js/main.js"></script>
			<script src="<?php echo URL;?>js/aos.js"></script>
			<script src="<?php echo URL;?>js/tawk.js"></script>
            <script src='https://www.google.com/recaptcha/api.js'></script>
			 <script>
			 	var t1 = 0;
				window.onscroll = scroll1;

				function scroll1() {
				  var toTop = document.getElementById('toTop');
				  window.scrollY > 0 ? toTop.style.display = 'Block' : toTop.style.display = 'none';
				  if(window.scrollY > 1000) { 
				    $('#myVideo').hide();
				  } else{ 
				    $('#myVideo').show();
				  }
				}

				function goUp() {
				  var y1 = window.scrollY;
				  y1 = y1 - 100;
				  window.scrollTo(0, y1);
				  if (y1 > 0) {
				    t1 = setTimeout("goUp()",10);
				  } else {
				    clearTimeout(t1);
				  }
				}

			    AOS.init({
			      easing: 'ease-in-out-sine'
			    });
			</script>

			<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=291171821567286&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		</body>
	</html>
