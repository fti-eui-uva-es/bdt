<?php
class App {
	
	/**
	 * Load module
	 * 
	 * @param {String} Module name
	 * @return {boolean} Success
	 */
	static public function loadModule($mod) {
		$path = __DIR__ . "/modules/$mod/class.php";
		
		// Check if module exists
		if (!file_exists($path)) return false;
		
		// Load module and dependecies
		require_once __DIR__ . "/Module.class.php";
		require_once $path;
		$mod::__init();

		return true;
	}
	
	
	/**
	 * Die
	 */
	static public function die() {
		// TODO
	}
}
?>