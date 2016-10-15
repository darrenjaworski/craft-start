<?php

require_once('../vendor/autoload.php');

try {
  $dotenv = new Dotenv\Dotenv(dirname(__DIR__));
  $dotenv->load();
  $dotenv->required(['DB_HOST', 'DEV_DB_NAME', 'DEV_DB_USER', 'DEV_DB_PASS', 'PROD_DB_NAME', 'PROD_DB_USER', 'PROD_DB_PASS', 'PROD_SITE_URL', 'DEV_SITE_URL']);
} catch (Exception $e) {
  exit('Could not find a .env file.');
}

define('CRAFT_ENVIRONMENT', call_user_func_array(function($a,$b){if(array_key_exists('APP_ENV',$_SERVER)&&in_array($c=$_SERVER['APP_ENV'],array_keys($a))){return $c;}foreach($a as $c=>$d){$e=$_SERVER['SERVER_NAME'];if((is_array($d)&&in_array($e,$d))||$e==$d){return $c;}}return $b;}, array(

  // Environment Definitions
  array(
    'development' => array(''),
  ),

  // Default Environment
  'production',

)));

// Path to your craft/ folder
$craftPath = '../craft';

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
