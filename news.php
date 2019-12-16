<?php
include_once("db_con.php");

if ($_SESSION['loggedin'] == false) {
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
  <link rel="stylesheet" href="libs/css/main.css">

  <!-- Icon - #Note: Change to a proper icon -->
  <link rel="icon" href="libs/img/crow-solid.png">

  <title>Midtfyns Privatskole - Nyheder</title>

<body>
  <?php include_once("includes/navbar.php"); ?>

  <div class="container">
    <div class="row">

      <!-- Tab 2 -->
      <div class="col-lg-16">
        <h3 class="white-text"><i class="fas fa-newspaper"></i> Alle nyheder</h3>
        <div class="list-group">
          <!-- Query start -->
          <?php
          $curl = curl_init();

          curl_setopt_array($curl, array(
            CURLOPT_URL => _API_URL . _GET_NEWS,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2TLS,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "cache-control: no-cache"
            ),
          ));

          $json_data = curl_exec($curl);
          $err = curl_error($curl);
          $data = json_decode($json_data, true);


          curl_close($curl);
          if ($data == true) {
            
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
          } else {
            echo "<a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>
            <div class='d-flex w-100 justify-content-between'>
              <h5 class='mb-1'>Oops!</h5>
              <small></small>
            </div>
            <p class='mb-1'>Der var et problem med at vise nyhederne. Vi arbejder på at fixe det!</p>
            <small>ERROR: " . $err . "</small>
          </a>";
          }

          ?>
        </div>
      </div>
      <!-- /Tab 2 -->


  </div>
  <footer>
  <p style="visibility: hidden;">test1</p>
  <p style="visibility: hidden;">test2</p>
</footer> 
</body>
</html>
<?php
require_once("includes/scripts.html");
?>