<?php 
//Include DB_CON osv...

//If no login, get OUT!
?>
<html>

<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

  <?php require_once("includes/include_css.html");?>
  <!-- This page's CSS -->
  <link rel="stylesheet" href="libs/css/home.css">

  <!-- Icon - #Note: Change to a proper icon -->
  <link rel="icon" href="libs/img/aulo-mp-icon.png">

  <title>Midtfyns Privatskole - Hjem</title>

<body>
  <?php include_once("includes/navbar.php");?>

  <header>
    <h1></h1>
  </header>
  <div class="container">
    <div class="row">

      <!-- Tab 1 -->
      <div class="col-md-4">
        <h3>Klasse</h3>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small>Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
        </div>
      </div>
      <!-- /Tab 1 -->

      <!-- Tab 2 -->
      <div class="col-md-4">
        <h3>Nyheder</h3>
      </div>
      <!-- /Tab 2 -->
      <!-- Tab 3 -->
      <div class="col-md-4">
        <ul class="list-group">
          <h3>Tools</h3>
          <li class="list-group-item"><a href="#"><i class="fas fa-user"></i> Profil</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-archive"></i> Lektier</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-clock"></i> Skema</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-calendar-alt"></i> Kalender</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-info-circle"></i> Kontakt</li></a>
        </ul>
      </div>
    </div>
    <!-- /Tab 3 -->
  </div>

</body>

</html>
<?php 
require_once("includes/scripts.html");
require_once("includes/home_sidebar.html");
?>