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
	 * Include the configuration file
	*/
		define('conf_req', '1');
		include('inc/config.inc.php');
	
	/*
	 * Redirect user to main URL
	*/
		header('Location: ' . $config['main_url']);
		
	exit;
?>
