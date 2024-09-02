<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "laravel";

	$conn = new mysqli($servername, $user, $pass, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	$conn->query($sql);

	$conn->close();

	echo "Registration successful";
	header('Location: main.php');
	exit;
}