<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - ReadScape</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body class="container">
     <!-- Left-side logo section -->
    <div class="logo-side2">
		<img src="FIGMA_ASSETS/ReadScape.png" alt="ReadScape Logo">
	</div>
    <!-- Sign Up form container -->
        <div class="form-box">
            <h2>SIGN UP</h2>
             <!-- Link to login page for users who already have an account -->
            <p class="login-link">Already have an account? <a href="login.php">Login</a></p>

            <!-- Display error message if there's an error in the sign-up process -->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?= $_GET['error'] ?></p>
            <?php } ?>

             <!-- Display success message if sign-up was successful -->
            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?= $_GET['success'] ?></p>
            <?php } ?>
            
             <!-- Sign Up form - sends data to app/signup.php -->
            <form action="app/signup.php" method="POST" class="form">
                <!-- User's full name -->
                <label>Fullname</label>
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <!-- Username field -->
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <!-- Email field -->
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required>
                 <!-- Password and confirmation -->
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <!-- Submit button -->
                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>
