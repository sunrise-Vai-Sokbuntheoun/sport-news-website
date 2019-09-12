<?php
session_start();
?>
<?php
include '../../config.php';
include '../../assets/php-reference/functions.php';
is_login();
include '../../template/header.php';
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
            <div class="col-sm-6">
                <!---Success Message--->
                <?php if ($msg) { ?>
                <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> <?php echo htmlentities($msg); ?>
                </div>
                <?php } ?>

                <!---Error Message--->
                <?php if ($error) { ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Oh snap!</strong> <?php echo htmlentities($error); ?></div>
                <?php } ?>


            </div>
        </div>

        <?php
        $postid = intval($_GET['pid']);
        $query = mysqli_query($con, "select tblposts.id as postid,tblposts.PostImage,tblposts.PostTitle as title,tblposts.PostDetails,tblcategory.CategoryName as category,tblcategory.id as catid,tblsubcategory.SubCategoryId as subcatid,tblsubcategory.Subcategory as subcategory from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$postid' and tblposts.Is_Active=1 ");
        while ($row = mysqli_fetch_array($query)) {
            ?>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="p-6">
                    <div class="">
                        <form name="addpost" method="post">
                            <div class="form-group m-b-20">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['title']); ?>" name="posttitle" placeholder="Enter title" required>
                            </div>



                            <div class="form-group m-b-20">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
                                    <option value="<?php echo htmlentities($row['catid']); ?>"><?php echo htmlentities($row['category']); ?></option>
                                    <?php
                                        // Feching active categories
                                        $ret = mysqli_query($con, "select id,CategoryName from  tblcategory where Is_Active=1");
                                        while ($result = mysqli_fetch_array($ret)) {
                                            ?>
                                    <option value="<?php echo htmlentities($result['id']); ?>"><?php echo htmlentities($result['CategoryName']); ?></option>
                                    <?php } ?>

                                </select>
                            </div>

                            <div class="form-group m-b-20">
                                <label for="exampleInputEmail1">Sub Category</label>
                                <select class="form-control" name="subcategory" id="subcategory" required>
                                    <option value="<?php echo htmlentities($row['subcatid']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
                                </select>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
                                        <textarea class="summernote" name="postdescription" required><?php echo htmlentities($row['PostDetails']); ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-b-30 m-t-0 header-title"><b>Post Image</b></h4>
                                        <img src="postimages/<?php echo htmlentities($row['PostImage']); ?>" width="300" />
                                        <br />
                                        <a href="change-image.php?pid=<?php echo htmlentities($row['postid']); ?>">Update Image</a>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>

                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Update </button>

                    </div>
                </div> <!-- end p-20 -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container -->
</section>

<?php
include '../../template/footer.php';
?>