<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<section class="login-section">
	<div class="login-box">

		<?php
		if (isset($_POST["Submit"])){
			$fullName = $_POST["fullname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$passwordRepeat = $_POST["repeat_password"];

			$passwordHash = password_hash($password, PASSWORD_DEFAULT);

			$errors = array();

			if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
				array_push($errors,"All fields are required");
			}
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($errors, "Email is not valid");
			}
			if (strlen($password)<8) {
				array_push($errors, "password must be at least 8 characters long");
			}
			if ($password!=$passwordRepeat) {
				array_push($errors, "password does not match");
			}
			require_once "book_form.php";
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($connection2, $sql);
			$rowCount = mysqli_num_rows($result);
			if ($rowCount>0) {
				array_push($errors, "Email already exists!");
			}

			if (count($errors)>0) {
				foreach ($errors as $error) {
					echo "<div class='alert alert-danger'>$error</div>";
				}
			}else{
			
			$sql = "INSERT INTO users (full_name, email, password) VALUES (?,?,?)";
			$stmt = mysqli_prepare($connection2, $sql);
			if ($stmt) {
				mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
				mysqli_stmt_execute($stmt);
				echo "<div class='alert alert-success'>You are registered successfully.</div>";
				mysqli_stmt_close($stmt);
			} else {
				die("Something went wrong: " . mysqli_error($connection2));
			}
		}
	}
		?>
		<form action="register.php" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="fullname" placeholder="Full Name: ">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" name="email" placeholder="Email: ">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password: ">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password: ">
			</div>
			<div class="form-btn">
				<input type="submit" class="btn btn-primary" value="Register" name="Submit">
			</div>
		</form>
		<div><p>Already Registered<a href="login.php">Login Here</a></p></div>
	</div>
</section>
</body>
</html>