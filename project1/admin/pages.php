<?php
require_once("config.php");

session_start();

if(!isset($_SESSION['success'])){
    $_SESSION['error'] = "Please Login";
    header("location:../login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Heading  -->
    <div class="bg-info text-uppercase text-center py-3">
    <h2>All Pages</h2>
    </div>

    <!-- Main content  -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left-sidebar text-uppercase my-5">
                    <h3 class="text-center bg-info">Sidebar</h3>
                    <div class="admin-pages">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="add-page.php">Add New Page</a></li>
                            <li><a href="pages.php">All Pages</a></li>
                            <li>
                                <a class="nav-link text-danger" href="../logout.php">logout</a>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="main-content my-5">
                    <h3 class="text-center bg-info text-uppercase">Content</h3>
                    <div class="p-3">
                        <ul>
                            <?php $query = mysqli_query($connection, "SELECT * FROM pages");?>
                            <?php while($row = mysqli_fetch_assoc($query)): ?>
                                <li><h3><a href="edit.php<?php echo $row['url']; ?>"><?php echo $row['pagetitle'];?></a></h3></li>
                                <li><?php echo $row['pagecontent'];?></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
