<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySql | Abdullah Al Noman</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<nav class="navbar navbar-expand navbar-light font-weight-bold bg-info">
    <ul class="navbar-nav m-auto text-uppercase">
      <li class="nav-item">
        <a class="nav-link text-uppercase" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">members</a>
      </li>
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
      <?php endif; ?>
    </ul>
  </div>
</nav>

<div class="div mb-5"></div>

