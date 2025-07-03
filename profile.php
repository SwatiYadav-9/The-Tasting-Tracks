<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  // Redirect to login page if not logged in
  header("Location: login.php");
  exit();
}

require 'db_connect.php';

// Get user information from the database based on the session ID
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $user_data = $result->fetch_assoc();
} else {
  // Handle error if user data not found
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  </head>
<body>

  <section class="profile">
    <h2>Welcome, <?php echo $user_data['username']; ?>!</h2>
    <p>Your Profile ID: <?php echo $user_data['id']; ?></p>

    </section>

  </body>
</html>