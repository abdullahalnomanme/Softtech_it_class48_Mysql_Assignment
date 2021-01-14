<?php
// Header Link 
require_once('header.php');
// Header Link End

// config Link 
require_once('config.php');
// config Link End

function email_exists(){
    global $connection;
    global $email;
    $query = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($query) == 1){
        return true;
    }
}


?>