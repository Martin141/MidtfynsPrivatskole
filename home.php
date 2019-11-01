<?php 
//Include DB_CON osv...

//If no login, get OUT!
?>
<html>

<head>
<<<<<<< HEAD
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

  <?php require_once("includes/include_css.html");?>
  <!-- This page's CSS -->
  <link rel="stylesheet" href="libs/css/home.css">

  <!-- Icon - #Note: Change to a proper icon -->
  <link rel="icon" href="libs/img/aulo-mp-icon.png">

  <title>Midtfyns Privatskole - Hjem</title>

<body>
  <?php include_once("includes/navbar.php");?>

  <header>
    <h1></h1>
  </header>
  <div class="container">
    <div class="row">

      <!-- Tab 1 -->
      <div class="col-md-4">
        <h3>Klasse</h3>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small>Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">List group item heading</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
              blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
          </a>
        </div>
      </div>
      <!-- /Tab 1 -->

      <!-- Tab 2 -->
      <div class="col-md-4">
        <h3>Nyheder</h3>
      </div>
      <!-- /Tab 2 -->
      <!-- Tab 3 -->
      <div class="col-md-4">
        <ul class="list-group">
          <h3>Tools</h3>
          <li class="list-group-item"><a href="#"><i class="fas fa-user"></i> Profil</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-archive"></i> Lektier</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-clock"></i> Skema</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-calendar-alt"></i> Kalender</li></a>
          <li class="list-group-item"><a href="#"><i class="fas fa-info-circle"></i> Kontakt</li></a>
        </ul>
      </div>
    </div>
    <!-- /Tab 3 -->
  </div>
=======
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php require_once("includes/include_css.html");?>
    <!-- This page's CSS -->
    <link rel="stylesheet" href="libs/css/home.css">

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/aulo-mp-icon.png">

    <title>Midtfyns Privatskole - Hjem</title>

<body>

<div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Sidebar Template</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://www.country-dialing-codes.net/img/png-country-4x2-fancy-res-1280x960/gb.png" alt="English" width="28px" height="18px">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                    <li>
                                        <a href="#">
                                            <img src="http://www.country-dialing-codes.net/img/png-country-4x2-flat-res-640x480/gf.png" alt="Français" width="28px" height="18px">
                                            <span>Français</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://lorempixel.com/100/100/people/9/" class="img-responsive img-thumbnail img-circle"> Username</a>
                                <ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#">Profil edition</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Management</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                            <span class="sidebar-icon"><i class="fa fa-newspaper-o"></i></span>
                            <span class="sidebar-title">Blog</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Posts</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Comments</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="sidebar-icon"><i class="fa fa-terminal"></i></span>
                            <span class="sidebar-title">Console</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        <main id="page-content-wrapper" role="main">
        </main>
    </div> 

    <!-- MAIN -->
    <div class="col">
        
        <h1>
            Collapsing Menu
            <small class="text-muted">Version 2.1</small>
        </h1>
        
        
        <div class="card">
            <h4 class="card-header">Lmao</h4>
            <div class="card-body">
                <ul>
                    <li>Test</li>
                    <li>Test 2</li>
                </ul>
            </div>
        </div>
       


    </div><!-- Main Col END -->
    
</div><!-- body-row END -->

>>>>>>> 84b3a69f2972ea9c44d86c3b8a3706018f1dcac4

</body>

</html>
<?php 
require_once("includes/scripts.html");
require_once("includes/home_sidebar.html");
?>