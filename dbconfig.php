<?php
$user = 'root';
$pass = '8169x5it';

try{
$con = new PDO('mysql:host=localhost; dbname=reg_form', $user, $pass);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	echo "POD Error :".$e->getMessage(); 
}

include_once 'class_reg.php';
$user = new Reg($con);

?>