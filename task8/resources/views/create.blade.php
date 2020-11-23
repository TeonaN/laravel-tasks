<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

		<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title" class=" @error('title') is-invalid @enderror">
		@error("title")
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
		<br>
		<label>Description</label><br>
		<textarea type="text" name="description"></textarea><br>
		<label>Short Description</label><br>
		<textarea type="text" name="short_description"></textarea><br>
		<input type="file" name="image">
		<input type="hidden" name="category_id" value="1">
		<input type="date" id="creation_date" name="creation_date">
		<br>

		<input type="text" name="tags[]">
		<input type="text" name="tags[]">
		<input type="text" name="tags[]">
		<input type="text" name="tags[]">

		<button>save</button>
	</form>

</body>
</html>	