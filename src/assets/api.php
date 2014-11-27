<?php
	// Initialize the session
	session_start();
	
	// Include the configuration file
	include("config.php");
	
	if(isset($_GET["a"])) {
		$a = $_GET["a"];
		
		switch($a) {
			case "login":
				echo "<!DOCTYPE html><html lang=\"en\"><head><title>Logging in - Edlightened Web</title><style type=\"text/css\">html{text-align:center;}</style></head><body><h1>Logging in to Edlightened Web...</h1></body></html>";
                               
                $usr = $_POST["username"];
                $psw = $_POST["password"];
                               
                if($usr == null || $psw == null) {
                     header("Location: /?msg=1");
                     exit;
                }
                               
                $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
                               
                if ($mysqli->connect_errno) {
                     header("Location: /?msg=3&err=" . urlencode("(" . $mysqli->connect_errno . ") " . $mysqli->connect_error));
                     exit;
                 }
                               
                 $pw_query = "SELECT * FROM `users` WHERE `username` = '". $usr . "'";
                               
                 foreach($mysqli->query($pw_query) as $r) {
                     if ((password_verify($psw, $r['password'])) && !($r['banned'] == 1)) {
                                                $_SESSION["ew_li"] = 1;
                                                $_SESSION["ew_un"] = $r['username'];
                                                $_SESSION["ew_dn"] = $r['display_name'];
                                                
                                                header("Location: /dashboard.php?phpsessid=" . session_id());
                                                $mysqli->close();
                                                exit;
                                        } else if ((password_verify($psw, $r['password'])) && ($r['banned'] == 1)) {
                                                header("Location: /?msg=2");
                                                $mysqli->close();
                                                exit;
                                        } else if (!(password_verify($psw, $r['password']))) {
                                                header("Location: /?msg=1");
                                                $mysqli->close();
                                                exit;
                                        }
                                }
                               
                                header("Location: /?msg=1");
                               
                                $mysqli->close();
				break;
			case "logout":
				session_destroy();
				header("Location: " . $main_url . "/?msg=Logout+successful!");
				break;
		}
	}
	exit;
?>
