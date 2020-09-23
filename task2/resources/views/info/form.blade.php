  
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('testpost') }}" method="POST">
		@csrf
		<label for="name">First name:</label><br>
		<input type="text" name="name"><br>
		<label for="lastname">Last name:</label><br>
		<input type="text" name="lastname"><br>
		<label for="address">Address:</label><br>
		<input type="text" name="address"><br>
		<label for="biography">Biography:</label><br>
		<textarea type="text" name="biography" rows="4" cols="50"></textarea><br>
		<label for="birthday">Birthday:</label><br>
		<input type="text" name="birthday"><br><br>
		<button>submit</button>
	</form>
</body>
</html>