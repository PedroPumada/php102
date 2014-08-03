<html>
<head>
	<title>PHP 102 Form Exercise</title>
	<meta charset="utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h1>Two Ways to Submit a Form</h1>

	<h2>Using POST</h2>
	<form class="form-inline" role="form" method="post" action="week1_ex1.php">
		<div class="form-group">
		<label for="post_query" name="post_label"><input type="text" name="post_query" size="10" /></label>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
	<div class="row"></div>
	<h2>Using GET</h2>
	<form class="form-inline" role="form" method="get" action="week1_ex1.php">
		<div class="form-group">
		<label for="get_query" name="get_label"><input type="text" name="get_query" size="10" /></label>
		</div>
		<button type="submit" class="btn btn-success">Submit</button>
	</form>
	<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo '<h3>$_SERVER: </h3>';
		echo '<p class="bg-danger">' . var_dump($_SERVER) . '</p>';
		echo '<h3>$_POST: </h3>';
		echo '<p class="bg-danger">' . var_dump($_POST) . '</p>';
	}
	elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
		echo '<h3>$_SERVER: </h3>';
		echo '<p class="bg-danger">' . var_dump($_SERVER) . '</p>';
		echo '<h3>$_GET: </h3>';
		echo '<p class="bg-danger">' . var_dump($_GET) . '</p>';
	}
	?>
	</div> <!-- end container -->
</body>
</html>