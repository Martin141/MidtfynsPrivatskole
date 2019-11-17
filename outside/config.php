<?php
// server should keep session data for AT LEAST 1 hour (3600)
//Faktisk, så er det en halv time (1800)
ini_set('session.gc_maxlifetime', 1800);

// each client should remember their session id for EXACTLY 1 hour (3600)
//En halv time igen (1800)
session_set_cookie_params(1800);

session_start();

//server database defines
define('db_server','localhost');
define('db_username','');
define('db_password','');
define('db_database','');

//Used for constants from database "echo "{$con($row['gear'])}";"
$con = 'constant';

//Defines
define("_SERVER","");
define("_COM","");
define("_LDAP_IP","");
define("_API_URL","");
define("_GET_NEWS","");
define("_POST_NEWS","");
?>
