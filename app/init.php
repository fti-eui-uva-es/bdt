<?php
// Load settings
if (!file_exists(__DIR__ . "/config.php")) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
	echo "No configuration file found";
	die();
}
require_once __DIR__ . "/config.php";
define("CONFIG", $CONFIG);

// Load app class
require_once __DIR__ . "/App.class.php";

// Load main modules
App::loadModule("DB");
App::loadModule("Session");
App::loadModule("Router");

?>