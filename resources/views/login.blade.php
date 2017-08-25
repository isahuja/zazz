<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ URL::to('/login') }}" method="POST">
		<input type="text" name="name"><br>
		<input type="password" name="password"><br>
		<input type="submit">
	</form>
</body>
</html>