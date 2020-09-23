<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>
	<table>
		@foreach ($newdata as $data)
			<tr>
				<th>First name</th>
				<td>{{ $data['name']}}</td>
			</tr>
		@endforeach

		@foreach ($newdata2 as $data2)
			<tr>
				<th>Last name</th>
				<td>{{ $data2['lastname']}}</td>
			</tr>
		@endforeach


		@foreach ($newdata3 as $data3)
			<tr>
				<th>Address</th>
				<td>{{ $data3['address']}}</td>
			</tr>
		@endforeach

		@foreach ($newdata4 as $data4)
			<tr>
				<th>Biography</th>
				<td>{{ $data4['biography']}}</td>
			</tr>
		@endforeach

		@foreach ($newdata5 as $data4)
			<tr>
				<th>Birthday</th>
				<td>{{ $data4['birthday']}}</td>
			</tr>
		@endforeach



	</table>
</body>
</html>