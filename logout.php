<?php  
// Start the session so we can access session variables
session_start();
// Remove all session variables
session_unset();
// Destroy the session completely
session_destroy();
// Redirect the user back to the login page after logout
header("Location: login.php");
exit;