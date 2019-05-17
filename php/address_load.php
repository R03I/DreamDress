<?php
	class address extends dbConnection
	{
		
		function __construct()
		{
			parent::__construct();
			parent::getConnection();
		}
		function address_leker($username){
			$res=$this->conn->prepare("SELECT name , address , comment FROM users INNER JOIN address ON users.id=address.id WHERE username LIKE ?");
			$res->bindparam(1, $username);
			$res->execute();
			$array = $res->fetchall();
			return $array;
		}
		function address_update($username, $name, $address, $comment){
			$res = $this->conn->prepare("UPDATE address INNER JOIN users ON users.id = address.id SET name = ? , address = ? , comment = ? WHERE username LIKE ?");
			$res->bindparam(1, $name);
			$res->bindparam(2, $address);
			$res->bindparam(3, $comment);
			$res->bindparam(4, $username);
			$res->execute();
			return "Sikeresen átállítva";
		}
	}
?>