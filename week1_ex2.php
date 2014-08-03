<html>
<head>
	<title>PHP 102 File Upload Exercise</title>
	<meta charset="utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h1>PHP File Upload Exercise </h1>
	<?php 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			echo "<h2>$_FILES dump:</h2>";
			var_dump($_FILES);
		}
	?>
	<form class="form-inline" role="form" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="file_upload[]" name="file_label">Select file: <input type="file" multiple name="file_upload[]" id="file_upload"></label>
		</div>
		<button class = "btn btn-success" type="submit">Submit</button>
	</form>
	</div>
</body>
</html>
