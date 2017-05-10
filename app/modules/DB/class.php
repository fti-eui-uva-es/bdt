<?php
class DB extends Module {
	
	private static $connection = NULL;
	
	/**
	 * Query
	 *
	 * @param {String} MySQL query
	 * @return {mixed} Result
	 */
	public static function query($query) {
		// Prepare output
		$output = array(
			"success" => false,
			"rows" => array()
		);
		
		// Execute query and save result
		$result = self::$connection->query($query);
		
		// Check for value result
		if ($result === true) {
			$output["success"] = true;
		} elseif ($result !== false) {
			$output["success"] = true;
			$output["rows"] = mysqli_fetch_all($result, MYSQLI_BOTH);
			$result->free();
			$result->close();
		}
		
		// Return result
		return $output;
	}
	
	
	/**
	 * Sanitize
	 *
	 * @param {mixed} Value
	 * @param {String} Type
	 * @return {String} Sanitized value
	 */
	public static function sanitize($value, $type="text") {
		// In case of number
		if ($type == "number") return floatval($value);
		
		// Escape string
		$res = self::$connection->real_escape_string($value);
		
		// In case of field
		if ($type == "field") return "`$res`";

		// In case of text
		return "'$res'";
	} 
	
	
	/**
	 * Init
	 */
	public static function __init() {
		// Create MySQLi connection
		self::$connection = new mysqli(
			CONFIG['db_host'],
			CONFIG['db_user'], 
			CONFIG['db_pass'],
			CONFIG['db_database']
		);
		
		// Verify successful connection
		if (self::$connection->connect_errno) App::die();
		
		// Set connection charset
		self::$connection->set_charset('utf8');
		
		// Auto-create tables
		// TODO 
	}
	
	
	/**
	 * Shutdown
	 */
	public static function __shutdown() {
		// Close MySQLi connection
		self::$connection->close();
	}
	 
}
?>
