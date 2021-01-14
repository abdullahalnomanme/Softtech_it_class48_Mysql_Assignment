
<!-- Header Link  -->
<?php
require_once('header.php');
?>

<!-- Navbar link  -->
<?php
require_once('nav.php');
?>




<?php


$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db = "ourproject";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db);



// class Connect{
//    public function db(){
//         $db_host = "localhost";
//         $db_user = "root";
//         $db_pass = "";
//         $db = "ourproject";
    
//         return $connection = mysqli_connect($db_host, $db_user, $db_pass, $db);
//     }
    
// }

// $project = new Connect();




?>

<!-- Footer Page  -->
<?php
require_once('footer.php');
?>
