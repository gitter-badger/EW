<?php
	// Initialize the session
	session_start();
	
	// Include the configuration file
	include("config.php");

	if(!(isset($_SESSION["login"])) || !(isset($_SESSION["username"])) {
		header("Location: " . $main_url . "/?msg=Your+session+has+timed+out.+Please+login+again.");
		exit;
	} else {
		$username = $_SESSION['username'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<title>Dashboard - StudyMountain</title>
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<script type="text/javascript" src="js/bootstrap.js"><?php if(isset($msg)) {echo "alert('" . $msg . "');";} ?></script>
	</head>
	
	<body>
		<br />
		<h1><img src="img/smlogo.png" alt="StudyMountain" /></h1>
		<h3>Welcome back, <?php echo $username; ?>!</h3>
		<hr />
		<br />
		<br />
		<br />
		<hr />
		<br />
		<strong>Created by Rythix</strong>
	</body>

</html>