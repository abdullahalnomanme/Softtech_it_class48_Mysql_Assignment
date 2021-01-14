<?php
session_start();
require_once('config.php');
$page = isset($_GET['page'])?$_GET['page'] : $_GET['page']=5427;
$query = mysqli_query($connection, "SELECT * FROM pages WHERE pageid='$page'");
$queryInfo = mysqli_fetch_assoc($query)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Multi-Blue by Bryant Smith</title>
</head>

<body>
    <div id="page">
        <div id="pagetop">
            <h1>Multi-Blue</h1>
            <div class="links">
                <ul>      
                    <?php if(!isset($_SESSION['success'])):?>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="logout.php">logout</a>
                        </li>
                        <li><a href="profile.php">Profile</a></li>
                    <?php endif; ?>
                    <li><a href="admin/add-page.php">Admin</a></li>
                    <?php $query = mysqli_query($connection, "SELECT * FROM pages order by id desc");?>
                    <?php while($row = mysqli_fetch_assoc($query)): ?>
                        <li>
                            <a href="<?php echo $row['url']; ?>">
                                <?php echo $row['pagetitle'];?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul> 	
            </div>
        </div>
        
        <div id="header">Insert slogan here, or leave it blank.</div>
  
        <div id="main">
            <div class="content">
                <div class="main_top">
                    <h1>
                        <?php 
                        echo isset($queryInfo['pagetitle'])? $queryInfo['pagetitle']: '' ;
                        ?>
                    </h1>
                </div>
                <div class="main_body">
                    <?php 
                        echo isset($queryInfo['pagecontent'])? $queryInfo['pagecontent']: '' ;
                    ?>
                </div>
                
            </div>
            <div class="clear">&nbsp;</div>
        </div>
        <div id="footer">
            <p>
            <a href="http://www.bryantsmith.com/template">xhtml template</a> by <a href="http://www.bryantsmith.com">web page designer</a></p>
        </div>        
    </div>
</body>
</html>
