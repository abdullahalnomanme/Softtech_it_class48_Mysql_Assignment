<!-- Header Link  -->
<?php
require_once('header.php');
?>

<!-- Navbar link  -->
<?php
require_once('nav.php');
?>


<?php
require_once('functions.php');
$project->connection();


if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_addess = $_POST['email_addess'];
    $password = $_POST['password'];

    $error = array();

    if($first_name == NULL){
        $error['first_name'] = "First Name is mising";
    }
    if($last_name == NULL){
        $error['last_name'] = "Last Name is mising";
    }
    if($email_addess == NULL){
        $error['email_addess'] = "Email Address is mising";
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
        $insert = "INSERT INTO users (first_name, last_name, email_address, password) VALUES ('$first_name','$last_name','$email_addess','$password')";
       $mysqli = mysqli_query($db_connect,$insert);
       $success = "You Have been Registerd!";
    }
    else{
        echo count($error);
    }
}


?>




<!-- Footer Page  -->
<?php
require_once('footer.php');
?>
