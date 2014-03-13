<?php
	if(!(fopen("installed", 'r'))) {
		echo "Already installed!";
		exit;
	}
	
	if(isset($_GET["pid"])) {
		$page = $_GET["pid"];
	} else {
		// Assuming this is the first part of the installation
		$page = "1";
	}
	
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Install - StudyMountain</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	
	<body>
	
	</body>

</html>
