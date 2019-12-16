<?php
//https://aulo.api.theflyingbirds.net:8000/api/1/parent/byusername/UM123
include_once('db_con.php');

if ($_SESSION['loggedin'] == true){
    header("Location:home.php");
    die("Du er allerede logged ind <br><a href='home'>Go back</a> or <a href='logout.php'>Log ud</a>");
}

if ( !isset($_POST['username'], $_POST['pw']) ) {
	// Could not get the data that should have been sent.
  echo "<meta http-equiv='refresh' content='5;URL=index.php'/>";
	die ('Udfyld både brugernavn og kodeord felterne!');
}

$curl = curl_init();

// echo _API_URL2."parent/byusername/".$_POST['username'];
// die();

curl_setopt_array($curl, array(
  CURLOPT_URL => _API_URL."parent/byusername/".$_POST['username'],
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

// echo $err;
// var_dump($data);

if ($data == true) {
  foreach ($data as $row) {

if (password_verify($_POST['pw'], $row['pw'])) {
    // Verification success! User has loggedin!
    // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
    session_regenerate_id();
    //Sætter sessions
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['name'] = $row['username'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['class'] = $row['team'];
    $_SESSION['barn'] = $row['child'];
    $_SESSION['tlf_nr'] = $row['phone'];
    $_SESSION['adress'] = $row['adress'];
    $_SESSION['role'] = "Forældre";

    $_SESSION['id'] = $id;
      header("Location:home.php");
    echo 'Welcome ' . $_SESSION['name'] . '!';
    die();
} else {
  echo "Forkert password...";
  //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Prøv igen</a><br>";
  die;
      }
  }
}
?>

