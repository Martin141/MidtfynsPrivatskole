<?php 
require_once("db_con.php");
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php include_once("includes/include_css.html");?>
    <!-- CSS for Login -->
    <link rel="stylesheet" href="libs/css/login.css">
    

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/aulo-mp-icon.png">

    <title>Midtfyns Privatskole - Netcheck</title>
</head>
<header>
    <?php include_once("includes/navbar.php");?>
</header>

<body>

<div class="container">
        <div class="login-clean">
            <form method="post">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="fas fa-user-lock"></i>
                    <h3><i class="fas fa-crow"></i>AULO</h3>
                </div>
                <div class="form-group"><i class="fas fa-user"></i><input class="form-control" type="username" name="username" placeholder="Brugernavn" />
                </div>
                <div class="form-group"><i class="fas fa-key"></i><input class="form-control" type="password" name="password"
                        placeholder="Kodeord" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log Ind</button></div><a
                    class="forgot" href="#">Glemt din kode? Klik her</a>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
<?php 
require_once("includes/scripts.html");
?>