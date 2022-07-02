z<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<title>Login E-Holiday</title>
</head>
<body>
	<div class="container">
		<form action="dashboard2.php" class="login-email">
			<p class="login" style="font-size: 2rem; font-weight: 800; text-align: center;">Login</p>
			<div class="input-group">
				<input type="email" name="email" placeholder="Email" required>
			</div>
			<div class="input-group">
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div class="input-group">
				<button class="button">Login</button>
			</div>
			<p class="register">Don't have an account? <a href="register.php">Register Here</a> </p>
		</form>
	</div>
</body>
</html>