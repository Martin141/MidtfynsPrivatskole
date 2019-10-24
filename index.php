<?php 
//Include DB_CON osv...
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <!-- CSS for Login -->
    <link rel="stylesheet" href="libs/css/login.css">
    <link rel="stylesheet" href="libs/css/main.css">
    <link rel="stylesheet" href="libs/css/footer.css">
    <link rel="stylesheet" href="libs/css/navbar.css">

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/aulo-mp-icon.png">

    <title>Midtfyns Privatskole - Netcheck</title>
</head>
<header>
    <?php include_once("includes/navbar.php");?>
</header>

<body>

    <div class="container">
        <div class="row">
            <div class="login-dark">
                <form method="post">
                    <h2 class="sr-only">Log ind</h2>
                    <div class="illustration"><i class="fas fa-user-lock"></i>
                        <h3>AULO</h3>
                    </div>
                    <div class="form-group"><input class="form-control" type="username" name="username"
                            placeholder="Brugernavn" />
                    </div>
                    <div class="form-group"><input class="form-control" type="password" name="password"
                            placeholder="Password" /></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log Ind</button>
                    </div><a class="forgot" href="#">Glemt brugernavn eller kode? Klik her!</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
require_once("includes/scripts.html");
?>