<?php
require_once('connectdb.php'); 

$email = $_POST["InputEmail"];
$password = $_POST["InputPassword"];

$sql = "SELECT \'Email\', \'Password\' FROM \'Organiser\' WHERE \'Email\' = $email AND \'Password\' = $password";
$statement = $db->prepare($sql);
$statement->execute();

if($statement->rowCount()==1){
    session_start();
    $_SESSION["emailAddress"]=$email;

}

else{
    echo("Failed to log in");
}

$db = null;
