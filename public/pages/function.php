<?php
    function get_public_cateLatestPost(){
        $cat_id = $_GET['id'];

        $news = run_query("select tblnews.title, tblnews.view, tblnews.short_descript, tblnews.featured_image, tblnews.create_at, tblcategories.name, tbluser.username from tblcategories INNER JOIN tblnews ON tblcategories.id = tblnews.category_id  inner join tbluser on tblnews.user_id = tbluser.id where tblnews.category_id = {$cat_id} order by tblnews.view desc ", "Error 404!");
        $p_urls = public_urls();
        $p_assets = public_assets();
        $i = 0;
        foreach ($news as $n) {
            $title =  $n['title'];
            $view = $n['view'];
            $sh_desc =  substr($n['short_descript'], 0, 300);
            $featured_img = $n['featured_image'];
            $user = $n['username'];
            $category = $n['name'];
            $date = $n['create_at'];
        echo <<<EOT
        <div class="single-latest-post row align-items-center">
							<div class="col-lg-5 post-left">
								<div class="feature-img relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="{$featured_img}" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">{$category}</a></li>
								</ul>
							</div>
							<div class="col-lg-7 post-right">
								<a href="image-post.html">
									<h4>{$title}</h4>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>{$user}</a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>{$date}</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>{$n['view']}</a></li>
								</ul>
								<p class="excert">
									{$sh_desc}
								</p>
							</div>
						</div>
EOT;

$i++;
        if ($i == 10) break;
    }
}