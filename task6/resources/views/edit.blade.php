<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form action="{{ route('update') }}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{ $products->id }}">
		<label>Title</label><br>
		<input type="text" name="title" placeholder="title" value="{{ $products->title }}"><br>
		<label>Description</label><br>
		<textarea type="text" name="description">{{ $products->description }}</textarea><br>
		<button>save</button>
	</form>

</body>
</html>