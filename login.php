<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$conn = mysqli_connect("localhost", "jeremykr_twin_cities_forum", "psuh8WIRD.cih8coch", "jeremykr_twin_cities_forum");

		$errors = "";
		$username = htmlspecialchars($_POST["username"]);
		$password = htmlspecialchars($_POST["password"]);

		if(empty($username) or empty($password)) {
			$errors = "Invalid inputs!";
		} else {
			$query = mysqli_query($conn, "SELECT username, password FROM register WHERE username='$username';");
			$data = mysqli_fetch_assoc($query);

			if(is_null($data["username"])) {
				$errors = "Username doesn't exist!";
			} else {
				if (password_verify($password, $data["password"])) {
					echo "Welcome $username!";
				} else {
					$errors = "Password is not correct!";
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
	</head>

	<body>
		<p><?php echo $errors; ?></p>
		<h1>Login</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<input type="text" name="username" placeholder="username" />
			<input type="password" name="password" placeholder="password">
			<input type="submit" value="Submit">
		</form>

		<p>Need to create an account? <a href="register.php">Register</a></p>
	</body>

</html>