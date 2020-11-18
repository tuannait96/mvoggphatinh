
<!DOCTYPE html>
<html>
<head>
	<title>View Post</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
	@include('user.layout.header')
	<div>
		@foreach($lstpost as $post)
		{!!$post->content!!}
		<img src="{!!$post->thumbimg!!}">
				
		<h3>hết 1 POST</h3>
		@endforeach
	</div>
	<!-- {{$lstpost->first()->content}} -->
</body>
</html>