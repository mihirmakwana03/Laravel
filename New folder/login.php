<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "laravel";

	$conn = new mysqli($servername, $user, $pass, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($sql);
	// echo $username;
	// echo $password;

	if ($result->num_rows > 0) {
		echo "Login successful";
		header("Location: main.php");
		exit;
	} else {

		echo "Invalid username or password";
	}

	$conn->close();
}