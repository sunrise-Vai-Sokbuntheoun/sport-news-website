<?php
include '../../config.php';
include '../template/my-template.php';
include '../assets/php-reference/transactions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    //link library
    echo link_font();
    echo lib_script("");
    echo lib_css("");
    ?>
    <link rel="stylesheet" href="../assets/css/custom-style1.css">
    <link rel="stylesheet" href="../assets/css/slide-style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/card-pages.css">
    <link rel="stylesheet" href="../assets/css/content-card.css">
    <link rel="stylesheet" href="../assets/css/content-pages.css">
    <script src="../assets/script/slide-style.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport News | <?php echo date('M-d-y') ?></title>
</head>

<body>
    <section id="header">
        <div class="container-fluid bg-warning">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="#"><img src="../assets/images/logos/logo200x200.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="ads">
                            <a href="#"><img src="../assets/images/banner-sponser/ads.gif" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="body">
        <div class="slide_menu">
            <div class="slide-full-width">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#"><i class='fas fa-home'></i> Home</a>
                        </li>
                        <li>
                            <a href="/">Sport category</a>
                            <ul class="sub-menu">
                                <?php $category = run_query('select name from tblcategories where menu_id = 2', 'Error 404!');
                                foreach ($category as $cat) {
                                    ?>
                                <li><a href="http://" target="_blank" rel="noopener noreferrer"><?php echo $cat['name']; ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="btn-next btn-slide-style">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="btn-prev btn-slide-style">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="slide-box">
                    <img src="../assets/images/photos-news/1.JPG" alt="">
                    <div class="title">
                        This is my sister. She is 22ys.
                    </div>
                    <div class="category">
                        Football
                    </div>
                </div>
                <div class="slide-box">
                    <img src="https://images.indianexpress.com/2019/08/ronaldo-759-1.jpg?w=565" alt="">
                    <div class="title">
                        This is my sister. She is 22ys.
                    </div>
                    <div class="category">
                        Volleyball
                    </div>
                </div>
                <div class="slide-box">
                    <img src="https://www.popular.com.kh/wp-content/uploads/2019/06/feature_niboth_03.01.19_01-2.jpg" alt="">
                    <div class="title">
                        This is my sister. She is 22ys.
                    </div>
                    <div class="category">
                        Tennis
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../template/footer.php'; ?>