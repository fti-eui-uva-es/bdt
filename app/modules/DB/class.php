<?php
class DB extends Module {
	
	private static $connection = NULL;
	
	/**
	 * Query
	 *
	 * @param {String} MySQL query
	 * @return {Query} Result
	 */
	public static function query($query) {
		require_once __DIR__ . "/Query.class.php";
		return new Query($query, self::$connection);
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
