<?php
	Class reg extends dbConnection
	{
		function __construct()
		{
			parent::__construct();
			parent::getConnection();
		}
		function acc_register($username, $password, $email){
			$res = $this->conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
			$res->bindparam(1, $username);
			$res->bindparam(2, $password);
			$res->bindparam(3, $email);
			$res->execute();
			$res = $this->conn->prepare("INSERT INTO address (name, address, comment) VALUES ('', '', '')");
			$res->execute();
		}
		function foglalt_nev($username){
			$res = $this->conn->prepare("SELECT username FROM users WHERE username LIKE ?");
			$res->bindparam(1, $username);
			$res->execute();
			if(($row=$res->fetch()) != null){
				return true;
			}else{
				return false;
			}
		}
		function foglalt_email($password){
			$res = $this->conn->prepare("SELECT email FROM users WHERE email LIKE ?");
			$res->bindparam(1, $email);
			$res->execute();
			if(($row=$res->fetch()) != null){
				return true;
			}else{
				return false;
			}
		}
	}
?>