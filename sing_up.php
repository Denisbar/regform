<html><head>
<link href="style.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#userName').keyup(function(e){  // e - 'это служебная переменная которая как объект 
				var username = $(this).val();
				$.post('check_username.php', {'userName':username}, function(data){
					$('#user_result').html(data);
				});
			});

			
		
		});

	</script>
</head>
	<body>
		<div id="main_block">
			
			<h1>Enter to Database</h1>
				<form id="registration" name="registration" action="registration.php" method="POST">
					  
					  <label for 'username'>Username: </label>
					  		<input type="text" name="userName" id="userName"/>
					  		<span id="user_result"></span>
					  
					  <label for 'password'>Password: </label>
					  		<input type="password" name="pass"/>
					  		<span id="pass_result"></span>
					  <br/>
					  <button type="submit">Enter</button>
					  <br>
					  <a href="#">Registration</a>
					  
				 </form>
				<p id="show_str"></p> 
		</div>

	</body>
</html>

