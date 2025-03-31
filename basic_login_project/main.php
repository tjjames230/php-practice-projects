<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Basic Login Project</title>
</head>

<body>
	<h1>Welcome</h1>
	<p>Please login to continue:</p>
	<p>("user" for username and "pass" for password.)</p>
	<form action="login.php" method="POST">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username">
		<label for="password">Password: </label>
		<input type="text" name="password" id="password">
		<button type="submit">Submit</button>
	</form>

</body>

</html>