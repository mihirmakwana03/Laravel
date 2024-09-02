<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<style>
		div {
			margin-top: 200px;
			border: 1px solid black;
			width: 30%;
			padding: 20px;
			margin-left: 40%;
			border-radius: 20px;
		}

		/* div:hover{
			box-shadow: 5px 5px 5px 5px grey;
			color: black;
		} */

		button {
			color: white;
			background-color: green;
			padding: 5px;
			border-radius: 20px;
			width: 100px;
		}
	</style>
</head>

<body>
	<div align="center">
		<form action="/data" method="post">
			@csrf
			Username: <input type="text" name="id" placeholder="Enter your username"><br><br>
			Password: <input type="password" name="pass" placeholder="Enter your password"><br><br>
			<button type="submit">Login</button>
		</form>
	</div>
</body>

</html>