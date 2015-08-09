<?php
require_once 'dbconfig.php';
$user = 'root';
$pass = '8169x5it';

if(isset($_POST['userName'])){
$db = new PDO('mysql:host=localhost; dbname=reg_form', $user, $pass);

$username = $_POST['userName'];
error_log(json_encode($_POST));
$sql = "SELECT userID FROM WebsiteUsers WHERE userName='$username'";
$query = $db->prepare($sql);
$query -> execute();
$result = $query->fetchColumn();

if($result){
	echo "ok";

}else{
	echo "not ok ";
}
}

print_r($username);
error_log($username);
error_log(json_encode($result));

?>