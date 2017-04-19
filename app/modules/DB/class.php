<?php
class DB extends Module {
	
	private static $connection = NULL;
	
	/**
	 * Query
	 *
	 * @param {String} MySQL query
	 * @param {Array} [Parameters] 
	 * @return {Query} Result
	 */
	public static function query($query, $params=[]) {
		// TODO
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
	}
	
	
	/**
	 * Shutdown
	 */
	public static function __shutdown() {
		// TODO: close connection
	}
	 
}
?>