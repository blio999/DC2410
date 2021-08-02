<?php
require_once('connectdb.php'); 

$firstName = $_POST["InputName"];
$surname = $_POST["InputSurname"];
$fullName = trim($firstName)." ".trim($surname);
$email = $_POST["InputEmail"];
$password = $_POST["InputPassword"];
$contactNumber = $_POST["InputContactNumber"];

$sql = "INSERT INTO Organiser (`Name`, `EmailAddress`, `Password`, `MobileNumber`) VALUES (\"$fullName\", \"$email\", \"$password\", \"$contactNumber)\";";
$statement = $db->prepare("$sql");
$statement->execute();
$db = null;


header("Location: login.php");


?>