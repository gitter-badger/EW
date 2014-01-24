<?php
	session_start();
	
	if(isset($_GET["a"])) {
		$a = $_GET["a"];
		
		switch($a) {
			case "login":
				break;
			case "logout":
				session_destroy();
				break;
		}
	}
?>