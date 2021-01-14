<!-- Header Link  -->
<?php
require_once('header.php');
?>

<!-- Navbar link  -->
<?php
require_once('nav.php');
?>





<?php

// require_once('functions.php');
// $project->connection();

if(file_exists(dirname(__FILE__).'/config.php')){
    require_once(dirname(__FILE__).'/config.php');
}

if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];

    $error = array();

    if($first_name == NULL){
        $error['first_name'] = "First Name is mising";
    }
    if($last_name == NULL){
        $error['last_name'] = "Last Name is mising";
    }
    if($email_address == NULL){
        $error['email_address'] = "Email Address is mising";
    }
    if($password == NULL){
        $error['password'] = "Password is mising";
    }
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
        $error['password'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    }
    if(count($error) == 0){
        $insert = "INSERT INTO users (first_name, last_name, email_address, password) VALUES ('$first_name','$last_name','$email_address','$password')";
        $query = mysqli_query($connection,$insert);
        $success = "You Have been Registerd! Please <a href='login.php'>Login</a>";
    }
    else{
        echo count($error);
    }
}


?>


    <section class="content m-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <div class="card">
                        <div class="card-header text-center bg-info text-white">
                            <h3>Register</h3>
                            <small>Class 48 MySql Project</small>
                        </div>
                        <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name">
                                <small class="text-danger">
                                    <?php echo isset( $error['first_name'])? $error['first_name']: "" ;  ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name">
                                <small class="text-danger">
                                    <?php echo isset( $error['last_name'])? $error['last_name']: "" ;  ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="email_address">Email Address</label>
                                <input type="email" name="email_address" class="form-control" id="email_address">
                                <small class="text-danger">
                                    <?php echo isset( $error['email_address'])? $error['email_address']: "" ;  ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                                <small class="text-danger">
                                    <?php echo isset( $error['password'])? $error['password']: "" ;  ?>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-info" name="register">Register</button><br/>
                            <?php if(isset($success)) {?>
                                <p class="alert alert-success mt-2">
                                    <?php echo $success; ?> 
                                </p>
                            <?php }?>
                            
                            <?php if(!isset($success)) {?>
                                <p class="alert-success my-3 p-2">If you have already an account please <a href="login.php">Login</a></p>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </section>


<!-- Footer Page  -->
<?php
require_once('footer.php');
?>
