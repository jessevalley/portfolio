<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'jessecva_portfolio';

$dbh = new PDO('mysql:host='.$host.';
					 dbname='.$database, $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!$dbh){
	echo "unable to connect to database";
} ?>

