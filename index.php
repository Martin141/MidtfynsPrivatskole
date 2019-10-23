<?php 
//Include DB_CON osv...
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="libs/css/login.css">

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/aulo-mp-icon.png">

    <title>Midtfyns Privatskole - Netcheck</title>
    </head> <body>
        <?php include_once("includes/navbar.php");?>
        <div class="container">

            <div class="login-dark">
                <form method="post">
                    <h2 class="sr-only">Log ind</h2>
                    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                    <div class="form-group"><input class="form-control" type="username" name="username" placeholder="Brugernavn" />
                    </div>
                    <div class="form-group"><input class="form-control" type="password" name="password"
                            placeholder="Password" /></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log Ind</button>
                    </div><a class="forgot" href="#">Glemt brugernavn eller kode? Klik her!</a>
                </form>
            </div>
        </div>
        </body>

</html>
<?php 
require_once("includes/scripts.html");
?>