<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form action="/deleteForm" method="POST">
		@csrf
		<label for="id">Id:</label>
		<input type="text" id="id" name="id" required><br><br>

		<input type="submit" value="Delete">
	</form>

</body>
</html>