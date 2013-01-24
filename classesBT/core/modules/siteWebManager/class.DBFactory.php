<?php
class DBFactory {

	public static function getPDOConnection() {
		$db = new PDO('mysql:host=127.0.0.1;dbname=bdd', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->query('SET NAMES utf8');
		return $db;
	}

}