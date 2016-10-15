<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

 require_once('../../vendor/autoload.php');

 try {
   $dotenv = new Dotenv\Dotenv(dirname(__DIR__));
   $dotenv->load();
   $dotenv->required(['DB_HOST', 'DEV_DB_NAME', 'DEV_DB_USER', 'DEV_DB_PASS', 'PROD_DB_NAME', 'PROD_DB_USER', 'PROD_DB_PASS', 'PROD_SITE_URL', 'DEV_SITE_URL']);
 } catch (Exception $e) {
   exit('Could not find a .env file.');
 }

return array(

	//production
	'production' => array(
		'user' => getenv('PROD_DB_NAME'),
    'password' => getenv('PROD_DB_PASS'),
    'database' => getenv('PROD_DB_NAME'),
	),

	//development
	'development' => array(
		'user' => getenv('DEV_DB_USER'),
    'password' => getenv('DEV_DB_PASS'),
    'database' => getenv('DEV_DB_NAME'),
	),

);
