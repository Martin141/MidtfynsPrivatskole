<?php
include_once("db_con.php");

if (!$_SESSION['loggedin']) {
    header("location:index.php");
    die("Log ind sessions required");
}
?>
<html>
<?php ?>
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

  <?php require_once("includes/include_css.html"); ?>
  <!-- This page's CSS -->
  <link rel="stylesheet" href="libs/css/home.css">

  <!-- Icon - #Note: Change to a proper icon -->
  <link rel="icon" href="libs/img/crow-solid.png">

  <title>Midtfyns Privatskole - Hjem</title>

<body>
  <?php include_once("includes/navbar.php"); ?>

  <div class="container">
    <div class="row">
    
      <!-- Tab 1 -->
      <div class="col-md-4">
        <h3>Nyeste lektier</h3>
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
        <div class="list-group">
          <!-- Query start -->
          <?php
          $curl = curl_init();

          curl_setopt_array($curl, array(
            CURLOPT_URL => "localhost:8000/API/1/news/all",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "cache-control: no-cache"
            ),
          ));

          $json_data = curl_exec($curl);
          $err = curl_error($curl);
          $data = json_decode($json_data, true);

          curl_close($curl);
          if($data == true){
          foreach ($data as $row) {
            echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>
              <div class='d-flex w-100 justify-content-between'>
                <h5 class='mb-1'>" . $row['title'] . "</h5>
                <small>" . $row['date_created'] . "</small>
              </div>
              <p class='mb-1'>" . substr($row['text'], 0, 200) . " ...</p>
              <small>" . $row['author'] . "</small>
            </a>";
          }
        }
        else{
            echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>
            <div class='d-flex w-100 justify-content-between'>
              <h5 class='mb-1'>Oops!</h5>
              <small></small>
            </div>
            <p class='mb-1'>Der var et problem med at vise nyhederne. Kontakt administratoren!</p>
            <small></small>
          </a>";
          }
          ?>
        </div>
      </div>
      <!-- /Tab 2 -->
      <!-- Tab 3 -->
      <div class="col-md-4">
        <ul class="list-group">
          <h3>Tools</h3>
          <li class="list-group-item"><a href="profile"><i class="fas fa-user"></i> Profil</li></a>
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