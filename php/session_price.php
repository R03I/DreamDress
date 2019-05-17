<?php
session_start();
$nevek="";
if(isset($_SESSION['price'])){
for ($i=0; $i < count($_SESSION['price']); $i++) {
	$nevek = $nevek . $_SESSION['price'][$i].";";
	}
}
echo $nevek;
?>