<!-- Header Link  -->
<?php
require_once('header.php');
?>

<!-- Navbar link  -->
<?php
require_once('nav.php');
?>



<?php


require_once('config.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];

 $query = mysqli_query($connection,"SELECT * FROM users WHERE email_address='$email'");
 $result = mysqli_num_rows($query);



 if( $result >= 1){
    echo "This Email address is Alredy Exist! please try another email";
 }
 else{
     echo "You are registerd! please login";
 }
}

?>


<?php if(isset($result)): ?>
    <h2><?php  print_r($result);?></h2>
<?php endif; ?>
<form action="#" method="POST">
    <input type="email" name="email">
    <input type="submit" name="submit" value="Submit">
</form>



</div>


<!-- Footer Page  -->
<?php
require_once('footer.php');
?>
