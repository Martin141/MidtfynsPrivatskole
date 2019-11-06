<?php
include_once('db_con.php');

//Source https://codeshack.io/secure-login-system-php-mysql/

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['pw']) ) {
	// Could not get the data that should have been sent.
  echo "<meta http-equiv='refresh' content='6;URL=index.php'/>";
	die ('Please fill both the username and password field!');
  
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $db->prepare('SELECT id, pw FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}

if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['pw'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];

		$_SESSION['id'] = $id;
      	header("Location:home.php");
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo "Forkert kode...";
      //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Prøv igen</a><br>";
	}
} else {
	echo "Forkert brugernavn...";
  //link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Prøv igen</a><br>";
  die;
}
$stmt->close(); ?>