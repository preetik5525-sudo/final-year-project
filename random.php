<?php
session_start();
if (!isset($_SESSION["user"])) {
	header("Location: random.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>User Dashboard</title>
</head>
<body>
	<section class="login-section">
	<div class="login-box">
		<h1>Welcome</h1>
		<a href="home.php" class="btn btn-warning">Logout</a>
	</div>
</section>
</body>
</html>