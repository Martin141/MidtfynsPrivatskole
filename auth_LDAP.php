<!-- LDAP login script -->
<?php 
include_once('db_con.php');

if ($_SESSION['loggedin'] == true){
    header("Location:home.php");
    die("Du er allerede logged ind <br><a href='home'>Go back</a> or <a href='logout.php'>Log ud</a>");
}

/**
 * Created by https://www.exchangecore.com/blog/using-ldap-active-directory-authentication-php
 */

if(isset($_POST['username']) && isset($_POST['password'])){

    $adServer = ""._LDAP_IP."";

    $ldap = ldap_connect($adServer);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $ldaprdn = _SERVER . "\\" . $username;

    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($ldap, $ldaprdn, $password);

    if ($bind) {
        $filter="(sAMAccountName=$username)";
        $result = ldap_search($ldap,"dc="._SERVER.",dc="._COM."",$filter);
        ldap_sort($ldap,$result,"sn");
        $info = ldap_get_entries($ldap, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            //LDAP info about user V
            // echo "<p>You are accessing <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> (" . $info[$i]["samaccountname"][0] .")</p>\n";
            // echo '<pre>';
            // var_dump($info);
            // echo '</pre>';
            // $userDn = $info[$i]["distinguishedname"][0]; 
            // echo $info[$i]['cn'][0];
            // echo $info[$i]['distinguishedname'][0];

            //getting role & class
            $pieces = explode(",", $info[$i]['distinguishedname'][0]);
            
            $spec = $pieces[1].$pieces[2];
            $specs = explode("OU=", $spec);

            //echo "<br>1= ".$specs[1]; //class
            //echo "<br>2= ".$specs[2]; //role

            $class = $specs[1];
            $role = $specs[2];
            // die();
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['fullname'] = $info[$i]["cn"][0];
            $_SESSION['role'] = $role;
            $_SESSION['class'] = $class;
            
            
            header("Location:home.php");
            echo 'Welcome ' . $_SESSION['name'] . '!';

        }
        @ldap_close($ldap);
} else {
    $msg = "Kunne ikke logge dig ind... <a href='javascript:self.history.back();'>Prøv igen</a><br>";
    echo $msg;
}
}



?>