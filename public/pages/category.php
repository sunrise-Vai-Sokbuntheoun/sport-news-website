<?php
include '../../config.php';
include '../../public/php-reference/functions.php';
include '../../resource/db-functions/transaction-db.php';
include 'function.php';
?>
<?php include '../template/p-header.php'; ?>

<?php 
$cat_id = $_GET['id'];
	$result = run_query("select * from tblcategories where id= {$cat_id}",''); 
?>


<div class="site-main-container">
	<!-- Start top-post Area -->
	<section class="top-post-area pt-10">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-12">
					<div class="hero-nav-area">
						<h1 class="text-white">Posts <?php foreach($result as $re){ echo $re['name']; }?></h1>
						<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span><a href="category.html">Posts Category</a></p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="news-tracker-wrap">
						<h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-post Area -->
	<!-- Start latest-post Area -->
	<section class="latest-post-area pb-120">
		<div class="container no-padding">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start latest-post Area -->
					<div class="latest-post-wrap">
						<h4 class="cat-title">Latest News</h4>
						<?php get_public_cateLatestPost(); ?>
						<div class="load-more">
							<a href="#" class="primary-btn">Load More Posts</a>
						</div>

					</div>
					<!-- End latest-post Area -->
				</div>
				<div class="col-lg-4">
					<div class="sidebars-area">
						<div class="single-sidebar-widget ads-widget">
							<img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
						</div>
						<div class="single-sidebar-widget most-popular-widget">
							<h6 class="title">Most Popular</h6>
							<div class="single-list flex-row d-flex">
								<div class="thumb">
									<img src="img/m1.jpg" alt="">
								</div>
								<div class="details">
									<a href="image-post.html">
										<h6>Help Finding Information
											Online is so easy</h6>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="single-sidebar-widget social-network-widget">
							<h6 class="title">Social Networks</h6>
							<ul class="social-list">
								<li class="d-flex justify-content-between align-items-center fb">
									<div class="icons d-flex flex-row align-items-center">
										<i class="fa fa-facebook" aria-hidden="true"></i>
										<p>983 Likes</p>
									</div>
									<a href="#">Like our page</a>
								</li>
								<li class="d-flex justify-content-between align-items-center tw">
									<div class="icons d-flex flex-row align-items-center">
										<i class="fa fa-twitter" aria-hidden="true"></i>
										<p>983 Followers</p>
									</div>
									<a href="#">Follow Us</a>
								</li>
								<li class="d-flex justify-content-between align-items-center yt">
									<div class="icons d-flex flex-row align-items-center">
										<i class="fa fa-youtube-play" aria-hidden="true"></i>
										<p>983 Subscriber</p>
									</div>
									<a href="#">Subscribe</a>
								</li>
								<li class="d-flex justify-content-between align-items-center rs">
									<div class="icons d-flex flex-row align-items-center">
										<i class="fa fa-rss" aria-hidden="true"></i>
										<p>983 Subscribe</p>
									</div>
									<a href="#">Subscribe</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End latest-post Area -->
</div>

<?php include '../template/p-footer.php'; ?>