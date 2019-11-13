<?php
require_once("db_con.php");
//kun for login brugere
if ($_SESSION['loggedin'] == false){
  header("Location:404.php");
  die("ACCESS DENIED");
}else{

if ($_SESSION['role'] != "Undervisere"){
  header("Location:404.php");
  die("ACCESS DENIED");
}

if (isset($_POST['Submit'])) {

    $Title= mysqli_escape_string($db, $_POST['title']);
    //$Class = mysqli_escape_string($db, $_POST['class']);
    $Text = mysqli_escape_string($db, $_POST['text']);
    $Author = $_SESSION["fullname"];
    $DateCreated = date("Y-m-d h:i:s");

    // $post = array('title' => $_POST['title'], 'text' => $_POST['text'], 'author' => $_SESSION['fullname'], 'date_created' => date("Y-m-d H:i"));
    //Post array
    $data = array('title' => $_POST['title'], 
    'text' => $_POST['text'], 
    'author' => $_SESSION['fullname'], 
    'date_created' => $DateCreated);

    //New
    //API URL
$url = _API_URL._POST_NEWS;

//create a new cURL resource
$ch = curl_init($url);

$payload = json_encode($data);

//attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

//set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
//SSL fix
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute the POST request
$result = curl_exec($ch);
$err = curl_error($ch);

//error showcase
var_dump($err);
var_dump($result);

//close cURL resource
curl_close($ch);


}
else{
  echo "<meta http-equiv='refresh' content='0;URL=home.php'/>";
  die("Nothing was posted");
}
}
?>