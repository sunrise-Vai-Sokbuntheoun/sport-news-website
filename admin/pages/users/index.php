<?php
session_start();
?>
<?php
include '../../config.php';
include '../../assets/php-reference/transaction-db.php';
include '../../assets/php-reference/functions.php';
is_login();
include '../../template/header.php';
?>

<section class="content-header">
    <h1>
        User List
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">Users</a>
        </li>
        <li>
            <a href="#">User</a>
        </li>
    </ol>
</section>

<section class="content">
        <div class="box">
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Username</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php 
                            $user = run_query('select * from tbluser','Error 404!');
                            foreach($user as $u){    
                        ?>
                            <tr>
                                <td><?php echo $u['id']; ?></td>
                                <td><?php echo $u['firstname']; ?></td>
                                <td><?php echo $u['lastname']; ?></td>
                                <td><?php echo $u['email']; ?></td>
                                <td><?php echo $u['phone']; ?></td>
                                <td><?php echo $u['username']; ?></td>
                                <td><img src="<?php //echo $u['photos']; ?>" alt="profile picture"></td>
                                <td><a href="#" title="Delete" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>

<?php
include '../../template/footer.php';
?>