<?php
session_start();
$role = $_SESSION['admin'];
if($role!=1 && $role!=2){
	header('Location: index.php?err=2');
}
include("database_config.php");
$uname = $_SESSION['uname'];
$query = $dbh->prepare("SELECT * FROM USER WHERE UNAME='$uname';");
$query->execute();

function test_input( $data ) {
	$data = trim( $data );
	$data = htmlspecialchars( $data );
	return $data;
}
if(isset($_POST['save'])){
	$fname = test_input($_POST['fname']);
	$mname = test_input($_POST['mname']);
	$lname = test_input($_POST['lname']);
	$email = test_input($_POST['email']);
	$city = test_input($_POST['city']);
	$state = $_POST['state'];
	$zip = test_input($_POST['zip']);
	$bday = test_input($_POST['bday']);
	$street1 = test_input($_POST['street1']);
	$street2 = test_input($_POST['street2']);
	$phome = test_input($_POST['phone_home']);
	$pcell = test_input($_POST['phone_cell']);
	$texts = $_POST['texts'];
	$news = $_POST['news'];
	$anniv = test_input($_POST['anniv']);
	
	if(!empty($_POST['fname'])){
		$query = $dbh->prepare("UPDATE USER SET FNAME='$fname' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['mname'])){
		$query = $dbh->prepare("UPDATE USER SET MNAME='$mname' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['lname'])){
		$query = $dbh->prepare("UPDATE USER SET LNAME='$lname' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['email'])){
		$query = $dbh->prepare("UPDATE USER SET EMAIL='$email' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['city'])){
		$query = $dbh->prepare("UPDATE USER SET CITY='$city' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['state'])){
		$query = $dbh->prepare("UPDATE USER SET STATE='$state' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['zip'])){
		$query = $dbh->prepare("UPDATE USER SET ZIP='$zip' WHERE UNAME='$uname';");
		$query->execute();
	}
	
	if(!empty($_POST['street1'])){
		$query = $dbh->prepare("UPDATE USER SET STREET1='$street1' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['street2'])){
		$query = $dbh->prepare("UPDATE USER SET STREET2='$street2' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['phone_home'])){
		$query = $dbh->prepare("UPDATE USER SET PHONE_HOME='$phome' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['phone_cell'])){
		$query = $dbh->prepare("UPDATE USER SET PHONE_CELL='$pcell' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['bday'])){
		$query = $dbh->prepare("UPDATE USER SET BDAY='$bday' WHERE UNAME='$uname';");
		$query->execute();
	}
	if(!empty($_POST['anniv'])){
		$query = $dbh->prepare("UPDATE USER SET STATE='$anniv' WHERE UNAME='$uname';");
		$query->execute();
	}
	$query = $dbh->prepare("UPDATE USER SET TEXTS=$texts, NEWS=$news WHERE UNAME='$uname';");
	$query->execute();
} header("Location: index.php");
?>