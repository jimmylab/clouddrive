<?php
class Model {
	protected $db;
	protected $table;

	function __construct() {
		$db = new DB();
	}

	function set_table($table) {
		$this->table = $table;
	}

	function get_by_id($id, $id_key = 'id') {
		$id = intval($id);
		$res = $db->query(
			"SELECT * FROM $this->table where `$id_key`=$id"
		);
		return (count($res) > 0) : $res[0] : [];
		}
	}

	function create($data) {
		return $db->insert(
			$this->table,
			$values
		);
	}

	function update_by_id($data, $primary_key = 'id') {
		return $db->insert(
			$this->table,
			$values
		);
	}
}
?>