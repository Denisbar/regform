<?php
class Reg{

	public $db;

	function __construct($con){
		$this->db = $con; //$con содержит подключение к базе данных
	}

	public function registration($userName, $pass){
		try{
			$sql = $this->db->prepare("INSERT INTO WebsiteUsers ( userName, pass ) VALUES 
													( :userName, :pass )");

			$sql->bindParam(":userName", $userName);
			$sql->bindParam(":pass", $pass);

			$sql->execute();

			return $sql;
		}
		catch(PDOException $e){
			echo "Error with data :". $e->getMessage();
		}
	}

	public function redirect($url){
		header("Location: $url");
	}

}

?>