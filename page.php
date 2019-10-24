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
    <!-- CSS -->
    <link rel="stylesheet" href="libs/css/main.css">
    <link rel="stylesheet" href="libs/css/footer.css">
    <link rel="stylesheet" href="libs/css/navbar.css">
    <link rel="stylesheet" href="libs/css/page.css">

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
                                    <i class="zmdi zmdi-view-dashboard"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-link"></i> Shortcuts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-widgets"></i> Overview
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-calendar"></i> Events
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-info-outline"></i> About
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i> Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-comment-more"></i> Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Main -->
            <div class="col-md-8">

            </div>

        </div>
    </div>

</body>

</html>
<?php 
require_once("includes/scripts.html");
?>