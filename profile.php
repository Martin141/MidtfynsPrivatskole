<?php 
require_once("db_con.php");

if ($_SESSION['loggedin'] == false) {
  header("location:index.php");
  die("Log ind sessions required");
}
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php include_once("includes/include_css.html"); ?>
    <!-- CSS for Login -->
    <link rel="stylesheet" href="libs/css/main.css">
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
  <h3 class="white-text">Din profil</h3>
  <div class="card">
  <img src="https://st2.depositphotos.com/4196725/6216/i/950/depositphotos_62166835-stock-photo-young-cool-black-man-looking.jpg" alt="Image missing" style="width:100%">
  <h1><?php echo $_SESSION['fullname'];  ?><br></h1>
  <p class="title"><?php echo $_SESSION['barn']; ?></p>
  <p><?php echo "Brugernavn: ".$_SESSION['name']; ?></p>
  <p><?php echo "Rolle: ".$_SESSION['role']; ?></p>
  <p><?php echo "Tilhører hold: ".$_SESSION['class']; ?></p>
  <a href="#"><i class="fas fa-phone"></i> <?php echo $_SESSION['tlf_nr']; ?></a>
  <a href="#"><i class="fas fa-home"></i> Adresse: <?php echo $_SESSION['adress']; ?></a>
</div>
</div>
<!-- /Tab 1 -->

<!-- Tab 2 -->
<div class="col-md-4">
  <h3 class="white-text">Lektier for barn...</h3>
  <div class="list-group">
    Lektier...
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