<?php
class dbConnection{
	protected $host;
	protected $dbname;	
	protected $username;
	protected $password;
	protected $conn;

	public function __construct(){
		$this->host="localhost";
		$this->dbname="szakalla_webshop";
		$this->username="root";
		$this->password="";
	}

	public function getConnection(){
		try{
			$this->conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password);
			$this->conn->exec("SET NAMES 'utf8'");
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}
}
?>