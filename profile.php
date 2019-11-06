<?php 
require_once("db_con.php");
//If user is logged in, send them 
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php include_once("includes/include_css.html"); ?>
    <!-- CSS for Login -->
    <link rel="stylesheet" href="libs/css/login.css">
    <link rel="stylesheet" href="libs/css/profile.css">

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/crow-solid.png">

    <title>Midtfyns Privatskole - Profil</title>
</head>
<header>
    <?php include_once("includes/navbar.php");?>
</header>
<body>
  <?php include_once("includes/navbar.php"); ?>

  <div class="container">
  <div class="row">

<!-- Tab 1 -->
<div class="col-md-4">
  <h3>Din profil</h3>
  <div class="card">
  <img src="https://via.placeholder.com/350x150" alt="Image missing" style="width:100%">
  <h1><?php echo $_SESSION['name'] ?><br></h1>
  <p class="title">Forældre</p>
  <p>lmao</p>
  <a href="#"><i class="fas fa-crow"></i>ljnao</a>
  <a href="#"><i class="fas fa-crow"></i>lmao</a>
</div>
</div>
<!-- /Tab 1 -->

<!-- Tab 2 -->
<div class="col-md-4">
  <h3>Nyheder</h3>
  <div class="list-group">
    du
  </div>
</div>
<!-- /Tab 2 -->

  </div>

</body>
</html>
<?php
require_once("includes/scripts.html");
require_once("includes/home_sidebar.html");
?>