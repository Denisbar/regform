<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
require_once 'dbconfig.php';
/*$user = 'root';
$pass = '8169x5it';
$db = new PDO( 'mysql:host=localhost;dbname=reg_form', $user, $pass );
*/

if(isset($_POST['userName'])){
$form = $_POST;

//var_dump($_POST);

$userName = $form[ 'userName' ];
$pass = md5($form[ 'pass' ]);     // password_hash не работает

if($user->registration($userName, $pass)){
	$user->redirect("../pagination/oldpagination/pagination.php");
}else{
	echo "0";
}
}

//$fullName = $form[ 'fullName' ];
//$email = $form[ 'email' ];


/*
$sql = "INSERT INTO WebsiteUsers ( userName, pass, fullName, email ) VALUES 
												( :userName, :pass, :fullName, :email )";

$query = $db->prepare( $sql );
*/
/*
if(
$query->execute( array( ':userName'=>$userName,
						':pass'=>$pass, 
						':fullName'=>$fullName,
						':email'=>$email ) ) ==true

){ 
	include 'all_users.php'; 
	
	}else{
	echo '0';
}
}*/
?>