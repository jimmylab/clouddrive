<?php
!defined('BASEPATH') && exit('No direct script access allowed');

class DB {
	protected $pdo;
	protected $table;

	function __construct($config, $table) {
		$this->pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
		$this->pdo->query('set names utf8');
		$this->table = $table;
	}

	function insert($values) {
		$length = count($values);
		if ($length < 1) return;

		$columns = implode('`, `', array_keys($values));
		$placeholder = implode(', ', array_pad([], $length, '?'));
		$pattern = "INSERT INTO `$this->table` (`$columns`) VALUES ($placeholder)";

		$statement = $this->pdo->prepare($pattern);
		$statement->execute(array_values($values));
	}

	function query($sql) {
		$statement = $this->pdo->query($sql);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
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