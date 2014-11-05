<?php	
	if(isset($_POST["pass"]) && isset($_POST["salt"])) {
		$pswh = stripslashes(sha1(md5($_POST["pass"] . $_POST["salt"])));
		echo "Password (hashed): " . $pswh . " || 
		Original password: " . $_POST["pass"];
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SMPassGen - Edlightened Web</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
			html {text-align:center;font-weight:bold;}
		</style>
	</head>
	
	<body>
		<h2>Please fill out the form below.</h2>
		<br />
		<form name="pg" method="post" action="SMPassGen.php">
			<input type="text" name="pass" placeholder="Password"/>
			<br />
			<input type="text" name="salt" placeholder="Your name"/>
			<br />
			<input type="submit" value="Generate"/>
		</form>
	</body>
</html>
