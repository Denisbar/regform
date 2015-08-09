<?php
try{
$db = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '8169x5it');
}catch (PDOException $e){
	echo 'Errooooo' . $e->getMessage();
}

if($db){
	echo "foo";
}
var_dump($db);

?>