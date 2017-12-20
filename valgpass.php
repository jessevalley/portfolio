<?php
	session_start();
	$pw = "";
	$id = $_GET['gid'];
	$sesgalpas = "gpw".$id;
	if(isset($_POST['gpasswd'])){
		$pw=$_POST['gpasswd'];
		$pw=md5($pw);
	}
	if($id==1){
		if($pw==$_SESSION['gpw']){
			$_SESSION['gpw1']=$pw;
			header("Location: photography.php");
		} else {
			header("Location: photography.php?err=3");
		}
	}
		if($id==2){
		if($pw==$_SESSION['gpw']){
			$_SESSION['gpw2']=$pw;
			header("Location: poetry.php");
		} else {
			header("Location: poetry.php?err=3");
		}
	}
		if($id==3){
		if($pw==$_SESSION['gpw']){
			$_SESSION['gpw3']=$pw;
			header("Location: paintings.php");
		} else {
			header("Location: paintings.php?err=3");
		}
	}
		if($id==4){
		if($pw==$_SESSION['gpw']){
			$_SESSION['gpw4']=$pw;
			header("Location: pottery.php");
		} else {
			header("Location: pottery.php?err=3");
		}
	}
		if($id==5){
		if($pw==$_SESSION['gpw']){
			$_SESSION['gpw5']=$pw;
			header("Location: programming.php");
		} else {
			header("Location: programming.php?err=3");
		}
	}
		if($id==6){
		if($pw==$_SESSION['gpw']){
			$_SESSION['gpw6']=$pw;
			header("Location: portraits.php");
		} else {
			header("Location: portraits.php?err=3");
		}
	}
?>