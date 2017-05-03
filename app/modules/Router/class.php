<?php
class Router extends Module {
	
	/**
	 * Get parameter
	 *
	 * @param {mixed} Index
	 * @param {String} Type
	 */
	public function getParam($index, $type="PATH") {
		// Get value
		$res = NULL;
		if ($type == "GET") {
			if (isset($_GET[$index])) $res = $_GET[$index];
		} elseif ($type == "POST") {
			if (isset($_POST[$index])) $res = $_POST[$index];
		} else {
			// TODO que esto es insufrible
		}
		
		// Sanitize value
		// TODO
		
		// Return value
		return $res;
	}
}
?>