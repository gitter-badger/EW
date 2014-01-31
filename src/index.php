<?php
	// Initialize the session
	session_start();

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Home — Study Mountain</title>
		<link type="text/css" rel="stylesheet" href="assets/css/main.css" />
		<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" />
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</head>
	
	<body>
		<h1>Please login below</h1>
		<form name="login" method="post" action="assets/api.php?a=login">
			<input type="text" name="username" placeholder="Username" />
			<br />
			<input type="password" name="password" placeholder="Password" />
			<br />
			<input type="submit" value="Login" />
		</form>
	</body>

</html>