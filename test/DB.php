<meta charset="utf-8" />
<pre>
<?php
define('BASEPATH', false);
define('APPPATH', false);

require '../config.php';
require 'guidgen.php';

$db = new DB($config['db'], 'user'.$uid);

class DB {
	protected $pdo;
	protected $wheres = [];
	protected $order_bys = [];

	function __construct($config) {
		$this->pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
		$this->pdo->query('set names utf8');
		$this->table = $table;
	}

	// Low level operations -- insert, query and execute:

	/*
	 * Insert key-value pair into specified table.
	 *
	 *
	 */
	function insert($table, $values) {
		$length = count($values);
		if ($length < 1) return;

		$columns = implode('`, `', array_keys($values));
		$placeholder = implode(', ', array_pad([], $length, '?'));

		$pattern = "INSERT INTO `$this->table` (`$columns`) VALUES ($placeholder)";

		$statement = $this->pdo->prepare($pattern);
		$affected = $statement->execute(array_values($values));

		return $pdo->lastInsertId();
	}

	/*
	 * Invoke SQL query and fetch associated array.
	 *
	 */
	function query($sql) {
		// Whole query string must be sanitized.
		$statement = $this->pdo->query($sql);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	/*
	 * Invoke SQL query immediately without fetch, returning affected row nums.
	 *
	 */
	function execute($sql) {
		// Whole query string must be sanitized.
		return $this->pdo->exec($sql);
	}

	//============== Draft methods ==============

	// Clauses for high levels:
	function where($conditions) {
		// OPERAND and KEYNAME must be sanitized.
		$wheres []= $conditions;
	}

	function order_by($conditions) {
		$order_bys []= $conditions;
	}

	// Higher level operations:
	function update_data() {
		//
	}

	function update($table, $where, $primary_key = 'id') {
		$_build_query();
	}

	function select() {
		//
	}

	//Helper functions
	protected function _build_value_prepare($table, $values) {
		// Generate column names
		$columns = implode('`, `', array_keys($values));
		// Generate question marks
		$placeholder = implode(', ', array_pad([], $length, '?'));
		// 
		$pattern = "`$this->table` (`$columns`) VALUES ($placeholder)";
	}

	protected function _build_query($type = 'select') {
		//
	}
}

/*
// DB test case
$db = new DB([
	'dsn'  => 'mysql:host=localhost;dbname=test',
	'user' => 'root',
	'pass' => '',
], 'test');
$db->insert('test', [
	'id'   => NULL,
	'col1' => 88,
	'col2' => '\\\'\t*blue',
	'col3' => 'green',
	'col4' => 9
]);
*/

?>
</pre>
