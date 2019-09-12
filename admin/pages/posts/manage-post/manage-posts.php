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

                                <?php
                                $query = mysqli_query($con, "select tblposts.id as postid,tblposts.PostTitle as title,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 ");
                                $rowcount = mysqli_num_rows($query);
                                if ($rowcount == 0) {
                                    ?>
                                <tr>

                                    <td colspan="4" align="center">
                                        <h3 style="color:red">No record found</h3>
                                    </td>
                                <tr>
                                    <?php
                                    } else {
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                <tr>
                                    <td><b><?php echo htmlentities($row['title']); ?></b></td>
                                    <td><?php echo htmlentities($row['category']) ?></td>
                                    <td><?php echo htmlentities($row['subcategory']) ?></td>

                                    <td><a href="edit-post.php?pid=<?php echo htmlentities($row['postid']); ?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a>
                                        &nbsp;<a href="manage-posts.php?pid=<?php echo htmlentities($row['postid']); ?>&&action=del" onclick="return confirm('Do you reaaly want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                </tr>
                                <?php }
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container -->
</section>

<?php
include '../../../template/footer.php';
?>