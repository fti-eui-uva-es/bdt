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
if (isset($_SERVER['REQUEST_URI'])) {
	App::loadModule("Session");
	App::loadModule("Router");
} else {
	echo "[i] Entering console mode for BdT\n\n\n";
}

?>