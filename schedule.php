<?php
include_once("db_con.php");

if ($_SESSION['loggedin'] == false) {
    header("location:index.php");
    die("Log ind sessions required");
}

if ($_SESSION['role'] == "undervisere" OR $_SESSION['role'] == "ITPersonale") {
    header("location:home.php");
    die("Skema er for elever og forældre kun...");
}

?>
<html>
<?php ?>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <?php require_once("includes/include_css.html"); ?>
    <!-- this page's CSS -->
    <link rel="stylesheet" href="libs/css/home.css">
    <link rel="stylesheet" href="libs/css/main.css">
    <link rel="stylesheet" href="libs/css/schedule.css">

    <!-- Icon - #Note: Change to a proper icon -->
    <link rel="icon" href="libs/img/crow-solid.png">

    <title>Midtfyns Privatskole - Skema</title>

<body>
    <?php include_once("includes/navbar.php"); ?>

    <div class="container">
        <div class="row">

            <!-- Tab 2 -->
            <div class="col-lg-16">
                <h3 class="white-text"><i class="fas fa-newspaper"></i> Skema</h3>
                <div class="list-group">
                    <!-- Query start -->
                    <?php
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => _API_URL . _GET_SCHEDULE . $_SESSION['class'],
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_TIMEOUT => 10,
                        CURLOPT_SSL_VERIFYHOST => false,
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2TLS,
                        CURLOPT_CUSTOMREQUEST => "GET",
                        CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                        ),
                    ));

                    $json_data = curl_exec($curl);
                    $err = curl_error($curl);
                    $data = json_decode($json_data, true);


                    curl_close($curl);

                    //echo $data;
                    //echo $err;
                    //echo $json_data;

                    $weekday = explode(":", $json_data);

                    $mo = explode(",", $weekday[0]);
                    $tu = explode(",", $weekday[1]);
                    $we = explode(",", $weekday[2]);
                    $th = explode(",", $weekday[3]);
                    $fr = explode(",", $weekday[4]);

                    // echo $mo[0];

                    ?>
                </div>
            </div>
            <!-- /Tab 2 -->


        </div>

        <H1>Skema for <?php echo $_SESSION['fullname'] . " (" . $_SESSION['class'] . ")"; ?></H1>
        <table class="myTimetable">
            <thead>
                <tr>
                    <th><i class="fas fa-user"></i> <?php echo $_SESSION['class']; ?></th>
                    <th>Mandag</th>
                    <th>Tirsdag</th>
                    <th>Onsdag</th>
                    <th>Torsdag</th>
                    <th>Fredag</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8:00-8:45</td>
                    <td>
                        <div class="subject"><?php echo $mo[0]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[0]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $we[0]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $th[0]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[0]; ?></div>

                    </td>
                </tr>
                <tr>
                    <td>8:45-9:30</td>
                    <td>
                        <div class="subject"><?php echo $mo[1]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[1]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $we[1]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $th[1]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[1]; ?></div>

                    </td>
                </tr>
                <td colspan="6" class="lunch">Pause</td>
                <tr>
                    <td>10:00-10:45</td>
                    <td>
                        <div class="subject"><?php echo $mo[2]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[2]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $we[2]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $th[2]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[2]; ?></div>

                    </td>
                </tr>
                <tr>
                    <td>10:45-11:30</td>
                    <td>
                        <div class="subject"><?php echo $mo[3]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[3]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $we[3]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $th[3]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[3]; ?></div>

                    </td>
                </tr>
                <tr>
                    <td colspan="6" class="break">Pause</td>
                </tr>
                <tr>
                    <td>12:00-12:45</td>
                    <td>
                        <div class="subject"><?php echo $mo[4]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[4]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $we[4]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $th[4]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[4]; ?></div>

                    </td>
                </tr>
                <tr>
                    <td>12:45-13:30</td>
                    <td>
                        <div class="subject"><?php echo $mo[5]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[5]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $we[5]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $th[5]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[5]; ?></div>

                    </td>
                </tr>
                <tr>
                    <td colspan="6" class="lunch">Pause</td>
                </tr>
                <tr>
                    <td>14:00-14:45</td>
                    <td>
                        <div class="subject"><?php echo $mo[6]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $tu[6]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $we[6]; ?></div>
                    </td>
                    <td>
                        <div class="subject"><?php echo $th[6]; ?></div>

                    </td>
                    <td>
                        <div class="subject"><?php echo $fr[6]; ?></div>

                    </td>
                </tr>
            </tbody>
        </table>



        <footer>
            <p style="visibility: hidden;">test1</p>
            <p style="visibility: hidden;">test2</p>
        </footer>
</body>

</html>
<?php
require_once("includes/scripts.html");
?>