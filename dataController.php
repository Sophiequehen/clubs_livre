<?php
class Database{
	public static $pdo;
	public static function connect(){
		$host = '127.0.0.1';
		$dbname = 'clubs_livres';
		$username = 'root';
		$password = 'simplon';
		$charset = 'utf8';
		$collate = 'utf8_unicode_ci';
		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_PERSISTENT => false,
			PDO::ATTR_EMULATE_PREPARES => false,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
		];
		self::$pdo = new PDO($dsn, $username, $password, $options);
	}
}
?>