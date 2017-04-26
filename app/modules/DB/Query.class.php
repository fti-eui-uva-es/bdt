<?php
class Query {
	
	private $cache = [];
	private $result;
	public $length = 0;
	public $success = false;
	
	
	/**
	 * Construct
	 *
	 * @param {String} SQL
	 * @param {MySQLi} Connection
	 */
	public function __construct($sql, $connection) {
		// Execute query and save result
		$this->result = $connection->query($sql);
		
		// Check for value result
		if ($this->result === true) {
			$this->success = true;
		} elseif ($this->result !== false) {
			$this->success = true;
			$this->length = $this->result->num_rows;
		}
	}
	
	
	/**
	 * Destruct
	 */
	public function __destruct() {
		// TODO
	}
	
	
	/**
	 * Get result
	 *
	 * @param {int} Index
	 * @return {Array} MySQL row
	 */
	public function get($index) {
		// TODO
	}
	
}
?>