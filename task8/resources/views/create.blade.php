<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form action="{{ route('store') }}" method="POST">
		@csrf
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title"><br>
		<label>Description</label><br>
		<textarea type="text" name="description"></textarea><br>
		<label>Short Description</label><br>
		<textarea type="text" name="short_description"></textarea><br>
		<button >save</button>
	</form>

</body>
</html>