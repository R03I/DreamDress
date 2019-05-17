<?php
session_start();
$vissza="<tr><th scope=\"col\">Név</th><th scope=\"col\">Ár</th></tr>";
if(isset($_SESSION['logged'])){
if(isset($_SESSION['name'][0])){
for ($i=0; $i < count($_SESSION['name']); $i++) {
    $vissza =  $vissza."<tr><td>".$_SESSION['name'][$i]."</td><td>".$_SESSION['price'][$i]."ft</td></tr>";     
	}
	echo $vissza;
}else{
	echo "ures";
}
}else{
	echo "not_logged";
}
?>