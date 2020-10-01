<?php

class DB {

	private static $instance;

	private $pdo;

	private function __construct($host, $name, $user, $pass) {

		try {
			$this->pdo = new PDO(
				"mysql: unix_socket=/tmp/mysql.sock; host={$host}; dbname={$name}; charset=UTF8",
				$user,
				$pass,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET SESSION group_concat_max_len = 1000000;')
			);
		}catch (Exception $e){
			exit('The connection to the database failed.');
		}

	}

	public static function init($host = null, $name = null, $user = null, $pass = null) {

		if (!self::$instance)
			self::$instance = new self($host, $name, $user, $pass);

		return self::$instance;

	}

	public static function pdo() {
		return self::init()->pdo;
	}

}