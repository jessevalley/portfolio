<?php
require 'database_config.php';
session_start();

if(isset($_POST['usr'])){
	$username = $_POST['usr'];
}
if(isset($_POST['pwd'])){
	$password = $_POST['pwd'];
	$md5_pass = md5($password);
}

$_SESSION['admin'] = 0;
$q = 'SELECT * FROM user WHERE uname=:username AND pword=:password';
$query = $dbh->prepare($q);
$query->execute(array(':username' => $username, ':password' => $md5_pass));

if($query->rowCount() == 0){
	header('Location: index.php?err=1');
} else{
	$row = $query->fetch(PDO::FETCH_ASSOC);
	
	$_SESSION['uid'] = $row['UID'];
	$_SESSION['uname'] = $row['UNAME'];
	$_SESSION['sess_userrole'] = $row['ADMIN'];
	$_SESSION['fname'] = $row['FNAME'];
	$_SESSION['lname'] = $row['LNAME'];
	$_SESSION['mname'] = $row['MNAME'];
	$_SESSION['bday'] = $row['BDAY'];
	$_SESSION['street1'] = $row['STREET1'];
	$_SESSION['street2'] = $row['STREET2'];
	$_SESSION['city'] = $row['CITY'];
	$_SESSION['state'] = $row['STATE'];
	$_SESSION['zip'] = $row['ZIP'];
	$_SESSION['phone_home'] = $row['PHONE_HOME'];
	$_SESSION['phone_cell'] = $row['PHONE_CELL'];
	$_SESSION['texts'] = $row['TEXTS'];
	$_SESSION['email'] = $row['EMAILS'];
	$_SESSION['news'] = $row['NEWS'];
	$_SESSION['active'] = $row['ACTIVE'];
	$_SESSION['anniv'] = $row['ANNIV'];
	$_SESSION['client'] = $row['CLIENT'];
	$_SESSION['created'] = $row['CREATE_TIME'];
	$_SESSION['gpw1'] = "";
	$_SESSION['gpw2'] = "";
	$_SESSION['gpw3'] = "";
	$_SESSION['gpw4'] = "";
	$_SESSION['gpw5'] = "";
	$_SESSION['gpw6'] = "";
	$_SESSION['gpw7'] = "";
	
	if($_SESSION['active'] == 1){
		if($_SESSION['sess_userrole'] == 1){
			$_SESSION['admin'] = 1;
			header('Location: index.php');
		}
		else{
			$_SESSION['admin'] = 2;
			header ('Location: index.php');
		}
	} else {
		header ('Location: index.php?err=5');
	}
} 
?>
