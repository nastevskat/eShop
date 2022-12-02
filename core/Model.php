<?php

class Model{
	protected static $_connection = null;

	public function __construct(){
		if(self::$_connection == null){

			$host = 'localhost';
			$dbname = 'eshop_db';
			$user = 'eshop_user';
			$password = 'ZfTD*QlbO8.4KPV.';


			self::$_connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
		}
	}
}

?>