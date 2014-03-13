<?php
	// Initialize the session
	session_start();
	
	// Include the configuration file
	include("config.php");
	
	if(isset($_GET["a"])) {
		$a = $_GET["a"];
		
		switch($a) {
			case "login":
				$usr = stripslashes($_POST["username"]);
				$psw = stripslashes(sha1(md5($_POST["password"] + $login_salt)));
				
				$query = 'SELECT * FROM users WHERE username="' . $usr . '" and password="'. $psw . '";';
				
				$mysqli = new mysqli($db_host, $db_username, $db_password, $db);
				if (mysqli_connect_errno()) {
					trigger_error('Authentication Failed : ' . mysqli_connect_error(), E_USER_ERROR);
				}
				
				$result = mysqli_query($mysqli, $query);
				
				$count = mysqli_num_rows($result);
				
				if($count == 1) {
					$_SESSION['login'] = "1";
					$_SESSION['username'] = $_POST["username"];
					header("Location: dashboard.php?PHPSESSID=" . session_id());
					exit;
				} else {
					header("Location:" . $main_url . "/?msg=Incorrect+username+or+password");
					exit;
				}
				
				break;
			case "logout":
				session_destroy();
				header("Location: " . $main_url);
				break;
		}
	}
	exit;
?>
