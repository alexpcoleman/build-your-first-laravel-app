<!doctype html>
<html>
	<head>
		<title>My Movies</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">

			<div class="page-header">
				<h1>My Movies</h1>
			</div>

			<ul class="list-group">
			
			@foreach($all_movies as $movie)
				<li class="list-group-item">
					<h2 class="list-group-item-heading">{{ $movie->title }}</h2>
					<p class="list-group-item-text">
						<strong>Released on:</strong> {{ date('F d, Y', strtotime($movie->released_on)) }}
						<br><strong>Rating:</strong> {{ $movie->rating }}
						<br><strong>Review:</strong> {{ $movie->review }}
					</p>
				</li>
			@endforeach

			</ul>

		</div>

	</body>
</html>