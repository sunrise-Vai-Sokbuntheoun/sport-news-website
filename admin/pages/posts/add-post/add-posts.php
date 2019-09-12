<?php
session_start();
?>
<?php
include '../../../config.php';
include '../../../assets/php-reference/functions.php';
is_login();
include '../../../template/header.php';
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
            <div class="col-md-10 col-md-offset-1">
                <div class="p-6">
                    <div class="">
                        <form name="addpost" method="post" enctype="multipart/form-data">
                            <div class="form-group m-b-20">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter title" required>
                            </div>



                            <div class="form-group m-b-20">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
                                    <option value="">Select Category </option>
                                    <?php
                                    // Feching active categories
                                    // $ret = mysqli_query($con, "select id,CategoryName from  tblcategory where Is_Active=1");
                                    // while ($result = mysqli_fetch_array($ret)) {
                                    ?>
                                    <option value="<?php //echo htmlentities($result['id']); 
                                                    ?>"><?php // echo htmlentities($result['CategoryName']); 
                                                        ?></option>
                                    <?php //} 
                                    ?>

                                </select>
                            </div>

                            <!-- <div class="form-group m-b-20">
                                <label for="exampleInputEmail1">Sub Category</label>
                                <select class="form-control" name="subcategory" id="subcategory" required>

                                </select>
                            </div> -->


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
                                        <textarea id="postdescription" name="postdescription" required></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
                                        <input type="file" class="form-control" id="postimage" name="postimage" required>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
                        </form>
                    </div>
                </div> <!-- end p-20 -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container -->
</section>

<?php
include '../../../template/footer.php';
?>