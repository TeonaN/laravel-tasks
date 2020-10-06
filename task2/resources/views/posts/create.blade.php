@extends("layouts.single")

@section('content')
	<form action="{{ route('store') }}" method="POST">
		@csrf
		<label>Title</label><br>
		<input type="text" name="title"><br>
		<label>Text</label><br>
		<input type="text" name="text"><br>
		<label>Short Description</label><br>
		<textarea type="text" name="short_description"></textarea><br>
		<button>submit</button>
	</form>
@endsection