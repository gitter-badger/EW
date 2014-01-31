<?php
	$db_host = "localhost"; // The host of the MySQL server that contains the database;
	$db_username = "root"; // The username that will be used to connect to the database;
	$db_password = ""; // The password that will be used to connect to the database;
	$db = ""; // The database that will be used for connections;
	
	//
	
	$login_salt = "tastysalt"; /* This should be changed as it is used to hash the passwords; NOTICE : ACCOUNTS ADDED BEFORE THIS WILL NEED THEIR
	                  PASSWORDS RESET; */
	$login_table = "users"; // The table in which the usernames, passwords, and ids are stored
?>