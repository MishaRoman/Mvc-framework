<?php use app\core\Application ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
	integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>Title</title>
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" 	aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExample02">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
		    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/contact">Contact</a>
		  </li>
		</ul>

		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active">
		    <a class="nav-link" href="/login">Login<span class="sr-only"></span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/register">Register</a>
		  </li>
		</ul>
		
		</div>
	</nav>
	<div class="container">
		<?php if (Application::$app->session->getFlash('success')): ?>
		<div class="alert alert-success">
			<?php echo Application::$app->session->getFlash('success') ?>
		</div>
		<?php endif ?>
		{{content}}
	</div>
</body>
</html>