<?php
	class ruhak extends dbConnection
	{
		
		function __construct()
		{
			parent::__construct();
			parent::getConnection();
		}
		function termek_leker($tipus){
			$res = $this->conn->prepare("SELECT * FROM aruk WHERE miez LIKE ?");
			$res->bindparam(1, $tipus);
			$res->execute();
			$array = $res->fetchall();
			return $array;
		}
		function termek_megjelenit($array){
			echo "<div class=\"row d-flex text-center\">";
			foreach ($array as $key => $row) {
				$item = "item".$row[0];
				echo
				"<div class=\"col-6 col-sm-3 pt-3 mt-3 $row[3]\">" . 
				"<a class=\"h6 text-dark \" href=\"termek.php?termek=$row[0]\" >". $row[1] . "</a>" . "<a href=\"$row[5]\" data-lightbox=\"$row[0]\">" . "<img class=\"img-thumbnail w-100\" src=\" $row[5] \" alt=\"$row[1]\"> " . "</a>" . "<h6>" . $row[4] . " ft" . "</h6>" . 
				"<button  type=\"button\" id=\"$item._button\" onclick=\"cart('$item')\" value=\"$row[4]\" class=\"btn btn-dark ruha\">Kosárba</button>".
				"</div>
				<input type=\"hidden\" id=\"$item._name\" value=\"$row[1]\">
		    	<input type=\"hidden\" id=\"$item._price\" value=\"$row[4]\">
		    	<input type=\"hidden\" id=\"$item._img\" value=\"$row[5]\">";
			}
			echo "</div>";
		}
	}
?>