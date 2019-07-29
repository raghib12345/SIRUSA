<html>
	<head>
		<title>form</title>
	</head>
	<body>
		<form action="{{ url('/') }}" method="post">
			{{ csrf_field() }}
			<label for="username">username : </label>
			<input type="text" name="username" id="username" placeholder="masukan username">
			<button type="submit">postkan</button>
		</form>
	</body>
</html>