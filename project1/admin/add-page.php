<?php
session_start();
require_once('config.php');

if(!isset($_SESSION['success'])){
    $_SESSION['error'] = "Please Login";
    header("location:../login.php");
    die();
}

    if(isset($_POST['createpage'])){
        $pagetitle = isset($_POST['pagetitle']) ? $_POST['pagetitle'] : 'Empty Title';
        $pagecontent =isset( $_POST['pagecontent']) ?  $_POST['pagecontent'] : 'Empty Title';
        $randomnumber = rand(1,100).rand(1,100);
        $url = "?page=".$randomnumber;
         $insert = mysqli_query($connection,"INSERT INTO pages (pagetitle,pagecontent,url,pageid) VALUES ('$pagetitle','$pagecontent','$url',$randomnumber)");

         if($insert){
             $success = "Page Has been Created!";
             header("location: edit.php.$url");
         }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://cdn.tiny.cloud/1/ovyz139yp5myb3dg3vgi76sic31ep1tfhv7ztlpdfd84a539/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="bg-info text-uppercase text-center py-3">
        <h2>Add New Page</h2>
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
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="text" name="pagetitle" class="form-control" placeholder="Page Title" value="">
                            </div>
                            <div class="form-group">
                                <textarea name="pagecontent" class="form-control" cols="30" rows="15" placeholder="Page Content"></textarea>
                            </div>
                            <input type="submit" class="btn btn-info text-uppercase mb-3" name="createpage" value="Create Page">
                            <?php if(isset($success)): ?>
                                <div class="alert alert-success">
                                    <?php echo $success ;?>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Abdullah Al Noman',
   });
  </script>
</body>
</html>
