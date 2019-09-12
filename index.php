<?php
include 'config.php';
include 'public/php-reference/functions.php';
include 'resource/db-functions/transaction-db.php';
?>
<?php include 'public/template/p-header.php'; ?>
    <div class="site-main-container">
        <!-- Start top-post Area -->
        <?php get_public_topPostArea(); ?>
        <!-- End top-post Area -->
        <!-- Start latest-post Area -->
        <section class="latest-post-area pb-120">
            <div class="container no-padding">
                <div class="row">
                    <div class="col-lg-8 post-list">
                        <!-- Start latest-post Area -->
                        <?php get_public_latestPost(); ?>
                        <!-- End latest-post Area -->

                        <!-- Start banner-ads Area -->
                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                            <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                        </div>
                        <!-- End banner-ads Area -->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebars-area">
                            <div class="single-sidebar-widget ads-widget">
                                <img class="img-fluid" src="img/sidebar-ads.jpg" alt="">
                            </div>
                            <div class="single-sidebar-widget newsletter-widget">
                                <h6 class="title">Newsletter</h6>
                                <p>
                                    Here, I focus on a range of items
                                    andfeatures that we use in life without
                                    giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="col-autos">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Email Address"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Email Address'" type="text">
                                        </div>
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>
                                <p>
                                    You can unsubscribe us at any time
                                </p>
                            </div>
                            <div class="single-sidebar-widget most-popular-widget">
                                <h6 class="title">Most Popular</h6>
                                <!-- Right-site-Most-popular -->
                                <?php get_public_rightSitePopular(); ?>
                                <!-- End Right-site-Most-popular -->
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
    <?php include 'public/template/p-footer.php'; ?>