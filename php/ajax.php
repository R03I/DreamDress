<?php

	//LOGIN
	session_start();
	if(isset($_POST['username']) && isset($_POST['password'])){
		require("dbconn.php");
		require("login.php");
		$login = new login();
		echo json_encode($login->login_ellenor($_POST['username'], $login->jelszo_convert($_POST['password'])));
	}
	if(isset($_POST["logged"])){
		if(isset($_SESSION["logged"])){
			echo $_SESSION['logged'];
		}else{
			echo false;
		}
	}
	if(isset($_POST["destory"])){
		$name = $_SESSION['logged']; 
		unset($_SESSION['logged']);
		echo $name;
	}

	//REGISTER
	if(isset($_POST['username_reg'])){
		require("dbconn.php");
		require("register.php");
		$register = new reg();
		echo json_encode($register->foglalt_nev($_POST['username_reg']));
	}
	if(isset($_POST['email_reg'])){
		require("dbconn.php");
		require("register.php");
		$register = new reg();
		echo json_encode($register->foglalt_nev($_POST['email_reg']));
	}
	if(isset($_POST['usernamepost_reg']) && isset($_POST['passwordpost_reg']) && isset($_POST['emailpost_reg'])){
		require("dbconn.php");
		require("register.php");
		require("login.php");
		$register = new reg();
		$login = new login();
		$register->acc_register($_POST['usernamepost_reg'], $login->jelszo_convert($_POST['passwordpost_reg']), $_POST['emailpost_reg']);
		echo $_POST['usernamepost_reg'] . " sikeresen regisztráltál most már beléphetsz.";
	}
	//NEW PASSWORD
	if(isset($_POST['username_rep']) && isset($_POST['password_rep']) && isset($_POST['new_password_rep'])){
		require("dbconn.php");
		require("re_password.php");
		require("login.php");
		$re_password = new re_password();
		echo json_encode($re_password->new_password($_POST['username_rep'], $_POST['password_rep'], $_POST['new_password_rep']));
	}
	//ADDRESS
	if(isset($_POST['add_username'])){
		require("dbconn.php");
		require("address_load.php");
		$address = new address();
		echo json_encode($address->address_leker($_POST['add_username']));
	}
	if(isset($_POST['username_add']) && isset($_POST['name_add']) && isset($_POST['address_add'])){
		require("dbconn.php");
		require("address_load.php");
		$address = new address();
		echo $address->address_update($_POST['username_add'], $_POST['name_add'], $_POST['address_add'], $_POST['comment_add']);
	}
	if(isset($_POST['emailpost'])){
		require("dbconn.php");
		require("SendMailScript.php");
		$mail_send = new mail_send($_POST['emailpost'] , "Sikeres felíratkozás", "Sikeresen felíratkozott hírlevelünkre hetente értesítjük önt friss híreinkről ehavi kupon kódunk LOWPRICE", "Content-Type: text/html; charset=UTF-8");
		$mail_send->send_mail();
	}
	if(isset($_POST['rate']) && isset($_POST['id']) && isset($_POST['comment']) && isset($_POST['anonim']) && isset($_POST['username_comm'])){
		require("dbconn.php");
		require("rate.php");
		$rate = new rate();
		$rate->feltolt($rate->user_id($_POST['username_comm']), $_POST['id'], $_POST['comment'], $_POST['anonim'], $_POST['rate']);
		echo $rate->user_id($_POST['username_comm']);
	}
	if(isset($_POST['username_id_comment_show']) && isset($_POST['item_id_comment_show'])){
		require("dbconn.php");
		require("rate.php");
		$rate = new rate();
		echo json_encode($rate->egyezik($rate->user_id($_POST['username_id_comment_show']),$_POST['item_id_comment_show']));
	}
?>