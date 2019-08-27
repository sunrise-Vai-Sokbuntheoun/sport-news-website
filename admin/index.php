<?php
session_start();
?>
<?php
include 'config.php';
include 'assets/php-reference/functions.php';
is_login();
include 'template/header.php';
?>

<section class="content-header">
    <h1>
        Add Post
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">Post</a>
        </li>
        <li>
            <a href="#">Add Post </a>
        </li>
        <li class="active">
            Add Post
        </li>
    </ol>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <a href="manage-categories.php">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories Listed</p>
                            <?php
                            // $query = mysqli_query($con, "select * from tblcategory where Is_Active=1");
                            // $countcat = mysqli_num_rows($query);
                            ?>

                            <h2><?php // echo htmlentities($countcat); 
                                ?> <small></small></h2>

                        </div>
                    </div>
                </div>
            </a><!-- end col -->
            <a href="manage-subcategories.php">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-layers widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Listed Subcategories</p>
                            <?php
                            // $query = mysqli_query($con, "select * from tblsubcategory where Is_Active=1");
                            // $countsubcat = mysqli_num_rows($query);
                            ?>
                            <h2><?php //echo htmlentities($countsubcat); 
                                ?> <small></small></h2>

                        </div>
                    </div>
                </div><!-- end col -->
            </a>

            <a href="manage-posts.php">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-layers widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Live News</p>
                            <?php
                            // $query = mysqli_query($con, "select * from tblposts where Is_Active=1");
                            // $countposts = mysqli_num_rows($query);
                            ?>
                            <h2><?php //echo htmlentities($countposts); 
                                ?> <small></small></h2>

                        </div>
                    </div>
                </div><!-- end col -->
            </a>


        </div>
        <!-- end row -->

        <div class="row">

            <a href="trash-posts.php">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card-box widget-box-one">
                        <i class="mdi mdi-layers widget-one-icon"></i>
                        <div class="wigdet-one-content">
                            <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Trash News</p>
                            <?php
                            // $query = mysqli_query($con, "select * from tblposts where Is_Active=0");
                            // $countposts = mysqli_num_rows($query);
                            ?>
                            <h2><?php //echo htmlentities($countposts); 
                                ?> <small></small></h2>

                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div> <!-- container -->

</section>

<?php
include 'template/footer.php';
?>