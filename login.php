<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section class="login-section">
	<div class="login-box">
		<?php
		if (isset($_POST["login"])) {
			$email = $_POST["email"];
			$password = $_POST["password"];
			require_once "book_form.php";
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($connection2, $sql);
			$users = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if ($users) {
				if (password_verify($password, $users["password"])) {
					session_start();
					$_SESSION["user"] = "yes";
					header("Location: random.php");
					die();	
				}else{
					echo "<div class='alert alert-danger'>Password does not match</div>";
				}
			}else{
				echo "<div class='alert alert-danger'>Email does not match</div>";
			}
		}
		?>
		<form action="login.php" method="post">
			<div class="form-group">
				<input type="email" placeholder="Enter Email: " name="email" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" placeholder="Enter Password: " name="password" class="form-control">
			</div>
			<div class="form-btn">
				<input type="submit" value="Login " name="login" class="btn btn-primary">
			</div>
		</form>
		<div><p>Not Registered yet <a href="register.php">Register Here</a></p></div>
	</div>
	</section>
</body>
</html>