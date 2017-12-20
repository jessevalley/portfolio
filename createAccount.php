<?php
	require 'database_config.php';
	session_start();
	if(!isset($_SESSION['signup'])){
		$_SESSION['signup']=0;
		unset($_SESSION['signup']);
		header('Location: index.php?err=1');
	}
	function test_input( $data ) {
		$data = trim( $data );
		$data = htmlspecialchars( $data );
		return $data;
	}
	if($_POST){
		$username = $_SESSION['uname'];
		$md5_pass = $_SESSION['pword'];
		$fname = test_input( $_POST[ "fname" ] );
		if (empty($_POST['mname'])){
			$mname = "";
		}else{
			$mname = test_input($_POST['mname']);
		}
		$lname = test_input( $_POST[ "lname" ] );
		$bday = test_input($_POST['bday']);
		$street1 = test_input( $_POST[ "street1" ] );
		if ( empty( $_POST[ "street2" ] ) ) {
			$street2 = "";
		}else{
			$street2 = test_input( $_POST[ "street2" ] );
		}
		$city = test_input( $_POST[ "city" ] );
		$state = $_POST[ "state" ];
		$zip = test_input( $_POST[ "zip" ] );
		if(empty($_POST['phone_home'])){
			$phone_home = "";
		}else{
			$phone_home = test_input( $_POST[ "phone_home" ] );
		}
		if(empty($_POST['phone_cell'])){
			$phone_cell = "";
		}else{
			$phone_cell = test_input( $_POST[ "phone_cell" ] );
		}
		$email = test_input( $_POST[ "email" ] );
		if(empty($_POST['anniv'])){
			$anniv = NULL;
		}else{
			$anniv = test_input($_POST['anniv']);
		}
		$texts = $_POST['texts'];
		$news = $_POST['news'];
		if(empty($_POST['client'])){
			$client = 0;
		} else {
			$client = $_POST['client'];
		}
		try{
		$query = $dbh->prepare("INSERT INTO user (UNAME, PWORD, FNAME, LNAME, MNAME, BDAY, STREET1, STREET2, CITY, STATE, ZIP, PHONE_HOME, PHONE_CELL, TEXTS, EMAIL, NEWS, ANNIV, CLIENT)
		VALUES ('$username', '$md5_pass', '$fname', '$lname', '$mname', '$bday', '$street1', '$street2', '$city', '$state', '$zip', '$phone_home', '$phone_cell', $texts, '$email', $news, '$anniv', $client);");
		$query->execute();
			
		}catch(PDOException $e){
			echo $e->getMessage();
		}

		include 'authenticate.php';
	}
?>