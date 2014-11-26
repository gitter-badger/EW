<?php
	/*
	 * This file is part of Edlightened Web 2.
	 *
	 * Copyright © 2014, Emposoft <https://github.com/Emposoft/ew2>
	 * EmpoTrack is licensed under Creative Commons Attribution 4.0 International License (the "License");
	 * you may not use this file except in compliance with the License.
	 * You may obtain a copy of the License at
	 *
	 * http://creativecommons.org/licenses/by/4.0/legalcode
	 *
	 * Unless required by applicable law or agreed to in writing, software
	 * distributed under the License is distributed on an "AS IS" BASIS,
	 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	 * See the License for the specific language governing permissions and
	 * limitations under the License.
	*/
	
	/*
	 * Initialize the session
	*/
		session_start();
	
	/*
	 * Include the configuration file
	*/
		define('conf_req', '1');
		include('assets/inc/config.inc.php');
	
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Login - Edlightened</title>
		<link type="text/css" rel="stylesheet" href="<?php echo $config['main_url']; ?>assets/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo $config['main_url']; ?>assets/css/main.min.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo $config['main_url']; ?>assets/css/login.min.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
			/* 
			 * Include the header.php
			*/
			include('assets/inc/header.inc.php');
		?>
	</head>
	
	<body>
		<div>
			<div class="container">
				<form name="ew_login" class="login" role="form" method="post" action="<?php echo $config['main_url']; ?>api/doLogin">
					<div class="form-group">
						<label for="loginUsername">Username</label>
						<input type="text" class="form-control" id="loginUsername" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="loginPassword">Password</label>
						<input type="password" class="form-control" id="loginPassword" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
		
		<div class="footer">
			<strong>Created by <a href="http://emposoft.tk/?ref=ew2">Emposoft</a></strong>
		</div>
	</body>

</html>
