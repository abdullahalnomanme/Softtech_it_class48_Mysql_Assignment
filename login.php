<!-- Header Link  -->
<?php

session_start();

require_once('header.php');
?>

<!-- Navbar link  -->
<?php
require_once('nav.php');
?>

<?php
// require_once('functions.php');
require_once('config.php');


if(isset($_POST['login'])){
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $result = mysqli_query($connection, "SELECT * FROM users WHERE email_address='$email_address'");

    if(mysqli_num_rows($result) == 1){
        $query = mysqli_query($connection, "SELECT password FROM users WHERE email_address ='$email_address'");

        $row = mysqli_fetch_assoc($query);

        if($password == $row['password']){
            $_SESSION['success'] = 'Logged in';
        }
        
    }else{
        echo "Email does not match";
    }
}

?>

    <section class="content m-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                <div class="p-5">
                    <?php if(isset( $_SESSION['success'])):?>
                        <h5><?php echo $_SESSION['success']; ?></h5>
                    <?php endif;?>
                </div>
                    <div class="card">
                        <div class="card-header text-center bg-info text-white">
                            <h3>Login</h3>
                        </div>
                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="email_address">Email Address</label>
                                <input type="email" name="email_address" class="form-control" id="email_address">
                                
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                    
                            </div>
                            <button type="submit" class="btn btn-info" name="login">Login</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

<!-- Footer Page  -->
<?php
require_once('footer.php');
?>
