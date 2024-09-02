<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		.container {
			width: 300px;
			margin: 0 auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.container h2 {
			text-align: center;
		}
		.container input[type="text"],
		.container input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		.container input[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Login Form</h2>
		<form action="login.php" method="POST">
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Login"><br><br>
			<a href="register.php">Register</a>
		</form>
	</div>
</body>
</html>

<?php

		

?>