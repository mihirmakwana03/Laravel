<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<form action="/update" method="POST">
		@csrf
		@foreach ($display as $i)
		<label for="id">Id:</label>
		<input type="text" id="id" name="id" value="{{$i->id}}" required><br><br>

		<label for="name">Name:</label>
		<input type="text" id="name" name="name" value="{{$i->name}}" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="{{$i->email}}" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" value="{{$i->password}}" required><br><br>

		<input type="submit" value="Update">
		@endforeach
	</form>
</body>

</html>