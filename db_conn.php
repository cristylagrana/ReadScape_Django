<?php 
 $sName = "localhost";
 $uName = "root";
 $pass = "";
 $dbName = "user_system";




try{
	// Create a new PDO connection to the MySQL database
	$conn = new PDO("mysql:host=$sName;dbname=$dbName", 
		             $uName, $pass);
	// Set PDO error mode to exception for better error handling
	$conn->setAttribute(PDO::ATTR_ERRMODE, 
		                PDO::ERRMODE_EXCEPTION);
	// Catch and display connection errors
}catch(PDOException $e){
    echo "Connection Failed: ". $e->getMessage();
}

?>
