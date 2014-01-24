<?php
	session_start();
	
	// Include the configuration file
	include("config.php");
	
	if(isset($_GET["a"])) {
		$a = $_GET["a"];
		
		switch($a) {
			case "login":
				$usr = stripslashes($_POST["username"));
				$psw = stripslashes(sha1(md5($_POST["password"] + $login_salt)));
				break;
			case "logout":
				session_destroy();
				break;
		}
	}
?>