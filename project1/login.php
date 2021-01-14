<?php

// functions Link 
require_once('functions.php');
// functions Link End


if(isset($_SESSION['success'])){
    header("location:index.php");
    die();
}




if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    if(email_exists()){
        $password_query = mysqli_query($connection, "SELECT password FROM users WHERE email='$email'");
        $row = mysqli_fetch_assoc($password_query);

        if($password == $row['password']){
            $_SESSION['success'] = "Login successfull!";
            header("location: index.php");
        }
         else{
            $_SESSION['error'] = "Your password does not exist in your data base! please <a href='register.php'>Register</a>";
         }
    }
    else{
        $_SESSION['error'] = "your Email does not exist in your data base! please <a href='register.php'>Register</a>";
    }
}

?>

<!-- Main content  -->
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <h3 class="text-center p-1 bg-info text-uppercase">Login</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <button type="submit" name="login" class="btn btn-info text-uppercase mb-3">Login</button>
                <?php if(isset( $_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                        ?>
                    </div>
                    <?php else:?>
                        <div class="alert alert-info">
                    If you are not a account please <a href="register.php">Register</a</p>
                    </div>
                <?php endif ?>
            </form>
        </div>
    </div>
</div>








<?php
require_once('footer.php')
?>