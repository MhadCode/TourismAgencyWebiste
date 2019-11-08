<?php include('../config/main.php'); 

if(isset($_REQUEST['btnbook'])){
	include('../phpmailer/mail_conf.php');	
}

?>
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
			<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/plugins.css">
			<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/style.css">
			<link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/templete.css">
		</head>
		<body>
	<header class="default-header">
		<div class="container">
			<div class="header-wrap">
				<div class="header-top d-flex justify-content-between align-items-center">
					<div class="logo">
						<a href="<?php echo URL;?>"><img src="<?php echo URL;?>img/logo.png" alt="" width="100px"></a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(<?php echo URL;?>img/cover.jpg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Palawan Tours Booking</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li>It's more fun in Palawan</li>
					</ul>
				</div>
				<!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
	<div class="content-block">
            <div class="section-full content-inner">
				<div class="container">
					<div class="row m-b30">
						<div class="col-lg-8">
							<div class="d-flex info-bx m-b30">
								<div class="tour-title">
									<?php
									$sqlpage = "SELECT * FROM tbl_packagetours where pac_ID = '{$_REQUEST['tour']}'";
									$resultpage = mysqli_query($conn,$sqlpage);
									$row = mysqli_fetch_assoc($resultpage);
									?>
									<h2><?php echo $row['pac_name'];?></h2>
									<p><i class="fa fa-clock-o m-r5"></i><?php echo $row['pac_days'];?></p>
									<p><?php 	if($row['pac_rating'] == 1){?>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								<?php } elseif($row['pac_rating'] == 2){?>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								<?php } elseif($row['pac_rating'] == 3){?>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								<?php } elseif($row['pac_rating'] == 4){?>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								<?php } elseif($row['pac_rating'] == 5){?>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								<?php } else{?>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								<?php }?></p>
								</div>
								<div class="tour-price ml-auto">
									<span>Per pax</span>
									<h2 class="price">₱<?php echo number_format($row['pac_prize'],2,".",",");?></h2>
									<h4 class="actual-price">₱ <?php echo number_format($row['pac_notprize'],2,".",",");?> </h4>
								</div>
							</div>
							<div class="product-gallery on-show-slider"> 
								<?php
								$sqlimg = "SELECT * FROM tbl_imagetour where img_pacID = '{$_REQUEST['tour']}'";
								$resultimgpic = mysqli_query($conn,$sqlimg);
								$resultimgthumb = mysqli_query($conn,$sqlimg);
								?>
                                <div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
                                	<?php
                                	while($rowimgpic = mysqli_fetch_assoc($resultimgpic)){ 
                                	?>
									<div class="item">
										<div class="dlab-box">
											<div class="dlab-thum-bx">
												<img src="<?php echo URL.$rowimgpic['image_Path'];?>" alt="">
											</div>
										</div>
									</div>
								<?php }?>
								</div>
								
								<div id="sync2" class="owl-carousel owl-theme owl-none">
									<?php
                                	while($rowimgthumb = mysqli_fetch_assoc($resultimgthumb)){ 
                                	?>
									<div class="item">
										<div class="dlab-media">
											<img src="<?php echo URL.$rowimgthumb['imgThumb'];?>" alt="">
										</div>
									</div>
								<?php }?>
								</div>
							</div>
							<div class="tour-days">
								<?php 
								$sqls = "SELECT * FROM tbl_category inner join tbl_subcategory on catID = sub_catID inner join tbl_contents on cont_subID = subID where pac_ID = {$_REQUEST['tour']} group by catID";
								$results = mysqli_query($conn,$sqls);
								if(mysqli_num_rows($results) > 0){
								while($rows = mysqli_fetch_assoc($results)){ ?>
								<h2 class="m-b10"><?php echo $rows['cat_name'];?></h2>
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12">
										<?php 
										$sqla = "SELECT * FROM tbl_category inner join tbl_subcategory on catID = sub_catID inner join tbl_contents on cont_subID = subID left join tbl_tour on cont_title = tr_ID where pac_ID = {$_REQUEST['tour']} and sub_catID = {$rows['catID']} group by subID order by sub_name";
										$resulta = mysqli_query($conn,$sqla);
										while($rowa = mysqli_fetch_assoc($resulta)){ 
											if($rowa['cont_title'] == 0){?>
										<h5><?php echo $rowa['sub_name'];?></h5>
											<?php } else{?>
										<h5><?php echo $rowa['sub_name'].' : '.$rowa['tr_name'];?></h5>
											<?php }?>
										<ul class="list-hand-point primary">
											<?php 
											$sqlx = "SELECT * FROM tbl_category inner join tbl_subcategory on catID = sub_catID inner join tbl_contents on cont_subID = subID where pac_ID = {$_REQUEST['tour']} and cont_subID = {$rowa['subID']}";
											$resultx = mysqli_query($conn,$sqlx);
											while($rowx = mysqli_fetch_assoc($resultx)){ 
												if($rowx['cont_time'] == ""){?>
											<li><?php echo $rowx['cont_desc'];?></li>
											<?php } else{?>
											<table>
												<tr style="vertical-align: top;">
													<td style="width: 15%;"><?php echo $rowx['cont_time'];?></td>
													<td style="width: 100%;"><?php echo $rowx['cont_desc'];;?></td>
												</tr>
											</table>	
											<!-- <li><?php echo $rowx['cont_time'];?> | <?php echo $rowx['cont_desc'];?></li> -->
											<?php }}?>
										</ul>
									<?php }?>
									</div>
								</div>
							<?php }} else{?>
								<h2 class="m-b10">No Description</h2>
							<?php }?>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="sticky-top">
								<form class="hotel-booking" method="get" action="../phpmailer/booking_conf.php">
									<div class="row">
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Firstname</span>
												<div class="input-group">
													<input name="fname" required="" class="form-control" placeholder="" type="text" required>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Lastname</span>
												<div class="input-group">
													<input name="lname" required="" class="form-control" placeholder="" type="text" required>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Email</span>
												<div class="input-group">
													<input name="youremail" required="" class="form-control" placeholder="" type="email" required>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Phone</span>
												<div class="input-group">
													<input name="contact" required="" class="form-control" placeholder="" type="number" required>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Depature</span>
												<div class="input-group">
													<input name="dzName" required="" class="form-control" placeholder="" type="date" required>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Arrival</span>
												<div class="input-group">
													<input name="AzName" required="" class="form-control" placeholder="" type="date" required>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Days</span>
												<div class="input-group">
													<input  class="form-control" type="number" value="1" name="day" required/>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Adults</span>
												<div class="input-group">
													<input class="form-control" type="number" value="1" name="adult" required/>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 col-6">
											<div class="form-group">
												<span class="font-12">Children</span>
												<div class="input-group">
													<input class="form-control" type="number" value="1" name="child" required/>
												</div>
											</div>
										</div>
										<input type="hidden" name="tour" value="<?php echo $_REQUEST['tour'];?>">
										<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
											<div class="booking-total">
												<h3 class="d-flex">₱ <?php echo number_format($row['pac_prize'],2,".",",");?> <span>Sub Total 1 pax for Tour</span></h3>
												
											</div>
										</div>
										<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
										    <div class="g-recaptcha" data-sitekey="6LfXwJYUAAAAAOBviQ6FeqBdxw6VVGhTl-qt6Aya"></div>
											<button type="submit" name="btnbook" class="site-button btn-block">Book Now</button>
										</div>
									</div>
									<input type="hidden" name="tour" value="<?php echo $_REQUEST['tour'];?>">
								</form>
								<div class="m-t30">
									<img src="<?php echo URL;?>img/promo.jpg" class="d-md-none d-xl-block d-lg-block" alt=""/>
								</div>
							</div>
						</div>
					</div>
					<div class="row m-b30">
						<div class="col-md-12 col-lg-12">
							<div class="day-details-bx">
								<h4 class="m-b5">Tour Package</h4><br>
									<diiv class="row" id="masonry">
									<?php
										$sql = "SELECT * FROM tbl_packagetours order by rand() LIMIT 1,3";
										$result = mysqli_query($conn,$sql);
										while($row = mysqli_fetch_assoc($result)){ ?>
									<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container"  data-aos="fade-up">
										<div class="dlab-box">
											<div class="dlab-media"> <a href="#">
												<img src="<?php echo URL.$row['pac_img'];?>" alt=""></a> 
												<div class="tr-price">
													<span>₱ <?php echo number_format($row['pac_prize'],2,".",",");?></span>
												</div>
											</div>
											<div class="dlab-info p-a20 border-1 text-center">
												<h4 class="dlab-title m-t0"><a href="booking-details.html"><?php echo $row['pac_name'];?></a></h4>
												<h6 class="text-gray"><span class="fa fa-clock-o"></span> <?php echo $row['pac_days'];?></h6>
												<?php 	if($row['pac_rating'] == 1){?>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
														<?php } elseif($row['pac_rating'] == 2){?>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
														<?php } elseif($row['pac_rating'] == 3){?>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
														<?php } elseif($row['pac_rating'] == 4){?>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star"></span>
														<?php } elseif($row['pac_rating'] == 5){?>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
															<span class="fa fa-star checked"></span>
														<?php } else{?>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
															<span class="fa fa-star"></span>
														<?php }?>
												<p><?php echo $row['pac_desc'];?></p>
												<div class="tr-btn-info">
													<a href="<?php echo URL;?>booking/" class="site-button radius-no"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Book Now</a> 
													<a href="<?php echo URL;?>booking/?tour=<?php echo $row['pac_ID'];?>" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Read More </a> 
												</div>
											</div>
										</div>
									</div>
									<?php	}?> 
								</div>
							</div>
						</div>
					</div>
				</div>      
			</div>
	   </div>

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
									<li><img src="<?php echo URL;?>img/i1.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i2.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i3.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i4.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i5.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i6.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i7.jpg" alt=""></li>
									<li><img src="<?php echo URL;?>img/i8.jpg" alt=""></li>
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

	
<script src="<?php echo URL;?>js/aos.js"></script>
<script src="<?php echo URL;?>js/vendor/jquery-2.2.4.min.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo URL;?>js/wow.js"></script><!-- JQUERY.MIN JS -->
<script src="<?php echo URL;?>js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo URL;?>js/vendor/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo URL;?>js/bootstrap-select.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="<?php echo URL;?>js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="<?php echo URL;?>js/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="<?php echo URL;?>js/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="<?php echo URL;?>js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="<?php echo URL;?>js/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="<?php echo URL;?>js/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="<?php echo URL;?>js/masonry.filter.js"></script><!-- MASONRY -->
<script src="<?php echo URL;?>js/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="<?php echo URL;?>js/rangeslider.js" ></script><!-- Rangeslider -->
<script src="<?php echo URL;?>js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="<?php echo URL;?>js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src='https://www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="<?php echo URL;?>js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="<?php echo URL;?>js/skrollr.min.js"></script><!-- PAROLLER -->
<script src="<?php echo URL;?>js/jquery.nice-select.min.js"></script>
<script src="<?php echo URL;?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo URL;?>js/jquery.sticky.js"></script>
<script src="<?php echo URL;?>js/parallax.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo URL;?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo URL;?>js/main.js"></script>
<script src="<?php echo URL;?>js/tawk.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

		 <script>
 		var t1 = 0;
		window.onscroll = scroll1;

		function scroll1() {
		  var toTop = document.getElementById('toTop');
		  window.scrollY > 0 ? toTop.style.display = 'Block' : toTop.style.display = 'none';
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
<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 8; //globaly define number of elements per page
  var syncedSecondary = true;

	  sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: true,
		autoplay: false,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	  }).on('changed.owl.carousel', syncPosition);

	  sync2.on('initialized.owl.carousel', function () {
		  sync2.find(".owl-item").eq(0).addClass("current");
		}).owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin:5,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100
	  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		//sync1.data('owl.carousel').to(number, 300, true);
		
		sync1.data('owl.carousel').to(number, 300, true);
		
	});
});

</script>
	</body>
</html>
