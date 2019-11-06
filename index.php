<?php 
//require_once("db_con.php");
//If user is logged in, send them 
?>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php include_once("includes/include_css.html");
    
        
    ?>
    <!-- CSS for Login -->
    <link rel="stylesheet" href="libs/css/login.css">


    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/crow-solid.png">

    <title>Midtfyns Privatskole - Log ind</title>
</head>
<header>
    <?php include_once("includes/navbar.php");?>
</header>


<body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">


                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <!-- Tab links -->
                            <div class="tab" class="text-left">
                                <button class="tablinks" onclick="changeTab(event, 'Aulo')"
                                    id="defaultOpen">Skolelogin</button>
                                <button class="tablinks" onclick="changeTab(event, 'Parent')">Forældrelogin</button>
                            </div>
                            <div class="col-lg-10 col-xl-7 mx-auto">

                                <!-- Aulo login -->
                                <div id="Aulo" class="tabcontent">
                                    <div class="blue-icon text-center">
                                        <h3><i class="fas fa-crow"></i>AULO</h3>
                                    </div>
                                    <form action="auth.php" method="post-aulo">
                                        <div class="form-group mb-3">
                                            <div class="blue-icon"> <i class="fas fa-user-lock"></i> <input
                                                    id="inputEmail" type="username" name="username"
                                                    placeholder="Brugernavn" required="" autofocus=""
                                                    class="form-control rounded-pill border-0 shadow-sm px-4">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="blue-icon"> <i class="fas fa-key"></i></i><input
                                                    id="inputPassword" type="password" name="password"
                                                    placeholder="Kodeord" required=""
                                                    class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input id="customCheck1" type="checkbox" checked
                                                class="custom-control-input">
                                            <label for="customCheck1" class="custom-control-label">Husk kode</label>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log
                                            ind</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /Aulo login -->

                            <!-- Parent login -->
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <div id="Parent" class="tabcontent">
                                    <div class="blue-icon text-center">
                                        <h3><i class="fas fa-crow"></i>Forældre login + AULO</h3>
                                    </div>
                                    <form action="auth.php" method="post-parent">
                                        <div class="form-group mb-3">
                                            <div class="blue-icon"> <i class="fas fa-user-lock"></i> <input
                                                    id="inputEmail" type="username" name="username"
                                                    placeholder="Brugernavn" required="" autofocus=""
                                                    class="form-control rounded-pill border-0 shadow-sm px-4">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="blue-icon"> <i class="fas fa-key"></i></i><input
                                                    id="inputPassword" type="password" name="password"
                                                    placeholder="Kodeord" required=""
                                                    class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input id="customCheck1" type="checkbox" checked
                                                class="custom-control-input">
                                            <label for="customCheck1" class="custom-control-label">Husk kode</label>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Log
                                            ind</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- /Parent login -->
                    </div>

                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
    </div>
</body>

</html>
<?php require_once("includes/scripts.html"); ?>

        <script>
    function changeTab(evt, loginTab) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(loginTab).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>