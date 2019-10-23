<?php
//Indeholder informationer til database, der gør at hjemmeside kan få forbindelse til den
//require_once('../config.php');

   $db = mysqli_connect(db_server,db_username,db_password,db_database);
   if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

    if (!isset($_SESSION['loggedin']))
    {
         $_SESSION['loggedin'] = false;
    }
    if (!isset($_SESSION['loggedin']))
    {
         $_SESSION['loggedin'] = false;
    }
    $user_check = $_SESSION['loggedin'];
    
 //Hvis useren prøver at komme ind på en side hvor man skal have været logged ind
 //så vil useren ryge tilbage til startsiden   
    if($_SESSION['loggedin'] === false){
       header("location:index.php");
    }
    
}