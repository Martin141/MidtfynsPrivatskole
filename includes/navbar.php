<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="home">
        <img src="libs/img/aulo-icon.png" alt="AULO">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
                <p class="nav-link"><?php echo "Velkommen ".$_SESSION['fullname']; ?></p>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="home">Hjem</a>
            </li>
            <?php if ($_SESSION['loggedin']){
                echo "<li class='nav-item'>
                <a class='nav-link' href='logout.php'>Log ud</a>
            </li>";
            }?>

            <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
            <!-- <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="home">Hjem</a>
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#"></a>
                </div>
            </li>Smaller devices menu END -->

        </ul>
    </div>
</nav><!-- NavBar END -->