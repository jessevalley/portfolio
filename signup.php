<?php
	require 'database_config.php';
	session_start();
	global $signup;
	$_SESSION['signup']=0;
	$signup=1;
	$_SESSION['signup']=$signup;
	function test_input( $data ) {
		$data = trim( $data );
		$data = htmlspecialchars( $data );
		return $data;
	}
	
	if(isset($_POST['usrNew'])){
		$username = test_input($_POST['usrNew']);
	}
	if(isset($_POST['pwdNew'])){
		$password = test_input($_POST['pwdNew']);
	}
	if(isset($_POST['pwdConf'])){
		$passconf = test_input($_POST['pwdConf']);
	}
	if($password===$passconf){
		$md5_pass = md5($password);
		$stmt = $dbh->prepare('SELECT * FROM user WHERE uname=:username');
		$stmt->execute(['username' => $username]);
		if($stmt->rowCount() != 0){
			header('Location: index.php?err=6');
		} else {
			$_SESSION['uname'] = $username;
			$_SESSION['pword'] = $md5_pass;
			header('Location: create.php');
		}
	} else {
		header('Location: index.php?err=7');
	}
?>