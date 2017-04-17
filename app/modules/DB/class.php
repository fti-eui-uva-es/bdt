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
		// TODO: initialize connection
	}
	
	
	/**
	 * Shutdown
	 */
	public static function __shutdown() {
		// TODO: close connection
	}
	 
}
?>