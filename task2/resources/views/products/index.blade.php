@extends("layouts.single")

@section('content')

	<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
	</style>
	<div>
		<table>
			<tr>
				<td>Title</td>
				<td>Text</td>
				<td>Short Description</td>
			</tr>

			@foreach ($products as $product)
			<tr>
				<td>{{ $product->title }}</td>
				<td>{{ $product->text }}</td>
				<td>{{ $product->short_description  }}</td>
			</tr>

			@endforeach
		</table>
	</div>
@endsection