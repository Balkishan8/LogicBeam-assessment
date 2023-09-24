<?php
session_start();

// Connecting to the database
$connection = new mysqli('localhost', 'username', 'password', 'auth_system');

// Checking for database connection errors

// Getting user input from the login form
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user data from the 'users' table based on email
$sql = "SELECT id, first_name, last_name, password FROM users WHERE email=?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $row['password'])) {
        // Storing user info in the session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

$stmt->close();
$connection->close();
?>
