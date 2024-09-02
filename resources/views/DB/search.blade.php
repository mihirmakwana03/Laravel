<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<center>
		<form action="/search" method="POST">
			@csrf

			<label for="name">Name:</label>
			<input type="name" id="name" name="name" required>

			<input type="submit" value="Search">
		</form>
	</center><br><br>

	<table border="3" cellspacing="0" cellpadding="10" align="center" style="border-radius:10px;">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
		</tr>

		@foreach ($display as $i)
			<tr>
				<td>{{ $i->name }}</td>
				<td>{{ $i->email }}</td>
				<td>{{ $i->password }}</td>
				<td><a href="update?id={{$i->id}}">Update</a></td>
			</tr>
		@endforeach

	</table>
</body>

</html>