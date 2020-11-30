<!DOCTYPE html>
<html>
<head>
	<title>List Dong Tu</title>
</head>
<body>
	<table>
		<th>Teen</th>
		<th>Thong tin</th>
		@foreach($lstdongtu as $dongtu)
		<tr>
			<td>{{$dongtu->name}}</td>
			<td>{{$dongtu->information}}</td>
			<td><a href="{{route('delete.dongtu',$dongtu->id)}}">Delete</a>
				<a href="{{route('show.dongtu',$dongtu->id)}}">View</a>
				<a href="{{route('getupdate.dongtu',$dongtu->id)}}">Edit</a>
			</td>
		</tr>
			
		@endforeach
	</table>

</body>
</html>