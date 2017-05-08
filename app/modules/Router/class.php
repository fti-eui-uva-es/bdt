<?php
class Router extends Module {
	
	/**
	 * Initialize module
	 */
	public static function __init() {
		// Get path of file to load
		$is_post = ($_SERVER['REQUEST_METHOD'] == "POST");
		$mod = self::getParam(0);
		if ($mod == "") $mod = "Welcome";
		$path = __DIR__ . "/../" . ucfirst($mod) .
			"/" . ($is_post ? "post" : "view") . ".php";
		
		// Check file exists
		if (!file_exists($path)) {
			http_response_code(404);
			App::die();
		}
		
		// Load file
		require_once $path;
	}
	
	
	/**
	 * Get parameter
	 *
	 * @param {mixed} Index
	 * @param {String} Type
	 */
	public static function getParam($index, $type="PATH") {
		// Get value
		$res = NULL;
		if ($type == "GET") {
			if (isset($_GET[$index])) $res = $_GET[$index];
		} elseif ($type == "POST") {
			if (isset($_POST[$index])) $res = $_POST[$index];
		} elseif (is_numeric($index)) {
			$index = intval($index);
			$url = explode("?", $_SERVER['REQUEST_URI']);
			$url = trim($url[0], "/");
			$url = explode("/", $url);
			if (in_array($index, $url)) $res = $url[$index];
		}
		
		// Sanitize value
		if (!is_null($res)) $res = strip_tags($res);
		
		// Return value
		return $res;
	}
}
?>