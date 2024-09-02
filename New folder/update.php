<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// Retrieve the record to be updated
	$sql = "SELECT * FROM users WHERE id = $id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();

		// Display the update form
		echo <<<HTML
		<html>
		<head>
		<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.update-form {
			max-width: 400px;
			margin: 0 auto;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			padding: 20px;
			margin-top: 50px;
		}

		.update-form label {
			display: block;
			margin-bottom: 10px;
		}

		.update-form input[type="text"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 20px;
		}

		.update-form input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		</style>
		</head>
		<body>
		<div class="update-form">
		<h2>Update User</h2>
		<form action="update.php" method="POST">
		<input type="hidden" name="id" value="{$row['id']}">
		<label for="username">Username</label>
		<input type="text" name="username" value="{$row['username']}">
		<label for="email">Email</label>
		<input type="text" name="email" value="{$row['email']}">
		<label for="password">Password</label>
		<input type="text" name="password" value="{$row['password']}">
		<input type="submit" value="Update">
		</form>
		</div>
		</body>
		</html>
		HTML;
	} else {
		echo "No data found.";
	}
} elseif (isset($_POST['id'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Update the record
	$sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = $id";
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully.";
	} else {
		echo "Error updating record: " . $conn->error;
	}
}

$conn->close();
?>