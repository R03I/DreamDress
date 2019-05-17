<?php
class login extends dbConnection
{
	function __construct()
	{
		parent::__construct();
		parent::getConnection();
	}
	function jelszo_convert($password){
		return "#!$".sha1($password)."~☺";
	}
	function login_ellenor($username, $password){
		$res = $this->conn->prepare("SELECT username FROM users WHERE username LIKE ? AND password LIKE ?");
		$res->bindparam(1, $username);
		$res->bindparam(2, $password);
		$res->execute();
		if(($row=$res->fetch()) != null){
			$_SESSION["logged"] = $_POST['username'];
			return true;
		}else{
			return false;
		}
	}
}
?>