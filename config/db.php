<!-- Conexión a base de datos -->
<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'root', '', 'inmobiliaria');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

