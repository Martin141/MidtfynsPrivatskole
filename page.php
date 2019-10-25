<?php 
//Include DB_CON osv...

//If no login, get OUT!
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php require_once("includes/include_css.html");?>
    <!-- This page's CSS -->
    <link rel="stylesheet" href="libs/css/page.css">

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/aulo-mp-icon.png">

    <title>Midtfyns Privatskole - Netcheck</title>
</head>
<header>
    <?php require_once("includes/navbar.php");?>
</header>

<body>

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="viewport">
                    <!-- Sidebar -->
                    <div id="sidebar">
                        <header>
                            <a href="#">AULO</a>
                        </header>
                        <ul class="nav">
                            <li>
                                <a href="#">
                                <i class="fab fa-dashcube"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fas fa-id-card"></i> Profil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-book"></i> Lektier
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="far fa-calendar-alt"></i> Kalender
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fas fa-clock"></i> Skema
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fas fa-envelope"></i> Kontakt
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="fas fa-info"></i> Om os
                                </a>
                            </li>
                            <!-- For admins -->
                            <li>
                                <a href="#">
                                <i class="fas fa-user-plus"></i> Opret
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Main -->
            <div class="col-md-8">
            <div class="row">
            <div class="col-md-8 mb-5">
                <h2 id="aboutus">What We Do</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                    soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam.
                    Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur
                    magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt
                    voluptate. Voluptatum.</p>
            </div>

            <div class="col-md-8 mb-5">
                <h2>Our history</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi
                    soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam.
                    Repellat explicabo, maiores!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur
                    magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt
                    voluptate. Voluptatum.</p>
            </div>
            </div>
        </div>

        </div>
    </div>

</body>

</html>
<?php 
require_once("includes/scripts.html");
?>