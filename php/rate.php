<?php
	class rate extends dbConnection
	{
		
		function __construct()
		{
			parent::__construct();
			parent::getConnection();
		}
		function user_id($username){
			$res=$this->conn->prepare("SELECT id FROM users WHERE username LIKE ?");
			$res->bindparam(1, $username);
			$res->execute();
			$array=$res->fetch();
			return $array[0];
		}
		function feltolt($user_id, $item_id, $szoveg, $rejtett, $adott_pont){
			$res=$this->conn->prepare("INSERT INTO comment_rate(user_id, item_id, szoveg, rejtett, adott_pont) VALUES (?,?,?,?,?)");
			$res->bindparam(1, $user_id);
			$res->bindparam(2, $item_id);
			$res->bindparam(3, $szoveg);
			$res->bindparam(4, $rejtett);
			$res->bindparam(5, $adott_pont);
			$res->execute();
		}
		function egyezik($user_id, $item_id){
			$res=$this->conn->prepare("SELECT users.username FROM users INNER JOIN comment_rate ON users.id = comment_rate.user_id WHERE item_id LIKE ? AND users.id LIKE ?");
			$res->bindparam(1, $item_id);
			$res->bindparam(2, $user_id);
			$res->execute();
			if(($row=$res->fetch()) == null){
				return true;
			}else{
				return false;
			}
		}
		function komment_lekeres($item_id){
			$res=$this->conn->prepare("SELECT user_id, szoveg, rejtett, adott_pont FROM comment_rate WHERE item_id LIKE ?");
			$res->bindparam(1, $item_id);
			$res->execute();
			$array=$res->fetchall();
			return $array;
		}
		function pont($item_id){
			$res=$this->conn->prepare("SELECT TRUNCATE(SUM(adott_pont)/COUNT(adott_pont),2) FROM comment_rate WHERE item_id LIKE ?");
			$res->bindparam(1, $item_id);
			$res->execute();
			$row=$res->fetch();
			return $row[0];
		}
		function nev_leker($user_id){
			$res=$this->conn->prepare("SELECT username FROM users WHERE id LIKE ?");
			$res->bindparam(1, $user_id);
			$res->execute();
			$row=$res->fetch();
			return $row[0];
		}
		function komment_kiiras($array){
			foreach ($array as $key => $value) {
				if($value[2] == 1){
					$neve="Anonimus";
				}else{
					$rate = new rate();
					$neve=$rate->nev_leker($value[0]);
				}
				echo "<div class=\"col-lg-12\">";
				echo "<p class=\"lead font-weight-bold\">".$neve."<span class=\"float-right\">". $value[3] ."/5</span></p>";
				echo "<p class=\"rounded\">". $value[1] ."</p>";
				echo "<hr>";
				echo "</div>";
			}
		}
	}
?>