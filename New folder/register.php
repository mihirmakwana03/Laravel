<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
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
		.container input[type="email"],
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
		<h2>Registration Form</h2>
		<form method="POST" action="registration.php">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required><br><br>
			
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required><br><br>
			
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required><br><br>
			
			<input type="submit" value="Register">
		</form>
	</div>
</body>
</html>