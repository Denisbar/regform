<?php
$DB_host = 'localhost';
$DB_user = 'root';
$DB_pass = '8169x5it';
$DB_name = 'reg_form';

try{
	$DB_connection = new PDO("mysql:host={$DB_host}; dbname={$DB_name}", $DB_user, $DB_pass);
	$DB_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}
?>



