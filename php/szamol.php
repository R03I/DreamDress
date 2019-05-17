<?php
session_start();
$osszeg = 0;
if(isset($_SESSION['price'])){
for($i=0;$i<count($_SESSION['price']);$i++){
	$osszeg+=$_SESSION['price'][$i];
}
}
echo $osszeg;
?>