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
	
	if(!defined('conf_req')) {
		/*
		 * Return a 404 Error on unauthorized access
		*/
		header('HTTP/1.0 404 Not Found');
		exit;
	}
	
	/*
	 * Application Variables
	*/
		/*
		 * Main URL
		 * 
		 * Make sure to include the trailing slash!
		 * DO NOT SET THIS AS JUST '/'!
		*/
		$config['main_url'] = '/src/';
	
	/* 
	 * Database Connection Configuration
	*/
		/*
		 * Database Source
		 * 
		 * Example: mysql:host=localhost;dbname=test
		*/
		$config['db_dsn'] = '';
		
		/*
		 * Database Username
		*/
		$config['db_usr'] = '';
		
		/*
		 * Database Password
		*/
		$config['db_psw'] = '';
?>
