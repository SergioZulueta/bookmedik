<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b34a4f58b56176";$this->pass="4e333680";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_46d99757f51c89f";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>