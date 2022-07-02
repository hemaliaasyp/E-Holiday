<?php 

include 'koneksi2.php';

error_reporting(0);
session_start();

	if (isset($_SESSION['username'])) {
    header("Location: login.php");
	}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM tbregister WHERE email = '$email'";
		$result = mysqli_query($koneksi2, $sql);
		if (!$result-> num_rows > 0) {
			$sql = "INSERT INTO tbregister (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($koneksi2, $sql);
			if ($result) {
				echo "<script>alert('Registration Completed')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong Went')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="login.css">

	<title>Register</title>
</head>
<body>
	<div class="container">
		<form action="prosesregister.php" method="POST" class="login-email">
            <p class="login" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="button">Register</button>
			</div>
			<p class="register">Have an account? <a href="login.php">Login Here</a></p>
		</form>
	</div>
</body>
</html>