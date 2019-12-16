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

    <title>Midtfyns Privatskole - Kontakt</title>

<body>
    <?php include_once("includes/navbar.php"); ?>
    <header>
        <p style="visibility: hidden;">test1</p>
        <p style="visibility: hidden;">test2</p>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Inge Bringer</h4>
                        <p class="card-text"><b> E-mail :</b> ib@mp.dk</p>
                        <p class="card-text"><b> Tlf. Nr. :</b> 5050XXXX</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Ace Ventura</h4>
                        <p class="card-text"><b> E-mail :</b> jc@mp.dk</p>
                        <p class="card-text"><b> Tlf. Nr. :</b> 2020XXXX</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Mette Lise Henriksen</h4>
                        <p class="card-text"><b> E-mail :</b> mlh@mp.dk</p>
                        <p class="card-text"><b> Tlf. Nr. :</b> 1234XXXX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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