<?php
// functions Link 
require_once('functions.php');
// functions Link End

if(isset($_SESSION['success'])){
    header("location:index.php");
    die();
}


if(isset($_POST['register'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(!email_exists()){

        if($email == NULL || $password == NULL){
            $_SESSION['error'] = "please enter Your Information";
        }else{    
            $insert = mysqli_query($connection, "INSERT INTO users (fname, lname, email, password) VALUES('$fname', '$lname', '$email', '$password')");
            $_SESSION['success'] = "Successfully Registered!";
            header("location:index.php");
            }
    }else{
        $_SESSION['error'] = "Email is already exists";
    }

}


?>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3 class="text-center p-1 bg-info text-uppercase">Register</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <button type="submit" name="register" class="btn btn-info text-uppercase mb-2">Register</button>

                <?php if(isset( $_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                        echo  $_SESSION['error']; 
                        unset( $_SESSION['error']);
                        ?>
                    </div>
                    <?php else: ?>
                    <div class="alert alert-info">
                    If you Have a account please <a href="login.php">Login</a</p>
                    </div>
                <?php endif; ?>

            </form>
        </div>
    </div>
</div>




<?php
require_once('footer.php')
?>