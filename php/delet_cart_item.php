<?php
session_start();

	if($_POST['id'] == count($_SESSION['name'])-1){
		unset($_SESSION['name'][$_POST['id']]);
		unset($_SESSION['price'][$_POST['id']]);
		unset($_SESSION['src'][$_POST['id']]);
	}else if(1 == count($_SESSION['name'])){
		unset($_SESSION['name'][0]);
		unset($_SESSION['price'][0]);
		unset($_SESSION['src'][0]);
	}
	for ($i=($_POST['id'])+1; $i < count($_SESSION['name']); $i++) { 
		$_SESSION['name'][$i-1] = $_SESSION['name'][$i];	
		$_SESSION['price'][$i-1] = $_SESSION['price'][$i];
		$_SESSION['src'][$i-1] = $_SESSION['src'][$i];
		if($i == count($_SESSION['name'])-1){
		unset($_SESSION['name'][$i]);
		unset($_SESSION['price'][$i]);
		unset($_SESSION['src'][$i]);
		}
	}
	$_SESSION['name'] = array_values($_SESSION['name']);
	$_SESSION['price'] = array_values($_SESSION['price']);
	$_SESSION['src'] = array_values($_SESSION['src']);
	echo "#". $_POST['id'];
?>