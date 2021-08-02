<?php
$host = 'localhost';
$dbname = 'u_190236704_db';
$username = 'u-190236704';
$password = 'pE9iRCjmSWqKuIG';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES => false];

try {
	$db = new PDO($dsn, $username, $password, $opt); 
} catch(PDOException $ex) {
	echo("Failed to connect to the database.<br>");
	echo($ex->getMessage());
	exit;
}
?>