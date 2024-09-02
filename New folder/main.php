<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo <<<HTML
	<html>
	<head>
	<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f2f2f2;
	}

	.dashboard {
		display: flex;
		flex-wrap: wrap;
	}

	.user-card {
		background-color: #fff;
		border-radius: 5px;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		padding: 20px;
		margin: 10px;
		flex: 1 1 300px;
	}

	.username {
		font-size: 18px;
		font-weight: bold;
	}

	.email {
		color: #666;
	}

	.password {
		color: #999;
	}

	.actions {
		margin-top: 10px;
	}

	.actions a {
		margin-right: 10px;
	}

	</style>
	</head>
	<body>
	HTML;

	echo "<div class='dashboard'>";

	while ($row = $result->fetch_assoc()) {
		echo "<div class='user-card'>";
		echo "<div class='username'>Username: " . $row["username"] . "</div>";
		echo "<div class='email'>Email: " . $row["email"] . "</div>";
		echo "<div class='password'>Password: " . $row["password"] . "</div>";
		echo "<div class='actions'>";
		echo "<a href='update.php?id=" . $row["id"] . "'>Update</a>";
		echo "<a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";
		echo "</div>";
		echo "</div>";
	}

	echo "</div>";

	echo "</body>";
	echo "</html>";
} else {
	echo "No data found.";
}

$conn->close();
?>