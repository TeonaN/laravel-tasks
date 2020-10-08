@extends("layouts.single")

@section('content')
	<div>
		<table>
			<tr>
				<td>Title</td>
				<td>Text</td>
				<td>Short Description</td>
			</tr>

			@foreach ($products as $product)
			<tr>
				<td>{{ $post->title }}</td>
				<td>{{ $post->test }}</td>
				<td>{{ $post->short_description  }}</td>
			</tr>

			@endforeach
		</table>
	</div>
@endsection