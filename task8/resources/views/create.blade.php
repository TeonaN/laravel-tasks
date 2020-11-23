<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title"><br>
		<label>Description</label><br>
		<textarea type="text" name="description"></textarea><br>
		<label>Short Description</label><br>
		<textarea type="text" name="short_description"></textarea><br>
		<input type="file" name="image">
		<input type="hidden" name="category_id" value="1">
		<input type="date" id="creation_date" name="creation_date">
		<button>save</button>
	</form>

</body>
</html>