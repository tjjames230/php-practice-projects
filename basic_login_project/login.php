<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<h1>Post login page</h1>

	<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		echo 'true';
	}

	?>
</body>

</html>