<?php
session_start();
// functions Link 
require_once('functions.php');
// functions Link End


session_destroy();
// $_SESSION =  array();

header("location:login.php");


require_once('footer.php')
?>