<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Page title and external CSS -->
	<title>Login</title>
	<link rel="stylesheet" href="css/login.css">
	
</head>
<body>
<div class="container">
	 <!-- Left side: Logo -->
	<div class="logo-side">
		<img src="FIGMA_ASSETS/ReadScape.png" alt="ReadScape Logo">
	</div>
	 <!-- Right side: Login form -->
	<div class="form-box">
		<h2>LOGIN</h2>
		<p>Create an account or <a href="signup.php">Sign Up</a></p>
		 <!-- Display error message if login fails -->
		<?php if (isset($_GET['error'])) { ?>
			<p styles="color: red;"><?= $_GET['error'] ?></p>
		<?php } ?>
		<!-- Login form POSTs to login handler -->
		<form action="app/login.php" method="POST">
			 <!-- Email input -->
			<label>Email</label>
			<input type="text" name="email">
			 <!-- Password input -->
			<label>Password</label>
			<p>Having issues logging in?<a href="">Recover your password here</a></p>
			<input type="password" name="password">
			 <!-- Optional checkbox -->
			<label class="checkbox-label">
				<input type="checkbox"> I do not want to receive emails with  advertising, and news.
			</label>
			<!-- Submit button -->
			<button type="submit">Login</button>
		</form>
	</div>
</div>
</body>
</html>
