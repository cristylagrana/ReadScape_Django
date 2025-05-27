<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_text = $_POST['post_text'];// Get the text content of the post from the form
    $user_id = $_POST['user_id']; // Get user ID from POST data
    $username = $_POST['username']; // Get username from POST data
    $image_path = null;// Initialize image path variable

     // Check if an image file was uploaded without errors
    if (isset($_FILES['post_image']) && $_FILES['post_image']['error'] === 0) {
        $img_name = $_FILES['post_image']['name'];
        $tmp_name = $_FILES['post_image']['tmp_name'];
        $folder = 'uploads/';
        $file_path = $folder . time() . '_' . basename($img_name);
        // Create uploads folder if it doesn't exist
        if (!is_dir($folder)) mkdir($folder);
        move_uploaded_file($tmp_name, $file_path);
        $image_path = $file_path;
    }
    // Prepare SQL query to insert new post into the database
    $sql = "INSERT INTO posts (user_id, username, post_text, post_image) 
            VALUES (:user_id, :username, :post_text, :post_image)";
    $stmt = $conn->prepare($sql);
    // Execute the query with parameters to prevent SQL injection
    $stmt->execute([
        ':user_id' => $user_id,
        ':username' => $username,
        ':post_text' => $post_text,
        ':post_image' => $image_path
    ]);

    header("Location: index.php");
    exit();
}
?>
