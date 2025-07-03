<?php
// Include the database connection file
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Securely hash the password
    
    // Insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully!";
        // Uncomment this when you're sure it's working
        // header("Location: success.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Sanitize user inputs
    $title = $conn->real_escape_string($_POST['recipe-title']);
    $image = $conn->real_escape_string($_POST['recipe-image']); // Assuming image path is stored, adjust if needed
    $cuisine = $conn->real_escape_string($_POST['cuisine']);
    $ingredients = $conn->real_escape_string($_POST['ingredients']);
    $instructions = $conn->real_escape_string($_POST['instructions']);
    $tags = $conn->real_escape_string($_POST['tags']);

    // Insert recipe data into the database
    $sql = "INSERT INTO recipes (title, image, cuisine, ingredients, instructions, tags) VALUES ('$title', '$image', '$cuisine', '$ingredients', '$instructions', '$tags')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe submitted successfully!";
        // Redirect to a success page or display a success message
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>