<?php

$db_name = "najathblog";
$db_host= "localhost";
$db_username= "root";
$db_password= "";
try
{
	$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>

