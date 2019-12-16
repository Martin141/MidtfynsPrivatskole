<?php
// server should keep session data for AT LEAST 1 hour (3600)
//Faktisk, så er det en halv time (1800)
// ini_set('session.gc_maxlifetime', 7800);

// each client should remember their session id for EXACTLY 1 hour (3600)
//En halv time igen (1800)
// session_set_cookie_params(7800);

session_start();

//server database defines
define('db_server', 'localhost');
define('db_username', 'admin');
define('db_password', '12qw3e');
define('db_database', 'aulo');

//Used for constants from database "echo "{$con($row['gear'])}";"
$con = 'constant';

//Defines
define("_SERVER", "MP");
define("_COM", "local");
define("_LDAP_IP", "192.168.1.80");
define("_API_URL", "https://localhost:8000/api/1/");
define("_API_URL2","https://aulo.api.theflyingbirds.net:8000/api/1/");
define("_GET_NEWS", "news/all");
define("_GET_SCHEDULE", "schedule/");
define("_POST_NEWS", "news/create");
define("_PARENT_USER","parent/byusername/");