<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<title>Create a new post</title>
</head>
<body>
	<form method="POST" action="/posts">
		{{ csrf_field() }}
		<div class="form-group col-md-6">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" placeholder="New post title" name="title" required>
		</div>
		<div class="form-group col-md-6">
			<label for="body">Content</label>
			<input type="text" class="form-control" id="body" placeholder="Content" name="body" required>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	@include('layouts.error')
	
</body>
</html>