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
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="#">Company Name</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li role="presentation" class="nav-item"><a class="nav-link active" href="#">First Item</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#">Dropdown </a>
                        <div role="menu" class="dropdown-menu"><a role="presentation" class="dropdown-item" href="#">First Item</a><a role="presentation" class="dropdown-item" href="#">Second Item</a><a role="presentation" class="dropdown-item" href="#">Third Item</a></div>
                    </li>
                </ul><span class="navbar-text actions"><a class="login" href="#">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
        </div>
    </nav>
    <div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email" /></div>
            <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password" /></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log Ind</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>

</body>
<?php 
require_once("includes/scripts.html");
?>