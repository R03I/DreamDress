<?php
class re_password extends dbConnection
{
	
	function __construct(argument)
	{
		parent::__construct();
		parent::getConnection();
	}

	function new_password($username, $password, $new_password){
		$login = new login();
		if($login->login_ellenor($username, $login->jelszo_convert($password))){
			$res = $this->conn->("UPDATE users SET password=? WHERE username LIKE ? AND password LIKE ?");
			$res->bindparam(1, $new_password);
			$res->bindparam(2, $username);
			$res->bindparam(3, $password);
			$res->execute();
			return true;
		}else{
			return false;
		}
	}
}
?>