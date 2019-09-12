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
            <div class="col-sm-6">

            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">


                        <div class="table-responsive">
                            <table class="table table-colored table-centered table-inverse m-0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                        
                                    <!-- <tr>
                                        <td>
                                            <a href="trash-posts.php?pid=<?php echo htmlentities($row['postid']); ?>&&action=restore" onclick="return confirm('Do you really want to restore ?')"> <i class="ion-arrow-return-right" title="Restore this Post"></i></a>
                                            &nbsp;
                                            <a href="trash-posts.php?presid=<?php echo htmlentities($row['postid']); ?>&&action=perdel" onclick="return confirm('Do you really want to delete ?')"><i class="fa fa-trash-o" style="color: #f05050" title="Permanently delete this post"></i></a>
                                        </td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container -->
</section>

<?php
include '../../../template/footer.php';
?>