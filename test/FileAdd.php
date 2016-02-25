<meta charset="utf-8" />
<pre>
<?php
define('BASEPATH', false);
define('APPPATH', false);

require '../config.php';
require 'guidgen.php';


/*
CREATE TABLE IF NOT EXISTS `userfile` (
  `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `guid` varchar(36) NOT NULL,
  `path` text NOT NULL,
  `is_dir` tinyint(1) NOT NULL DEFAULT '0',
  `is_del` tinyint(1) NOT NULL DEFAULT '0',
  `parent` int(11) NOT NULL DEFAULT '0',
  `size` int(11) NOT NULL DEFAULT '0',
  `hash` varchar(64) NOT NULL DEFAULT '',
  `version` int(11) NOT NULL DEFAULT '1',
  `alioss_policy` int(11) NOT NULL DEFAULT '0',
  `bos_policy` int(11) NOT NULL DEFAULT '0',
  `encrypted` tinyint(1) NOT NULL DEFAULT '0',
  `last_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `guid` (`guid`),
  KEY `parent` (`parent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
*/

//$path = $parent;

class files {
protected $db = new DB($config['db'], 'user'.$uid);

function __constuct($uid) {
	new DB($GLOBALS['config']['db'], 'user'.$uid);
}

function create_file($parent_dir, $path, $fname, $size = 0, $hash = '', $encrypted = false, $is_dir = false) {
	/*$db->insert('user'.$uid, [
		'fname' => $fname,
		'guid' => build_guid(),
		'path' => $path,
		'is_dir' => $is_dir,
		'parent' => $parent_dir,
		'size' => $size,
		'hash' => $hash,
		'encrypted' => $encrypted,
	]);*/
}
//INSERT INTO `test` (`col1`, `col2`, `col3`, `col4`) VALUES (72, (SELECT CONCAT(`col2`, '/', `col3`) as path FROM `test` `tmp` WHERE id=1), 'red', 0)

function create_dir($parent_dir, $path, $dir_name, $encrypted = false) {
	$path = '/';
	create_file($uid, $parent_dir, $path, $dir_name, 0, '', $encrypted, false);
}

function list_dir($id) {
	$id = intval($id);
	$res = $GLOBALS['db']->query("
SELECT * FROM `user1`
WHERE `parent` = $id
ORDER BY `is_dir` DESC, `fname`
");
	var_dump($res);
}

list_dir(1);


function listDir($dir, $callback = null, $dircallback = null) {
	if(is_dir($dir)) {
		if ($handle = opendir($dir)) {
			while (($filename = readdir($handle)) !== false) {
				$path = $dir.DIRECTORY_SEPARATOR.$filename;
				if($filename === '.' OR $filename === '..') {
					continue;
				} else if(is_dir($path)) {
					if ($dircallback instanceof Closure)
						$dircallback($filename);
					listDir($path.DIRECTORY_SEPARATOR, $callback, $dircallback);
				} else {
					if ($callback instanceof Closure)
						$callback($dir, $filename);
				}
			}
			closedir($handle);
		}
	}
}

/*
listDir('../docs/', function($path, $file) {
	echo $fname = iconv('GBK', 'UTF-8', $file), "\n";
	echo $size = filesize($path.$file), "\n";
	echo $hash = base64_encode(hash_file('sha256', $path.$file, true)), "\n";
	create_file(1, '/', $fname, $size, $hash);
});

create_dir(1, '/', 'Introduction to Office 365 Development');

listDir('intro/', function($path, $file) {
	echo $fname = iconv('GBK', 'UTF-8', $file), "\n";
	echo $size = filesize($path.$file), "\n";
	echo $hash = base64_encode(hash_file('sha256', $path.$file, true)), "\n";
	create_file(5, '/Introduction to Office 365 Development', $fname, $size, $hash);
});
*/



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


/*
TODO: Root Directory initialize

CREATE TABLE user1 LIKE userfile

INSERT INTO `user1` (`fname`, `guid`, `is_dir`, `parent`) VALUES ('', ':GUID', false, 0)

UPDATE `user1` SET `fid` = 0 WHERE fid=1;
ALTER TABLE `user1` AUTO_INCREMENT=1;
*/
?>
</pre>
