<?php
require_once __DIR__ . "/init.php";

// Check tables exist
echo "==== BdT database installer ====\n";
echo "[i] Checking existing tables . . .\n";
$tables = DB::query('SHOW TABLES');
if (count($tables['rows']) > 0) {
	echo "[i] Database is not empty. Exiting installer...\n";
	exit;
}

// Create tables
// TODO

// Exit installer
echo "[i] Finished installing database. Exiting...\n";
?>
