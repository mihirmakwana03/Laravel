<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<table border="3" cellspacing="0" cellpadding="10" align="center" style="border-radius:10px;">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
	</tr>
	@foreach ($data as $i)
	<tr>
		<td>{{ $i->name }}</td>
		<td>{{ $i->email }}</td>
		<td>{{ $i->password }}</td>
	</tr>	
	@endforeach
</table>

</body>
</html>