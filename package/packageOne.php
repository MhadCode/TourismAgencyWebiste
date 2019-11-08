
<section class="service-area section-gap" id="tour" style="margin-bottom: -100px;">
<div class="section-full bg-white content-inner dlab-about-1 promotions" id="about-us">
	<div class="container">
		<div class="row d-flex justify-content-center">
		<div class="col-md-8 pb-70 header-text">
			<h1>Palawan Tours</h1>
			<p>
				It more fun in Palawan.
			</p>
		</div>
	</div>
		<div class="row" id="masonry">
			<?php
				$pagesLimit=10;
				if(!isset($_REQUEST['pages'])){
					$pages = 1;
				} else{
					$pages = $_REQUEST['pages'];
				}
				$pages_first_result = ($pages - 1) * $pagesLimit;
				$sqlpage = "SELECT * FROM tbl_packagetours where pac_status<>1";
				$resultpage = mysqli_query($conn,$sqlpage);
				$result_numrow = mysqli_num_rows($resultpage);
				$sql = "SELECT * FROM tbl_packagetours  where pac_status<>1 LIMIT ".$pages_first_result.','.$pagesLimit;
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){ ?>
			<div class="col-lg-4 col-md-6 col-sm-6 m-b30 card-container"  data-aos="fade-up">
				<div class="dlab-box">
					<div class="dlab-media"> <a href="<?php echo URL;?>booking/?tour=<?php echo $row['pac_ID'];?>">
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
							<a href="<?php echo URL;?>booking/?tour=<?php echo $row['pac_ID'];?>" class="site-button radius-no"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Book Now</a> 
							<a href="<?php echo URL;?>booking/?tour=<?php echo $row['pac_ID'];?>" class="site-button bg-primary-dark radius-no"><i class="fa fa-info-circle" aria-hidden="true"></i>  Read More </a> 
						</div>
					</div>
				</div>
			</div>
			<?php	}?> 
		</div>
	</div>
</div>
<div class="pagination">
	<?php if($pages != 1) {if($pages != 1){?>
  <a href="?pages=<?php echo $pages - 1;?>&#facilities">&laquo;</a>
<?php }
	$this_page_number = ceil($result_numrow/$pagesLimit);
	for($page=1;$page<=$this_page_number;$page++){
		if($page == $pages){?>
			<a href="?pages=<?php echo $page;?>&#facilities" class="active"><?php echo $page;?></a>
	<?php } else{?>
			<a href="?pages=<?php echo $page;?>&#facilities"><?php echo $page;?></a>
	<?php }} 
	if($this_page_number > $pages){?>
  <a href="?pages=<?php echo $pages + 1;?>&#facilities">&raquo;</a>
<?php }}?>
</div>
</section>
