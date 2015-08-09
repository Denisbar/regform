<html>
<head>
<style type="text/css">
table {
	padding: 50px;
	border: 1px solid black;
}

td {
	padding-left: 45px;
	border: 1px solid black;
}

</style>
</head>
<body>
<?php
$user = 'root';
$pass = '8169x5it';
$db = new PDO('mysql:host=localhost; dbname=reg_form', $user, $pass); 
$sql = "SELECT * FROM WebsiteUsers";
$query = $db->prepare($sql);
$query -> execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC); //получить асоциативный масив
//print_r($result);
?>

<table>
	<tr>
		<th>User Name</th>
		<th>Password</th>
		<th>First Name</th>
		<th>Email</th>
	</tr>
<?php
	

foreach ($result as $row) {
	echo "<tr><td>";
	echo $row['userName'];
	echo "</td>";
	echo "<td>";
	echo $row['pass'];
	echo "</td>";
	echo "<td>";
	echo $row['fullName'];
	echo "</td>";
	echo "<td>";
	echo $row['email'];
	echo "</td>";
	echo "</tr>";
}


?>
</table>

</body>
</html>