<?php
// functions Link 
require_once('functions.php');
// functions Link End


if(!isset($_SESSION['success'])){
    $_SESSION['error'] = "Please Login";
    header("location:login.php");
    die();
}

$select = mysqli_query($connection, "SELECT * FROM users");


?>

<!-- Main content  -->
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <h3 class="text-center p-1 bg-info text-uppercase">Members</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">password</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($query = mysqli_fetch_assoc($select)): ?>
                    <tr>
                        <th scope="row"><?php echo $query['id'];?></th>
                        <td><?php echo $query['fname'];?></td>
                        <td><?php echo $query['lname'];?></td>
                        <td><?php echo $query['email'];?></td>
                        <td><?php echo $query['password'];?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>








<?php
require_once('footer.php')
?>