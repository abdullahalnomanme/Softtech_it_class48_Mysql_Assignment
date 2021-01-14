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
$row = mysqli_fetch_assoc($select);

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
            <div class="card-header text-center bg-info p-2 text-uppercase text-white">
        <h3> Welcom to Dashboard</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">Name: <?php echo $row['fname']." ".$row['lname'];?></h5>
                <h5 class="card-title">Users Id: <?php echo $row['id'];?></h5>
                <h5 class="card-title">Email: <?php echo $row['email'];?></h5>
            </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php')
?>