<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		@foreach ($tasks as $task)
			<li><a href="/test/{{ $task->id }}">{{ $task->body }}</a></li>
		@endforeach
	</ul>
</body>
</html>