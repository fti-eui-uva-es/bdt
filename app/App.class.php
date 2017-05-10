<?php
class App {
	
	private static $mods = array();
	
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
		array_push(self::$mods, $mod);
		$mod::__init();	

		return true;
	}
	
	
	/**
	 * Die
	 */
	static public function die() {
		// Shutdown modules
		foreach (self::$mods as $mod) $mod::__shutdown();
		
		// Abort execution
		die;
	}
}
?>