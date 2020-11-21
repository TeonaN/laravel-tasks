<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form action="{{ route('update') }}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{ $news->id }}">
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title" value="{{ $news->title }}"><br>
		<label>Description</label><br>
		<textarea type="text" name="description">{{ $news->description }}</textarea><br>
		<label>Description</label><br>
		<textarea type="text" name="short_description">{{ $news->short_description }}</textarea><br>
		<button>save</button>
	</form>

</body>
</html>