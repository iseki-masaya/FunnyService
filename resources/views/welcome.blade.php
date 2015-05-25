<html>
	<head>
		<title>偉大な人物</title>
	<body>
		<div class="container">
			<h1>偉大な人物</h1>
			<ol>
			@foreach ($people as $person)
				<li>{{ $person->name }}</li>
			@endforeach
			</ol>
		</div>
	</body>
</html>
